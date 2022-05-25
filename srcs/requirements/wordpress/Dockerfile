FROM debian:buster

RUN apt-get update
RUN apt-get install -y php7.3 php-fpm php-mysqli curl sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod +x /var/www/w_start.sh

CMD bash /var/www/w_start.sh