FROM mariadb:latest
MAINTAINER pasit.dev

RUN apt-get update -y && apt-get -y install vim wget 

COPY ./migration.sql /docker-entrypoint-initdb.d