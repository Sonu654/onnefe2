
<div class="row"> 
	<div class="col-sm-2">dfnkdj</div>
	<div class="col-sm-10">
		<div class="row">
			<div class="col-sm-8"><?php print_r($data); 
				echo '<br>';
				$sub=array_keys($data);
				$keys=array_keys($data['category']);
				$cat='category';
				$field='category_id';
				echo($data[$cat[0][$field]]);
			//	foreach ($data['category'] as $key => $value) {
			//		echo $key .' => '.$value;
			//	}
			?></div>
			<div class="col-sm-4">
				<div id="login" class="">
					<form name="login_form" class="form" action="<?php echo baseurl; ?>/ONNEFE/Login" method="post">
						<div class="form-group">
							<lable for="userName"><span class="glyphicon glyphicon-user"></span>User Name</lable>
							<input class="form-control" name="user" type="email">
						</div>
						<div class="form-group">
							<lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Password</lable>
							<input class="form-control" name="pwd" type="password">
						</div>
						<div class="form-group"><label class="checkbox-inline"><input type="checkbox" value="true" name="keepmeLoggedin">Keep me Logged in</label></div>
						<div class="form-group">
							<button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"><span>&nbsp;Login</button>
							<button class="btn btn-danger" id="regButton"><span class="glyphicon glyphicon-registration-mark"><span>&nbsp;Register</button>
						</div>
					</form>
				</div>
				<div id="register">
					<form name="register_form" class="form" action="<?php echo baseurl; ?>/ONNEFE/Register" method="post">
						<div class="form-group">
							<table>
								<tr>
									<td>
										<lable for="userName"><span class="glyphicon glyphicon-user"></span>Name</lable>
									</td>
									<td>
										<input class="form-control" name="ufname" type="text" placeholder="First">
									</td>
									<td>
										<input class="form-control" name="umname" type="text" placeholder="Mid">
									</td>
									<td>
										<input class="form-control" name="ulname" type="text" placeholder="Last">
									</td>
							</table>
						</div>
						<div class="form-group">
							<lable for="email"><span class="glyphicon glyphicon-user"></span>Email</lable>
							<input class="form-control" name="email" type="email">
						</div>
						<div class="form-group">
							<lable for="email"><span class="glyphicon glyphicon-user"></span>Repeat email</lable>
							<input class="form-control" name="remail" type="email">
						</div>
						<div class="form-group">
							<lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Password</lable>
							<input class="form-control" name="pwd" type="password">
						</div>
						<div class="form-group">
							<lable for="pwd"><span class="glyphicon glyphicon-asterisk"></span>Repeat Password</lable>
							<input class="form-control" name="rpwd" type="password">
						</div>
						<div class="from-group">
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							  <?php //foreach ($data['category'] as $key => $value) {
							  		# code...
							  //	}?>
							    <li><a href="#">HTML</a></li>
							   </ul>
							</div>
						</div>
						
						<div class="form-group">
							<button class="btn btn-danger"><span class="glyphicon glyphicon-log-in"><span>&nbsp;Register</button>
							<button class="btn btn-primary" id="logButton"><span class="glyphicon glyphicon-registration-mark"><span>&nbsp;Login</button>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
	