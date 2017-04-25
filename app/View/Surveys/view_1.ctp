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

    <div class="row">
        <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Survey Questions'); ?></h3>
	<?php if (!empty($survey['SurveyQuestion'])): ?>
                <div class="related row">
                    <div class="col-md-12">
                        <?php echo __('Title'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">

            <div class="container">

                <div class="form-group">
                <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
                </div>

            </div> 
        </div>        
    </div>

