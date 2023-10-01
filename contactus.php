<?php include('inc/header.php');?>
<style>
header.main__header {background: #484040; position: relative; z-index: 100;  width: 100%;}
form.contact1-form.validate-form {width: 90%;}
</style>


<section id="term">
  <div class="text-center">
    <div class="container-fluid">
 	    <div class="row">
            <div class="col-md-12">
                <h3 class="page-heading">contact us</h3>
				<hr class="heading-lineS">
				 <br>
				 <br>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/contactuc.jpg">
            </div>
            <div class="col-md-6">
                <br>
                   <form class="contact1-form validate-form">
 
                        <div class="wrap-input1 validate-input" data-validate="Name is required">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            <span class="shadow-input1"></span>
                        </div>
                        <br>
                        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="form-control" type="text" name="email" placeholder="Email">
                            <span class="shadow-input1"></span>
                        </div>
                        <br>
                        <div class="wrap-input1 validate-input" data-validate="Subject is required">
                            <input class="form-control" type="text" name="subject" placeholder="Subject">
                            <span class="shadow-input1"></span>
                        </div>
                        <br>
                        <div class="wrap-input1 validate-input" data-validate="Message is required">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            <span class="shadow-input1"></span>
                        </div>
                        <br>
                        <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn btn btn-success" type="submit">
                            <span> Submit <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </span>
                        </button>
                        </div>
                    </form>
	        </div>
	    </div>
	</div>
</section>
  
<?php include('inc/footer.php'); ?>