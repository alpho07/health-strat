<?php $this->load->view('partials/header'); ?>
<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>SkillTest</h1>
                            </div>
                            <p>Authentication Page</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <div class="alert align-center alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> <span id="error_message"></span></div>

                            <form id="login-form" method="post">
                                <div class="form-group">
                                    <input id="loginusername" type="text" name="loginUsername" required="" class="input-material">
                                    <label for="login-username" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="loginpassword" type="password" name="loginPassword" required="" class="input-material">
                                    <label for="login-password" class="label-material">Password</label>
                                </div><button id="Login" type="button" class="btn btn-primary">Login</button>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/footer'); ?>
    <script>
        $(document).ready(function () {
            var error_message = '';
            var error = '';
            var base_url = "<?php echo base_url(); ?>";
            
            $('#Login').click(function () {
                error_message = $('#error_message');
                error = $('.alert-danger');
                var username = $('#loginusername').val();
                var password = $('#loginpassword').val();

                if (username === '') {
                    error_message.text('Please enter your email');
                    error.show();
                } else if (password === '') {
                    error_message.text('Please enter your Password');
                    error.show();
                } else if (!validateEmail(username)) {
                    error_message.text('Please enter a valid email e.g. a@k.com');
                    error.show();
                } else {
                    login(username, password);
                }
            });

            function login(u, p) {

                $.post(base_url + "auth/authenticate", {username: u, password: p}, function (resp) {

                    if (resp === 'success') {
                        window.location.href = base_url;

                    } else {
                        error_message.text('Invalid Username / Password');
                        error.show();
                    }
                });
            }

            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }
        });


    </script>