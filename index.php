<?php
/**
 * Assignment B for techincal test by ctrl hub
 */

$initialString = "The cat sat on the mat.";

function reverseString($string)
{
    $newString = "";
    $lengthOfString = strlen($string) -1;
    while ($lengthOfString > -1) {
        $substring = substr($string, $lengthOfString, 1); 
        $newString = $newString . $substring;
        $lengthOfString--;
    }
    return $newString;
}

print (reverseString($initialString));