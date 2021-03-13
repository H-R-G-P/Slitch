<?php
require APPROOT.'/views/inc/header.php';
$stuff = $data['stuff'];
?>
<div class="card" style="background-color: #E9ECEF;">
    <div class="card-body">
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
    <div class="card-footer">
        <a href="<?php echo URLROOT; ?>/stuffs" class="btn btn-lg btn-primary mr-3">
            Back
        </a>
        <a href="<?php echo URLROOT; ?>/stuffs/edit/<?php echo $stuff->id; ?>" class="btn btn-lg btn-primary mr-3">
            Edit
        </a>
        <button onclick="confirmRedirect('Do you want delete <?php echo $stuff->name; ?>?', '<?php echo URLROOT; ?>/stuffs/delete/<?php echo $stuff->id; ?>')" class="btn btn-lg btn-primary mr-3">
            Delete
        </button>
        <a href="<?php echo URLROOT; ?>/stuffs/show/<?php echo $stuff->id; ?>" class="btn btn-lg btn-primary mr-3">
            More
        </a>
        <a href="<?php echo URLROOT; ?>/stuffs/handle/<?php echo $stuff->id; ?>" class="btn btn-lg btn-primary mr-3">
            Handle
        </a>
    </div>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>
