<?= $this->extend('layouts'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Register to Page</p>
        <form action="../index3.html" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Name" />
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <!--begin::Row-->
            <div class="row">


                <!-- /.col -->
                <div class="col-12 mt-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
        </form>

        <!-- /.social-auth-links -->
        <p class="mb-1 mt-5"><a href="/forgot-password">I forgot my password</a></p>
        <p class="mb-0">
            <a href="/login" class="text-center"> Back to Login </a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
<?= $this->endSection(); ?>