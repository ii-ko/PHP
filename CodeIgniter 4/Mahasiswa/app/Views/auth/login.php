<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>
<div class="row col-lg-5 mx-auto">
  <div class="col-lg">
    <div class="card">
      <div class="card-header"><h4 class="text-center">Welcome</h4></div>
      <div class="card-body">
        <?php if(session()->getFlashdata('msg')):?>
          <div class="alert alert-info text-center"><?= session()->getFlashdata('msg')?></div>
        <?php endif; ?>
        <form action="<?= base_url('auth/login')?>" method="post">
        <?= csrf_field(); ?>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Login</button>
          </div>
        </form>
        <hr />
        <div class="form-group mb-3">
          <p>
            Need an account?
            <a href="<?= base_url('/register')?>" class="text-decoration-none ml-2"> Register here! </a>
          </p>
          <a href="" class="text-decoration-none">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection()?>
