<?php
$back = $id - 1;
$forward = $id + 1;
if ($id != 1) : ?>
    <a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $back ?>" role="button"></a>
<?php endif; ?>
<?php if ($id != $count) : ?>
    <a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $forward ?>" role="button">></a>
<?php endif; ?>