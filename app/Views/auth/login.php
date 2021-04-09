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
            <div class="col-md-4 offset-md-4" method="post">
                <h4>Sign In</h4><hr>
                <form action="<?= base_url('auth/check')?>">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"> <?= session()->getFlasdata('fail');?></div>
                <?php endif ?>
                    <div class="form-group mb-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?=set_value('email'); ?>"> 
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'email') : '' ?>
                        </span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter your password" value="<?=set_value('password'); ?>">
                        <span class="text-danger">
                            <?= isset($validation) ? display_error($validation, 'password') : '' ?>
                        </span>
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