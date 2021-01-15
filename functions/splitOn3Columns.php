<?php
/*$_POST['listOfWords'] = "0\n1\n2\n3\n4\n5\n6\n7\n8\n9\n10\n11\n12\n13\n14\n15\n16\n17\n18\n19\n20\n21\n22\n23\n24\n25\n26\n27\n28\n29\n30\n31\n32\n33";
$_POST['sumWordsInCol'] = 4;*/


$words = explode("\n", $_POST['listOfWords']);
$sumWordsInCol = $_POST['sumWordsInCol'];

$firstCol = [];
$secondCol = [];
$thirdCol = [];

for ($i = 0; ;)
{
    if (isset($words[ $i + $sumWordsInCol - 1 ])) {
        $slice = array_slice($words, $i, $sumWordsInCol );
        $firstCol = array_merge($firstCol, $slice);
        $i += $sumWordsInCol;
    }else {
        $firstCol = array_merge($firstCol, array_slice($words, $i, ( array_key_last($words) - $i + 1 )));
        break;
    }
    if (isset($words[ $i + $sumWordsInCol - 1 ])) {
        $slice = array_slice($words, $i, $sumWordsInCol );
        $secondCol = array_merge($secondCol, $slice);
        $i += $sumWordsInCol;
    }else {
        $secondCol = array_merge($secondCol, array_slice($words, $i, ( array_key_last($words) - $i + 1 )));
        break;
    }
    if (isset($words[ $i + $sumWordsInCol - 1 ])) {
        $slice = array_slice($words, $i, $sumWordsInCol );
        $thirdCol = array_merge($thirdCol, $slice);
        $i += $sumWordsInCol;
    }else {
        $thirdCol = array_merge($thirdCol, array_slice($words, $i, ( array_key_last($words) - $i + 1 )));
        break;
    }
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>family tree</title>
	<meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/libraries/bootstrap_4.5.2.css">
</head>
<body>
    <div class="main container-fluid">
        <div class="row">
            <div class="col-4">
                <?php
                    foreach ($firstCol as $item) {
                        print $item.'<br>';
                    }
                 ?>
            </div>
            <div class="col-4">
                <?php
                foreach ($secondCol as $item) {
                    print $item.'<br>';
                }
                ?>
            </div>
            <div class="col-4">
                <?php
                foreach ($thirdCol as $item) {
                    print $item.'<br>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>