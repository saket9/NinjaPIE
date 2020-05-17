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
        <a class="nav-link" href="coronaIndia.php">IndiaCases</a>
      </li>
      
     
     
    
  </div>
</nav>
<section class="corona_update container-fluid">
    <div class="my-5">
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

// function fetch(){

//   $.get("https://api.covid19api.com/summary",
//       function {data}{
//          var tbval = document.getElementById('tbval');

//          for(var i=1; i<247; i++)
//          {
//            var x=tbval.insertRow();
//            x.insertCell(0);
//            tbval.rows[i].cells[0].innerHTML=  data['Countries'][i-1]['Country'];
//            tbval.rows[i].cells[0].style.background = '#7a4a91';
//            tbval.rows[i].cells[0].style.color = '#fff';

//            x.insertCell(1);
//            tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
//            tbval.rows[i].cells[1].style.background = '#4bb7d8 ';
           
           

//            x.insertCell(2);
//            tbval.rows[i].cells[2].innerHTML  =data['Countries'][i-1]['TotalRecovered'];
//            tbval.rows[i].cells[2].style.background = '#4bb7d8 ';

//            x.insertCell(3);
//            tbval.rows[i].cells[3].innerHTML =data['Countries'][i-1]['TotalDeaths'];
//            tbval.rows[i].cells[3].style.background = '#f36e23';
//            x.insertCell(4);

//            tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
//            tbval.rows[i].cells[4].style.background = '#4bb7d8';
//            x.insertCell(5);

//            tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
//            tbval.rows[i].cells[5].style.background = '#9cc850';
//            x.insertCell(6);

//            tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
//            tbval.rows[i].cells[6].style.background = '#f36e23';
//          }
//       }
  
//   );
// }

</script>
</body>
</html>


