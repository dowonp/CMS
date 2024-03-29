<?php 
require 'core/init.php';

//$general->logged_in_protect();
$posts 		=$blog->get_posts();

include("templates/default/head.php"); 
include("templates/default/header.php"); 
 
?> 
<body>
<section id="image">
  <div class="inner">
    <div class="center">
    <h1><strong>Intelligent</strong> Content Management System</h1>
    <p>In Alpha</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="inner">
    <div class="center">
    <h1>Welcome</h1>
    <p><br />ICMS was made to help kickstart websites. Instead of starting from scratch and going on a hide and seek mission for code snippets, I want to just load up ICMS, remove things I don\'t need and get to work styling.</p>
    </div>
  </div>
</section>

<section id="contentAlt">
  <div class="inner">
    <div class="center">
    <h1>Blog</h1>
		<p>
		<?php 
		foreach ($posts as $post) {
			$content = htmlentities($post['post_content']);
			?>

			<p><?php echo $content?></a> <br />created: <?php echo date('F j, Y', $post['post_date']) ?></p>
			<?php
		}
		?>
		</p>
    </div>
  </div>
</section>
</body>
<?php include("templates/default/footer.php"); ?>
