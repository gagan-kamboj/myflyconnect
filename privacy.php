<?php include('inc/header.php');?>
<style>
header.main__header {
    background: #484040;
    position: relative;
    z-index: 100;
    width: 100%;
}

</style>
<section id="privacy">
  <div class="text-center">
    <div class="container">
	 <div class="row">
           <div class="col-md-12">
                     <h3 class="page-heading"><?=$Editpolicy['Title'];?></h3>
					 <hr class="heading-lineS">
                     </div>
      </div>
      <div class="row">
           <div class="col-md-12">
                     <p class="block_para"><?=$Editpolicy['Content'];?></p>
                     </div>
      </div>
    </div>
	</div>
	</section>
  
<?php include('inc/footer.php'); ?>