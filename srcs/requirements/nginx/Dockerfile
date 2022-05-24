FROM debian:buster

RUN apt-get update \
    && apt-get install -y nginx openssl

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/n_start.sh /var/www

EXPOSE 443

RUN chmod +x /var/www/n_start.sh

CMD bash /var/www/n_start.sh