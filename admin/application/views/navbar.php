<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	      	</button>
	      	<img src="<?php echo base_url(); ?>assets/img/logo.png" style="width: 200px; height: 50px" > 
		</div>  
  		<div class="collapse navbar-collapse navbar-center" id="bs-example-navbar-collapse-1">		  		
	  		<ul class="nav navbar-nav">
		        <li class="active"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
				<li><a href="<?php echo site_url("admin") ?>"><span class="glyphicon glyphicon-eye-open"></span> Admin</a></li>              
				<li><a href="<?php echo site_url("editor") ?>"><span class="glyphicon glyphicon-edit"></span> Editor</a></li> 
				<li><a href="<?php echo site_url("author") ?>"><span class="glyphicon glyphicon-list-alt"></span> Author</a></li> 
		    </ul>
		    <div class="container">
			    <ul class="nav navbar-nav navbar-right">		        
					<li>

						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle" id="dropdownMenu1" 	data-toggle="dropdown">
							username
							<span class="glyphicon glyphicon-chevron-down"></span>
							</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="<?php echo site_url('admin/update')?>"><span class="glyphicon glyphicon-cog"></span> Update Profile</a>
									</li>
									<li role="presentation" class="divider"></li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-user"></span> Manage Users</a>
									</li>
									<li role="presentation" class="divider"></li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="<?php echo site_url("auth/logout") ?>"><span class="glyphicon glyphicon-lock"></span> Log out</a>
									</li>
								</ul>
						</div>
					</li>
			    </ul>
			</div>
	    </div>
</nav>