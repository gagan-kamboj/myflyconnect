<?php
include('inc/header.php'); 


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
                
              
              <div class="card mb-3">
                  
                  
                <div class="card-body">
                
                  
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Depature Airport</h6> 
                    </div>
                    <div class="col-sm-9 text-secondary">
                  <?=$tripdetail['Depature_airport'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Arival Airport</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?=$tripdetail['Arival_airport'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Travel</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$tripdetail['Travel'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$tripdetail['Date'];?>
                    </div>
                  </div>
                   <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No of travellers</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$tripdetail['Number_of_travelers'];?>
                    </div>
                  </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Airline</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$tripdetail['Airline'];?>
                    </div>
                  </div>
                     <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Message</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?=$tripdetail['Message'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                     <a href="trip_edit.php?id= <?=$tripdetail['id'];?>" class="btn btn-info ">Edit</a>
                    </div>
                    </div>
                    </div>
                    </div>

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
    //  $userinformation = $obj->GetNameByUsersId($id);
           
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
<!-- Trip Details ended-->
            </div>
          </div>

        </div>
    </div>



<?php include('inc/footer.php'); ?>