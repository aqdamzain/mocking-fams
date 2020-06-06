<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/loginstyle.css">
    <title>Ubah Password</title>    
        

    </head>

   <body>

   <div class="d-flex justify-content-center align-items-center login-container">
        
        <form method="post" action="<?php echo base_url('changePassword') ?>" class="login-form text-center">
            <?php echo $this->session->flashdata('pesan') ?>
            <h1 class="mb-3 font-weight-normal text-uppercase">UBAH PASSWORD</h1>
            <div class="form-group">
                <input type="hidden" name="id_akun" class="form-control" value="">
                <input type="email" class="form-control rounded-pill form-control-lg" placeholder="Email" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                <?php echo form_error('email','<div class="text-danger ml-2 small">','</div>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" id="exampleInputPassword" name="password">
                <?php echo form_error('password','<div class="text-danger small ml-2">','</div>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password Baru" id="exampleInputPassword2" name="passwordBaru">
                <?php echo form_error('passwordBaru','<div class="text-danger small ml-2">','</div>'); ?>
            </div>
            <!-- <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Password</label>
                </div>
                <a href="#">Forgot Password?</a> 
            </div>-->
            <button type="submit" name = "login" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block text-uppercase">Update</button>
            
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>                
</body>
</html> 