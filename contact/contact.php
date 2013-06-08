<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	<meta charset="utf-8" />
        <meta name="description" content="Wilde Lilly's Boutique offers a great selection of handcrated items and gifts. Decor, Accessories, Clothing, and Kids toys." />
		<title>Wilde Lillys Boutique | Decor | Accessories | Clothing | Kids | Handcrafted</title>
        <link href="../style.css" type="text/css" rel="stylesheet" />
        <link href="../960.css" type="text/css" rel="stylesheet" />
    </head>
    <body class="container_12" id="bodybackground">
    	<div class="content container_12">
            <a href="../index.html"><img src="../images/logo.png" class="grid_5" /></a><div class="clear"></div>
            <div id="nav">
                <span><a href="../index.html"> home</a></span>
                <span><a href="../store/store.html"> store</a></span>
                <span><a href="../gallery/gallery.html"> gallery</a></span>
                <span><a href="../about/about.html"> about</a></span>
                <span id="selected"><a href="contact.php"> contact</a></span>
            </div><br />
            <img src="../images/blanket.jpg" class="grid_12">     
            	<div class="grid_12" id="imagebottom">
            		Quality handcrafted goods &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	</div>  
            <div>	
                <div class="grid_7" id="col2">  
                	<div class="padding">
                    <fieldset>
                    	<legend>Contact US</legend>
                        <form action="contact.php" method="POST" id="formcenter">
                        <div>Name<br /> <input type="text" name="name" id="name"></div><br />
                        <div>Email<br /> <input type="text" name="email" id="email"></div><br />
                        <div>Message<br /><textarea name="message" rows="6" cols="50" id="message"></textarea><br />
                        <input type="submit" value="Send"><input type="reset" value="Clear"></div>
                        </form>
                        
                        <?php $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $formcontent="From: $name \n Message: $message";
                        $recipient = "t_payne@me.com";
                        $subject = "Contact Form";
                        $mailheader = "From: $email \r\n";
                        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                        echo "Thank You!";
                        ?>
                    </fieldset>
                    </div>




                    
                    
                </div>
                <div class="grid_4" id="col3">  
                	<fieldset><legend>Follow Us</legend>
                    <img src="../images/facebook.jpg" alt="Facebook" /><br /><br /><br />
                    <img src="../images/twitter.jpg" alt="Facebook" /><br /><br /><br />
                    <img src="../images/pinterest.jpg" alt="Facebook" /><br /><br />
                    </fieldset>
                    
                </div>

            </div>        
            </div><div class="clear"></div>        
        	<div class="container_12" id="bottom">  
                <div class="grid_2">
                	Latest News:
                </div>
                <div class="grid_10">    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non purus lacinia, adipiscing neque at, eleifend enim. Aenean in mi molestie, porttitor augue vitae, cursus sapien. Pellentesque libero turpis, aliquet at nibh ac, posuere mollis metus. Curabitur sit amet ipsum nunc.
                </div> 
                <div class="grid_12" id="social">  	
                    <a href="http://www.twitter.com" target="blank">twitter</a> - <a href="http://www.facebook.com" target="blank">facebook</a> - <a href="http://www.pintrest.com" target="blank">pintrest</a>             
                </div>   
            </div>    
        
        
        </div>
    </body>
</html>
