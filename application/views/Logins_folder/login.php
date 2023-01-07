<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
    <title>Logins News Portal</title>
</head>
<body>
    <div class="login_form">
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                <img src="<?php echo base_url()?>assets/img/eshat_1.jpg"
                                    style="width: 150px; height:200px; border-radius:50%;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                </div>

                                <form action="<?php echo base_url(); ?>" method="POST">
                                <p>Please login to your account</p>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example11" class="form-control"
                                    placeholder="Phone number or email address" />
                                    <label class="form-label" for="form2Example11">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example22" class="form-control" />
                                    <label class="form-label" for="form2Example22">Password</label>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Login">
                                    <a class="text-muted" href="#!">Forgot password?</a>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Don't have an account?</p>
                                    <button type="button" class="btn btn-outline-danger">Create new</button>
                                </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">We are more than just a company</h4>
                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>