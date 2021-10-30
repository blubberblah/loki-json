FROM php:8.1.0RC5-cli-buster
COPY public/ /var/www/html/
#COPY output.php/ /app/
CMD /bin/bash -c 'php /app/output.php'
