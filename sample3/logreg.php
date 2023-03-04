<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login and registration</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6  login-left">
            <h2>Login here</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"  required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"  required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <div class="col-md-6 login-right">
            <h2>Register here</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- <div class="form-group">
                    <label>EMAIL</label>
                    <input type="text" name="email" class="form-control"  required>
                </div> -->
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

        </div>
        </div>
    </div>
</body>
</html>