<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-small" id="myNavbar">
    <a href="WelcomePage.php"class="w3-bar-item w3-button w3-wide w3-large w3-margin-left w3-margin-right w3-margin-bottom w3-margin-top"> ExpertiseCircle </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small w3-hide-medium">
      <a href="#services" class="w3-bar-item js-scroll-trigger w3-button w3-white w3-medium w3-wide w3-margin-left w3-margin-right w3-margin-bottom w3-margin-top"> About </a>
      <a href="#about" class="w3-bar-item js-scroll-trigger w3-button w3-white w3-medium w3-wide w3-margin-left w3-margin-right w3-margin-bottom w3-margin-top"> Sectors </a>
      <a href="#contact" class="w3-bar-item js-scroll-trigger w3-button w3-white w3-medium w3-wide w3-margin-top w3-margin-bottom w3-margin-left w3-margin-right w3-margin-bottom w3-margin-top"> Contact </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-light w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-margin-top w3-margin-bottom w3-margin-left w3-margin-right"><b> Menu </b></a>
  <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-margin-top w3-margin-bottom w3-margin-left w3-margin-right"><b> About </b></a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-margin-top w3-margin-bottom w3-margin-left w3-margin-right"><b> Sectors </b></a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-margin-top w3-margin-bottom w3-margin-left w3-margin-right"><b> Contact </b></a>
</nav>
