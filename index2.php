<?
include("include/include.php");
//loadPage( "content", "right", "page title");

// these two lines give me an unset var, then I can use
// isset() inside
$mynull= "";
unset($mynull);

loadPage("index2.tpl", "index_right2.tpl", "Home", $mynull);

?>