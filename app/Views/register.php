<?= $this->extend('layouts'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Register to Page</p>
        <!-- <form method="post"> -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Name" id="name" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
        </div>
        <div class="input-group mb-3">
            <input type="Email" class="form-control" placeholder="Email" id="email" />
            <div class="input-group-text"><span class="bi bi-en-fill"></span></div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Confirmation Password" id="confirm-password" onkeyup="validatePassword()" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>

        <!--begin::Row-->
        <div class="row">


            <!-- /.col -->
            <div class="col-12 mt-4">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" onclick="register()">Register</button>
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

<script>
    const formValidate = () => {
        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmPassword = $('#confirm-password').val();
        if (name == "" || email == "" || password == "" || confirmPassword == "") {
            $('#name').addClass('is-invalid');
            $('#email').addClass('is-invalid');
            $('#password').addClass('is-invalid');
            $('#confirm-password').addClass('is-invalid');
            return false;
        } else {
            $('#name').removeClass('is-invalid');
            $('#email').removeClass('is-invalid');
            $('#password').removeClass('is-invalid');
            $('#confirm-password').removeClass('is-invalid');
        }
        return true;
    }

    const validatePassword = () => {
        let password = $('#password').val();
        let confirmPassword = $('#confirm-password').val();
        if (password != confirmPassword) {
            $('#password').addClass('is-invalid');
            $('#confirm-password').addClass('is-invalid');

        } else {
            $('#password').removeClass('is-invalid');
            $('#confirm-password').removeClass('is-invalid');
            $('#password').addClass('is-valid');
            $('#confirm-password').addClass('is-valid');

        }
        return true;
    }

    const register = () => {
        let nama = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmPassword = $('#confirm-password').val();
        if (formValidate()) {
            $.ajax({
                url: '/register',
                type: 'POST',
                data: {
                    nama: name,
                    email: email,
                    password: password,
                },
                success: function(response) {
                    console.log(response);
                }
            });
        }
    }
</script>

<?= $this->endSection(); ?>