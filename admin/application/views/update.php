
<div class="container"> 

<br>
<br>
<br>
	<div>
		<?php echo validation_errors(); ?>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<strong>Update Information</strong>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-0 ">

					<br> <!--break-->
					<?php echo form_open('auth/update', $attributes = array('role' => 'form', 'class' => 'form-horizontal')); ?>
					<div class="form-group">
						<label for="firstname" class="col-sm-5 control-label">First Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name">
						</div>
					</div>

					<div class="form-group">
						<label for="lastname" class="col-sm-5 control-label">Last Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name">
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-sm-5 control-label">Username</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="username" id="username" placeholder="username">
						</div>
					</div>

					<div class="form-group">
						<label for="lastname" class="col-sm-5 control-label">Password</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" id="password" placeholder="************************">
						</div>
					</div>

					<div class="form-group">
						<label for="lastname" class="col-sm-5 control-label">Confirm Password</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="passconf" id="passconf" placeholder="***********************">
						</div>
					</div>

					<div class="form-group">
						<label for="lastname" class="col-sm-5 control-label">Email Address</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" name="email" placeholder="email@example.com">
						</div>
					</div>
				
				</div>
				
			

			<div class="col-sm-1 col-sm-offset-0">
				<br> <!--break-->
				<div class="form-group">
					<div class="col-sm-offset-0 col-sm-10">
						<button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-0 col-sm-10">
						<button type="reset" class="btn btn-default"><a href="<?php echo site_url("admin") ?>""> Cancel </a></button>
					</div>
				</div>
			</div>
		</form>
				
			
		</div>
	</div>
	
</div>