FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/n_start.sh /var/www

RUN chmod +x /var/www/n_start.sh

CMD bash /var/www/n_start.sh