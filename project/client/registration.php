<?php include("header.php");  ?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Registration</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form action="Registrationcon.php" name="username" id="contactForm" novalidate="novalidate" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Name" placeholder="Name" required="required" data-validation-required-message="Please enter a Name" />
                            <p class="help-block text-danger"></p>    
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Address" placeholder="Address" required="required" data-validation-required-message="Please enter a Address" />
                            <p class="help-block text-danger"></p>    
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="City" placeholder="city" required="required" data-validation-required-message="Please enter a city" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="integer" class="form-control p-4" id="Pincode" placeholder="Pincode" required="required" data-validation-required-message="Please enter a Pincode" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="State" placeholder="State" required="required" data-validation-required-message="Please enter a State" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Country" placeholder="Country" required="required" data-validation-required-message="Please enter a Country" />
                               <p class="help-block text-danger"></p>     
                            </div>
                           <div class="control-group">
                                <input type="text" class="form-control p-4" id="Username" placeholder="Username" required="required" data-validation-required-message="Please enter a Username" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control p-4" id="password" placeholder="password" required="required" data-validation-required-message="Please enter a password" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="radiobutton" class="form-control p-4" id="Gender" placeholder="Gender" required="required" data-validation-required-message="Please enter a Gender" /><input name="gender" type="radio" id="gender" class="btn">Male
	<input name="gender" type="radio" id="gender" class="btn" checked>Female
	</d>
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="biginteger" class="form-control p-4" id="Mobileno" placeholder="Mobileno" required="required" data-validation-required-message="Please enter a Mobileno" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Email" placeholder="Email" required="required" data-validation-required-message="Please enter a Email" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="Bod" class="form-control p-4" id="Bod" placeholder="Bod" required="required" data-validation-required-message="Please enter a Bod" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="Registration">Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></form>
<?php include("footer.php");?>
	