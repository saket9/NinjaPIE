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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coronaIndia.php">IndiaCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coronaDay.php">PerDayCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
     
     
    
  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100">
     <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
         <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
             <img src="images/tog.png" width="300" height="300">
         </div>
       </div>
       <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
       <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1 >
                Let's be a Ninja and fight Together Against Novel Cor<span class="rot"> <img src="images/corona1.png"></span>na Virus
</h1>
         </div>
       </div>
    </div>

</div>
<!-- <section class="corona_update container-fluid">
    <div class="mb-3">
        <h5 class="text-uppercase text-center count_style">COVID-19 INDIA UPDATES</h5>
</div>
   <div class="table-responsive">
   <table class=" table table-bordered table-striped text-center" id="tbval">
            <tr>
              <th class="text-capitalize " style="background-color:#ff00ff">Country</th>
              <th class="text-capitalize" style="background-color:#40ff00">state</th>
              <th class="text-capitalize" style="background-color:#ff8000">confirmed</th>
              <th class="text-capitalize" style="background-color:#00ffff">active</th>
              <th class="text-capitalize" style="background-color:#bf00ff">recovered</th>   
              <th class="text-capitalize" style="background-color:#ff8080">deaths</th>
            </tr>
            <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
?>
<tr>
<td>  <?php echo $coranalive['statewise'][$i]['lastupdatedtime']?>  </td>
<td>  <?php echo $coranalive['statewise'][$i]['state']?>  </td>
<td>  <?php echo $coranalive['statewise'][$i]['confirmed']?>  </td>
<td>  <?php echo $coranalive['statewise'][$i]['active']?>  </td>
<td>  <?php echo $coranalive['statewise'][$i]['recovered']?>  </td>
<td>  <?php echo $coranalive['statewise'][$i]['deaths']?>  </td>

</tr>
  
<?php
  $i++;
}


?>


       </table>
   </div>
</div>

</section> -->
<!-- about section -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h1> About COVID-19</h1>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5 about_response">
<img src="images/about11.jpg" class="img-fluid"></div>

<div class="col-lg-6 col-md-6 col-12">
<h2>WHAT IS CORONA-VIRUS(COVID-19)</h2>
<p>Coronaviruses are a group of related RNA viruses that cause diseases in mammals and birds. In humans, these viruses cause respiratory tract infections that can range from mild to lethal.</p>
<p>Mild illnesses include some cases of the common cold (which is caused also by certain other viruses, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19. Symptoms in other species vary: in chickens, they cause an upper respiratory tract disease, while in cows and pigs they cause diarrhea. There are as yet no vaccines or antiviral drugs to prevent or treat human coronavirus infections.</p>
</div>
</div>
</div>
<!-- sympthoms -->
<div class="container-fluid  pt-5 pb-5" id="sympid">
<div class="section_header text-center mb-5 mt-4">
<h1>CoronaVirus Symptoms</h1>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/cough.jpg" class="img-fluid" width="120" height="120">
<figcaption>Cough</figcaption>
</figure>

</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/fever.jpg" class="img-fluid" width="120" height="120">
<figcaption>Fever</figcaption>
</figure>

</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/nose.jpg" class="img-fluid" width="120" height="120">
<figcaption>Running Nose</figcaption>
</figure>

</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/cold.jpg" class="img-fluid" width="120" height="120">
<figcaption>Cold</figcaption>
</figure>

</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/tired1.PNG" class="img-fluid" width="120" height="120">
<figcaption>Tiredness</figcaption>
</figure>

</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/breath.jpg" class="img-fluid" width="120" height="120">
<figcaption>Breathing Difficulty</figcaption>
</figure>

</div>
</div>
</div>

</div>


<!-- 6 steps  -->



<div class="container-fluid  pt-5 pb-5 sub_section2" id="preventid">
<div class="section_header text-center mb-5 mt-4">
<h1>Steps That Keeps Corona Away</h1>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/handwash.png" class="img-fluid" width="90" height="90">
        <figcaption>HandWash</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p> wash your hand regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/mask.jpg" class="img-fluid" width="90" height="90">
        <figcaption>Wear Mask</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough and sneeze.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/dist.jpg" class="img-fluid" width="90" height="90">
        <figcaption>Social-Distancing</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p> Avoid close contact with people who are shows symptoms of coronvirus.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/home.jpg" class="img-fluid" width="90" height="90">
        <figcaption>Stay Home</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p> Stay home and self-isolate from others in the household if you feel unwell.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/news.jpg" class="img-fluid" width="90" height="90">
        <figcaption>Stay Informative</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p>Stay informed by watching news and follow the lockdown rules as per mentioned by government.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/med.jpg" class="img-fluid" width="90" height="90">
        <figcaption>Medical Care</figcaption>
        </figure>
    </div>
    <div class="col-lg-8 col-md-8 col-12">
        <p>If have any symptoms of the virus that either self-quarantine for contact your near medical center.</p>
    </div>
    </div>
    </div>
</div>
</div>
</div>

<!-- Contact queries  -->

<div class="container-fluid  pt-5 pb-5 " id="contactid">
<div class="section_header text-center mb-5 mt-4">
<h1>Contact Us</h1>
</div> 
<div class="continer">
<div class="row">
<div class="col-lg-8 offset-lg-2 col-12">


<form action="" method="POST">


<div class="form-group">
    <label >User Name</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Mobile Number</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
<label> Select Symptoms</label><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="cororonasym[]" value="cold">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="cororonasym[]" value="fever">
  <label class="form-check-label" for="inlineCheckbox1">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="cororonasym[]" value="breathe">
  <label class="form-check-label" for="inlineCheckbox1">Breathing Difficulty</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="cororonasym[]" value="weak">
  <label class="form-check-label" for="inlineCheckbox1">Weakness</label>
</div>
</div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Provide Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

<button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
</div>
</div>

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

function fetch(){

  $.get("https://api.covid19api.com/summary",
      function {data}{
         var tbval = document.getElementById('tbval');

         for(var i=1; i<247; i++)
         {
           var x=tbval.insertRow();
           x.insertCell(0);
           tbval.rows[i].cells[0].innerHTML=  data['Countries'][i-1]['Country'];
           tbval.rows[i].cells[0].style.background = '#7a4a91';
           tbval.rows[i].cells[0].style.color = '#fff';

           x.insertCell(1);
           tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
           tbval.rows[i].cells[1].style.background = '#4bb7d8 ';
           
           

           x.insertCell(2);
           tbval.rows[i].cells[2].innerHTML  =data['Countries'][i-1]['TotalRecovered'];
           tbval.rows[i].cells[2].style.background = '#4bb7d8 ';

           x.insertCell(3);
           tbval.rows[i].cells[3].innerHTML =data['Countries'][i-1]['TotalDeaths'];
           tbval.rows[i].cells[3].style.background = '#f36e23';
           x.insertCell(4);

           tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
           tbval.rows[i].cells[4].style.background = '#4bb7d8';
           x.insertCell(5);

           tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
           tbval.rows[i].cells[5].style.background = '#9cc850';
           x.insertCell(6);

           tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
           tbval.rows[i].cells[6].style.background = '#f36e23';
         }
      }
  
  );
}

</script>
</body>
</html>


<?php

include 'dbconnect.php';
 
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['cororonasym'];
  $msg=$_POST['msg'];


  $chk="";

  foreach($symp as $chk1){
    $chk .=$chk1.",";
  }
  $insertquery = " insert into coronacase(username,	email,	mobile,	symp,	message) values('$username','$email','$mobile','$chk','$msg')";
  $query=mysqli_query($con,$insertquery);
  if($query){
    ?>
    <script>
    alert("inserted");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("problem");
    </script>
    <?php
}
}

?>