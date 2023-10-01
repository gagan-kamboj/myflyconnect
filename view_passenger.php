<?php
include('inc/header.php'); 
include('.admin/inc/function.php');
$id=$_GET['searchid'];
$profile = $obj->SignUpById($id);

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
.btn {
    float: right;
}
</style>



 
 <div class="container">
    <div class="main-body">
         <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/<?=$tripdetails['Photo'];?>"class="rounded-circle img-fluid" style="width: 150px;">
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
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 style="text-align:center;">Profile</h3>
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
                  <a href="#"><button class="btn btn-success">Chat</button></a>
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