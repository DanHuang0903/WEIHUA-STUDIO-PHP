<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = " -- gallery" ;?>
<?php include(PRIVATE_FOLDER . '/shared/header.php'); ?>
<main>
	<div class="home-head">
		<div class="main-bg">
		</div>
		<div class="home-main-content">
			<h1>GALLERY <?php echo isset($_GET['group'])?' -- <br/>' . strtoupper($_GET['group']):""?></h1>
			<h5 class="content-text">
				Coming soon
			</h5>
		</div>
		<div class="place-holder"></div>
	</div>
</main>
<?php include(PRIVATE_FOLDER . '/shared/footer.php'); ?>