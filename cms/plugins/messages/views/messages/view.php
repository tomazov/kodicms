<div class="map widget">
	<div class="widget-header">
		<h3><?php echo $message->title; ?></h3>
	</div>
	
	<?php if($message->from_user_id != AuthUser::getId()): ?>
	<div class="widget-title widget-no-border-radius">
		<?php echo Form::open(); ?>
		<?php echo Form::hidden('parent_id', $message->id); ?>
		<div class="row-fluid">
			<?php echo Form::textarea('content', NULL, array('class' => 'span12')); ?>
		</div>
		<?php echo UI::button(__('Send message')); ?>
		<?php echo Form::close(); ?>
	</div>
	<?php endif; ?>
	
	<?php foreach ($messages as $msg): ?>
	<?php $msg->mark_read(AuthUser::getId()); ?>
	<?php echo $tpl->set('message', $msg); ?>
	<?php endforeach; ?>

	<?php echo $tpl->set('message', $message); ?>
</div>