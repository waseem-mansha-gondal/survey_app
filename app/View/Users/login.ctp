
<div class="users form">

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <div class="row">


        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
                </div>
                <div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
                </div>	
                <div class="form-group">
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Register'), array('action' => 'add'), array('escape' => false)); ?>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div> <!-- /container --