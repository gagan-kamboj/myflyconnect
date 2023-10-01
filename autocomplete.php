<?php
include('inc/header.php');
include('.admin/inc/function.php');
?>
<style>

header.main__header {
    background: #484040;
    position: relative;
  
}
.ac_results {
	padding: 0px;
	border: 1px solid #84a10b;
	background-color: #84a10b;
	overflow: hidden;
}

.ac_results ul {
	width: 100%;
	list-style-position: outside;
	list-style: none;
	padding: 0;
	margin: 0;
}

.ac_results li {
	margin: 0px;
	padding: 2px 5px;
	cursor: default;
	display: block;
	color: #fff;
	font-family:verdana;
	/* 
	if width will be 100% horizontal scrollbar will apear 
	when scroll mode will be used
	*/
	/*width: 100%;*/
	font-size: 12px;
	/* 
	it is very important, if line-height not setted or setted 
	in relative units scroll will be broken in firefox
	*/
	line-height: 16px;
	overflow: hidden;

}

.ac_loading {
	background: white url('../images/indicator.gif') right center no-repeat;
}

.ac_odd {
	background-color: #84a10b;
	color: #ffffff;
}

.ac_over {
	background-color: #5a6b13;
	color: #ffffff;
}


.input_text{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	border:1px solid #84a10b;
	padding:2px;
	width:150px;
	color:#000;
	background:white url(../images/search.png) no-repeat 3px 2px;
	padding-left:17px;
}
</style>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css"/>
 <script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="assets/js/jquery.autocomplete.js"></script>
 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("autocompletesearch.php");
 });
 </script>
</head>
<body>
 <form action="autocompletesearch.php">
Arival airport : <input type="text" name="Arival_airport" id="search" placeholder="">
 <input type="submit" value="Submit"/>
 </form> 
</body>
</html>

   <?php include('inc/footer.php');?>
