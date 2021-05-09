SHELL:=/bin/bash -O globstar  			#You need to tell make to use bash, not sh.

.DEFAULT_GOAL := compile-run

clean:
	sudo rm -r /var/www/html/*

deploy:
	sudo cp -r src/* /var/www/html/

deploy-hosting:
	sudo cp -r src/* ftp://w017ca10.kasserver.com/paraskeva.de/

open:
	google-chrome --new-window --incognito  http://localhost:80

compile-run: clean deploy open




