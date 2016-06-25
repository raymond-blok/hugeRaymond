<div class="container">
	<h1>InfoController/edit/:info_id</h1>

	<div class="box">
		<h2>edit your profile</h2>

		<?php $this->renderFeedbackMessages(); ?>

		<?php if($this->info) { ?>
			<table>
				<form method="post" action="<?php echo Config::get('URL'); ?>info/editSave">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo htmlentities($this->info->name); ?>" /></td>
					</tr>
					<tr>
						<td>Surname</td>
						<td><input type="text" name="surname" value="<?php echo htmlentities($this->info->surname); ?>" /></td>
					</tr>
					<tr>
						<td>Occupation</td>
						<td><input type="text" name="occupation" value="<?php echo htmlentities($this->info->occupation); ?>" /></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="text" name="gender" value="<?php echo htmlentities($this->info->gender); ?>" /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="address" value="<?php echo htmlentities($this->info->address); ?>" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value="<?php echo htmlentities($this->info->email); ?>" /></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><input type="text" name="mobile" value="<?php echo htmlentities($this->info->mobile); ?>" /></td>
					</tr>
					<tr>
						<td>Interest</td>
						<td><input type="text" name="interest" value="<?php echo htmlentities($this->info->interest); ?>" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Change"></td>
					</tr>
				</form>
			</table>
			
			
		<?php } else { ?>
			<p>Something went wrong and your profile does not exist please email: raydelmundo@hotmail.com</p>
		<?php } ?>	
	</div>
</div>