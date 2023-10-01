<?php 
include('inc/header.php'); 
include('../admin/inc/function.php');

?>

<style>
.pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
.container .row:first-child {
    padding: 116px 0;
}
     
			                
</style>
 <!-- form card change password -->
                  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="app-page-title">
                            <div class="page-title-wrapper">
                                    <?php
						 if($msg == 'suc'){ ?>
							<div class="alert alert-success" role="alert" style="float: right; width: 44%;text-align: center; margin: 0 0 00 155px;"> Password Changed Successfully..</div>					
			<?php } elseif($msg == 'fail'){ ?> <div class="alert alert-danger" role="alert" style="float: right; width: 44%;text-align: center; margin: 0 0 00 155px;">  Something wrong..</div> <?php } ?>
     	<div class="row">
		<div class="col-sm-4">
		     <form name="chngpwd" action="admin/inc/process.php?action=UpdatePassword" method="post">
		    <label>Current Password</label>
		    <div class="form-group"> 
                <input type="password" name="password" value="<?=$profile['Password'];?>" class="form-control" placeholder="Current Password" Disabled> 
                <input type="hidden" name="id" value="<?=$profile['id'];?>" class="form-control" placeholder="Current Password"  > 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="newPassword"  value="" class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="confirmPassword" value="" class="form-control" placeholder="Confirm Password"> 
            </div>
                  	<input type="submit" class="btn btn-primary " value="Save Changes"><br><br>   	
	  	    </div>  
     	    </div>
	    	</form>
            </div>
              </div>
              </div>
       <script>
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>

<script>
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newPassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newPassword.focus();
return false;
}
else if(document.chngpwd.confirmPassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmPassword.focus();
return false;
}
else if(document.chngpwd.newPassword.value!= document.chngpwd.confirmPassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmPassword.focus();
return false;
}
return true;
}
</script>

<?php include('inc/footer.php'); ?>