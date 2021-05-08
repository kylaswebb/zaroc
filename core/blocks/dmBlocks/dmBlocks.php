<?php 
##---------------------------Visual--------------------------------##
# dmAccordeon($aImageArray, $aTitleArray, $aSubtitleArray, $aTextArray);        //Receives text
# dmImage($iImageArray, $iTextArray);                                           //Receives an ImageLink 
# dmDescription($dTitleArray,$dTextArray);                                      //Receives Multiples Arrays of text


##--------------------------Handler-----------------------------------------##
# dmButton($bTitleArray, $bCustomArray, $bIconArray, $bColorArray);             //Link / Event Handler


##--------------------------VisualHandler-----------------------------##
# dmInformation($iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray);         //Link Handler
# dmList($lTitleArray,$lSubtitleArray,$lImageArray,$lCustomArray);              //Event Handler
# dmChips($cTitleArray,$cImageArray,$cCustomArray);                             //Text / Link Handler

require_once("dmAccordeon.php");
require_once("dmImage.php");
require_once("dmButton.php");
require_once("dmDescription.php");
require_once("dmInformation.php");
require_once("dmList.php");
require_once("dmChips.php");

?>