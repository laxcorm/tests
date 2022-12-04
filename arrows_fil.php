

<a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'].'?id='.--$id ?>" role="button"><</a>
<?php if ($id != 1) : ?>
<a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'].'?id='.++$id ?>" role="button">></a>
<?php endif ?>