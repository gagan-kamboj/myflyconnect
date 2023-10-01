<?php
include('inc/header.php'); 
include('.admin/inc/function.php');
$id =  $_SESSION['UserID'];
$UserCount = $obj->GetUserByCount($id);
//print_r ($UserCount);
?> 

<style> 


header.main__header {background: #484040;position: relative;} 
 
 body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.row {
    margin-right: -15px;
    margin-left: 42px;
}
</style>
 

     <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading"> 
                                    <div class="page-title-icon">
                                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>  
                                        <div class="page-title-subheading"> <h3 style="text-align:center";>Search result</h3></div>   
                                     
                                    </div>
                                </div>
                                
                                </div>
                        </div>            
                       <div class="main-card mb-3 card">
                            
                            <div class="card-body">
                              <div class="row">
                    <div class="table-responsive">   
                    
   <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>               
                <th>Passengers</th>
				<th>Depature Airport</th>
				<th>Arival Airport</th>
				<th>Date</th>
				<th>Airline</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($Search)) {
                $id = $row['id'];
                
                $searchprofile = $obj->SignUpById($id);
            ?>
            <tr>
          
                  <td><?=$searchprofile['id'];?></td>
                  <td><?=$searchprofile['FirstName'];?></td>
                  <td><?=$row['Depature_airport'];?></td>		
                  <td><?=$row['Arival_airport'];?></td>		
                  <td><?=$row['Date'];?></td>	
                  <td><?=$row['Airline'];?></td>	
				  <td> 
				  
				
				      <?php if(!empty($_SESSION['UserID'])) { ?>
				      <?php if ($UserCount >= 3){ ?>
				       <a href="#"><button  class="btn btn-success"id="threeclickbutton" disabled; data-toggle="modal" data-target="#exampleModalCenter">Connect</button></a>
				     
				         <?php } else {?>
                      <a href="admin/inc/process.php?searchid=<?=$row['id'];?>"><button  class="btn btn-success"id="threeclickbutton">Connect</button></a>
                         <?php } ?>
				      <?php } else {?>
				      
				     <a href="#"><button class="btn btn-danger"   data-toggle="" data-target="#">Connect</button></a>

				      <?php } ?>
				      </td>
             </tr>
           <?php } ?>  
        </tbody>
        
    </table>
     </div>  
     </div>  
                            <!--</div>-->
                                </div>
                                </div>           
</div>

</div>
<!-- popup pay -->


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Charges may apply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        $1.99 for Connect
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <a href="plans.php"><button type="button" class="btn btn-primary">Choose Plan</button></a>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php'); ?>