<div class="users view">
    <div class="row">
        <div class="actions">
    		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Edit'), array('controller' => 'users', 'action' => 'edit'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
            </div>
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('User'); ?></h1>
            </div>
            
        </div>
    </div>

    <div class="row">



        <div class="col-md-9">			
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tbody>

                    <tr>
                        <th><?php echo __('Name'); ?></th>
                        <td>
			<?php echo h($user['User']['name']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Email'); ?></th>
                        <td>
			<?php echo h($user['User']['email']); ?>
                            &nbsp;
                        </td>
                    </tr>
                  
                    <tr>
                        <th><?php echo __('Created'); ?></th>
                        <td>
			<?php echo h($user['User']['created']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Updated'); ?></th>
                        <td>
			<?php echo h($user['User']['updated']); ?>
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
        <h3><?php echo __('Related User Filled Surveys'); ?></h3>
	<?php if (!empty($user['UserFilledSurvey'])): ?>
        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('User Id'); ?></th>
                    <th><?php echo __('Survey Id'); ?></th>
                    <th><?php echo __('Survey Question Id'); ?></th>
                    <th><?php echo __('Option Selected Id'); ?></th>
                    <th><?php echo __('Option Text'); ?></th>
                    <th><?php echo __('Completed'); ?></th>
                    <th class="actions"></th>
                </tr>
            <thead>
            <tbody>
	<?php foreach ($user['UserFilledSurvey'] as $userFilledSurvey): ?>
                <tr>
                    <td><?php echo $userFilledSurvey['id']; ?></td>
                    <td><?php echo $userFilledSurvey['user_id']; ?></td>
                    <td><?php echo $userFilledSurvey['survey_id']; ?></td>
                    <td><?php echo $userFilledSurvey['survey_question_id']; ?></td>
                    <td><?php echo $userFilledSurvey['option_selected_id']; ?></td>
                    <td><?php echo $userFilledSurvey['option_text']; ?></td>
                    <td><?php echo $userFilledSurvey['completed']; ?></td>
                    <td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'user_filled_surveys', 'action' => 'view', $userFilledSurvey['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'user_filled_surveys', 'action' => 'edit', $userFilledSurvey['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'user_filled_surveys', 'action' => 'delete', $userFilledSurvey['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $userFilledSurvey['id'])); ?>
                    </td>
                </tr>
	<?php endforeach; ?>
            </tbody>
        </table>
<?php endif; ?>

       
    </div><!-- end col md 12 -->
</div>
<div class="related row">
    <div class="col-md-12">
        <h3><?php echo __('Related Surveys'); ?></h3>
	<?php if (!empty($user['Survey'])): ?>
        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Name'); ?></th>
                    <th><?php echo __('Description'); ?></th>
                    <th><?php echo __('Creater Id'); ?></th>
                    <th><?php echo __('Created'); ?></th>
                    <th><?php echo __('Updated'); ?></th>
                    <th class="actions"></th>
                </tr>
            <thead>
            <tbody>
	<?php foreach ($user['Survey'] as $survey): ?>
                <tr>
                    <td><?php echo $survey['id']; ?></td>
                    <td><?php echo $survey['name']; ?></td>
                    <td><?php echo $survey['description']; ?></td>
                    <td><?php echo $survey['creater_id']; ?></td>
                    <td><?php echo $survey['created']; ?></td>
                    <td><?php echo $survey['updated']; ?></td>
                    <td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'surveys', 'action' => 'view', $survey['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'surveys', 'action' => 'edit', $survey['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'surveys', 'action' => 'delete', $survey['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $survey['id'])); ?>
                    </td>
                </tr>
	<?php endforeach; ?>
            </tbody>
        </table>
<?php endif; ?>


    </div><!-- end col md 12 -->
</div>
