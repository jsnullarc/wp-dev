# base image is wordpress
FROM wordpress

# copy source code to container
COPY . /var/www/html

# install ping
RUN apt-get update && apt-get install -y iputils-ping mysql-client