<?php




function dmDescriptionTemplate($dmTitle,$dTitleArray,$dTextArray){
  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  dmCloseComponent();
  universalCloseConstructor();
}


function dmDescriptionChipsTemplate($dmTitle,$dTitleArray,$dTextArray,$cTitleArray,$cImageArray,$cCustomArray){


  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  comma();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  dmCloseComponent();
  universalCloseConstructor();


}


function dmImageAccordeonButtonTemplate($dmTitle,$imageArray,$titleArray,$aSubtitleArray,$aTextArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  universalCloseConstructor();
}



function dmImageAccordeonButtonChipsTemplate($dmTitle,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray,$cTitleArray,$cImageArray,$cCustomArray    ){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  commaDivider();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  dmCloseComponent();
  universalCloseConstructor();

}



function dmImageAccordeonChipsButtonTemplate($dmTitle,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$cTitleArray,$cImageArray,$cCustomArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  universalCloseConstructor();

}



function dmImageAccordeonButtonButtonTemplate($dmTitle,$imageArray,$titleArray,$aSubtitleArray,$aTextArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray,$b2TitleArray,$b2CustomArray,$b2IconArray,$b2ColorArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  superDivider();
  dmButton($b2TitleArray,$b2CustomArray,$b2IconArray,$b2ColorArray);
  dmCloseComponent();

  universalCloseConstructor();
}


function dmDescriptionButtonTemplate($dmTitle,$dTitleArray,$dTextArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){
  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  comma();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  universalCloseConstructor();

}

function dmDescriptionChipsButtonTemplate($dmTitle,$titleArray,$dTitleArray,$dTextArray,$cTitleArray,$cImageArray,$cCustomArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){
  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  comma();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();

  universalCloseConstructor();

}

function dmImageAccordeonReplyTemplate($dmTitle,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$cTitleArray,$cImageArray,$cCustomArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  dmCloseComponent();

  universalCloseConstructor();

}

function dmImageAccordeonChipsTemplate($dmTitle,$titleArray,$imageArray,$aSubtitleArray,$aTextArray,$cTitleArray,$cImageArray,$cCustomArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmImage($imageArray,$titleArray);
  comma();
  dmAccordeon($imageArray,$titleArray,$aSubtitleArray,$aTextArray);
  commaDivider();
  dmChips($cTitleArray,$cImageArray,$cCustomArray);
  dmCloseComponent();
  universalCloseConstructor();

}

function dmDescriptionInformationTemplate($dmTitle,$dTitleArray,$dTextArray,$iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  commaDivider();
  dmInformation($iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray);
  dmCloseComponent();
  universalCloseConstructor();
}


function dmDescriptionInformationButtonTemplate($dmTitle,$dTitleArray,$dTextArray,$iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmDescription($dTitleArray,$dTextArray);
  commaDivider();
  dmInformation($iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  universalCloseConstructor();
}

function dmInformationButtonTemplate($dmTitle,$iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray,$bTitleArray,$bCustomArray,$bIconArray,$bColorArray){

  universalOpenConstructor($dmTitle);
  dmOpenComponent();
  dmInformation($iTitleArray,$iSubTitleArray,$iImageArray,$iLinkArray);
  superDivider();
  dmButton($bTitleArray,$bCustomArray,$bIconArray,$bColorArray);
  dmCloseComponent();
  universalCloseConstructor();

}




?>
