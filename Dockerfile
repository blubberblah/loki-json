FROM php:8.1.0RC5-cli-buster
#COPY output.php/ /app/
CMD /bin/bash -c 'php /app/output.php'
