<?php $this->view("header",$data); ?>
	
	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
                <span style="font-size : 20px;color:red;">
                <?php check_error() ?>
                </span>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post">
							<input name="name" type="text" placeholder="Name"/>
							<input name="email" type="email" placeholder="Email Address"/>
							<input name="password" type="password" placeholder="Password"/>
                            <input name="password2" type="password" placeholder="Retype Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php $this->view("footer"); ?>

 