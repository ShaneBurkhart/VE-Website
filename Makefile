all: run

build:
	docker build -t shaneburkhart/apache .

run:
	docker run --name ve_website -d -v $(shell pwd):/var/www/html -p 8080:80 shaneburkhart/apache

c:
	docker run -it --rm -v $(shell pwd):/var/www/html shaneburkhart/apache /bin/bash

clean:
	docker stop ve_website
	docker rm ve_website
