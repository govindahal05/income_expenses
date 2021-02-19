<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="<?php echo base_url() ?>assets/images/logo-ie.png" alt="logo" width="100px"/></span>
                    </div>
                    <!-- Form -->
                    <div style="color:#fff" id="infoMessage"><?php echo $message;?></div>

                    <?php echo form_open("auth/login",array('class' => "form-horizontal m-t-20"));?>
                    <form class="form-horizontal m-t-20" id="loginform" action="index.html">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <?php echo form_input($identity);?>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <?php echo form_input($password);?>
                                </div>
                            </div>
                            <a style="color:#fff;" href="<?php echo base_url('register') ?>">No account ? <span     >Create</span></a>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                        <button class="btn btn-success float-right" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close();?>

                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                      
                        <?php echo form_open("auth/forgot_password", array('class'=>'col-12'));?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <?php echo form_input($identity);?>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <?php echo form_submit('submit', lang('forgot_password_submit_btn'), array('class'=>'btn btn-info float-right'));?>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>