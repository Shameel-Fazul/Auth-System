<?php  if (count($statuserrors) > 0) : ?>
  <div class="error">
  	<?php foreach ($statuserrors as $statuserror) : ?>
  	  <p><?php echo $statuserror ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>