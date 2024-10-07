<?php
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Vaccination</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Vaccination.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/28669.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Vaccination">
    <meta property="og:type" content="website">
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


      <section class="u-align-center u-clearfix u-section-2" id="sec-9926">
      <div class="u-clearfix u-sheet u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-sheet-1">
        <p class="u-align-left u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">Vaccination details</p>
      </div>
    </section>




    <?php
     $db = new mysqli("localhost", "team5DB", "zxLKJg7fO46iLyZx", "team5DB");
     if ($db->connect_error) {
        die("Connection failed: " . $cdb->connect_error);
     }

//button save
     if(isset($_POST['save'])) {

     $company = $_POST['company'];
     $lastDoseDate = $_POST['lastDoseDate'];
     $numOfDoses = $_POST['numOfDoses'];
     $expirationDate = $_POST['expirationDate'];

     //$sql = "INSERT INTO Vaccine (company, lastDoseDate, numOfDoses, UN)
     //VALUES ('$company', '$lastDoseDate', '$numOfDoses', 'user1')";

     $usern = $_SESSION["username"];

    $sql = "UPDATE Vaccine".
     " SET company='$company', lastDoseDate='$lastDoseDate', expirationDate='$expirationDate', numOfDoses='$numOfDoses', UN='$usern'".
     " WHERE UN ='$usern';";

     if ($db->query($sql) === TRUE) {
       //echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" . $db->error;
     }

    }
    $db->close();
?>


<form method="post">
 <div class="u-clearfix u-sheet u-sheet-1">
    <section class="u-clearfix u-section-3" id="sec-7a8f" style="height: 70px">
      <div class="u-clearfix u-sheet u-sheet-1">

      <div style="width: 45%; float: left;" class="u-align-left u-expanded-width-xs u-form u-form-1">
          <div class="u-form-group u-form-select u-label-top u-form-group-1">
            <label for="select-413b" class="u-label">Manufacturer</label>
            <div class="u-form-select-wrapper">
              <select id="select-413b" name="company" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-1">
                <option value="Moderna">Moderna</option>
                <option value="Pfizer">Pfizer</option>
                <option value="Johnson&amp;Johnson">Johnson&amp;Johnson</option>
                <option value="AstraZeneca">AstraZeneca</option>
                <option value="Other">Other</option>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
            </div>
          </div>
    
          <div class="u-form-date u-form-group u-label-top u-form-group-2">
            <label for="date-b312" class="u-label">Last Dose Date</label>            
            <input type="date" placeholder="DD/MM/YYYY" id="date-b312" name="lastDoseDate" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-2">
          </div>

        </div>
        
        <div style="width: 45%; float: right;" class="u-align-right u-expanded-width-xs u-form u-form-2">
          <div class="u-form-group u-form-name u-label-top u-form-group-3">
            <label for="name-5393" class="u-label">Number of doses</label>
            <input type="text" id="name-5393" name="numOfDoses" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-3" maxlength="30">
          </div>
          <div class="u-form-date u-form-group u-label-top u-form-group-4">
            <label for="date-a9f6" class="u-label">Expiration Date</label>
            <input type="date" placeholder="DD/MM/YYYY" id="date-a9f6" name="expirationDate" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-4">
          </div>
        </div>
      </div>
      </section>

    <input type="submit" value="save" name="save" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">
    </div>
    </form>


</form>
<footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-valign-bottom u-footer" id="sec-c2ec"><p class="u-align-center u-small-text u-text u-text-variant u-text-1">Deltasoft Ltd</p></footer> 
</body></html>