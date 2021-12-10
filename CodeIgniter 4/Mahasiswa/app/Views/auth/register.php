<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>
<div class="row col-lg-5 mx-auto">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><h4 class="text-center">Create New Account</h4></div>
                <div class="card-body">
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                    <form action="<?= base_url('/save')?>" method="post">
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="conf_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="conf_password" placeholder="Confirm password">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                    <hr>
                    <div class="form-group mb-3">
                        <p>Already have an account?
                            <a href="<?= base_url('/login')?>" class="text-decoration-none ml-2">
                                Login here!
                            </a>
                        </p>
                        <a href="" class="text-decoration-none">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>