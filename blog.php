<?php 
require 'core/init.php';
$general->logged_out_protect();
$posts 		=$blog->get_posts();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Members</title>
</head>
<body>	
	<div id="container">
		<?php include 'includes/menu.php';?>

		<?php 

		foreach ($posts as $post) {
			$content = htmlentities($post['post_content']);
			?>

			<p><?php echo $content?></a> <br />created: <?php echo date('F j, Y', $post['post_date']) ?></p>
			<?php
		}

		?>

	</div>
</body>
</html>
