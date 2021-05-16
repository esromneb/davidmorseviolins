# Are you looking for a new, high quality violin?
See David Morse Violins here: http://www.davidmorseviolins.com . High quality hand crafted.

# Presentation
The presentation was originally designed in flash. I may have lost the original source flash flie.

Because flash player is removed from all browsers I am using `core.ruffle.7f6d216454b6a4a07936.js` to emulate flash, see https://ruffle.rs/ .

# Left menu font
I may have lost the left menu source photoshop file, as a result I don't know which font the text is.  I suppose I could do some node js trick to render a new one and make them consistent as well as expandible without opeing photoshop?



# Files

Index loads weird in two ways:
* first it's the only page to put a 2nd argument, all other pages use "".
* second is also passes unset variable to the last argument of loadPage
  * all other loads pass a number to the last argument of the fn
* a 3rd way is flight only, it passes empty string to $menuNum argument

```php
// signature
function loadPage($content, $right="", $title, $menuNum) {
```

```php
loadPage("index.tpl", "index_right.tpl", "Home", $mynull);    // index
loadPage("gallery.tpl", "", "Gallery", 2);                    // other pages

loadPage("flight.tpl", "flight_right.tpl", "Flight", "");     // flight only

```
