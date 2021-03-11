<?php
require APPROOT.'/views/inc/header.php';
$stuff = $data['stuff'];
?>
<div class="card card-body" style="background-color: #E9ECEF;">
    <h1 class="card-title"><?php echo $stuff->name; ?></h1>
    <p class="lead card-text">
        <?php echo $stuff->description == '' ? 'Description not set' : $stuff->description; ?>
    </p>
    <hr>
    <p>Year of issue: <?php echo $stuff->yearOfIssue == 0 ? 'Not set' : $stuff->yearOfIssue; ?></p>
    <p>Type: <?php echo $stuff->type; ?></p>
    <p>Language: <?php echo $stuff->language; ?></p>
    <p>Word count: <?php echo $stuff->wordCount; ?></p>
    <p>Unique word count: <?php echo $data['uniqWordsCount']; ?></p>
    <p>Number of views: <?php echo $stuff->numberOfViews; ?></p>
    <p>Added at: <?php echo $stuff->addedAt; ?></p>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>
