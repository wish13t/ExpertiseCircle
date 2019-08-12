 <?php
 require_once("expertisecircle.php");
 $title="ExpertiseCircle";
 $heading="search";

 ?>
 <!DOCTYPE html>
 <html>
 <title> ExpertiseCircle </title>
 <meta charset="UTF-8" name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="style.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://use.typekit.net/xgo1xri.css">
 <script type="text/javascript" src="script.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>

 <body>
   <?php include 'navigation_search.php';?>
 <div class="w3-display-container w3-padding-lRGE w3-light-white w3-center" style="height:400px; width:1400px;" id="filter">
     <div class="w3-container w3-display-middle" style=" width:900px; margin-top:45px;">
       <div class="w3-col l3 m6 w3-margin-bottom w3-padding-large w3-border" style="height:310px; width:200px;">
           <form id="sector"class="w3-center w3-padding-large w3-border">
          <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="1">FMCG</label></p>
             <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="2">Telecom</label></p>
             <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="3">Chemcial</label></p>
             <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="4">Marketting</label></p>
             <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="5">IT</label></p>
            <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="6">Pharma</label></p>
            <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="7">Research</label></p>
</form>
      </div>
        <div class="w3-col l3 m6 w3-margin-bottom w3-padding-large w3-border" style="height:310px; width:200px;">
            <form id="class" class="w3-center w3-padding-large w3-border">
            <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="1">Academia</label></p>
          <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="2">Industry</label></p>
</form>
       </div>

       <div class="w3-col l3 m6 w3-margin-bottom w3-padding-large w3-border" style="height:310px; width:200px;">
           <form id="availaibility"class="w3-center w3-padding-large w3-border">
          <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="1">On Call</label></p>
           <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="2">In person</label></p>
</form>
       </div>
       <div class="w3-col l3 m6 w3-margin-bottom w3-padding-large w3-border" style="height:310px; width:200px;">
           <form id="location" class="w3-center w3-padding-large w3-border">
          <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"   value="1">Spain</label></p>
        <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"  value="2">India</label></p>
        <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"  value="3">USA</label></p>
        <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"  value="4">Italy</label></p>
        <p><label><input class="w3-check w3-tiny w3-left" type="checkbox"  value="5">Germany</label></p>
</form>
       </div>
     </div>
   </div>

  <div class="w3-container w3-card-4 w3-padding-large">
 <h4><b> Our Experts From all around the globe.</b></h4>
 <form >
  <input type="text" id="myInput" name="search" placeholder="Search..">
  <input type="submit" onclick="search()" id="submit" name="Submit" placeholder="Submit..">
</form>

   <table id="mytable" class="w3-table w3-striped w3-border w3-bordered w3-white">
     <tr>
           <th>SNo</th>
            <th>Name</th>
            <th>Sector</th>
            <th>Class</th>
            <th>Availaibility</th>
            <th>Country</th>
          </tr>
          <?php expertise_circle();
          ?>
        </table>
      </div>
    </div>
</body>
