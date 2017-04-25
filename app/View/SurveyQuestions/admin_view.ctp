<div class="surveyQuestions view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Survey Question'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Survey Question'), array('action' => 'edit', $surveyQuestion['SurveyQuestion']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Survey Question'), array('action' => 'delete', $surveyQuestion['SurveyQuestion']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $surveyQuestion['SurveyQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Survey Questions'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Survey Question'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Question Types'), array('controller' => 'question_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Question Type'), array('controller' => 'question_types', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Surveys'), array('controller' => 'surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Survey'), array('controller' => 'surveys', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Question Options'), array('controller' => 'question_options', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Question Option'), array('controller' => 'question_options', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Question Type'); ?></th>
		<td>
			<?php echo $this->Html->link($surveyQuestion['QuestionType']['name'], array('controller' => 'question_types', 'action' => 'view', $surveyQuestion['QuestionType']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Order'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['order']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Survey'); ?></th>
		<td>
			<?php echo $this->Html->link($surveyQuestion['Survey']['name'], array('controller' => 'surveys', 'action' => 'view', $surveyQuestion['Survey']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Required'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['required']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($surveyQuestion['SurveyQuestion']['updated']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Question Options'); ?></h3>
	<?php if (!empty($surveyQuestion['QuestionOption'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Survey Question Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($surveyQuestion['QuestionOption'] as $questionOption): ?>
		<tr>
			<td><?php echo $questionOption['id']; ?></td>
			<td><?php echo $questionOption['survey_question_id']; ?></td>
			<td><?php echo $questionOption['value']; ?></td>
			<td><?php echo $questionOption['order']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'question_options', 'action' => 'view', $questionOption['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'question_options', 'action' => 'edit', $questionOption['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'question_options', 'action' => 'delete', $questionOption['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $questionOption['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Question Option'), array('controller' => 'question_options', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
