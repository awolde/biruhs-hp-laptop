FROM php:5.6-apache
RUN apt update && apt install openssh-client -y
COPY . /var/www/html/
RUN mkdir /var/www/.ssh && mv id* /var/www/.ssh/ && mv known_hosts /var/www/.ssh/ && chmod 700 /var/www/.ssh -R && chown www-data: /var/www/.ssh -R
RUN chmod +x /var/www/html/hp.sh
