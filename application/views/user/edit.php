		<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Edit </b>Account</b></h2></div>
                    <div class="col-sm-4">
                        <button class="button " style="vertical-align:right;float:right;" onclick="window.location.href='<?php echo base_url('user/index'); ?>'"><span>Back</span></button>
                    </div>
                </div>
            </div>
	<form action="<?php echo base_url('user/update') ?>" method="post" class="form-horizontal"><br>
		<input type="hidden" name="txt_hidden" value="<?php echo $user->id; ?>">
		<table class="table table-bordered" border="0">
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Name</b></td>
				<td class="col-md-3"><input type="name" name="name" value="<?php echo $user->name;?>"class="form-control" required=""></td>
			</tr>
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Email</b></td>
				<td class="col-md-3"><input type="email" name="email" value="<?php echo $user->email;?>"class="form-control" required=""></td>
			</tr>
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Password</b></td>
				<td class="col-md-3"><input type="pass" value="<?php echo $user->password;?>" name="password" class="form-control" required=""></td>
			</tr>
			<tr> 
				<td class="col-md-2"></td>
				<td class="col-md-3"><input type="submit" name="btnUpdate" value="Update" class="button"></td>
			</tr>
		</table>
	</form>