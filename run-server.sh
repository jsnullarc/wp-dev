#!/bin/bash

# remove old containers of the image
docker rm -f rc_wordpress

# build the docker image
echo "*-- Building the image --*"
docker build -t 'rc-wordpress' . --no-cache

# run docker container
echo "*-- Starting dockerized wordpress --*"
docker run --network host --name rc_wordpress \
-e WORDPRESS_DB_HOST=0.0.0.0 \
-e WORDPRESS_DB_NAME=wp-db \
-e WORDPRESS_DB_PASSWORD=rootpass \
-p 80:80 -d rc-wordpress
