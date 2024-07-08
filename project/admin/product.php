<?php include("header.php");  ?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Product</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form action="productcon.php" name="username" id="contactForm" novalidate="novalidate" method="post" enctype="multipart/form-data">
                        
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Name" placeholder="Name" required="required" data-validation-required-message="Please enter a Name" />
                            <p class="help-block text-danger"></p>    
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Price" placeholder="Price" required="required" data-validation-required-message="Please enter a Price" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="file" class="form-control p-4" id="Image" placeholder="Image" required="required" height="100" width="100" data-validation-required-message="Please enter a Image" />
                              <p class="help-block text-danger"></p>      
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Company" placeholder="Company" required="required" data-validation-required-message="Please enter a Company" />
                               <p class="help-block text-danger"></p>     
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="Flavour" placeholder="Flavour" required="required" data-validation-required-message="Please enter a Flavour" />
                               <p class="help-block text-danger"></p>     
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control p-4" id="Description" placeholder="Description" required="required" data-validation-required-message="Please enter a Description" />
                               <p class="help-block text-danger"></p>     
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control p-4" id="Sugar" placeholder="Sugar" required="required" data-validation-required-message="Please enter a Sugar" />
                               <p class="help-block text-danger"></p>     
                            </div>
    
                            
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="Product">Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php");?>
	