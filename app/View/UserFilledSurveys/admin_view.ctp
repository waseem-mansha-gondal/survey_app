<div class="userFilledSurveys view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User Filled Survey'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit User Filled Survey'), array('action' => 'edit', $userFilledSurvey['UserFilledSurvey']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete User Filled Survey'), array('action' => 'delete', $userFilledSurvey['UserFilledSurvey']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $userFilledSurvey['UserFilledSurvey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List User Filled Surveys'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User Filled Survey'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Surveys'), array('controller' => 'surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Survey'), array('controller' => 'surveys', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Survey Questions'), array('controller' => 'survey_questions', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Survey Question'), array('controller' => 'survey_questions', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($userFilledSurvey['UserFilledSurvey']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($userFilledSurvey['User']['name'], array('controller' => 'users', 'action' => 'view', $userFilledSurvey['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Survey'); ?></th>
		<td>
			<?php echo $this->Html->link($userFilledSurvey['Survey']['name'], array('controller' => 'surveys', 'action' => 'view', $userFilledSurvey['Survey']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Survey Question'); ?></th>
		<td>
			<?php echo $this->Html->link($userFilledSurvey['SurveyQuestion']['title'], array('controller' => 'survey_questions', 'action' => 'view', $userFilledSurvey['SurveyQuestion']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Question Option'); ?></th>
		<td>
			<?php echo $this->Html->link($userFilledSurvey['QuestionOption']['id'], array('controller' => 'question_options', 'action' => 'view', $userFilledSurvey['QuestionOption']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Option Text'); ?></th>
		<td>
			<?php echo h($userFilledSurvey['UserFilledSurvey']['option_text']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Completed'); ?></th>
		<td>
			<?php echo h($userFilledSurvey['UserFilledSurvey']['completed']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

