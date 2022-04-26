.PHONY: all build clean deleteall foo

all: build


ifdef local
EXTENSION=.php
else
EXTENSION=.php.html
endif


foo:
	@echo ${EXTENSION}



build:
	rm -rf docs
	mkdir docs
	php index.php > docs/index.php.html
	php index.php > docs/index.html
	#
	php akasha.php > docs/akasha.php.html
	php davidInShop.php > docs/davidInShop.php.html
	php endorsements.php > docs/endorsements.php.html
	php epiphany.php > docs/epiphany.php.html
	php gallery.php > docs/gallery.php.html
	php instruments.php > docs/instruments.php.html
	php interview.php > docs/interview.php.html
	php presentation.php > docs/presentation.php.html
	php spirito.php > docs/spirito.php.html
	php stream.php > docs/stream.php.html
	php stringsarticle.php > docs/stringsarticle.php.html
	php fiemme.php > docs/fiemme.php.html
	php flight.php > docs/flight.php.html
	php kutastha.php > docs/kutastha.php.html
	mkdir -p docs/images
	cp images/* docs/images/
	cp *html *js *wasm *css docs/
	cp david-morse-violin-audio-presentation.swf docs/

delete:
	rm -rf 1 2 doc go_here_for_changes images include
	find . -mindepth 1 -maxdepth 1 ! -name "docs" -delete

clean:
	rm -rf docs
