<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
       <br><h1 class="text-center text-success">MENTIMETER</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                <h2 class ="text-center card-header">LOGIN FORM</h2>
                <form action="validation1.php" method="post">
                    <div class="form-group">
                        <label> Username
                        </label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Password
                        </label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class ="card">
                <h2 class="text-center card-header">SIGN UP FORM</h2>
                <form action="registration1.php" method="post">
                    <div class="form-group">
                        <label> Username
                        </label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Password
                        </label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Signin</button>
                </form>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
