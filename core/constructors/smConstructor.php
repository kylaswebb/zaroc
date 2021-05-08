<?php

function smTextTemplate($platform,$smTitle,$tTextArray){
  universalOpenConstructor($smTitle);
  smText($platform, $tTextArray);
  universalCloseConstructor();
}

function smCardTemplate($platform,$smTitle,$cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray){
  universalOpenConstructor($smTitle);
  smCard($platform, $cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
  universalCloseConstructor();
}

function smRepliesTemplate($platform,$smTitle,$rTitleArray,$rOptionssArray){
  universalOpenConstructor($smTitle);
  smReplies($platform,$rTitleArray,$rOptionssArray);
  universalCloseConstructor();
}

function smCardRepliesTemplate($platform,$smTitle,$cImageArray,$cTitleArray,$cSubtitleArray,$cButtonTextArray,$cButtonCustomArray,$rTitle,$repliesArray){
  universalOpenConstructor($smTitle);
  smCard($platform,$cImageArray,$cTitleArray,$cSubtitleArray,$cButtonTextArray,$cButtonCustomArray);
  comma();
  smReplies($platform,$rTitle,$repliesArray);
  universalCloseConstructor();
}

function smTextImageChipTemplate($platform,$smTitle,$tTextArray,$iImageArray,$rTitleArray, $rTextArray){
  universalOpenConstructor($smTitle);
  smText($platform, $tTextArray);
  comma();
  smImage($platform, $iImageArray);
  comma();
  smReplies($platform, $rTitleArray, $rTextArray);
  universalCloseConstructor();
}

function smCardTextTemplate($platform,$smTitle,$cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray,$tTextArray){

  universalOpenConstructor($smTitle);
  smCard($platform, $cImageArray, $cTitleArray, $cSubtitleArray, $cButtonTextArray, $cButtonCustomArray);
  comma();
  smText($platform, $tTextArray);
  universalCloseConstructor();

}



?>
