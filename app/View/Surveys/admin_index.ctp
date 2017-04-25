<div class="surveys index">
	<h2><?php echo __('Surveys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('creater_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($surveys as $survey): ?>
	<tr>
		<td><?php echo h($survey['Survey']['id']); ?>&nbsp;</td>
		<td><?php echo h($survey['Survey']['name']); ?>&nbsp;</td>
		<td><?php echo h($survey['Survey']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($survey['User']['name'], array('controller' => 'users', 'action' => 'view', $survey['User']['id'])); ?>
		</td>
		<td><?php echo h($survey['Survey']['created']); ?>&nbsp;</td>
		<td><?php echo h($survey['Survey']['updated']); ?>&nbsp;</td>
		<td class="actions">
                    <td class="actions">
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', array('controller' => 'survey_questions','action' => 'add', $survey['Survey']['id']), array('escape' => false)); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $survey['Survey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $survey['Survey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $survey['Survey']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $survey['Survey']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Survey'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Survey Questions'), array('controller' => 'survey_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Question'), array('controller' => 'survey_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
