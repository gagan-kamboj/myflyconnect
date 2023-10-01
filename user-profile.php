<?php
include('inc/header.php'); 
include('.admin/inc/function.php');

?>
<style> 


header.main__header {background: #484040;position: relative;} 
 
 body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.fade.in {
    /* opacity: 1; */
    overflow: hidden;
    width: 685px;
    background: #fff;
}


h1 {
       padding-right: 517px; 
}

</style>



 
 <div class="container">
    <div class="main-body">
         <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/<?=$tripdetail['Photo'];?>"class="rounded-circle img-fluid" style="width: 150px;">
                    <div class="mt-3">
                      <h4><?=$profile['FirstName'];?></h4>
                        <h4><?=$profile['LastName'];?></h4>
                    </div>
                    </div>
                    </div>
                    </div>
             <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Email</h6>
                    <span class="text-secondary"><?=$profile['Email'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone</h6>
                    <span class="text-secondary"><?=$profile['Phone'];?></span>
                  </li>
                </ul>
              </div> 
            </div>
            <div class="col-md-8">
                
               <!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Profile</a></li>
    <li><a data-toggle="pill" href="#menu1">Trip Form</a></li>
    <li><a data-toggle="pill" href="#menu2">Trip Details</a></li>
   <!-- <li><a data-toggle="pill" href="#menu3">Menu 3</a></li> -->
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 style="text-align:center";>Profile</h3>
     <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$profile['FirstName'];?>
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$profile['LastName'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$profile['Email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?=$profile['Phone'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="user_profile_edit.php?id=<?=$tripdetail['id'];?>" class="btn btn-info " href="profile.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <h3></h3>
     <div class="container">
        <div class=" text-center mt-5">
            <h1 >Form</h1>
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                            <form action="admin/inc/process.php?action=AddDetails" method="post">
                                <input type = "hidden" name="id" value="<?php echo $profile['id'];?>" required/>
                                 <input type="hidden" name="userid" value="<?php echo $profile['id'];?>" />
            <div class="controls">
               
                <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_firstname">Firstname *</label>
                            <input id="form_firstname" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." value="">
                     </div>
                    </div>
                     </div>
                         <div class="row">
                               <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_travel">Who is travelling</label>
                            <select id="form_travel" name="travel" class="form-control" required="required" data-error="">
                                <option value="" selected disabled>Select</option>
                                <option >Self</option>
                                <option >Parents</option>
                                <option >Family</option>
                                <option >Friend</option>
                                <option >Relative</option>
                            </select>
                             </div>
                            </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_photo">Photo of traveler (Optional)*</label>
                           <input id="form_photo" type="file" name="photo" class="form-control" placeholder="" required="required" data-error="" value="">
                         </div>
                        </div>
                        </div>
                          <div class="row">
                   <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_depature">Departure airport*</label>
                           <input id="form_depature" type="text" name="depature" class="form-control" placeholder="" required="required" data-error="">
                            </div>
                           </div>
                   <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_airport"> Arival airport</label>
                            <input id="form_airport" type="text" name="arival" class="form-control" placeholder="" required="required" data-error="" value="">
                                
                          </div>
                          </div>
                          </div>
                              <div class="row">
                   <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_date">Date of travel*</label>
                           <input id="form_date" type="date" name="date" class="form-control" placeholder="" required="required" data-error="">
                            </div>
                           </div>
                   <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_traveler">No. of travelers</label>
                           <input id="form_traveler" type="text" name="number_traveler" class="form-control" placeholder="" required="required" data-error="" value="">
                                
                         </div>
                        </div>
                        </div>

           <div class="row">
                            <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_language">Airline*</label>
                           <input id="form_language" type="text" name="airline" class="form-control" placeholder="" required="required" data-error="">
                            </div>
                           </div>  
                   
                </div>
                 <div class="row">
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_language">Message*</label>
                           <textarea id="form_language" type="text" name="message" class="form-control" placeholder="" required="required" data-error=""></textarea>
                            </div>
                           </div>  
                   
                </div>
                 <div class="row">
             <div class="col-md-4">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Submit" style=width:22%;float:left; >
                     </div>
                </div>
          
          

        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>
     

    </div>
    <div id="menu2" class="tab-pane fade">
          <!-- Trip Details Started-->

      <div class="card mb-3">
                  <h2 Style="text-align:center;">Trip Details</h2>
                <div class="card-body"> 
    
                    
   <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                
                <th> Name</th>
                <th>Travel</th>
				<th>Image</th>
				<th>Depature Airport</th>
				<th>Arival Airport</th>
				<th>Date</th>
				<th>Airline</th>
            </tr>
        </thead> 
        <tbody>
            <?php while($row = mysqli_fetch_array($userinfo)) { 
            // $id = $row['UserId'];
     // $userinformation = $obj->GetNameByUsersId($id);
           
            ?>
            <tr>
              
				<td><?=$profile['FirstName'];?></td>
 				<td><?=$row['Travel'];?></td>
 				<td> <img src="assets/images/<?=$row['Photo'];?>" width="50px" height="50px"></td>
 				<td><?=$row['Depature_airport'];?></td>
 				<td><?=$row['Arival_airport'];?></td>
 				<td><?=$row['Date'];?></td>
 				<td><?=$row['Airline'];?></td>
 			    <td><a href="trip_detail_list.php?id=<?=$row['id'];?>"><button class="btn btn-success">View More</button></a></td>
 				
             </tr>
           <?php } ?>  
        </tbody>
        </table>
        </div>
        </div>
    </div>
  <!--  <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>-->
  </div>
</div>

</body>
</html> 
              

        
            </div>
          </div>

        </div>
    </div>



<?php include('inc/footer.php'); ?>