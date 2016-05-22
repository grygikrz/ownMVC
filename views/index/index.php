<?php
/**
 * ownMVC project
 */

$values = $this->show; ?>

<h1>My Favorite Links</h1>
<ul>
<?php foreach($values  as $key => $value): ?>
	<label>Title:</label>
<li><?php echo $value['title']; ?></li><br />
	<label>Url:</label>
<li><a href="<?php echo $value['url']; ?>" target="_blank"> <?php echo $value['url']; ?></a></li><br />
<hr>
<?php endforeach; ?>
</ul>