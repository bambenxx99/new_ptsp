<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg -0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value=<?= set_value('name'); ?>>
                                    <?php echo form_error('name', '<small class=text-danger pl-9>', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="nomornip" name="nomornip" placeholder="Nomor Induk Pegawai" value=<?= set_value('nomornip'); ?>>
                                    <?php echo form_error('nomornip', '<small class=text-danger pl-9>', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value=<?= set_value('email'); ?>>
                                <?php echo form_error('email', '<small class=text-danger pl-9>', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?php echo form_error('password1', '<small class=text-danger pl-9>', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="Password2" name="password2" placeholder="Repeat Password">
                                    <?php echo form_error('password2', '<small class=text-danger pl-9>', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href=<?= base_url('auth'); ?>>Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>