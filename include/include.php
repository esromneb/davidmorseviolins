<?
//configuration




/*
 *Below loads shell.tpl which has 2 sections for dynamic content
 *one is in the main block, one on the right
 *both of them get loaded from templates, which get passed to loadPage()
 *the title also gets passed in, and is prefixed
 */
include("class.TemplatePower.inc.php");
function loadPage($content, $right="", $title, $menuNum) {
  $title_prefix = "David Morse Violins - ";
  $shell = new TemplatePower( "go_here_for_changes/shell.tpl" );
  $shell->prepare();
  
  $tplContent = new TemplatePower( "go_here_for_changes/$content" );
  $tplContent->prepare();
  $outputContent = $tplContent->getOutputContent();
  
  if( $right != "" ) {
    $tplRight = new TemplatePower( "go_here_for_changes/$right" );
    $tplRight->prepare();
    $outputRight = $tplRight->getOutputContent();
  }
  
  
  $menuImg = array(
    "presentation.gif",
    "instruments.gif",
    "gallery.gif",
    "interview.gif",
    "stringsarticle.jpg",
    "endorsements.gif"
  );

  $menuA = array(
    "presentation.php",
    "instruments.php",
    "gallery.php",
    "interview.php",
    "stringsarticle.php",
    "endorsements.php"
  );
  
  // false for the index page only
  if(isset($menuNum)) {
    $menuImg[$menuNum] = "home".$menuNum.".gif";
    $menuA[$menuNum] = "index.php";
  }
  
  $shell->assign(array(
    "content" => $outputContent,
    "right"  => $outputRight,
    "title" => $title_prefix.$title,
    "oneImg" => $menuImg[0],
    "twoImg" => $menuImg[1],
    "threeImg" => $menuImg[2],
    "fourImg" => $menuImg[3],
    "fiveImg" => $menuImg[4],
    "sixImg" => $menuImg[5],
    "oneA" => $menuA[0],
    "twoA" => $menuA[1],
    "threeA" => $menuA[2],
    "fourA" => $menuA[3],
    "fiveA" => $menuA[4],
    "sixA" => $menuA[5],
    ));
  $shell->printToScreen();
}
?>