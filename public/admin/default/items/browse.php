<form id="search">
	<input type="text" name="search" />
	<input type="submit" name="submit" value="Search" />
</form>

<?php echo $pagination; ?>
<?php foreach( $items as $key => $item ): ?>
	<?php  echo ($key+1+$offset);?>) <?php echo $item->title; ?><br/>
<?php endforeach; ?>