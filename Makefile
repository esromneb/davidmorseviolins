.PHONY: all build clean

all: build




build:
	rm -rf output
	mkdir output
	php index.php > output/index.html
	php instruments.php > output/instruments.html
	php presentation.php > output/presentation.html
	mkdir -p output/images
	cp images/* output/images/
	cp *html *js *wasm output/
	cp david-morse-violin-audio-presentation.swf output/

clean:
	rm -rf output
