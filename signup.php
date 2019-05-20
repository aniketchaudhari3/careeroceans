<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php include_once('includes/metalinks.inc.php'); ?>

<body>

    <?php include_once('includes/header.inc.php'); ?>
    <style>
    header {
        background: rgba(0, 0, 0, 0.9);
    }

    .signup_form {
        margin: 0 auto;
        /*box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);*/
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        width: 80% padding:6px;
    }

    .signup_form input {
        border-radius: 50px;
        color: black;
        border: 1px solid rgba(0, 0, 0, 0.3);
        font-size: 14px;

    }

    .signup_form input::webkit-placeholder {
        color: rgba(0, 0, 0, 0.8);
        font-size: 14px;
    }
    </style>
    <!-- #header -->
    <div class="container">
        <div class="row">
            <div style="margin-top:140px !important;" class="signup_form col-md-6 col-md-offset-6">
                <form class="form-area " id="" action="modules/sign_code.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <h2 style="margin-top:20px;text-align:center">Sign up</h2>
                            <p style="margin:.5rem;text-align:center !important">Create a new account</p>
         <input name="name" placeholder="Enter Name"
                 
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'"
                                class="common-input mb-20 form-control" required="" type="text">
                   
         <input name="last" placeholder="Enter Last Name"
                             onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last name'"
                                class="common-input mb-20 form-control" required="" type="text">
                                      
         <input name="email" placeholder="Enter email address"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                class="common-input mb-20 form-control" required="" type="email">
                            <input name="password" placeholder="Enter password " onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter password'" class="common-input mb-20 form-control"
                                required="" type="password">

                                <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select"">
											<select name="department">
												department
												<option value="computer">Computer</option>
												<option value="electrical">Electrical </option>
												<option value="mechanical">Mechanical</option>
												<option value="eletronic">Entc</option>
											</select>
										</div>
									</div>

                           
                            <button type="submit" class="primary-btn mt-20 text-white signupbtn"
                                style="background: linear-gradient(to left, #fe8c00, #f83600) !important;width:100%;">Sign
                                Up</button>

                            <div class="mt-20 alert-msg"></div>

                        </div>
                    </div>
                </form>
                <p style="margin:0;text-align:center !important">Already have an account?</p>
                <a href="login.php"><button class="primary-btn mt-20 text-white block"
                        style="background:linear-gradient(to right, #bfacff 0%, #795fff 100%)!important;width:100%;">Login</button></a>
                <a href="#">
                    <a href="forgotpassword.php">
                        <p style="margin-top:1rem;text-align:center">Forgot Password?</p>
                    </a>
                </a>
            </div>
        </div>
    </div>
    <?php include_once('includes/scripts.inc.php'); ?>
    <!-- # end scripts -->
</body>

</html>
