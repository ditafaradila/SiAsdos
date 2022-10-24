<!doctype html>
<html lang="en">

<head>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>
 
<body class="text-center">
    <main class="form-signin">
        <div class="container">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/login/processs">
                <?= csrf_field(); ?>
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="mb-3">
                    <label for="npm" class="form-label">Username</label>
                    <input type="text" name="npm" id="npm" placeholder="npm" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Username</label>
                    <input type="text" name="password" id="password" placeholder="password" class="form-control" required>
                </div>
                <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
            </form>
        </div>
    </main>
</body>
 
</html>