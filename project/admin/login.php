<?php include("header.php");  ?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Login Form</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
 <form name="sentMessage" id="contactForm" novalidate="novalidate" action="checklogin.php" method="post">
                            <div class="control-group">
                                <input type="integer" class="form-control p-4" id="username" placeholder="username" required="required" data-validation-required-message="Please enter a username" name="username"/>
                            <p class="help-block text-danger"></p>    
                            </div>
                            <div class="control-group">
                                <input type="integer" class="form-control p-4" id="password" placeholder="Password" required="required" data-validation-required-message="Please enter a password" name="password"/>
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php");?>
	