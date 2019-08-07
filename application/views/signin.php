<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign IN Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/signin.css"); ?>">


</head>

<body>

    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                <div>

                    <div>

                        <form class="form-container" id="signin_form" method="post">
                            <div id="notification"></div>
                            <div>
                                <nav class="navbar navbar-light bg-primary">

                                    <div>
                                        Want to make a account?<a href="signup.php" class="btn btn-info"
                                            role="button">Signup</a>
                                    </div>
                                </nav>

                            </div>
                            <h1 id="heading">Account Login</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="Email" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                                <?php echo form_error('Email'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="form-group">

                                <input type="submit" id="submit" class="btn btn-primary" value="submit">



                            </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>

</body>

</html>