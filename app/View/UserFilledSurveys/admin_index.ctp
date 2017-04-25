<div class="userFilledSurveys index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User Filled Surveys'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New User Filled Survey'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Surveys'), array('controller' => 'surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Survey'), array('controller' => 'surveys', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Survey Questions'), array('controller' => 'survey_questions', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Survey Question'), array('controller' => 'survey_questions', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Question Options'), array('controller' => 'question_options', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Question Option'), array('controller' => 'question_options', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('survey_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('survey_question_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('option_selected_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('option_text'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('completed'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($userFilledSurveys as $userFilledSurvey): ?>
					<tr>
						<td nowrap><?php echo h($userFilledSurvey['UserFilledSurvey']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($userFilledSurvey['User']['name'], array('controller' => 'users', 'action' => 'view', $userFilledSurvey['User']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($userFilledSurvey['Survey']['name'], array('controller' => 'surveys', 'action' => 'view', $userFilledSurvey['Survey']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($userFilledSurvey['SurveyQuestion']['title'], array('controller' => 'survey_questions', 'action' => 'view', $userFilledSurvey['SurveyQuestion']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($userFilledSurvey['QuestionOption']['id'], array('controller' => 'question_options', 'action' => 'view', $userFilledSurvey['QuestionOption']['id'])); ?>
		</td>
						<td nowrap><?php echo h($userFilledSurvey['UserFilledSurvey']['option_text']); ?>&nbsp;</td>
						<td nowrap><?php echo h($userFilledSurvey['UserFilledSurvey']['completed']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $userFilledSurvey['UserFilledSurvey']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $userFilledSurvey['UserFilledSurvey']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $userFilledSurvey['UserFilledSurvey']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $userFilledSurvey['UserFilledSurvey']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->