<?php
/*
Template Name: authors index
*/
get_header();

$authors = $wpdb->get_results("select * from authors");
$page = get_page_by_path("autoriaus-redagavimas");
?>

<main id="primary" class="site-main">
	<h1>Autoriaus sukūrimo langas</h1>

	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th>Autoriaus vardas</th>
						<th>Autoriaus pavardė</th>
						<th>redaguoti</th>
						<th>šalinti</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($authors as $author) { ?>
						<tr>
							<td> <?= $author->id ?> </td>
							<td> <?= $author->name ?> </td>
							<td> <?= $author->surname ?> </td>
							<td>
								<a class="btn btn-success" href="<?= get_permalink($page) . "?author_id=" . $author->id ?>">redaguoti</a>
							</td>
							<td>
								<form action="" method="post">
									<input type="hidden" name="author_id" value="<?= $author->id ?>">
									<button class="btn btn-danger" name="deleteAuthor" type="submit">šalinti</button>
								</form>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
		<div class="col-3"></div>
	</div>
</main><!-- #main -->

<?php
// include_once "./customFooter.php";
require get_template_directory() . '/customFooter.php';
// get_sidebar();
// get_footer();
