FROM debian:buster

RUN apt-get update \
    && apt-get install -y mariadb-server

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /

RUN service mysql start && mysql < db.sql
RUN rm -f db.sql

CMD ["mysqld"]