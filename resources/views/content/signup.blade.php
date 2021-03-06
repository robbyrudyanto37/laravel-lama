@include('header')
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
  <a class="navbar-brand" href="/home"><img src="assets/images/new_logo.png" alt=""></a>
    <section class="register-photo">
        <div class="form-container" style="background: #ffffff;">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" /></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" />I agree to the license terms.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="color: var(white);background: rgb(58,139,205);">Sign Up</button>
                </div><a class="already" href="/login">Have an account? Login here</a>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>