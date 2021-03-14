<?php require APPROOT.'/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light my-auto">
                <h2>Stuff</h2>
                <?php if ($data['stuff_err'] !== '') : ?>
                <div class="alert alert-danger"><?php echo $data['stuff_err']; ?></div>
                <?php elseif ($data['userId_err'] !== '') : ?>
                <div class="alert alert-danger"><?php echo $data['userId_err']; ?></div>
                <?php elseif ($data['typeId_err'] !== '') : ?>
                <div class="alert alert-danger"><?php echo $data['typeId_err']; ?></div>
                <?php elseif ($data['languageId_err'] !== '') : ?>
                <div class="alert alert-danger"><?php echo $data['languageId_err']; ?></div>
                <?php endif; ?>
                <form action="<?php echo URLROOT; ?>/stuffs/add" method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" name="name" class="form-control form-control-lg
                            <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>
                            <?php echo (!empty($data['stuff_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="yearOfIssue">Year of issue:</label>
                        <input type="number" name="yearOfIssue" class="form-control form-control-lg <?php echo (!empty($data['yearOfIssue_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['yearOfIssue']; ?>">
                        <span class="invalid-feedback"><?php echo $data['yearOfIssue_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="typeId">Type:</label>
                        <select name="typeId" class="form-control form-control-lg custom-select <?php echo (!empty($data['typeId_err'])) ? 'is-invalid' : ''; ?>">
                            <?php foreach ($data['types'] as $type) {
                                if ($type->id === $data['typeId'])
                                {
                                    echo "<option value=".$type->id." selected>".$type->name."</option>";
                                }
                                else
                                {
                                    echo "<option value=".$type->id.">".$type->name."</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="languageId">Language:</label>
                        <select name="languageId" class="form-control form-control-lg custom-select <?php echo (!empty($data['languageId_err'])) ? 'is-invalid' : ''; ?>">
                            <?php foreach ($data['languages'] as $language) {
                                if ($language->id === $data['languageId'])
                                {
                                    echo "<option value=".$language->id." selected>".$language->name."</option>";
                                }
                                else
                                {
                                    echo "<option value=" . $language->id . ">" . $language->name . "</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control form-control-lg
                            <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>
                            <?php echo (!empty($data['stuff_err'])) ? 'is-invalid' : ''; ?>"
                        ><?php echo $data['description']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="text">Text: <sup>*</sup></label>
                        <textarea name="text" class="form-control form-control-lg
                            <?php echo (!empty($data['text_err'])) ? 'is-invalid' : ''; ?>"
                        ><?php echo $data['text']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['text_err']; ?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Add stuff" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/stuffs" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT.'/views/inc/footer.php'; ?>