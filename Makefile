SHELL:=/bin/bash -O globstar  			#You need to tell make to use bash, not sh.

.DEFAULT_GOAL := compile-run

clean:
	sudo rm -r /var/www/html/*

deploy:
	sudo cp -r src/* /var/www/html/

open:
	google-chrome --new-window --incognito  http://localhost:80

compile-run: clean deploy open
