<?php

#Universal
function universalDescriptionTemplate($platform,$universalTitle,$dTitleArray,$dTextArray,$tTextArray){
  universalOpenConstructor($universalTitle);



  dmOpenComponent();

  dmDescription($dTitleArray,$dTextArray);

  dmCloseComponent();
  comma();

  smText($platform, $tTextArray);

  universalCloseConstructor();
}

#Universal
function universalImageAccordeonButtonTemplate($platform,$imageArray,$titleArray,$subtitleArray,$aTextArray,$bTitleArray,$dmButtonCustomArray,$smButtonCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$subtitleArray,$aTextArray);
  superDivider();
  dmButton($bTitleArray,$dmButtonCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$subtitleArray,$bTitleArray,$smButtonCustomArray);
  universalCloseConstructor();
}

#Universal
function universalImageAccordeonButtonChipTemplate($platform,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$bTitleArray,$dmButtonCustomArray,$smButtonCustomArray,$bIconArray,$bColorArray,$cImageArray,$cTitleArray,$cCustomArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  superDivider();
  dmButton($bTitleArray,$dmButtonCustomArray,$bIconArray,$bColorArray);
  commaDivider();
  dmChip($cImageArray,$cTitleArray,$cCustomArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$bTitleArray,$smButtonCustomArray);
  comma();
  smChip($platform,$cTitleArray,$cCustomArray);
  universalCloseConstructor();

}

#Universal
function universalImageAccordeonChipButtonTemplate($platform,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$bTitleArray,$dmButtonCustomArray,$smButtonCustomArray,$bIconArray,$bColorArray,$cImageArray,$cTitleArray,$cCustomArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmChip($cImageArray,$cTitleArray,$cCustomArray);
  superDivider();
  dmButton($bTitleArray,$dmButtonCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$bTitleArray,$smButtonCustomArray);
  comma();
  smChip($platform,$cTitleArray,$cCustomArray);
  universalCloseConstructor();

}

#Universal
function universalImageAccordeonButtonButtonTemplate($platform,$imageArray,$titleArray,$aSubtitleArray,$aTextArray,$b1TitleArray,$dm1ButtonCustomArray,$b1IconArray,$b1ColorArray,$b2TitleArray,$dm2ButtonCustomArray,$b2IconArray,$b2ColorArray,$cardButtonTitleArray,$smButtonCustomArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmButton($b1TitleArray,$dm1ButtonCustomArray,$b1IconArray,$b1ColorArray);
  superDivider();
  dmButton($b2TitleArray,$dm2ButtonCustomArray,$b2IconArray,$b2ColorArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$cardButtonTitleArray,$smButtonCustomArray);
  universalCloseConstructor();
}

#Universal
function universalParagraphButtonTemplate($platform,$titleArray,$pTextArray,$bTitleArray,$dmButtonCustomArray,$smButtonCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmParagraph($titleArray,$pTextArray);
  comma();
  dmButton($bTitleArray,$dmButtonCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$bTitleArray,$smButtonCustomArray);
  universalCloseConstructor();

}

#Universal
function universalParagraphChipButtonTemplate($platform,$imageArray,$titleArray,$aSubtitleArray,$pTextArray,$cImageArray,$cTitleArray,$cCustomArray,$bTitleArray,$dmButtonCustomArray,$smButtonCustomArray,$bIconArray,$bColorArray){
  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmParagraph($titleArray,$pTextArray);
  comma();
  dmChip($cImageArray,$cTitleArray,$cCustomArray);
  superDivider();
  dmButton($bTitleArray,$dmButtonCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$bTitleArray,$smButtonCustomArray);
  comma();
  smChip($platform,$pTextArray,$cTitleArray);

  universalCloseConstructor();

}


function universalParagraphChipTemplate($platform,$titleArray,$pTextArray,$cImageArray,$cTitleArray,$cCustomArray){
  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmParagraph($titleArray,$pTextArray);
  commaDivider();
  dmChip($cImageArray,$cTitleArray,$cCustomArray);
  dmCloseComponent();
  comma();
  smChip($platform,$titleArray,$cTitleArray);
  universalCloseConstructor();
}




#Universal
function universalImageAccordeonChipTemplate($platform,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$cImageArray,$cTitleArray,$cCustomArray,$bTitleArray,$smButtonCustomArray){

  universalOpenConstructor($titleArray);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmChip($cImageArray,$cTitleArray,$cCustomArray);
  dmCloseComponent();
  comma();
  smCard($platform,$imageArray,$titleArray,$aSubtitleArray,$bTitleArray,$smButtonCustomArray);
  comma();
  smChip($platform,$aSubtitleArray,$cTitleArray);
  universalCloseConstructor();

}



?>
