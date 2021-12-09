<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>
<div class="row col-lg-5 mx-auto">
    <div class="col-lg">
    <div class="card">
        <div class="card-header"><h4 class="text-center">Welcome</h4></div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    </div>
</div>
<?= $this->endSection()?>