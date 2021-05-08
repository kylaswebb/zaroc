<?php




function smText($platform, array $tTextArray)
{
  $raw = '';
  for($i = 0; $i < count($tTextArray); $i++):

    $raw .= '{
              "text": {
                "text": ["' . $tTextArray[$i] . '"]
              },
              "platform": "' . $platform . '"
            },';
  endfor;

  $result = rtrim($raw, ",");
echo $result;

        }







?>
