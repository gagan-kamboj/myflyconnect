<?php include('inc/header.php');?>
<style>

header.main__header {
    background: #484040;
    position: relative;
  
}


</style>
<section id="about">
  <div class="text-center">
    <div class="container">
	 <div class="row">
           <div class="col-md-12">
                     <h3 class="page-heading"><?=$AboutUs['Title'];?></h3>
					 <hr class="heading-lineS">
                     </div>
      </div>
	   
      <div class="row">
	   <div class="col-md-6  img1"> <img src="admin/assets/images/<?=$AboutUs['Image'];?>">
        </div>
           <div class="col-md-6">
                     <p class="block_para"><?=$AboutUs['Content'];?></p>
                     </div>
      </div>
    </div>
	</div>
	</section>
  
<?php include('inc/footer.php'); ?>