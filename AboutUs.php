<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AboutUsStyle.css">

</head>
<body>
    <?php 
    include 'header.php'; require('sendMessage.php');?>
    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container">
            <p class="text-blk heading">
            About Us
            </p>
            <p class="text-blk subHeading">
                Auto Sara celebrates two decades of successful operation, it stands as a testament to the fact that honesty is not just a virtue but a business strategy that pays off in the long run. The dealership's journey showcases the enduring power of trust and transparency in an industry often marred by skepticism. Auto Sara has not just sold cars; it has sold a promise of reliability, and in doing so, it has built a legacy that extends far beyond the showroom floor.
            </p>
                <div class="social-icons-container">
                <a class="social-icon" href="https://www.facebook.com/autosallonsara/">
                    <img class="socialIcon image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/bb33.png">
                </a>
                <a class="social-icon">
                    <img class="socialIcon image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/bb34.png">
                </a>
                <a class="social-icon" href="https://www.instagram.com/autosallonisara/?hl=en">
                    <img class="socialIcon image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/bb35.png">
                </a>
                <a class="social-icon">
                    <img class="socialIcon image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/bb36.png">
                </a>
                </div>
        </div>
    </div>
    <div class="container">
	    <div class="row input-container">
            <h2 style="color: white; text-align:center;">Na Kontakto</h2>
                <form action="" method="post">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="emri" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="email" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="numri" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required name="teksti"></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
		        <button class="button-3" type="submit" name="upload">Dergo Mesazh</button>
			</div>
    </form>

	</div>
</div>


</body>
</html>