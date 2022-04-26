<?
//configuration




/*
 *Below loads shell.tpl which has 2 sections for dynamic content
 *one is in the main block, one on the right
 *both of them get loaded from templates, which get passed to loadPage()
 *the title also gets passed in, and is prefixed
 */

///
/// $content
///
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
  
  
    // "interview.gif", // REMINT
  $menuImg = array(
    "presentation.gif",   // 0
    "instruments.gif",    // 1
    "gallery.gif",        // 2
    "stringsarticle.jpg", // 3
    "endorsements.gif"    // 4
  );

    // "interview.php", // REMINT
  $menuA = array(
    "presentation.php",   // 0
    "instruments.php",    // 1
    "gallery.php",        // 2
    "stringsarticle.php", // 3
    "endorsements.php"    // 4
  );
  
  // false for the index page only
  if(isset($menuNum)) {

    // start with the same value
    $adjustHome = $menuNum;

    // REMINT
    if( $menuNum >= 3 ) {
      // reorder the home replacement gif by +1 for items below the place
      // where interview was
      // this is because each menu has a unique home gif paired with it
      // and the removal of interview upsets the numbering

      $adjustHome = $menuNum + 1;
    }

    $menuImg[$menuNum] = "home".$adjustHome.".gif";
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
    // "sixA" => $menuA[5], // REMINT
    "debugline" => "",
    // "debugline" => "menuNum = $menuNum, adjustHome = $adjustHome",
    ));
  $shell->printToScreen();
}
?>