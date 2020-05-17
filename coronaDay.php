<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
   <?php include 'links/links.php'; ?>
   <?php include 'css/style.php'; ?>
   <!-- <?php include 'css/indexCss.php'; ?>
   <?php include 'js/style.php'; ?>
   <?php include 'js/particles.mi'; ?> -->
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style  p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
     
      <li class="nav-item">
        <a class="nav-link" href="coronaDay.php">Daywise Cases in India</a>
      </li>
      
     
     
    
  </div>
</nav>
<section class="corona_update container-fluid">
    <div class="my-5">
        <h5 class="text-uppercase text-center count_style">COVID-19 INDIA UPDATES DAYWISE</h5>
</div>
   <div class="table-responsive">
       <table class=" table table-bordered table-striped text-center" id="tbval">
            
            <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

// echo "<pre>";
// print_r($daywise);


//echo $daywise['cases_time_series'][0]['totalconfirmed'];
 
$totalcount = count($daywise['cases_time_series']);
$i=0;
while($i <$totalcount){
?>
<tr> 
    <th class="text-left" colspan="6">Date and Month wise Report</th>
</tr>
<tr>
<td class="text-left" colspan="6"><?php echo $daywise['cases_time_series'][$i]['date']."<br>";   ?> </td>
</tr>




<tr class=text-capitilize text-white>


            <th class="text-capitalize " style="background-color:#ff00ff">Total confirmed</th>
              <th class="text-capitalize" style="background-color:#40ff00">daily confirmed</th>
              <th class="text-capitalize" style="background-color:#ff8000">daily recovered</th>
              <th class="text-capitalize" style="background-color:#00ffff">daily deceased</th>
              <th class="text-capitalize" style="background-color:#bf00ff"> total recovered</th>   
              <th class="text-capitalize" style="background-color:#ff8080"> total deaths</th>
           

</tr>
  
<tr>
</tr class="mb-5">
   <td> <?php echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>"; ?></td>
   <td> <?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']."<br>"; ?></td>
   <td> <?php echo $daywise['cases_time_series'][$i]['dailyrecovered']."<br>"; ?></td>
   <td> <?php echo $daywise['cases_time_series'][$i]['dailydeceased']."<br>"; ?></td>
   <td> <?php echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>"; ?></td>
   <td> <?php echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>"; ?></td>


<?php
  $i++;
}


?>


       </table>
   </div>
</div>



</section>




<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!-- Footer work -->
<footer class="mt-5 ">
<div class="footer_style text-white text-center container-fluid">
<p> Copyright @ saket</p>
</div>
</footer>
<script type="text/javascript">
mybutton=document.getElementById("myBtn");
window.onscroll=function() {scrollFunction()};
function scrollFunction(){

  if(document.body.scrollTop>100|| documentElement.scrollTop>100){
    mybutton.style.display="block";
  }else{
    mybutton.style.display="none";
  }
}
function topFunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}


</script>
</body>
</html>


