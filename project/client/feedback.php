<?php include("header.php");  ?>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">feedback</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form action="feedbackcon.php" name="username" id="contactForm" novalidate="novalidate" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Name" placeholder="Name" required="required" data-validation-required-message="Please enter a Name" />
                            <p class="help-block text-danger"></p>    
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="City" placeholder="city" required="required" data-validation-required-message="Please enter a city" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="biginteger" class="form-control p-4" id="mobileno" placeholder="mobileno" required="required" data-validation-required-message="Please enter a mobileno" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="email" placeholder="email" required="required" data-validation-required-message="Please enter a email" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="feedback" placeholder="feedback" required="required" data-validation-required-message="Please enter a feedback" />
                               <p class="help-block text-danger"></p>     
                            </div>
    
                            
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="addtocart">feedback</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php");?>
	