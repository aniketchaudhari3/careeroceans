<!DOCTYPE html>
	<html lang="zxx" class="no-js">
    <script src="js/vendor/jquery-2.2.4.min.js"></script>

        <?php include_once('includes/metalinks.inc.php'); ?>
		<body>


        <header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            

        
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                <li class="menu-active"><a href="/saved_jobs">Saved Jobs</a></li>
                
                 <li class="menu-active"><a href="/">Find Jobs</a></li>
                
                   
                    <li><a href="/contact">Contact</a></li>

                    <li class="menu-has-children"><a href="#">More</a>
                        <ul>
                            <!-- <li><a href="blog-home.php">Blog</a></li> -->
                            <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/logout">Logout <i class="fa fa-sign-out"></i></a></li>
 
                        </ul>
                    </li>
                
        <center> <a href="/logout" class="logout genric-btn danger radius">Logout</a></center>
                 
                  </ul>
        
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>


		<!-- #header -->


<?php
session_start();

include("modules/function.php");

if(isset($_SESSION['email'])){

$email = $_SESSION['email'];
getId($email);

}else{

header("location:login.php");

}


$name = getData($email,'name');
$last =  getData($email,'lastname');

$job =  getData($email,'department');

$loc = "mumbai";
	

$page = 1;
$url = "http://13.233.15.29/api?q=".urlencode($job)."&l=".urlencode($loc)."&page=$page";
$data = file_get_contents($url); 

  $jobObj = json_decode($data,true);

$total_job =  count($jobObj);

?>
<br>
<br>
<style>

.logout{

    display:none !important;
}

#header{
   
    background: #000;
}
.down{
    margin-top:12%;
}






.section-gap{

    padding:40px 0;

}
.card_form{
margin: 0 auto;
    margin-top: 0px;
box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width: 80% padding:6px;
}


.card_input{
border-radius:12px;
color: black;
border: 1px solid rgba(0, 0, 0, 0.3);
font-size: 14px;
}

.card-columns {
    column-count: 1;
    column-gap: 1.25rem;
}


@media only screen and (min-width: 574px) {

.profile_form{

width:55%;
margin: 0 auto;
 margin-top: 5px;
box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
padding:6px;
float:left;
}

.save_form{

width:42%;
margin: 0 auto;
    margin-top: 5px;
box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
padding:6px;

}



}


@media only screen and (max-width: 574px) {

.profile_form{
margin: 0 auto;
margin-top: 0px;
box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

margin-bottom: 7%;
}

.save_form{
margin: 0 auto;
margin-top: 0px;
box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
width: 80% padding:6px;
}




.my_form{
padding-bottom:10px;

}
.logout{
margin-top:45%;
display:block !important;
}
body {
background-color:whitesmoke;
}
}
a{
    font-style:normal;
    color:#777777;
}
</style>

<div class="container down">
<div class="card card_form">
<div class="card-body">
<form action="search.php" method="get">
 <div class="row  ">
  <div class="col-sm-5 my_form"><input type="text" class="form-control card_input" name="job_title" placeholder="Job Title"  required></div>
  <div class="col-sm-5 my_form">	<input type="text" class="form-control card_input" name="job_location" placeholder="Job Location" >
</div>
  <div class="col-sm-2 ">
  <center>
  <button class="genric-btn success circle" type="submit" name="search"><i class="fa fa-search"></i></button>


</center>
</div>
</div> 
		</form>					
        </div>
</div>
</div>

<br>
<div class="container">
<div class="card profile_form">
<div class="card-body">

<h5 class="card-title">Profile <a  data-toggle="modal" data-target="#myModal"><i class="fa fa-edit pull-right"></i>
</a></h5>
<p class="text"><i class="fa fa-user">&nbsp;&nbsp; <span id="name"><?php echo "$name"?></span>&nbsp;  <span id="last"><?php echo "$last"?></span></i></p>
<p class="text"><i class="fa fa-envelope">&nbsp;&nbsp; <span> <?php echo "$email"?></i> </span></p>
<p class="text"><i class="fa fa-graduation-cap">&nbsp;&nbsp; <span id="dept"> <?php echo "$job"?></span></i></p>
 </div>
</div>
</div>

<div class="container">
<div class="card save_form">
<div class="card-body">
<h5 class="card-title">Activity <i class="fa fa-globe pull-right"></i></h5>
<a href='/saved_jobs'><p class="text"><i class="fa fa-save">&nbsp;&nbsp;Saved jobs :- 12</i></p></a>
<p class="text"><i class="fa fa-envelope">&nbsp;&nbsp;view jobs:- 124</i></p>
<!-- <p class="text"><i class="fa fa-trash">&nbsp;&nbsp;Delete Account</i></p> -->
 </div>
</div>
</div>

<section class="post-area section-gap">
	        <div class="container">
            <div class="card-columns">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <h5 class="card-text text-white">Jobs Recommended for you</h5>
    </div>
  </div>


    <br>
                <div class="row justify-content-center d-flex">
	                <div class="col-lg-8 post-list">
	                   
 

<?php


$id= 0;
foreach ($jobObj as $value) {
$id++;
 $job_select =json_decode($value);
 if(isset($job_select->rating)){
 $rate =  round($job_select->rating);

 }else{
 $rate = 0;

}

if(isset($job_select->salary)){
$sal = $job_select->salary;
if($sal == ""){
$salary = "";

}else{

$salary =  '<p class="address "><span class="lnr lnr-database"></span>'.$sal. '</p>';
}
}else{
$salary = "";


}



?>

		<!-- Job Card goes 1-->		

		

<div class="single-post jobcard d-flex flex-row" id='card_<?php echo $id ?>'>

    <div class="details">
        <div class="title d-flex flex-row justify-content-between">
            <div class="titles">
                <a href="<?php echo $job_select->link; ?>">
                    <h4><?php echo $job_select->title;?></h4>
                </a>
                <div class="star">
<?php
for($i = 0;$i<$rate;$i++){
echo '<span class="fa fa-star checked"></span>';

}
     
?>          
 	 </div>
                <h6><?php echo $job_select->employer;?></h6>
            </div>
            <ul class="btns">
                <li class="save" id="<?php echo $id ?>"><a><span class="lnr lnr-heart danger " ></span></a></li>
                <a class="generic-btn info" href="<?php echo $job_select->link; ?>"><li>Apply</li></a>
            </ul>
        </div>
        <p>
            <?php echo $job_select->description;?>
        </p>
        <p class="address"><span class="lnr lnr-map"></span> <?php echo $job_select->address;?></p>
        <?php echo $salary?>
    </div>
</div>


<?php
if($id ===11){

    break;
}
}


?>


<center>



<a href="search.php?company=<?php echo $job ?>&department=" class="genric-btn info circle arrow">More &nbsp; <?php echo $total_job;?><span class="lnr lnr-arrow-right"></span></a>
</center>


<br>
</div>


<?php include("components/top_rate.php");?>

</section>

<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
     
      <form action="search.php" method="get">

 <div class="form-group">
  <div class="col-sm-12 "><input type="text" class="form-control card_input"  id="name_edit" value="<?php echo $name ?>" name="name" placeholder="Name"  required></div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 ">	<input type="text" class="form-control card_input" id="last_edit" value="<?php echo $last ?>" name="lastname" placeholder="Last name" ></div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 ">	<input type="text" class="form-control card_input" id="dept_edit" value="<?php echo $job ?>" name="deparatment" placeholder="Deparatment" ></div>
</div>

		</form>					


      </div>
      <div class="modal-footer">
      <button type="button" id="edit_save" class="btn btn-success btn-block" data-dismiss="modal">Save</button>
    
      </div>
    </div>

  </div>
</div>

<script>


 $("#edit_save").click(function(){

var name = $("#name_edit").val();
var last = $("#last_edit").val();

var dept = $("#dept_edit").val();


  $.post("edit.php",
    {

      name:name,
      last:last,
      dept:dept	
      
 },
    function(data,status){

$("#name").text(name);
$("#last").text(last);
$("#dept").text(dept);





 });
  });


</script>

			<!-- Start callto-action Area -->
			
			<?php include_once('includes/calltoaction.inc.php'); ?>
			<!-- End calto-action Area -->

			<!-- start footer Area -->		
			<?php include_once('includes/footer.inc.php'); ?>
			<!-- End footer Area -->		

			<!-- start scripts -->_rate.
			<?php include_once('includes/scripts.inc.php'); ?>
			<!-- # end scripts -->
		</body>
	</html>



