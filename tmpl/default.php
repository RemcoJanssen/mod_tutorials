<?php
defined('_JEXEC') or die;

?>
<div class="tutorials<?php echo $moduleclass_sfx ?>">
	<div class="row-striped">
		<?php foreach ($list as $item) : ?>
			<div class="row-fluid">
				<div class="span6">
					<strong class="row-title">
						<a href="<?php echo $item->url; ?>" target="_blank"><?php echo $item->title; ?></a>
					</strong>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>