<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = " -- gallery" ;?>
<?php include(PRIVATE_FOLDER . '/shared/header.php'); ?>

<main id="gallery-main">
	<div class="gallery-wrapper">
		<div class="gallery-head">
				<div class="gallery-head-content">
					<h1>GALLERY</h1>
					<p><?php 
						if($_GET['group'] != 'all'){
							echo strtoupper(h($_GET['group'])); 
						}
					?></p>

					<div class="filters">
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('all') ; ?>">All</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('awarded') ; ?>">Awarded</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('favorist') ; ?>">Favorist</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('recent') ; ?>">Recent</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('portrait') ; ?>">Portrait</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('nature') ; ?>">nature</a>
							<a type="button" class="filter-btn" href="<?php echo url_for('/gallery/index.php?group=') . u('culture') ; ?>">Culture</a>

				</div>
			</div>
				
		</div>
		<div class="gallery-show">
			<div class="gallery-tile nature awarded favorist"><img src="../img/20.jpg"></div>
			<div class="gallery-tile culture"><img src="../img/25.jpg"></div>
			<div class="gallery-tile nature"><img src="../img/1306.jpg"></div>
			<div class="gallery-tile nature"><img src="../img/f22.jpg"></div>
			<div class="gallery-tile culture-img favorist"><img src="../img/r9.jpg"></div>
			<div class="gallery-tile portrait awarded favorist"><img src="../img/8.jpg"></div>
			<div class="gallery-tile recent"><img src="../img/7225.jpg"></div>
			<div class="gallery-tile recent"><img src="../img/7222.jpg"></div>
			<div class="gallery-tile awarded"><img src="../img/7223.jpg"></div>
			<div class="gallery-tile recent"><img src="../img/7224.jpg"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
			<div class="gallery-tile"></div>
		</div>


		<!-- Image Modal -->
		<div id="myModal" class="modal">
		<!-- The Close Button -->
		  <span id="close">&times;</span>
		  <!-- Modal Content (The Image) -->
		  <img class="modal-content" id="img01">

		  

		  <!-- Modal Caption (Image Text) -->
		  <div id="caption"></div>
		</div>
	</div>
	
</main>


<?php include(PRIVATE_FOLDER . '/shared/footer.php'); ?>

<script>
	var tags = [];
	var tag = '<?php echo $_GET['group']?>';
	if(tag != 'all'){
		tags.push(tag);
		filter(tags);
	}

	
</script>
