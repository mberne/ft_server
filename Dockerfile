FROM debian:buster

WORKDIR /home/

RUN apt-get update -y && apt-get upgrade -y \
	&& apt-get install -y nginx wget mariadb-server mariadb-client openssl \
	php7.3 php7.3-fpm php7.3-mysql php7.3-curl php7.3-gd php7.3-intl php7.3-xml php7.3-zip php7.3-imagick php7.3-apcu php7.3-mbstring php7.3-cli

COPY srcs/ .

ENV AUTOINDEX="on"

EXPOSE 80 443

ENTRYPOINT ["bash", "start.sh"]