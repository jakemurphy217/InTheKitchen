<html>

<head>
    <title> login and reg </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">
        <div class="login-box">
            <div class="row">

                <div class="col-md-6 login-left">
                    <h2> Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="from-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="from-control" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2> Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="from-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="from-control" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>




</html>
