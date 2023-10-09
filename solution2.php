<?php
function findOccurrences($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $j = 0;

        while ($j < $patternLength && $text[$i + $j] == $pattern[$j]) {
            $j++;
        }

        if ($j == $patternLength) {
            $count++;
        }
    }

    return $count;
}

$text = "tadadattaetadadadafa";
$pattern = "dada";
$result = findOccurrences($text, $pattern);

echo "The pattern \"$pattern\" appears $result times in the text.";
?>
