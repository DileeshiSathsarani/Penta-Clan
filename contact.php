<!DOCTYPE html>
<html>
<head>
	<title>Contact Us </title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact_style.css">
	
</head>
	
<body>
	<div class="head">
        <div class="nav">
            <div class="nav-logo">
                <img src="./images/logo.png">
            </div>
            <ul>
                <li><a href="index.html">HOME</a></li>
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
    <div class="modal_container" id="modal">
        <div class="modal">
            <a href="#" class="close">X</a>
            <span class="modal_heading">
                ENTER YOUR DETAILS
            </span>
            <form action="#">
                <input type="text" placeholder="Email" ><br>
                <input type="text" placeholder="Username"><br>
                <input type="password" placeholder="Password"><br>
                <input type="submit" class="btnRegister" value="REGISTER">
            </form>
            <a href="#" class="signin">
                Have an account already?
            </a>
            <a href="#" class="forgotPassword">
                Forgot Password?
            </a>
        </div>
    </div>
	<div class="page-wrapper1">
		<div class="contact-box">
			<div class="left">				
			</div>
			<div class="right">
                <form action="b.php" method="post">
				<h2 style="text-align: center; color: rgb(20, 109, 121); font-family: Lucida Calligraphy;">CONTACT US</h2>                
                <input type="text" class="field" name="name"  placeholder="Your Name" required>
				<input type="text" class="field" name="email" placeholder="Your Email" required>
				<input type="text" class="field" name="pn" placeholder="Your Phone" required>
                <textarea class="field area" name="msg" style="width: 410px; font-family: Quicksand;" placeholder="Message" required></textarea>
                <button class="btn" name="btn">Send</button>
                <div id="statusMessage"> 
                    <?php
                    $Msg = "";
                    if(isset($_GET['error']))
                    {
                        $Msg = "Please fill the form";
                        echo '<div class="alert alert-danger" style = "padding: 15px;
                        padding-bottom: 20px;
                        border: 1px solid transparent;
                        border-radius: 4px;background-color: #f2dede;
                        border-color: #ebccd1;
                        color: #a94442;">';
                        echo $Msg;
                        echo '</div>';
                    }
                    if(isset($_GET['success']))
                    {
                        $Msg = "Email sent successfully";
                        echo '<div class="alert alert-success" style = "padding: 15px;
                        margin-bottom: 20px;
                        border: 1px solid transparent;
                        border-radius: 4px;background-color: #dff0d8;
                        border-color: #d6e9c6;
                        color: #3c763d;">'.$Msg.'</div>';
                    }
                ?>
                </div>
                </form>
			</div>
		</div>
	</div>


	<br><br>
	<div class="map">
		<h1 style="text-align: center; color: rgb(20, 109, 121); font-family: Lucida Calligraphy;">KANDY JUNGLE VIEW LOCATION MAP</h1>
	</div><br>
    <div class="gmap_canvas">
	<iframe width="100%" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=16%2F16%2C%20Uplands%20Rd%2C%20Kandy%2020000%2C%20Sri%20Lanka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>	
	</div>
	<br>
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
</html>