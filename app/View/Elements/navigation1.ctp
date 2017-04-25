<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Survey Application</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/surveys">Survey</a></li>
            <?php 
                    if(AuthComponent::user('email')){
                     echo "<li><a href='#'></a>".AuthComponent::user('name')."</li>"
                    }else{ ?>
                    <li><a href="/users/login">Login</a></li>
                    <li><a href="users/add">Register</a></li> 
                    <?php }
            ?>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>