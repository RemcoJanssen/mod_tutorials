<?php
defined('_JEXEC') or die;
?>
<div class="tutorials<?php echo $moduleclass_sfx ?>">
<div class="row-striped">
<?php foreach ($list as $item) : ?>
<div class="row-fluid">
<div class="span9">
<strong class="row-title">
<?php echo $item->title; ?> (<?php echo $item->url;
?>)
</strong>
</div>
<div class="span3">
<?php echo $item->id; ?>
</div>
</div>
<?php endforeach; ?>
</div>
</div>