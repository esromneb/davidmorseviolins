.PHONY: all build clean

all: build




build:
	rm -rf docs
	mkdir docs
	php index.php > docs/index.html
	php instruments.php > docs/instruments.html
	php presentation.php > docs/presentation.html
	mkdir -p docs/images
	cp images/* docs/images/
	cp *html *js *wasm *css docs/
	cp david-morse-violin-audio-presentation.swf docs/

clean:
	rm -rf docs
