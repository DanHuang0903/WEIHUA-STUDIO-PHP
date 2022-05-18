<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = " -- gallery" ;?>
<?php include(PRIVATE_FOLDER . '/shared/header.php'); ?>

<main>
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
			<div class="gallery-tile nature awarded favorist" id="tile1"></div>
			<div class="gallery-tile culture" id="tile2"></div>
			<div class="gallery-tile nature" id="tile3"></div>
			<div class="gallery-tile nature" id="tile4"></div>
			<div class="gallery-tile portrait awarded favorist" id="tile5"></div>
			<div class="gallery-tile culture-img favorist" id="tile6"></div>
			<div class="gallery-tile recent" id="tile7"></div>
			<div class="gallery-tile recent" id="tile8"></div>
			<div class="gallery-tile awarded" id="tile9"></div>
			<div class="gallery-tile recent" id="tile10"></div>
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
