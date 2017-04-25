<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User Registeration'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		
		<div class="col-md-9">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
                                        <?php echo $this->Form->input('user_role_id', array('type'=>'hidden','value'=>2));?>
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->input('confirm_password', array('class' => 'form-control', 'placeholder' => 'Confirm Password','type'=>'password'));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->submit(__('Register'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
