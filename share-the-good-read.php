<?php include("include/header.php"); ?>

<div class="content"> 
	<div class="container">
		<div class="thumb-box1">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="wow fadeIn">Share Your Favourite Read</h2>
					<p>In this age of information superhighway and cyberspace if you are on this web page it means that you are inclined towards reading books. It can be a wonderful experience for all of us if we can share all those good reads which you have enjoyed reading. Please share your favourite read and we will put it up on this web page for others to enjoy your good read. Kindly share your views on our recommendations.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="share-the-good-read-writer">Ayn Rand</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img1.jpg" alt="" />
						<h5>Fountain Head</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img2.jpg" alt="" />
						<h5>Atlas Shrugged</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img3.jpg" alt="" />
						<h5>We The Living</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="share-the-good-read-writer">Jane Austin</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img5.jpg" alt="" />
						<h5>Sense and Sensibility</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img6.jpg" alt="" />
						<h5>Pride and Prejudice</h5>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img7.jpg" alt="" />
						<h5>Emma</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="share-the-good-read-writer">Mitch Albom</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img4.jpg" alt="" />
						<h5>Tuesdays with Morrie</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="share-the-good-read-writer">Robert James Waller</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div style="text-align: center;">
						<img src="img/good-read-img8.jpg" alt="" />
						<h5>Bridges of Madison County</h5>
					</div>
				</div>
			</div>
			<p>&nbsp;</p>
			<form id="contact-form" action="include/contact-mail.php" method="POST">
						<div class="contact-form-loader"></div>
						<fieldset>
							<label class="name form-div-1">
								<input type="text" name="name" placeholder="Name*:" value="" required="">
							</label>
							<label class="email form-div-2">
								<input type="text" name="email" placeholder="E-mail*:" value="" required="">
							</label>
							<label class="message form-div-4">
								<textarea name="message" placeholder="Share Your Good Read*:" required=""></textarea>
							</label>
							<div>
								<button type="submit" id="submit" name="submit2" class="btn-default btn4">Share Now !</button>
								<!--<a href="#" data-type="submit" class="btn-default btn4">submit</a>-->
								<p>*required fields</p>
							</div>
						</fieldset> 
					</form>

<?php include("include/footer.php"); ?>