<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="Vendors\css\normalize.css">
    <link rel="stylesheet" type="text/css" href="Resources\css\style.css">
    <title>The Mill Wholefoods & Cafe | Contact Us</title>
    <meta charset="utf-8">
  </head>

  <body>
    <!--<div class="container">-->
      <div class="header-bar">
        <!---NAVIGATION----->
        <div id="Nav" class="overlay">
          <!--Close Btn-->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <!--Overlay Content-->
          <div class="overlay-content">
            <a href="..\The Mill Website\index.html">Home</a>
            <a href="..\The Mill Website\about.html">Our Vision</a>
            <a href="..\The Mill Website\wholefoods.html">Wholefoods Store</a>
            <a href="..\The Mill Website\cafe.html">Cafe Menu</a>
            <a href="..\The Mill Website\blog.html">Healthy Blog</a>
            <a class="current" href="..\The Mill Website\contact.html">Contact Us</a>
          </div>
        </div>
        <!--Open Nav Element-->
        <span class="opennav" onclick="openNav()">&#9776;</span>
        <!---/NAVIGATION----->
        <div class="header-title">
          <!-- <h1>Our Vision</h1> -->
          <div class="logoholder">
            <img class="logosml" height="45px" src="Resources\img\The Mill Sml min Logo TrpBg.png" alt="The Mill Wholefoods & Cafe Logo"></img>
          </div>
        </div>
      </div>
      <div class="landingcontact">
        <br>
        <h1 id="h1d">Contact Us</h1>
        <h4 id="h4c">General & Commercial</h4>
      </div>
      <div class="landingbrk">
        <a class="content_btn" href="#content"><img class="down_arrow" src="Resources\img\arrow-down-sign-to-navigate.svg" alt="View Content"></a>
      </div>
      <a id="content">
      <!-- About Us psection -->
        <div class="psection">
          <div class="p_intro">
            <p id="pb">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus vel metus luctus consequat quis a libero. Morbi maximus volutpat arcu, vel vulputate leo vehicula eget. Nunc nibh leo, vulputate at enim hendrerit, cursus venenatis arcu. Cras fermentum id leo ornare facilisis. Vestibulum gravida aliquam tempus. Praesent rhoncus, urna ac efficitur sagittis, tortor elit vulputate tortor, in varius neque metus sed magna. Nam auctor euismod risus, nec aliquam neque semper eu. Ut imperdiet ipsum eu est pellentesque, vitae placerat metus tempus. Ut cursus, purus in lobortis ultrices, dui libero finibus ante, vitae pretium orci dolor ac erat.Morbi maximus volutpat arcu, vel vulputate leo vehicula eget.
            </p>
          </div>
        </div>
      </a>
      <div id="psec_openhrs" class="psection">
        <hr>
        <br>
        <h5 id="h5d">Business Hours</h5>
        <div class="p_day">
          <ul class="ul_days">
            <li class="li_days">Monday</li>
            <li class="li_days">Tuesday</li>
            <li class="li_days">Wednesday</li>
            <li class="li_days">Thursday</li>
            <li class="li_days">Friday</li>
            <li class="li_days">Saturday</li>
            <li class="li_days">Sunday</li>
          </ul>
        </div>
        <div class="p_hours">
          <ul class="ul_hrs">
            <li class="li_hrs">8:00am - 5:30pm</li>
            <li class="li_hrs">8:00am - 5:30pm</li>
            <li class="li_hrs">8:00am - 5:30pm</li>
            <li class="li_hrs">8:00am - 6:30pm</li>
            <li class="li_hrs">8:00am - 5:30pm</li>
            <li class="li_hrs">8:30am - 2:30pm</li>
            <li class="li_hrs">9:00am - 1:30pm</li>
          </ul>
        </div>
      </div>
      <br>
      <br>
      <div class="psection" id="psec_enquiries">
        <h5 id="h5e">Get In Touch</h5>
        <form action="C:\xampp\htdocs\millphp\contactform.php" method="post">
          <input type="text" name="name" placeholder="Full Name" required><br>
          <input type="text" name="email" placeholder="E-mail Address" required><br>
          <label class="cont_radio">General
            <input type="radio" name="Inquirey Nature" value="General" checked="checked" onclick="showBusiness()">
            <span class="radiobtn"></span>
          </label>
          <label class="cont_radio">Commercial
            <input type="radio" name="Inquirey Nature" value="Commercial" id="Commercial" onclick="showBusiness()">
            <span class="radiobtn"></span>
          </label>
          <input type="text" name="business" placeholder="Business Name" id="businessname"><br>
          <select name="country" id="country" required onchange="showState()">
            <option value="" disabled selected="selected" hidden>Country</option>
            <option value="australia" id="australia">Australia</option>
            <option value="england">England</option>
            <option value="france">France</option>
            <option value="germany">Germany</option>
            <option value="new zealand">New Zealand</option>
            <option value="united states">United States</option>
          </select><br>
          <select name="state" id="state">
            <option value="" disabled selected hidden>State</option>
            <option value="ACT">Australian Capital Territory</option>
            <option value="NSW">New South Wales</option>
            <option value="QLD">Queensland</option>
            <option value="VIC">Victoria</option>
            <option value="TAS">Tasmania</option>
            <option value="SA">South Australia</option>
            <option value="NT">Northern Territory</option>
            <option value="WA">Western Australia</option>
          </select><br>
          <textarea name="message" required placeholder="Message"></textarea>
          <button type="submit" value="submit" name="submit">
            Submit
          </button>
        </form>
      </div>
      <div class="footer">
        <!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
      </div>
    <!--</div>-->
    <script type="text/javascript" src="Vendors\js\jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="Resources\js\Mill.js"></script>
  </body>
</html>
