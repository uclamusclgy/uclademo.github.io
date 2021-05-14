<?php include("./header.php") ?>

<script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
		frmvalidator.addValidation("name","req","Please provide your name");
		frmvalidator.addValidation("email","req","Please provide your email");
		frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>
	

<div class="flex-container">
	<div class="container">
		<form method="post" name="contact_form"
			action="contact-form-handler.php">
				Your Name:
			<input type="text" name="name">
				Email Address:
			<input type="text" name="email">
				Message:
			<textarea name="message" style="height:15vw"></textarea>
    		<input type="submit" value="Submit">
		</form>	
	</div>
</div>
	
<div class="container"></div>
<div class="footer">
	<h6>MUSE | © 2021 by UCLA Musicology Department. Individual articles are the copyright of their authors. | uclamusejournal@gmail.com</h6>
  <div class="footer-right">
	  <h6><a href="https://www.instagram.com/uclamusicstudies/"><img class="social" src="iglyph.png"></a></h6>
	  <h6><a href="https://www.facebook.com/uclamusicstudies/"><img class="social" src="fglyph.png"></a></h6>
	  <h6><a href="https://open.spotify.com/user/onh9otqhp57vzp7391raxhdpk?si=263c5a46cce74f95"><img class="social" src="sglyph.png"></a></h6>
  </div>
</div>
	
</body>
</html>
