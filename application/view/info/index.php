<div class="container">
	<h1>InfoController/index</h1>
	<div class="box">
		<?php if($this->info) { ?>
			<table>
				<tr>
					<td>name:</td>
					<td><?php echo $this->info->name; ?></td>
				</tr>
				<tr>
					<td>surname:</td>
					<td><?php echo $this->info->surname; ?></td>
				</tr>
				<tr>
					<td>occupation:</td>
					<td><?php echo $this->info->occupation; ?></td>
				</tr>
				<tr>
					<td>gender:</td>
					<td><?php echo $this->info->gender; ?></td>
				</tr>
				<tr>
					<td>address:</td>
					<td><?php echo $this->info->address; ?></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><?php echo $this->info->email; ?></td>
				</tr>
				<tr>
					<td>mobile:</td>
					<td><?php echo $this->info->mobile; ?></td>
				</tr>
				<tr>
					<td>interest:</td>
					<td><?php echo $this->info->interest; ?></td>
				</tr>
				<form action="edit">
					<tr><td><input type="submit" value="Change"></tr></td>
				</form>
			</table>
		
		<?php } else { ?>
			<p>Something went wrong and your profile does not exist please email: raydelmundo@hotmail.com</p>
		<?php } ?>	
	</div>
<div>