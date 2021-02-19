<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark border-top border-secondary">
        <div>
            <div class="text-center p-t-20 p-b-20">
                <span class="db"><img src="<?php echo base_url() ?>assets/images/logo-ie.png" alt="logo" width="100px"/></span>
            </div>
            <!-- Form -->
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open("auth/create_user", array('class'=>'form-horizontal m-t-20'));?>

                <div class="row p-b-30">
                    <div class="col-12">
                        <?php
                        if($identity_column!=='email') {
                              echo '<p>';
                              echo lang('create_user_identity_label', 'identity');
                              echo '<br />';
                              echo form_error('identity');
                              echo form_input($identity);
                              echo '</p>';
                            }
                        ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <?php echo form_input($first_name);?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <?php echo form_input($last_name);?>
                        </div>
                        <!-- email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                            </div>
                            <?php echo form_input($email);?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <?php echo form_input($password);?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <?php echo form_input($password_confirm);?>
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>