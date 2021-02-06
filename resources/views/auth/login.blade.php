<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.min.css') }}">
</head>
<body>
    
    
    <div class="container">
        <div class="row">
            <h1>Login</h1>
            <hr>
            <div class="col-md-4 col-md-offset-4">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password </label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <button type='submit' class="btn btn-block btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="register">Create a new account now ! Register</a>
                </form>
            </div>
        </div>
    
    </div>

</body>
</html>