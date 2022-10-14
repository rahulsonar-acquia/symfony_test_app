ARG REPO_LOCATION
FROM ${REPO_LOCATION}ubuntu

ENV DEBIAN_FRONTEND noninteractive
ENV DEBCONF_NONINTERACTIVE_SEEN true

RUN apt-get update
RUN apt install lsb-release ca-certificates apt-transport-https software-properties-common -y
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get install curl git apache2 zip unzip php8.1 php8.1-xml php8.1-curl  -y




ARG COMPOSER_VERSION="2.4.1"
RUN curl -sSLf https://github.com/composer/composer/releases/download/${COMPOSER_VERSION}/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer


EXPOSE 80

CMD apachectl -D FOREGROUND