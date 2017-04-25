
<?php if(AuthComponent::user('role') != '' && AuthComponent::user('role') == 'Admin'){ ?>

<div class="surveyQuestions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Admin Links'); ?></h1>
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
                                                            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Surveys'),array('admin' => true, 'controller' => 'surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Survey'),array('admin' => true, 'controller' => 'surveys', 'action' => 'add'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New User'), array('action' => 'add'), array('escape' => false)); ?></li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('User Roles'),array('admin' => true, 'controller' => 'user_roles', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('User Role'),array('admin' => true, 'controller' => 'user_roles', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('User Filled Surveys'),array('admin' => true, 'controller' => 'user_filled_surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('User Filled Survey'),array('admin' => true, 'controller' => 'user_filled_surveys', 'action' => 'add'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Survey Question'), array('action' => 'add'), array('escape' => false)); ?></li>
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Question Types'),array('admin' => true, 'controller' => 'question_types', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Question Type'),array('admin' => true, 'controller' => 'question_types', 'action' => 'add'), array('escape' => false)); ?> </li>
		
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Question Options'),array('admin' => true, 'controller' => 'question_options', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Question Option'),array('admin' => true, 'controller' => 'question_options', 'action' => 'add'), array('escape' => false)); ?> </li>
                
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		

		
	</div><!-- end row -->


</div><!-- end containing of content -->
<?php } else{ ?>
<h2>Welcome to Survey Application</h2>
<div class="surveyQuestions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User Links'); ?></h1>
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
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Surveys'),array('controller' => 'surveys', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;'   .__('Edit Profile'),array('controller' => 'users', 'action' => 'edit'), array('escape' => false)); ?> </li>
                
                
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		

		
	</div><!-- end row -->


</div><!-- end containing of content -->
<?php }

