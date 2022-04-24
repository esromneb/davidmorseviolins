.PHONY: all build clean deleteall

all: build




build:
	rm -rf docs
	mkdir docs
	php index.php > docs/index.php.html
	php instruments.php > docs/instruments.php.html
	php presentation.php > docs/presentation.php.html
	mkdir -p docs/images
	cp images/* docs/images/
	cp *html *js *wasm *css docs/
	cp david-morse-violin-audio-presentation.swf docs/

delete:
	rm -rf 1 2 doc go_here_for_changes images include
	find . -mindepth 1 -maxdepth 1 ! -name "docs" -delete

clean:
	rm -rf docs
