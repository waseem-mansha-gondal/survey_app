<div class="questionOptions form">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Question Option'); ?></h1>
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

                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Question Options'), array('action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Survey Questions'), array('controller' => 'survey_questions', 'action' => 'index'), array('escape' => false)); ?> </li>
                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Survey Question'), array('controller' => 'survey_questions', 'action' => 'add'), array('escape' => false)); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>			
        </div><!-- end col md 3 -->
        <div class="col-md-9">
			<?php echo $this->Form->create('QuestionOption', array('role' => 'form')); ?>

            <div class="form-group">
					<?php echo $this->Form->input('survey_question_id', array('class' => 'form-control', 'placeholder' => 'Survey Question Id'));?>
            </div>
            <div class="form-group">
					<?php echo $this->Form->input('value', array('class' => 'form-control', 'placeholder' => 'Value'));?>
            </div>
            <div class="form-group">
					<?php echo $this->Form->input('order', array('class' => 'form-control', 'placeholder' => 'Order'));?>
            </div>
            <div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>

			<?php echo $this->Form->end() ?>

        </div><!-- end col md 12 -->
    </div><!-- end row -->
</div>
