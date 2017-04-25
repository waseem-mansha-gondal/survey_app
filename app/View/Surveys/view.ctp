
<div class="surveys view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Survey'); ?></h1>
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
			<?php echo h($survey['Survey']['name']); ?>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo __('Description'); ?></th>
                        <td>
			<?php echo h($survey['Survey']['description']); ?>
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
        <h3><?php echo __('Survey Questions'); ?></h3>
	<?php if (!empty($survey['SurveyQuestion'])): ?>
        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
            <thead>
                <tr>

                    <th><?php echo __('Title'); ?></th>
                    <th><?php echo __('Question Type'); ?></th>
                    <td>Options</td>
                </tr>
            <thead>
            <tbody>
	<?php foreach ($survey['SurveyQuestion'] as $surveyQuestion): ?>
                <tr>
                    <td><?php echo $surveyQuestion['title'];  ?></td>
                    <td><?php echo $surveyQuestion['QuestionType']['name']; ?></td>
                    <td>
                    <?php
                   echo $this->Form->create('UserFilledSurvey', array('role' => 'form','url'=>'/user_filled_surveys/add')); 

                        switch ($surveyQuestion['question_type_id']) {
                            case '1':
                                echo $this->Element('textfield', array('params' => $surveyQuestion));
                                break;
                            case '2':
                                echo $this->Element('radio_option', array('params' =>$surveyQuestion));
                                break;
                            case '3':
                                echo $this->Element('textarea', array('params' =>$surveyQuestion));
                                break;
                            case '4':
                                echo $this->Element('dropdown', array('params' =>$surveyQuestion));
                                break;
                            case '5':
                                echo $this->Element('checkbox', array('params' =>$surveyQuestion));
                                break;

                            default:
                                break;
                            }
                    ?>
                    </td>

                </tr>
	<?php endforeach; ?>
            </tbody>
        </table>
        <div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

			<?php echo $this->Form->end() ?>
<?php endif; ?>


    </div><!-- end col md 12 -->
</div>
