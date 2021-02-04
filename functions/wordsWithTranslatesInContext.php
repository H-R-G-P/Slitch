<?php

$wordsSeparately = $_POST['wordsSeparately'];
$wordsInContext = $_POST['wordsInContext'];

if (count($wordsSeparately) !== count($wordsInContext))
{
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
