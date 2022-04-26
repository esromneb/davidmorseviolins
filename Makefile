.PHONY: all build clean deleteall foo makelocal

all: build


ifdef local
# LOCAL
EXTENSION=.html
else
# PRODUCTION
EXTENSION=.php.html
endif


foo:
	@echo ${EXTENSION}



# REMINT
# php interview.php > docs/interview${EXTENSION}

build:
	rm -rf docs
	mkdir docs
	php index.php > docs/index${EXTENSION}
	php index.php > docs/index.html
	#
	php akasha.php > docs/akasha${EXTENSION}
	php davidInShop.php > docs/davidInShop${EXTENSION}
	php endorsements.php > docs/endorsements${EXTENSION}
	php epiphany.php > docs/epiphany${EXTENSION}
	php gallery.php > docs/gallery${EXTENSION}
	php instruments.php > docs/instruments${EXTENSION}
	php presentation.php > docs/presentation${EXTENSION}
	php spirito.php > docs/spirito${EXTENSION}
	php stream.php > docs/stream${EXTENSION}
	php stringsarticle.php > docs/stringsarticle${EXTENSION}
	php fiemme.php > docs/fiemme${EXTENSION}
	php flight.php > docs/flight${EXTENSION}
	php kutastha.php > docs/kutastha${EXTENSION}
	mkdir -p docs/images
	cp images/* docs/images/
	cp *html *js *wasm *css docs/
	cp david-morse-violin-audio-presentation.swf docs/

delete:
	rm -rf 1 2 doc go_here_for_changes images include
	find . -mindepth 1 -maxdepth 1 ! -name "docs" -delete

clean:
	rm -rf docs

makelocal:
	find docs -type f -exec sed -i 's/.php/.html/g' {} \;
