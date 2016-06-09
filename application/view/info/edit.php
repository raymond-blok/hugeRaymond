<div class="container">
	<h1>InfoController/edit/:info_id</h1>

	<div class="box">
		<h2>edit your profile</h2>

		<?php $this->renderFeedbackMessages(); ?>

		<?php if($this->info) { ?>
			<form method="post" action="<?php echo Config::get('URL'); ?>info/editSave">
			<input type="text" name="name" value="<?php echo htmlentities($this->info->name); ?>" />
			<input type="text" name="surname" value="<?php echo htmlentities($this->info->surname); ?>" />
			<input type="text" name="occupation" value="<?php echo htmlentities($this->info->occupation); ?>" />
			<input type="text" name="gender" value="<?php echo htmlentities($this->info->gender); ?>" />
			<input type="text" name="address" value="<?php echo htmlentities($this->info->address); ?>" />
			<input type="text" name="email" value="<?php echo htmlentities($this->info->email); ?>" />
			<input type="text" name="mobile" value="<?php echo htmlentities($this->info->mobile); ?>" />
			<input type="text" name="interest" value="<?php echo htmlentities($this->info->interest); ?>" />
			<input type="submit" value="Change">
			</form>
		<?php } else { ?>
			<p>Something went wrong and your profile does not exist please email: raydelmundo@hotmail.com</p>
		<?php } ?>	
	</div>
</div>