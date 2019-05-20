<?php
session_start();

include("modules/function.php");

include("modules/connect.php");

if(isset($_SESSION['email'])){

$email = $_SESSION['email'];
$id = getId($email);



}



?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include_once('includes/metalinks.inc.php'); ?>
<script src="js/vendor/jquery-2.2.4.min.js"></script>

	<body>

	    <?php 

include_once('includes/header.inc.php');

$job_saved = mysqli_query($connect,"SELECT * FROM saved_job where user_id = '$id'");


 ?>




<style>
@media (max-width: 414px) {
.hidden{
display:none !important;
}


}  

.hidden{
display:none !important;
}
#header{
background:#aa00ff;
}
.red{
background:#c62828 !important ;
}
.remove{
color: white;

font-size: 13px;

font-weight: 1000;
}
</style>
	    <!-- End banner Area -->

	    <!-- Start post Area -->
	    <section class="post-area section-gap">
	        <div class="container">
	            <div class="row justify-content-center d-flex">
	                <div class="col-lg-8 post-list">
	                   
 

<?php

    while($row = mysqli_fetch_assoc($job_saved)){
  
$saved =$row['json'];
$id=  $row['id'];



 
 
$job_select =json_decode($saved);
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

		

<div class="single-post jobcard d-flex flex-row" id="job_<?php echo $id?>">

    <div class="details">
        <div class="title d-flex flex-row justify-content-between">
            <div class="titles">
                <a href="#">
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
                <li class="red remove_job" id="<?php echo $id ?>"><a ><span class="lnr lnr-cross danger remove" ></span></a></li>
                <li><a class="generic-btn info" href="<?php echo $job_select->link;?>"  target="_blank">Apply</a></li>
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

}


?>

		
		
                <!-- Fob Card Ends 1-->

	                    <!-- #job card 2 -->
	                </div>
	                    

	                </div>
	            </div>
	        </div>
	    </section>


<?php


if(isset($_SESSION['email'])){


?>

<script>
/*
 $("li.searchterm").on("click",function() {    
job_id = this.id; 
  console.log(job_id);
});
*/
$(".remove_job").click(function(){

job_id = this.id;


$.post("modules/remove_job.php",
  {
    job_id:job_id 	

  
},
  function(data, status){
var job_card = "#job_"+job_id;
$(job_card).addClass('hidden');

});


}); 
</script>

<?php
}else{

}
?>
	    <!-- End post Area -->

	    <!-- Start callto-action Area -->
	    <?php include_once('includes/calltoaction.inc.php'); ?>
	    <!-- End calto-action Area -->

	    <!-- start footer Area -->
	    <?php include_once('includes/footer.inc.php'); ?>
	    <!-- End footer Area -->

	    <!-- start scripts -->
	    <?php include_once('includes/scripts.inc.php'); ?>
	    <!-- # end scripts -->
	</body>

	</html>
