<?php 
include('inc/header.php'); 
include('.admin/inc/function.php');
$userinfo = $obj->GetNameByUserId($id);
$profile = $obj->SignUpById($id);
?>
 
<style>
.photodata { width: 100%; float:left; margin: 10px 0 20px 0;}
.photodata .image {width: 30%; float: left;}
.pl-sm-0, .px-sm-0 {float: left;     width: 100%;}
.info h1 {font-size: 22px;text-transform: capitalize; }
.likeshare span {width: 16%; padding: 3px 0 2px 0px; margin: 15px 14px 4px 0 !important; float: left; text-align: center; box-shadow: 0px 0px 6px 1px; cursor: pointer; }

 nav > div a.nav-item.nav-link, nav > div a.nav-item.nav-link.active {
   
    color: #fff;
    background: #007c45;
    
}   
 .bg-primary {
    background-color: #007c45!important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
.topmargin{ margin-top:100px;}
button.btn.btn-primary {
    background: #007c45;
       
}

input.btn.btn-primary.px-4 {
    background: #007c45;
      
}
header.main__header {
    background: #484040;
    position: relative;
}
   </style> 
   
   
	<div class="container topmargin">
	                      <?php
						 if($msg == 'suc'){ ?>
							<div class="alert alert-success" role="alert" style="float: right; width: 44%;text-align: center; margin: 0 0 00 155px;">  Profile Updated  Successfully..</div>					
		                	<?php } elseif($msg == 'fail'){ ?> <div class="alert alert-danger" role="alert" style="float: right; width: 44%;text-align: center; margin: 0 0 00 155px;">  Something wrong..</div> <?php } ?>
	         	<div class="main-body">
		         	<div class="row">
			        	<div class="col-lg-4">
				     	<div class="card">
						<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
						<img src="" alt="" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4></h4>
								
 								</div>
							</div>
				<hr class="my-4">
						</div>
					</div>
				</div>
				
				<div class="col-lg-8">
				   <div class="row">
                <div class="col-xs-12">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Edit Profile</a>
                       <a class="nav-item nav-link" id="nav-trip-tab" data-toggle="tab" href="#nav-trip" role="tab" aria-controls="nav-trip" aria-selected="false">Travel Detail</a>
                    </div>
                  </nav>
                   <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class=" " style="">
						<div class="card-body">
						  <form action="admin/inc/process.php?action=EditProfile" method="post">
							<div class="row mb-3">
							    	<div class="col-sm-3">
									<h6 class="mb-0">First Name</h6>
								      </div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="firstname" value="<?=$profile['FirstName'];?>">
									<input type="hidden" class="form-control" name="id" value="<?=$profile['id'];?>">
								</div>
							</div>
							
							<div class="row mb-3"> 
								<div class="col-sm-3">
									<h6 class="mb-0">Last Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="lastname" value="<?=$profile['LastName'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="phone" value="<?=$profile['Phone'];?>">
								
								</div>
							</div>
							 
							  
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Save Changes">
										<a href="change_password.php" target="_blank">Change Password</a>
								</div>
							</div>
							</form>
						</div>
					</div>
					</div>
                	
                	
                	
                	
                	 </div>
                </div>
                </div>
                </div>
                </div>
	         	</div>
		     	</div>
                  
                  <!-- trip detail started -->
    
                    
   <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                 <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Travel</th>
				<th>Image</th>
				<th>Depature Airport</th>
				<th>Arival Airport</th>
				<th>Date</th>
				<th>Number of travelers</th>
				<th>Language</th>
				<th>Airline</th>
				<th>Message</th>
            </tr>
        </thead> 
        <tbody>
            <?php while($row = mysqli_fetch_array($userinfo)) { 
            ?>
            <tr>
              	<td><?=$row['UserId'];?></td>
				<td><?=$profile['FirstName'];?></td>
				<td><?=$profile['LastName'];?></td>
				<td><?=$row['Age'];?></td>
 				<td><?=$row['Travel'];?></td>
 				<td> <img src="assets/images/<?=$row['Photo'];?>" width="50px" height="50px"></td>
 				<td><?=$row['Depature_airport'];?></td>
 				<td><?=$row['Arival_airport'];?></td>
 				<td><?=$row['Date'];?></td>
 				<td><?=$row['Number_of_travelers'];?></td>
 				<td><?=$row['Language'];?></td>
 				<td><?=$row['Airline'];?></td>
 				<td><?=$row['Message'];?></td>
 			
             </tr>
           <?php } ?>  
        </tbody>
        </table>
        <td><a href="trip_detail.php"><button class="btn btn-success">Add more</button></a></td>
  


            <!-- trip detail ended-->
            
		     	
<?php include('inc/footer.php'); ?>

