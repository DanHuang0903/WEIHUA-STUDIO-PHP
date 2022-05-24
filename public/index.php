<?php require_once('../private/initialize.php'); ?>

<?php $page_title = " -- home" ;?>
<?php include( PRIVATE_FOLDER . '/shared/header.php');?>


<main id="home-main">
	<div class="home-head">
		<div class="main-bg">
		</div>
		<div class="home-main-content">
			<h1>Weihua Photographic D-studio</h1>
			<p id="home-main-p">
				Photographic works by Weihua Huang, reveal the beauty of earth, display diverse cultures of human society. 
			</p>

			<button id="intro-btn">WHAT IS D-STUDIO</button>
		</div>
		<div id="d-studio" class="modal">
			<div class="d-studio-content">
				<span id="modal-close">&times;</span>
				<p>D-studio is short for digital studio. </p>
			</div>
		</div>
	
	</div>
	<div class="stories">
		<div class="bg-img"></div>
		<div class="nature-content">
			<h2 id="title-1">
				Moutain, River, Woods, <span class="green-text">Nature </span>
			</h2>
			<h2 id="title-2">
				People, Society, Living, <span class="pink-text">Culture</span>
			</h2>
			<p>
				Life is a journey, photos capture the moments
			</p>
		</div>
		<div class="nature-tile">
			<div id="about-us"><span class="badge">about us</span></div>
			<div id="studio">
				<h2>
					Not 100% Professional<br/> But 200% Dedicated
				</h2>
				<p>
					Every achievement is about enthusiasm. We are not professinal photographers, but all the awards we gained are the best recognitions of our passion on photography. Weihua Sutdio is to share our enthusiasm with the whole world, and to conmunicate with everyone who is interested in photography.
				</p>
			</div>
			<div id="nature-tile-words">
				
				<div id="belief">
					
					<h2>We believe <span class="green-text">nature</span> and human <span class="pink-text">culture</span> are inseparatable</h2>
					<p>I use my camera to capture the breathtaking natural scenery and amazing human cultures. But they are not just two isolated categories. They are the two sides of the paper strip. They have their own colors respectively, but could be never separated. Like our LOGO, we are devoted to present the harmony of nature and human culture in a gorgeous way.</p>
				</div>
				<div id="logo-story">
					<h2>Our LOGO</h2>
					<p>The inspiration of our LOGO is from origami. One day, I was folding a double-color paper strip into a letter W, and suddenly realized that I could see both colors on oneside afterwards, which perfectly matches the studio's belief.</p>
				</div>
				
				
			</div>
			
			
			

		</div>	

		<div id="portfolio">
			<div id="recommend">
				<span class="badge">Recommended works</span>
			</div>
			
			<div id="nature-tile-img">
				<div id="img-1" class="slides-img">
					<img src="img/r9.jpg" class="slides-1">
					<img src="img/f23.jpg" class="slides-1">
					<img src="img/7223.jpg" class="slides-1">
				</div>
				<div id="img-2" class="slides-img">
					<img src="img/7225.jpg" class="slides-2">
					<img src="img/22.jpg" class="slides-2">
					<img src="img/8.jpg" class="slides-2">
					
				</div>
				<div id="img-3" class="slides-img">
					<img src="img/f22.jpg" class="slides-3">
					<img src="img/f20.jpg" class="slides-3">
					<img src="img/r11.jpg" class="slides-3">
				</div>
				<div id="img-4" class="slides-img">
					<img src="img/IMG_6297.jpg" class="slides-4">
					<img src="img/r8.jpg" class="slides-4">
					<img src="img/3381.jpg" class="slides-4">
				</div>
				<div id="img-5" class="slides-img">
					<img src="img/25.jpg" class="slides-5">
					<img src="img/r12.jpg" class="slides-5">
				</div>
				<div id="img-6" class="slides-img">
					<img src="img/f26.jpg" class="slides-6">
					<img src="img/2971.jpg" class="slides-6">
					<img src="img/f24.jpg" class="slides-6">
					<img src="img/7220.jpg" class="slides-6">
				</div>


			</div>
			<div id="nature-tile-btn">
				
				<div id="nature-tile-btn-group">
					<a type="button" href="<?php echo url_for('/gallery/index.php?group=all'); ?>">FULL<br/> GALLERY</a>
				</div>
				<div id="share">
					<span class="badge">shortcut</span>
					<div id="share-content">
						<a type="button" id="awarded" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('awarded') ; ?>">Awarded<br/> Photography</a>
						<a type="button" id="fav" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('favorist') ; ?>">Photographer<br/> Favorist</a>
						<a type="button" id="recent" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('recent') ; ?>">Most<br>Recent</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="mobile-img">
		<div class="m-bg"></div>
		<div id="m-recommend">
			<span class="badge">Recommended works</span>
		</div>
		<div id="m-img-1" class="slides-img">
			<img src="img/r12.jpg" class="m-slides-1">
			<img src="img/25.jpg" class="m-slides-1">
		</div>
		<div id="m-img-2" class="slides-img">
			<img src="img/20.jpg" class="m-slides-2">
			<img src="img/r8.jpg" class="m-slides-2">
			<img src="img/f23.jpg" class="m-slides-2">
		</div>
		<div id="m-img-3" class="slides-img">
			<img src="img/f24.jpg" class="m-slides-3">
			<img src="img/7223.jpg" class="m-slides-3">
			<img src="img/7220.jpg" class="m-slides-3">
			<img src="img/f26.jpg" class="m-slides-3">
			
			
		</div>
		<div id="m-img-4" class="slides-img">
			<img src="img/7222.jpg" class="m-slides-4">
			<img src="img/1306.jpg" class="m-slides-4">
			<img src="img/f25.jpg" class="m-slides-4">
			<img src="img/2971.jpg" class="m-slides-4">

		</div>
		<div id="m-img-5" class="slides-img">
			<img src="img/8.jpg" class="m-slides-5">
			<img src="img/22.jpg" class="m-slides-5">
			<img src="img/7225.jpg" class="m-slides-5">
		</div>
		<div id="m-img-6" class="slides-img">
			<img src="img/IMG_6297.jpg" class="m-slides-6">
			<img src="img/3381.jpg" class="m-slides-6">
			<img src="img/r11.jpg" class="m-slides-6">
		</div>
		<div id="m-btn">
				<a type="button" href="<?php echo url_for('/gallery/index.php?group=all'); ?>">FULL GALLERY</a>
			
		</div>
		<div id="m-share">
					<span class="badge">shortcut</span>
					<div id="m-share-content">
						<a type="button" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('awarded') ; ?>">Awarded<br/> Photography</a>
						<a type="button" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('favorist') ; ?>">Photographer<br/> Favorist</a>
						<a type="button" class="share-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('recent') ; ?>">Most<br>Recent</a>
					</div>
		</div>
	</div>

	<!-- Image Modal -->
		<div id="homeModal" class="modal">
		<!-- The Close Button -->
		  <span id="homeClose">&times;</span>
		  <!-- Modal Content (The Image) -->
		  <img class="modal-content" id="img00">

		  

		  <!-- Modal Caption (Image Text) -->
		  <div id="homeCaption"></div>
		</div>

</main>

<?php include( PRIVATE_FOLDER . '/shared/footer.php');?>