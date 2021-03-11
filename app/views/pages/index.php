<?php require APPROOT.'/views/inc/header.php'; ?>
    <?php echo (new Parsedown())->text(file_get_contents(URLROOT.'/files/README.md')); ?>
<?php require APPROOT.'/views/inc/footer.php'; ?>
