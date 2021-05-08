<?php


function smImage($platform, array $iImageArray)
{
    $raw = '';
    for($i = 0;  $i < count($iImageArray); $i ++):

        $raw .= '{
                "image": {
                  "imageUri": "' . $iImageArray[$i] . '"
                },
                "platform": "' . $platform . '"
              },';


    endfor;
    $result = rtrim($raw, ",");

    echo $result;
  }

?>
