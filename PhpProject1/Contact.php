<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>GLS</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './theme/menu.php';
include './theme/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="it-campus.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">CONTACT US </a></h2>

				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <form method="post">
                                        Full Name:<input type="text" name="txt1" placeholder="First name   Last name" required/>
                                        <br></br>
                                        Mobile Number:<input type="text" name="txt2" placeholder="Enter Number" required/>
                                        <br></br>
                                        Email:<input type="email" name="mail" placeholder="Email address"required/>
                                        <br></br>
                                        Course interested:
                                        <select name="menu">
                                            <option value="pgdca">PGDCA</option>
                                            <option value="glsict">GLSICT</option>
                                            <option value="msci">Integrated M.sc(IT)</option>
                                            <option value="msc">M.sc(IT)</option>
                                            <option value="mba">BBA+MBA(Integrated)</option>                                         
                                            <option value="bca">BCA</option>s                                            
                                        </select>
                                        <br></br>
                                        <input type="submit" />
                                    </form>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">LOCATION</a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <br></br>
                                    <br></br>
                                    <img src="contact_google.jpg" alt="contact_google"/>
					
					<p class="links"><a href="https://www.glsuniversity.ac.in/">Read More</a></p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './theme/slider.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
                include './theme/footer.php';
?>
<!-- end #footer -->
</body>
</html>


