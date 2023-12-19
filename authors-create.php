<?php
/*
Template Name: authors create
*/

get_header();
?>

<main id="primary" class="site-main">
	<h1>Autoriaus sukūrimo langas</h1>

	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<form role="form" method="post">
				<div class="form-group">
					<input id="name" name="name" type="text" placeholder="Author name" class="form-control input-sm" required="">
				</div>
				<div class="form-group">
					<input id="surname" name="surname" type="text" placeholder="Author surname" class="form-control input-sm" >
				</div>
				<!-- </div> -->
				<div class="row justify-content-center">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<input type="submit" value="Submit" class="btn btn-primary" name="createAuthor">
					</div>
				</div>
			</form>
		</div>
		<div class="col-3"></div>
	</div>
</main><!-- #main -->

<?php
// include_once "./customFooter.php";
require get_template_directory() . '/customFooter.php';
// get_sidebar();
// get_footer();
