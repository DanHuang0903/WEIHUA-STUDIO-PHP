<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = " -- gallery" ;?>
<?php include(PRIVATE_FOLDER . '/shared/header.php'); ?>

<main>
	<div class="gallery-wrapper">
		<div class="gallery-head">
				<div class="gallery-head-content">
					<h1>Gallery</h1>
				</div>
		</div>
		<div class="gallery-show">
			<div class="gallery-tile" id="tile1"></div>
			<div class="gallery-tile" id="tile2"></div>
			<div class="gallery-tile" id="tile3"></div>
			<div class="gallery-tile" id="tile4"></div>
			<div class="gallery-tile" id="tile5"></div>
			<div class="gallery-tile" id="tile6"></div>
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

