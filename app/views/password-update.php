<?php $this->layout('layouts::account') ?>

<form action="<?php echo $this->pathFor('membership-update-password'); ?>" method="post" novalidate>

    <h3 class="aligncenter"> <i class="fa fa-key"></i> Update Password</h3>

    <div class="form-group">
        <label for="oldpassword" class="control-label">Old Password *</label>
        <input id="oldpassword" class="form-control" name="oldpassword" required="required" type="password" value="<?php echo $this->requestBody('oldpassword'); ?>" />
        <p class="help-block">
            <?php echo $this->formFieldError('oldpassword'); ?>
        </p>
    </div>

    <div class="form-group">
        <label for="password" class="control-label">New Password *</label>
        <input id="password" class="form-control" name="password" required="required" type="password" value="<?php echo $this->requestBody('password'); ?>" />
        <p class="help-block">
            <?php echo $this->formFieldError('password'); ?>
        </p>
    </div>

    <div class="form-group">
        <label for="repassword" class="control-label">Retype New Password *</label>
        <input id="repassword" class="form-control" name="repassword" required="required" type="password" value="<?php echo $this->requestBody('repassword'); ?>" />
        <p class="help-block">
            <?php echo $this->formFieldError('repassword'); ?>
        </p>
    </div>

    <div class="form-group">
        <?php echo $this->insert('sections::captcha') ?>

        <input value="Update" type="submit" class="btn btn-primary" />
    </div>

</form>
