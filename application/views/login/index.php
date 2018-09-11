
<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('header-js'); ?>
        <?php $this->load->view('header-css'); ?>
        <title>Login Screen</title>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Search Advanced Technology</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body" style="border-radius:5px">
                <p class="login-box-msg">Sign in to start your session</p>

                <form id="frm1" action="<?php echo base_url(); ?>index.php/login/verifyUser" method="post">
                    <div class="form-group has-feedback">
                        <input type='text' class="form-control" name='txtUserName' placeholder="User Name" data-validation="required">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type='password' class="form-control" name='txtPassword' placeholder="Password" data-validation="required">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div style="margin-left: 8px" class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="chkRemember" /> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type='submit' class="btn btn-primary btn-block btn-flat form-control" name='btnSubmit' >Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">


                </div>
                <!-- /.social-auth-links -->

                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $.validate({
                    lang: 'en'
                });
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>

