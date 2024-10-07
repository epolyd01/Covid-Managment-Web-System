<?php
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Report</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Report.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="styleChart" href="chartStyle.css">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/28669.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Report">
    <meta property="og:type" content="website">



    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            text-align:center;
        }
 
        td {
            background-color: #F6F6F6;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        tr{
          font-size: 14px;
        }
    </style>


  </head>
  <body class="u-body u-stick-footer u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-62ab"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://deltasoft.eu/en/" class="u-image u-logo u-image-1" data-image-width="1566" data-image-height="400" title="Deltasoft" target="_blank">
          <img src="images/28669.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Profile.php" style="padding: 6px 0px;">Profile</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Vaccination.php" style="padding: 6px 0px;">Vaccination</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Covid-Positive.php" style="padding: 6px 0px;">Covid Positive</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Close-Contact.php" style="padding: 6px 0px;">Close Contact</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Report.php" style="padding: 6px 0px;">Report</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.php">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Vaccination.php">Vaccination</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Covid-Positive.php">Covid Positive</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Close-Contact.php">Close Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Report.php">Report</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

<?php 
 $db = new mysqli("localhost", "team5DB", "zxLKJg7fO46iLyZx", "team5DB");
 if ($db->connect_error) {
    die("Connection failed: " . $cdb->connect_error);
 }

$usern = $_SESSION["username"];

$s = "SELECT type FROM User WHERE username='$usern'";
$r = $db->query($s);
 
//$db->close();

$row = $r->fetch_array();

if($row[0]!='a'){
exit();
    }
else {

  $db = new mysqli("localhost", "team5DB", "zxLKJg7fO46iLyZx", "team5DB");
     if ($db->connect_error) {
        die("Connection failed: " . $cdb->connect_error);
     }

$s1 = "SELECT name, surname, dnumber, username, work_from_home FROM User";
$r1 = $db->query($s1);

$s6 = "SELECT * FROM User INNER JOIN TestedPositive ON TestedPositive.UN = User.Username WHERE TestedPositive.PositiveTestDate IS  NULL";
$r6 = $db->query($s6);
$s7 = "SELECT * FROM User INNER JOIN TestedPositive ON TestedPositive.UN = User.Username WHERE TestedPositive.PositiveTestDate IS NOT NULL";
$r7 = $db->query($s7);
$s8 = "SELECT * FROM User INNER JOIN Vaccine ON User.`Username` = Vaccine.`UN` WHERE Vaccine.`NumOfDoses`=0";
$r8 = $db->query($s8);
$s9 = "SELECT * FROM User INNER JOIN Vaccine ON User.`Username` = Vaccine.`UN` WHERE Vaccine.`NumOfDoses`=1";
$r9 = $db->query($s9);
$s10 = "SELECT * FROM User INNER JOIN Vaccine ON User.`Username` = Vaccine.`UN` WHERE Vaccine.`NumOfDoses`=2";
$r10 = $db->query($s10);
$s11 = "SELECT * FROM User INNER JOIN Vaccine ON User.`Username` = Vaccine.`UN` WHERE Vaccine.`NumOfDoses`=3";
$r11 = $db->query($s11);


$s12 = "SELECT * FROM Vaccine WHERE Vaccine.`Company`= 'Pfizer'";
$r12 = $db->query($s12);
$s13 = "SELECT * FROM Vaccine WHERE Vaccine.`Company`= 'Moderna'";
$r13 = $db->query($s13);
$s14 = "SELECT * FROM Vaccine WHERE Vaccine.`Company`= 'Johnson&Johnson'";
$r14 = $db->query($s14);
$s15 = "SELECT * FROM Vaccine WHERE Vaccine.`Company`= 'AstraZeneca'";
$r15 = $db->query($s15);

$db->close();


$n6=mysqli_num_rows($r6);
$n7=mysqli_num_rows($r7);
$n8=mysqli_num_rows($r8);
$n9=mysqli_num_rows($r9);
$n10=mysqli_num_rows($r10);
$n11=mysqli_num_rows($r11);

$n12=mysqli_num_rows($r12);
$n13=mysqli_num_rows($r13);
$n14=mysqli_num_rows($r14);
$n15=mysqli_num_rows($r15);


?>


<section>

<div style="width: 100%;">
<div style="width: 700px; float: left; padding-left:10%; height: 100%;">
    <canvas id="employeeChart"></canvas>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ec = document.getElementById('employeeChart');
  
    new Chart(ec, {
      type: 'bar',
      data: {
        labels: ["Negative","Positive","Not vaccinated","1 dose","2 doses","3 doses"],
        datasets: [{
          label: 'Employee Health State',
          data: [<?php echo $n6?>,<?php echo $n7?>,<?php echo $n8?>,<?php echo $n9?>,<?php echo $n10?>,<?php echo $n11?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

<div style="width: 700px; float: right; padding-right:10%; height: 100%;">
    <canvas id="vaccineChart"></canvas>
  </div>
  <script>
    const vc = document.getElementById('vaccineChart');
  
    new Chart(vc, {
      type: 'bar',
      data: {
        labels: ["Pfizer","Moderna","Johnson&Johnson","AstraZeneca"],
        datasets: [{
          label: 'Employee Vaccination',
          data: [<?php echo $n12?>,<?php echo $n13?>,<?php echo $n14?>,<?php echo $n15?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</div>

<div style="width: 100%;  padding-bottom: 5%;">
<div style="width: 700px; float: left; padding-left:10%; height: 100%;">
  <canvas id="workFromHomeChart"></canvas>
</div>


<script>
  const wfhc = document.getElementById('workFromHomeChart');

  new Chart(wfhc, {
    type: 'bar',
    data: {
      labels: ["Quarantined","Working from home","At work","Have trip planned"],
      datasets: [{
        label: 'Employee Place of Work',
        data: [30,10,12],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<div style="width: 700px; float: right; padding-right:10%; height: 100%;">
  <canvas id="departmentsChart"></canvas>
</div>


<script>
  const dc = document.getElementById('departmentsChart');

  new Chart(dc, {
    type: 'bar',
    data: {
      labels: ["Sales Assistants","Logistics department","IT department","Software Developers"],
      datasets: [{
        label: 'Positive Employes per Department',
        data: [3,0,2,5],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</div>
</section>


<section>
<div style="width: 80%; margin: auto">
  <div style="width: 300px; float: left; height: 100%;">
    <canvas id="positivesChart"></canvas>
  </div>

<script>
  const pc = document.getElementById('positivesChart');

  new Chart(pc, {
    type: 'pie',
    data: {
      labels: [
    'Positive employees with symptoms',
    'Positive employees with no symptoms'
  ],
  datasets: [{
    label: '',
    data: [15, 20],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)'
    ],
    hoverOffset: 4
    }],
      
  }});
</script>


<div style="width: 300px; float: right; height: 100%;">
  <canvas id="tripsChart"></canvas>
</div>
<script>
  const tc = document.getElementById('tripsChart');

  new Chart(tc, {
    type: 'pie',
    data: {
      labels: [
    'Cancelled trips because of covid',
    'Trips'
  ],
  datasets: [{
    label: '',
    data: [15, 50],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)'
    ],
    hoverOffset: 4
    }],
      
  }});
</script>

</div>

</section>


<section>
<div style="padding-top: 5%">
        <table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Department</th>
                <th>Vaccine doses</th>
                <th>Last vaccination date</th>
                <th>In quarantine</th>
                <th>Quarantine start date</th>
                <th>Quarantine release date</th>
                <th>Travelling for work</th>
                <th>Trip departure date</th>
                <th>Need to reschedule trip</th>
            </tr>

            <?php
                $rows1 = $r1->fetch_array();
                $n=mysqli_num_rows($r1);
                while($n>0){

                  $department=$rows1[2];
                  $user=$rows1[3];

                  $db = new mysqli("localhost", "team5DB", "zxLKJg7fO46iLyZx", "team5DB");
                   if ($db->connect_error) {
                   die("Connection failed: " . $cdb->connect_error);
                   }

                  $s2 = "SELECT name FROM Department WHERE dnumber='$department';";
                  $r2 = $db->query($s2);
                  $s3 = "SELECT numOfDoses, lastDoseDate FROM Vaccine WHERE un='$user';";
                  $r3 = $db->query($s3);
                  $s4 = "SELECT positiveTestDate FROM TestedPositive WHERE un='$user';";
                  $r4 = $db->query($s4);
                  $s5 = "SELECT tripDepartureDate FROM Profile WHERE un='$user';";
                  $r5 = $db->query($s5);


                  $db->close();

                  $rows2 = $r2->fetch_array();
                  $rows3 = $r3->fetch_array();
                  $rows4 = $r4->fetch_array();
                  $rows5 = $r5->fetch_array();
            ?>

            <tr> 
                <td><?php echo $rows1[0];?></td>
                <td><?php echo $rows1[1];?></td>
                <td><?php echo $rows2[0];?></td>
                <td><?php echo $rows3[0];?></td>
                <td><?php echo $rows3[1];?></td>
                <td><?php echo $rows1[4];?></td>
                <td><?php echo $rows4[0];?></td>
                <td><?php if($rows4[0]!=is_null()){$qrel=date('Y-m-d', strtotime($rows4[0]. ' + 1 days'));} else {$qrel=NULL;} echo $qrel;?></td>
                <td><?php if($rows5[0]!=is_null()){echo 'Yes';} else {echo 'No';}?></td>
                <td><?php echo $rows5[0];?></td>
                <td><?php if($rows5[0]!=is_null()){if($rows5[0]<$rows4[0] AND $rows5[0]>$rows1[4]){echo 'Yes';} else {echo 'No';}}?></td>
            </tr>

            <?php
            $n--;
            $rows1 = $r1->fetch_array();
                }
            ?>
        </table>  
              </div>  
  </section>


  
<?php } ?>
    
<footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-valign-bottom u-footer" id="sec-c2ec"><p class="u-align-center u-small-text u-text u-text-variant u-text-1">Deltasoft Ltd</p></footer> 
</body></html>