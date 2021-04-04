<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px;">
            <div class="col-md-4 offset-md-4">
                <h4>Sign In</h4><hr>
                <form action="">
                    <div class="form-group mb-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <br>
                    <a href="<?= site_url('auth/register'); ?>">Have no account, create new account.</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>