<?php
include('inc/header.php');
include('.admin/inc/function.php');
$id = $_GET['id'];
 $profileinfo = $obj->SignUpById($id);
 $gettrip = $obj->GetTripByUserId($id);
?>
 <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        </nav>
        
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="assets/images/<?= $gettrip['Photo']; ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?=$profileinfo['FirstName'];?></h5>
            <p class="text-muted mb-1"> </p>
            <p class="text-muted mb-4"> </p>
           
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">First Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$profileinfo['FirstName'];?></p>
              </div>
            </div>
             <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name</p>
              </div>
              <div class="col-sm-9">
             <p class="text-muted mb-0"><?=$profileinfo['LastName'];?></p>
              </div>
            </div>
            <hr>
             <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $gettrip['Age']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$profileinfo['Email'];?></p>
              </div>
            </div>
             <hr>
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$profileinfo['Gender'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$profileinfo['Phone'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>

header.main__header {
    background: #484040;
    position: relative;
}
</style>

<?php include('inc/footer.php'); ?>