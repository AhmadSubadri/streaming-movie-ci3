<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <?php $this->load->view('template/alert.php'); ?>
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Login</h3>
                    <form action="<?= site_url('login') ?>" method="post">
                        <div class="input__item">
                            <input type="email" name="email" placeholder="Email address">
                            <div class="alert-danger text-center">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                        <div class="input__item">
                            <input type="password" name="password" placeholder="Password">
                            <div class="alert-danger text-center">
                                <?= form_error('password') ?>
                            </div>
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <a href="#" class="forget_pass">Forgot Your Password?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Don't forget your username and password</h3>
                    <h3>Change passwords periodically !!! </h3>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <span>or</span>
                        <ul>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->