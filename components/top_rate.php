              <div class="col-lg-4 sidebar" id="top-rate">

	                    <div class="single-slidebar">
	                        <h4>Top rated job posts</h4>
	                        <div class="active-relatedjob-carusel">
								<!-- top jobs placeholder -->
	                            <?php
	
$all_job = count($jobObj);

if($all_job >= 5 ){
$show_top = $all_job;

}else{
$show_top = $all_job;
}

$top_rated = 0;
for($i = 0; $i < $show_top; $i++){

 $job_select_top =json_decode($jobObj[$i]);
 if(isset($job_select_top->rating)){
 
 $rate_top =  round($job_select_top->rating);

 }else{
 $rate_top = 0;

}



if(isset($job_select_top->salary)){
$sal = $job_select_top->salary;
if($sal == ""){
$salary = "";

}else{

$salary =  '<p class="address "><span class="lnr lnr-database"></span>'.$sal. '</p>';
}
}else{
$salary = "";


}



if($rate_top >= 2){

$top_rated++;



if($top_rated === 6){
break;
}

		?>
			
		<div class="single-rated">
    <h4><?php echo $job_select_top->title;?></h4>
    <div class="star">
<?php	


switch ($rate_top) {
    case 1:
        
         echo '<span class="fa fa-star checked"></span>
	 <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>
	<span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';   
 break;
    case 2:

         echo '<span class="fa fa-star checked"></span>
	 <span class="fa fa-star checked"></span>
         <span class="fa fa-star "></span>
	<span class="fa fa-star "></span>
        <span class="fa fa-star "></span>';
break;
    case 3:

         echo '<span class="fa fa-star checked"></span>
	 <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
	<span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        break;
  
    case 4:

         echo '<span class="fa fa-star checked"></span>
	 <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>';
               
        break;


    case 5:

         echo '<span class="fa fa-star checked"></span>
	 <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>';
              
        break;

    default:
        echo "Your favorite color is neither red, blue, nor green!";
}



?>
    </div>
    <h6>   <?php echo $job_select_top->employer;?></h6>
    <p>
   <?php echo $job_select_top->description;?>
    </p>
    
    <p class="address >"><span class="lnr lnr-map"></span>   <?php echo $job_select_top->address;?>
    </p>
   <?php echo $salary?>
    <a href="<?php echo $job_select_top->link;?>"  target="_blank" class="btns text-uppercase">Apply job</a>
</div>

<?php
}else{

}
}

?>
		
			<!-- #end top jobs -->

	                        </div>
	                    </div>


