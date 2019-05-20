<style>
div#box-alert-bottom-new {
    background-color: #F9F9F9;
    box-shadow: 0px 0px 5px #ccc;
    padding: 20px;
    position: sticky;
    top: 0px;
    margin-top: 20px;
    width: 310px;
}

.bottom-alert-img-holder img {
    height: 52px;
    float: left;
    position: relative;
    top: 4px;
    margin-top: -8px;
    left: 0px;
}

.bottom-alert-button {
    padding: 9px 30px 9px 30px;
    font-size: 14px;
    border: none;
    background-color: #29ADE4;
    color: white;
    cursor: pointer;
    box-shadow: 0 3px 1px -2px #ccc;
    outline: none;
    width: 100%;
    text-align: center;
    margin-left: 0px;
    margin-top: 20px;
    height: auto;
    box-sizing: border-box;
}

input.bottom-input {
    font-weight: 400;
    width: 100%;
    padding: 8px 10px 8px 10px;
    font-size: 13px;
    border-radius: 2px;
    box-shadow: 0 3px 1px -2px #ccc;
    border: 1px solid #DADADA;
    margin: 0px 5px 0px 0px;
    box-sizing: border-box;
}

.bottom-alert-input-holder {
    display: block;
    margin-top: 11px;
}

.bottom-alert-txt2 {
    font-size: 16px;
    margin-top: 2px;
}
#nv-jobs{
    float:left;
}
.bottom-alert-txt1 {
    font-size: 16px;
}

.bottom-alert-img-holder {
    margin-right: 10px;
}

.bottom-alert-rightside {
    /* padding-left: 78px; */
}

.bottom-error-text {color: red;font-size: 13px;margin-top: 11px;margin-bottom: -10px;}
.bottom-alert-txt1 b {
    font-size: 16px;
}
.bottom-alert-mobile-txt {
    display:none;
}

.bottom-alert-txt-holder {
    padding-left: 70px;
    padding-bottom: 8px;
}

.bottom-alert-done {
}
.bottom-alert-button a {
    font-size: 14px;
    color: white;
    text-decoration: none;
}
span.bottom-cancel-txt {
    font-size: 13px;
    color: #545454;
}
.bottom-alert-done {
    font-size: 13px;
    margin-top: 11px;
    margin-bottom: -10px;
}
.bottom-alert-txt2 b {
    font-size: 16px;
}
.bottom-alert-txt3 {
    display: none;
}
</style>

<div id="nv-register-side">                                     

<link type="text/css" rel="stylesheet" href="/services/email-register-popup/css/email_side.css">
<div id="box-alert-bottom-new">
        
        <div class="bottom-alert-img-holder">        
            <img src="email.png">  
        </div> 
        <div class="bottom-alert-rightside">
            <div class="bottom-alert-txt-holder"> 
               <div class="bottom-alert-txt1">Get the job before others do!</div>       
               <div class="bottom-alert-txt2">Create a job alert for <b><?php echo $job ?>,<?php echo $loc ?></b> <span class="bottom-cancel-txt"></span></div>  
               <div class="bottom-alert-txt3">Get the job before others do! Create a job alert for <b><?php echo $job ?>,<?php echo $loc ?></b> <span class="bottom-cancel-txt"></span></div>   
            </div>  
            <div class="bottom-error-text" style="display: none;">*Please enter your email</div>  
            <div class="bottom-alert-done" style="display: none;">All done, alert created</div>
            <div class="bottom-alert-input-holder">
                <input class="bottom-input" placeholder="my@email.com" id="alert_email" value="" type="text">        
                <div class="bottom-alert-button alert_now" ><a href="#" class="alert_now">Create alert</a>  </div>      
                    
            </div>
            <div class="disclaimer">By clicking on "Create alert", I give careerOceans consent to process my data and to send me email alerts.</div>
        </div>   

    
</div>



</div>