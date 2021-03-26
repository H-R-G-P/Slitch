<?php require APPROOT.'/views/inc/header.php'; ?>
    <h1>All stuffs</h1>
    <?php Helper::flash('stuffAdded_success'); ?>
    <?php Helper::flash('stuffAdded_error'); ?>
    <?php Helper::flash('stuffDeleted_success'); ?>
    <?php Helper::flash('stuffDeleted_error'); ?>
    <?php Helper::flash('showStuff_error'); ?>
    <?php Helper::flash('handleStuff_error'); ?>
    <?php Helper::flash('stuffEdited_success'); ?>
    <?php Helper::flash('stuffEdited_error'); ?>
    <div class="row">
        <?php foreach ($data['stuffs'] as $stuff) : ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow" style="background-color: #E9ECEF;">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $stuff->name; ?></h4>
                        <p class="card-text text-truncate">
                            <?php echo $stuff->description == '' ? 'Description not set' : $stuff->description; ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php echo URLROOT; ?>/stuffs/edit/<?php echo $stuff->id; ?>" class="btn btn-sm btn-outline-secondary">
                                    Edit
                                </a>
                                <button onclick="confirmRedirect('Do you want delete <?php echo $stuff->name; ?>?', '<?php echo URLROOT; ?>/stuffs/delete/<?php echo $stuff->id; ?>')" class="btn btn-sm btn-outline-secondary">
                                    Delete
                                </button>
                                <a href="<?php echo URLROOT; ?>/stuffs/show/<?php echo $stuff->id; ?>" class="btn btn-sm btn-outline-secondary">
                                    More
                                </a>
                                <a href="<?php echo URLROOT; ?>/stuffs/handle/<?php echo $stuff->id; ?>" class="btn btn-sm btn-outline-secondary">
                                    Handle
                                </a>
                            </div>
                            <small class="text-muted"><?php echo substr($stuff->addedAt, 0, 10); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php require APPROOT.'/views/inc/footer.php'; ?>