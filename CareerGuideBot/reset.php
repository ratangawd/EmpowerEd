<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css" />
    <style>
        body {
            font: 14px sans-serif;
            margin: auto;
            margin-top: 120px;
            width: 500px;
            background-color: blueviolet;
            color: black;
        }

        .wrapper {
            border-style: solid;
            border-color: blue;
            border-radius: 30px;
            padding: 20px;
            background-color: white;
        }
    </style>
</head>

<body>
    <!--Header-->
    <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="main.php" style="padding-bottom: 10px;">Career.ly</a>
                </div>
                <!-- /Logo -->
            </div>
        </div>
    </header>
    <!-- /Header -->

    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="" method="post">
            <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>New Password</b></label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="login.php">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
