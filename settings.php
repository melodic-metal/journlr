

<?php
	/**
	 * Created by PhpStorm.
	 * User: brendan
	 * Date: 27/09/2018
	 * Time: 7:25 PM
	 */
	
	include("inc/header.php");
	include("inc/navbar.php");
	?>
<div class="container border border-light" style="margin-top: 80px; ">
	<div class="form-group align-self-center" style="margin-top: 30px;">
		<form method="POST">
			<div class="row">
				<div class="col-2">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
						<a class="nav-link" id="v-pills-import-tab" data-toggle="pill" href="#v-pills-import" role="tab" aria-controls="v-pills-import" aria-selected="false">Import/Export</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
					</div>
				</div>
				<div class="col-6 form-group testing123">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Home</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<h3>Your information</h3>
							<label for="firstname">First Name</label>
							<input type="text" id="firstname" class="form-control" />
							<label for="lastname">Last Name</label>
							<input type="text" id="lastname" class="form-control" />
							<label for="email">Email</label>
							<input type="text" id="email" class="form-control " />
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" />
						</div>
						<div class="tab-pane fade" id="v-pills-import" role="tabpanel" aria-labelledby="v-pills-import-tab">
							<h3>Export and download</h3>
							<a href="#">Download</a><br/>
							<a href="#">Import from OhLife</a>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings</div>
					</div>
					<button class="btn btn-primary" id="submit" type="submit" name="submit">Save</button>
				</div>
		</form>
		</div>
	</div>
</div>
<?php
include("inc/footer.php");



