<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us </title>
    
    <link rel="stylesheet" href="css/datetime.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/booking_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	
<body>
	<div class="head">
        <div class="nav">
            <div class="nav-logo">
                <img src="./images/logo.png">
            </div>
            <ul>
                <li class="current "><a href="index.html">HOME</a></li>
                <li><a href="menu.html">MENU</a></li>        
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="booking.html"> BOOKING</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <div class="btn-class">
                    <button class="register">
                        <a href="#modal" class="registerLink" style="font-size: 13px; padding-top: 9px; color: white;">Register</a>
                    </button>
                </div>
                     
            </ul>
        </div>
    </div>
    <div class="hotel_content">
        <div class="booking_info">

          <div class="booking_details">
  
            <div class="item">
              <div class="date" style="margin-right: 10px;">Check in<input type="date" style="height: 30px; margin-top: 5px;"></div>
              
            </div>
  
            <div class="item">
                <div class="date">Check out<input type="date" style="height: 30px; margin-top: 5px;"></div>
                
              </div>
              
              <div class="item">
                <div class="date">Adults<input type="number" value="0" style="height: 30px; margin-top: 5px;"></div>
              </div>
              <div class="item">
                <div class="date">Kids<input type="number" value="0" style="height: 30px; margin-top: 5px;"></div>
              </div>
  
            <div class="item">
              <div class="cta active">Check Availability</div>
            </div>
  
          </div>
  
        </div>
    </div>
	<div class="page-wrapper2">		
        <form action="" method="post">
        <div class="form">
			<div class="left">
			</div>
			    <div class="right">
				<h2 style="text-align: center; color: rgb(20, 109, 121); font-family: Lucida Calligraphy;">SAY HELLO</h2>
				<label for="fname">Name</label>	
				<input type="text" class="field" id="fname" name="fname" placeholder="Your Name..." required>
                
				<label for="email">E-mail</label>	
				<input type="email" class="field" id="email" name="email" placeholder="Your Email..." required>
				
				<label for="phone">Phone Number</label>	
				<input type="text" class="field" id="phone" name="phone" placeholder="Your Phone Number..." required>
                
			    <label for="phone">Check in</label>	
				<input type="date" class="field" name="checkin">

                <label for="phone">Check out</label>	
				<input type="date" class="field" name="checkout">
                	
                <label for="phone">
                    Single rooms:<input type="number" name="single" max="10" value="0" style="height: 30px; width: 60px; margin-top: 5px; margin-left: 20px; margin-right: 10px;">
                </label>	
                <label for="phone">
                    Double rooms:<input type="number" name="double" max="10" value="0" style="height: 30px; width: 60px; margin-top: 5px; margin-left: 20px; margin-right: 50px;">
                </label>
                <label for="phone"><br>
                    Suite:
                    <input type="number" value="0" name="suite" max="10" style="height: 30px; width: 60px; margin-top: 5px; margin-left: 68px; margin-right: 12px;" >
                </label>
                <label for="phone">
                    Apartment:<input type="number" name="apr" max="10" value="0" style="height: 30px; width: 60px; margin-top: 5px; margin-left:43px; margin-right: 50px;">
                </label>
				<br><br>
				<div class="btn-classs">
					<button class="btn" name="insert">Book Now</button>
				</div>
			</div>
		</div>
        </form>
	</div>
	<br><br>
	<!--Footer area start-->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <table style="width: 100%;">
                    <col style="width:50%">
                    <col style="width:25%">
                    <col style="width:25%">
                    <tr>
                        <td>
                            <div class="footer-section-about">
                                <h2>KANDY JUNGLE VIEW</h2>
                                <p>Kandy Jungle View is a holiday apartment nestted adjoining Udawattakele Forest Resere with bearthing view of the surrounding mountaines located amidts the city of kandy  provides an ideal place of relaxation for those who yearn for a getaway from the hustle and bustle of the city and seek privacy and makes yon feel at home here.
                                    Centrally located Kandy Jungle Viewis a Restaurant with specialty in multi delicious Cuisine created with the ingenuity and passion inspired by the fantastic flavors. Our variety menu includes Chinese, Indian, continental and western foods. 
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="footer-section-links">
                                <h2><br>QUICK LINKS</h2>
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="menu.html">Menu</a></li>        
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="contact.html">Contact US</a></li>
                                    <li><a href="about.html">About</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="footer-section-contact">
                                <h2>CONTACT US</h2>
                                <div class="icon">
                                    <i class="fa fa-phone" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp; +9477-6416756</i><br><br>
                                    <i class="fa fa-envelope-o" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp; jungleview16@gmail.com</i><br><br>
                                    <i class="fa fa-facebook" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp;</i>
                                    <i class="fa fa-instagram" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp;</i>
                                    <i class="fa fa-twitter" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp;</i>
                                    <i class="fa fa-youtube-play" style="color:  rgba(255, 255, 255, 0.767);" aria-hidden="true">&emsp;</i><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>    
            </div>
            <div class="footer-bottom">
                &copy; Penta Clan | All right reserved
            </div>
        </div>
        <!--End footer area-->
</footer>
</body>
<?php
        
        if(isset($_POST["insert"]))
        {
            $link = mysqli_connect("localhost","root","") or die(mysqli_error($link));
            mysqli_select_db($link,"kjv") or die(mysqli_error($link)); 
            mysqli_query($link,"insert into booking values('$_POST[fname]','$_POST[email]','$_POST[phone]','$_POST[checkin]','$_POST[checkout]','$_POST[single]','$_POST[double]','$_POST[suite]','$_POST[apr]')");
        }
    ?>
</html>