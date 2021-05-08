<?php
##----------------------------------Constructors---------------------------------##
//Universal Constructor is for Intents who provide information from SM and DM at same Time.
//First Display with DM then with SM to avoid bugs and errors.
//Universal Open Constructor
function universalOpenConstructor($title)
{

    if (is_array($title))
    {

        echo '{
        "fulfillmentText": "' . $title[0] . '",
        "fulfillmentMessages": [';

    }
    else
    {

        echo '{
        "fulfillmentText": "' . $title . '",
        "fulfillmentMessages": [';
    }

}
function dmOpenComponent()
{
    echo '{
        "payload": {
          "richContent": [
            [';
}

function dmCloseComponent()
{
    echo ']]}}';
}

function universalCloseConstructor()
{
    echo ']}' . PHP_EOL;
}






##----For replies Only----#

function openChips(){
  echo  ' {
        "type": "chips",
        "options": [';
}

function closeChips(){
echo ']}';
}


##----------------------------COMPLEMENTS-----------------------------##
//Comma is the Only Separator Available for Entire Social Media Structures
function comma()
{
    echo ',';
}
//Basic Divider
function basicDivider()
{
    echo '{"type": "divider"}';
}
#DIVIDER
function commaDivider()
{
    echo ',{"type": "divider"},';
}
#SUPER DIVIDER
function superDivider()
{
    echo '], [';
}





?>
