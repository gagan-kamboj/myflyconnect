<?php include('inc/header.php');
include('.admin/inc/function.php');

?>
<style>
body {
  margin: 0px;
}

.form-group {
  margin-bottom: 20px;
}
.control-label {
  display: block;
}

.autocomplete-wrapper {
  position: relative;
  
  input {
    width: 100%;
  }
}
.autocomplete-results {
  position: absolute;
  background: white;
  z-index: 1;
  top: 100%;
  left: 0;
  font-size: 13px;
  border: solid 1px #ddd;
  border-top-width: 0;
  border-bottom-color: #ccc;
  box-shadow: 
    0 5px 10px rgba(0, 0, 0, 0.2);
}

.autocomplete-result {
  padding: 12px 15px;
  border-bottom: solid 1px #eee;
  cursor: pointer;
}

.autocomplete-result:last-child {
  border-bottom-width: 0;
}

.autocomplete-location {
  opacity: .8;
  font-size: smaller;
}

$iPlus: 0;
@for $i from 0 through 7 {
  $iPlus: $i + 1;
  .autocomplete-results[data-highlight='#{$i}'] > :nth-child(#{$iPlus}) {
    color: white;
    background: #26C9FF;
    border-bottom-color: #26C9FF;
    outline: solid 1px darken(#26C9FF, 10%);
  }
}
</style>
<script src="https://cdn.jsdelivr.net/npm/airport-autocomplete-js@latest/dist/index.browser.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>-->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 
                <!-- auto search code end -->
 
<section class="main_hdr"style="background-image: url(admin/assets/images/Banner/<?=$UpdateBanner['Image'];?>);">
    <div class="container-fluid" id="pac-card">
    <div class="bnr_top_sec">
        <h1 class="main_heading"><?=$UpdateBanner['Title'];?></h1>
        <form id="search-form" action="admin/inc/process.php?action=FlyConnect" method="POST">
                <div class="row searchform">
                     <div class="col-md-3">
                         <label>Leaving From</label>
                     <input type="text" id="autocomplete"  class="form-control autocomplete" name="leavingfrom" placeholder="Leaving From" required>
                         <div id=""></div>
                     </div>
                      <div class="col-md-3">
                         <label>Going To</label>
                         <input type="text" id="autocomplete2" class="form-control autocomplete" name="goingto" placeholder="Going to"  required>
                           <div id="" class=""></div>
                      </div>
                       <div class="col-md-3">
                         <label>Departing</label>
                         <input required type="date" class="form-control" name="departing" placeholder="Departing" min="<?php echo date('Y-m-d'); ?>" required>
                         
                     </div>
                      <div class="col-md-2">
                         <label></label>
 
                        <a class="btn btn-primary click" href="Search_result.php?Arival_airport=<?$leavingfrom?>&Depature_airport=<?$goingto?>&Date=<?$departing?>" role="button">Search</a>
    
                     </div>
                </div>
        </form>
    </div>
    </div>
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap&libraries=places&v=weekly&channel=2" async></script>
</section>
 
  <div class="text-center three-blocks">
    <div class="container">
      <div class="row">
        <h2 class="block__title">What MyFlyConnect <span>Do</span></h2>
        <div class="col-md-4 block_icon"> <img src="admin/assets/images/<?=$EditConnectDO['Icon1'];?>" alt="Family members cannot always accompany travelers that needs helping hand" class="img-rounded img-responsive icon_img">
           
          <!--<p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>-->
          <p class="block_para"><?=$EditConnectDO['Content1'];?></p>
        </div>
        <div class="col-md-4 block_icon"> <img src="admin/assets/images/<?=$EditConnectDO['Icon2'];?>" alt="We help connect travelers with similar itinerary that needs assistance" class="img-rounded img-responsive icon_img">
          
          <!--<p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>-->
          <p class="block_para"><?=$EditConnectDO['Content2'];?></p>
        </div>
        <div class="col-md-4 block_icon"> <img src="admin/assets/images/<?=$EditConnectDO['Icon3'];?>" alt="We created easy to use platform for travelers across the globe to connect during the travel." class="img-rounded img-responsive icon_img">
           
          <!--<p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>-->
          <p class="block_para"><?=$EditConnectDO['Content3'];?></p>
        </div>
      </div>
    </div>
  </div>

<h2 class="block__title">How MyFlyConnect <span>Works</span></h2>
    <section class="recent-posts">
        
    <div class="container">
       <div class="row">
        
        <div class="col-md-4"> 
        <img src="admin/assets/images/<?=$EditConnect['Icon1'];?>">
          <h3><a href="#"><?=$EditConnect['Title1'];?></a></h3>
          <!--<p><small>Phasellus ultrices nulla quis nibh. Quisque a lectus.</small></p>-->
          <p class="block_para"><?=$EditConnect['Content1'];?></p>
          <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
        </div>
        
        <div class="col-md-4"> 
          <img src="admin/assets/images/<?=$EditConnect['Icon2'];?>">
          <h3><a href="#"><?=$EditConnect['Title2'];?> </a></h3>
          <p class="block_para"><?=$EditConnect['Content2'];?></p>
          <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
        </div>
        
        <div class="col-md-4"> 
          <img src="admin/assets/images/<?=$EditConnect['Icon3'];?>">
          <h3><a href="#"><?=$EditConnect['Title3'];?></a></h3>
          <p class="block_para"><?=$EditConnect['Content3'];?></p>
          <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
        </div>
         
      </div>
    </div>
  </section>



<section class="call-to-action">
   <div class="container">
       <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
             <div class="action-content">Connect with your air travelers!  <button class="btn btn-action">Get Started</button> </div>   
                
            </div>
            <div class="col-md-2"></div>
            
       </div>
   </div>
    
    
</section>

 <section class="testimonials">
    <div class="container slideshow-container">
       <div class="row">
          <h2 class="block__title">Testimonials</h2>
         <h3>What people are saying about us?</h3>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">


 <div class="owl-carousel">
  <?php while($row = mysqli_fetch_array($message)){ ?>
  
        <div class="testim_block nav-item">
            <div class="img-round"><img src="admin/assets/images/<?=$row['Image'];?>"></div>
          <p><small><?=$row['Content'];?></small></p>
          <!--<p class="block_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>-->
          <p class="client_name"><?=$row['Name'];?></p>
        </div>
         
		<?php } ?>
		</div>
 
      </div>
    </div>
    
     
<style>

/*.owl-item.active > div:after {*/
/*  content: 'active';*/
/*}*/
/*.owl-item.center > div:after {*/
/*  content: 'center';*/
/*}*/
/*.owl-item.active.center > div:after {*/
/*  content: 'active center';*/
/*}*/
/*.owl-item > div:after {*/
/*  font-family: sans-serif;*/
/*  font-size: 24px;*/
/*  font-weight: bold;*/
/*}*/
.btn-primary, .btn-primary:hover, .btn-primary:focus {
 font-size: 19px;   
 margin-top: 25px;
    
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.3.4/owl.carousel.min.js"></script>
<script>

$('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 9000,
  center: true,
  loop: true,
  responsive:{
		0:{
			items:1
		},
		600:{
			items:1,
		},
		900:{
			items:3,
		}
	}
//   nav: true,
//   dots:true,
//   arrow:true,
});

</script>
<!-- Auto complete leaving  text script start -->
 <script>
 $(document).ready(function(){
	$('#leaving').keyup(function(){
	  var query = $(this).val();
   if(query != '')
{
	$.ajax({
		url:"admin/inc/process.php?action=GetAirports",
		method:"POST",
		data:{query:query},
		success:function(data)
		{
			$('#leavingList').fadeIn();
			$('#leavingList').html(data);
		}
	});
}
   else{
            $('#leavingList').fadeOut();
			$('#leavingList').html("");
}	
	});
	$(document).on('click', 'li', function(){
		     $('#leaving').val($(this).text());
		     $('#leavingList').fadeOut();
	});
 });
 </script>

<!-- Auto complete text script ended -->

<!-- Auto complete Going  text script start -->
 <script>
 $(document).ready(function(){
	$('#going').keyup(function(){
	  var query = $(this).val();
	  console.log(query);
 
	$.ajax({
		url:"admin/inc/process.php?action=GetAirports",
		method:"POST",
		data:{query:query},
		success:function(data)
		{
			$('#goingList').fadeIn();
			$('#goingList').html(data);
		}
	});
 
    
	});
	$(document).on('click', 'li', function(){
		     $('#going').val($(this).text());
		     $('#goingList').fadeOut();
	});
 });
 </script>

<!-- Auto complete text script ended -->

<!-- Auto complete airport leaving from text script start -->

 <script
        src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.16.1/lodash.min.js'></script>
    <script
        src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://unpkg.com/fuse.js@2.5.0/src/fuse.min.js'></script>
    <script
        src='https://screenfeedcontent.blob.core.windows.net/html/airports.js'></script>
<script>
var options = {
  shouldSort: true,
  threshold: 0.4,
  maxPatternLength: 32,
  keys: [{
    name: 'iata',
    weight: 0.5
  }, {
    name: 'name',
    weight: 0.3
  }, {
    name: 'city',
    weight: 0.2
  }]
};

var fuse = new Fuse(airports, options)

$('.autocomplete').each(function() {
  var ac = $(this);

   ac.on('click', function(e) {
    e.stopPropagation();
  })
  .on('focus keyup', search)
  .on('keydown', onKeyDown);

  var wrap = $('<div>')
    .addClass('autocomplete-wrapper')
    .insertBefore(ac)
    .append(ac);

    var list = $('<div>')
      .addClass('autocomplete-results')
      .on('click', '.autocomplete-result', function(e) {
        e.preventDefault();
        e.stopPropagation();
        selectIndex($(this).data('index'), ac);
    })
    .appendTo(wrap);
});

$(document)
  .on('mouseover', '.autocomplete-result', function(e) {
    var index = parseInt($(this).data('index'), 10);
    if (!isNaN(index)) {
      $(this).attr('data-highlight', index);
    }
  })
  .on('click', clearResults);

function clearResults() {
  results = [];
  numResults = 0;
  $('.autocomplete-results').empty();
}

function selectIndex(index, autoinput) {
  if (results.length >= index + 1) {
    autoinput.val(results[index].iata);
    clearResults();
  }  
}

var results = [];
var numResults = 0;
var selectedIndex = -1;

function search(e) {
  if (e.which === 38 || e.which === 13 || e.which === 40) {
    return;
  }
  var ac = $(e.target);
  var list = ac.next();
  if (ac.val().length > 0) {
    results = _.take(fuse.search(ac.val()), 7);
    numResults = results.length;

    var divs = results.map(function(r, i) {
        return '<div class="autocomplete-result" data-index="'+ i +'">'
             + '<div><b>'+ r.iata +'</b> - '+ r.name +'</div>'
             + '<div class="autocomplete-location">'+ r.city +', '+ r.country +'</div>'
             + '</div>';
     });

    selectedIndex = -1;
    list.html(divs.join(''))
      .attr('data-highlight', selectedIndex);

  } else {
    numResults = 0;
    list.empty();
  }
}

function onKeyDown(e) {
  var ac = $(e.currentTarget);
  var list = ac.next();
  switch(e.which) {
    case 38: // up
      selectedIndex--;
      if (selectedIndex <= -1) {
        selectedIndex = -1;
      }
      list.attr('data-highlight', selectedIndex);
      break;
    case 13: // enter
      selectIndex(selectedIndex, ac);
      break;
    case 9: // enter
      selectIndex(selectedIndex, ac);
      e.stopPropagation();
      return;
    case 40: // down
      selectedIndex++;
      if (selectedIndex >= numResults) {
        selectedIndex = numResults-1;
      }
      list.attr('data-highlight', selectedIndex);
      break;

    default: return; // exit this handler for other keys
  }
  e.stopPropagation();
  e.preventDefault(); // prevent the default action (scroll / move caret)
}
</script>


  </section>
  
 

<?php include('inc/footer.php'); ?>