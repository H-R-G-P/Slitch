<?php require APPROOT.'/views/inc/header.php'; ?>
<h2 class="text-center">Adding words</h2>
<?php if ($data['languageId_err'] !== '') : ?>
    <div class="alert alert-danger mb-1"><?php echo $data['languageId_err']; ?></div>
<?php endif; ?>
<form action="<?php echo URLROOT; ?>/words/add" method="post">
<select name="languageId" class="custom-select <?php echo (!empty($data['languageId_err'])) ? 'is-invalid' : ''; ?>">
    <option value="" selected>select language</option>
    <?php foreach ($data['languages'] as $language) {
        echo "<option value=" . $language->id . ">" . $language->name . "</option>";
    } ?>
</select>
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Paste text that contain <strong>only learned</strong> words</h5>
            </div>
            <div class="card-body">
                <textarea name="learnedText" class="w-100"><?php echo $data['learnedText']; ?></textarea>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Paste text that contain <strong>only untranslatable</strong> words</h5>
            </div>
            <div class="card-body">
                <textarea name="untranslatableText" class="w-100"><?php echo $data['untranslatableText']; ?></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Add words from texts</button>
    </div>
</form>
<?php Helper::flash('addWords_success'); ?>
<?php Helper::flash('addWords_error'); ?>
<?php Helper::flash('addUntranslatableWords_success'); ?>
<?php Helper::flash('addUntranslatableWords_error'); ?>
<?php require APPROOT.'/views/inc/footer.php'; ?>
