<?php

$wordsSeparately = $_POST['wordsSeparately'];
$wordsInContext = $_POST['wordsInContext'];

if (count($wordsSeparately) !== count($wordsInContext))
{
    echo 'Error: Both arrays must have equal the number of elements.';
    echo '<br>';
    echo '<pre>';
    echo count($wordsSeparately);
    echo '<br>';
    echo count($wordsInContext);
    echo '<br>';
    print_r($wordsSeparately);
    foreach ($wordsInContext as $key => $value) {
        echo "$value<br>";
    }
    print_r($wordsInContext);
    echo '</pre>';
    exit('Error: Both arrays must have equal the number of elements.');
}

echo '<div style="float: left; margin-right: 10px">';
foreach ($wordsSeparately as $word) {
    echo $word . '<br>';
}
echo '</div>';

echo '<div>';
foreach ($wordsInContext as $word) {
    echo $word . '<br>';
}
echo '</div>';
