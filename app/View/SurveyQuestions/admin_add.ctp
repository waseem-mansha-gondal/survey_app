<div class="surveyQuestions form">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Add Survey Question'); ?></h1>
            </div>
        </div>
    </div>



    <div class="row">

        <div class="col-md-9">
			<?php echo $this->Form->create('SurveyQuestion', array('role' => 'form')); ?>

            <div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
            </div>
             <div class="form-group">
					<?php echo $this->Form->input('required', array('class' => 'form-control', 'placeholder' => 'Required'));?>
            </div>
            <div class="form-group">
					<?php echo $this->Form->input('order', array('class' => 'form-control', 'placeholder' => 'Order'));?>
            </div>
            <div class="form-group">
					<?php echo $this->Form->input('survey_id', array('type' => 'hidden','value'=>$survey['Survey']['id']));?>
            </div>
           
            <div class="form-group">
					<?php echo $this->Form->input('question_type_id', array('class' => 'form-control', 'placeholder' => 'Question Type Id'));?>
            </div>
            <?php echo $this->Element('option_field'); ?>
           

                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

			<?php echo $this->Form->end() ?>

    </div><!-- end col md 12 -->
</div><!-- end row -->
</div>