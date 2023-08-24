<?php
include_once("layout/top_all.php");
?>

<div class="container-login">
    <main class="form-signin w-100 m-auto">
        <form action="" method="post">
            <h1 class="text-center">Forget Password</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
        </form>
        <div class="login-forget-password">
            <a href="<?php echo ADMIN_URL; ?>login.php">Back to Login Page</a>
        </div>
    </main>
</div>

<?php
include_once("layout/footer.php");
?>