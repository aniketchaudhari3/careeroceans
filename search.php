<?php
session_start();

include("modules/function.php");

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

$scrape_switch = FALSE;

if(isset($_GET['search'])){


	$job = $_GET['job_title'];
    $loc = $_GET['job_location'];
    
    $scrape_switch = TRUE; //recieved required variables
    
    }
    
	if(isset($_GET['department'])){
	 
	$job = $_GET['company'];
	$loc = "";
    
    $scrape_switch = TRUE; //recieved required variables
	
    }
  

$page = 1;


$url = "http://13.233.15.29/api?q=".urlencode($job)."&l=".urlencode($loc)."&page=$page";

$data = '';

//will only scrape if scrape switch is enabled
if($scrape_switch){
    $data = file_get_contents($url); 
    $jobObj = json_decode($data,true);
}




 ?>


    <style>
    .section-gap {

        padding: 40px 0;

    }

    .card_form {
        margin: 0 auto;
        margin-top: 0px;
        box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        width: 80% padding:6px;
    }

    .card_input {
        border-radius: 12px;
        color: black;
        border: 1px solid rgba(0, 0, 0, 0.3);
        font-size: 14px;
    }

    #header {
        background: #000;
    } 

    .down {
        margin-top: 12%;
    }

    @media only screen and (max-width: 574px) {
        .my_form {
            padding-bottom: 10px;

        }

        .down {
            margin-top: 28%;
        }

        body {
            background-color: whitesmoke;
        }
    }
    </style>


    <?php include_once('includes/header.inc.php'); ?>


    <div class="container down" id="search">
        <div class="card card_form">
            <div class="card-body">
                <form action="search.php" method="get">
                    <div class="row  ">
                        <div class="col-sm-5 my_form"><input type="text" class="form-control card_input"
                                name="job_title" placeholder="Job Title" required></div>
                        <div class="col-sm-5 my_form"> <input type="text" class="form-control card_input"
                                name="job_location" placeholder="Job Location">
                        </div>
                        <div class="col-sm-2 ">
                            <center>
                                <button class="genric-btn success circle arrow" type="submit" name="search">Find
                                    Jobs<span class="lnr lnr-magnifier"></span></button>


                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
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
                                    <li class="save" id="<?php echo $id ?>"><a><span
                                                class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="<?php echo $job_select->link?>" class="generic-btn info">Apply</a></li>
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


                    <center>
                        <a href="" class="genric-btn info circle arrow">More<span
                                class="lnr lnr-arrow-right"></span></a>
                    </center>

                    <!-- Fob Card Ends 1-->

                    <!-- #job card 2 -->
                </div>
                <!--Top Rated Jobs -->


                <?php  include("components/top_rate.php");?>


                <!--  Top Rated Job end-->


                <div class="">

                    <?php include('components/alert.php');?>

                </div>

            </div>
        </div>
        </div>

        <div class="">
            <a href="#search" class="genric-btn info " style="position: fixed;top: 92%;left: 85%;font-size: 20px;"><span
                    class="fa fa-search"></span></a>
        </div>

    </section>



    <script>
    $(".alert_now").click(function() {

        var email = $('#alert_email').val();

        $.post("modules/save_alert.php", {
                email: email


            },
            function(data, status) {
                alert("Alert Done!");
            });

    });

    var job_json = <?php echo json_encode($jobObj); ?>;


    var total_jobs = <?php echo $id ?>;

    if (total_jobs >= 13) {

        for (i = 10; i < total_jobs; i++) {
           // console.log(job_json[i]);
        }

    }
    </script>


    <?php


if(isset($_SESSION['email'])){


?>

    <script>
    $(".save").click(function() {
        job_id = this.id;
        job_id--;

        console.log(job_id);

        $.post("modules/save_job.php", {
                job_json: job_json[job_id]


            },
            function(data, status) {
                alert(data);
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
