<div class="surveys view">
<h2><?php echo __('Survey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($survey['User']['name'], array('controller' => 'users', 'action' => 'view', $survey['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($survey['Survey']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Survey'), array('action' => 'edit', $survey['Survey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Survey'), array('action' => 'delete', $survey['Survey']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $survey['Survey']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Surveys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Survey Questions'), array('controller' => 'survey_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Survey Question'), array('controller' => 'survey_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Survey Questions'); ?></h3>
	<?php if (!empty($survey['SurveyQuestion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Question Type Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Survey Id'); ?></th>
		<th><?php echo __('Required'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($survey['SurveyQuestion'] as $surveyQuestion): ?>
		<tr>
			<td><?php echo $surveyQuestion['id']; ?></td>
			<td><?php echo $surveyQuestion['title']; ?></td>
			<td><?php echo $surveyQuestion['question_type_id']; ?></td>
			<td><?php echo $surveyQuestion['order']; ?></td>
			<td><?php echo $surveyQuestion['survey_id']; ?></td>
			<td><?php echo $surveyQuestion['required']; ?></td>
			<td><?php echo $surveyQuestion['created']; ?></td>
			<td><?php echo $surveyQuestion['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'survey_questions', 'action' => 'view', $surveyQuestion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'survey_questions', 'action' => 'edit', $surveyQuestion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'survey_questions', 'action' => 'delete', $surveyQuestion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $surveyQuestion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Survey Question'), array('controller' => 'survey_questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
