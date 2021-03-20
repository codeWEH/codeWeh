	
	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Add <b>Account</b></h2></div>
                    <div class="col-sm-4">
                         <button class="button " style="vertical-align:right;float:right;" onclick="window.location. href='<?php echo base_url('user/index'); ?>'"><span>Back</span></button>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
	<form action="<?php echo base_url('user/submit') ?>" method="post" class="form-horizontal"><br>
		<table class="table table-bordered" width="20%" border="0">
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Name</b></td>
				<td class="col-md-3"><input type="name" name="name" class="form-control" required=""></td>
			</tr>
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Email</b></td>
				<td class="col-md-3"><input type="email" name="email" class="form-control" required=""></td>
			</tr>
			<tr> 
				<td for="title" class="col-md-2 text-center"><b>Password</b></td>
				<td class="col-md-3"><input type="pass" name="password" class="form-control" required=""></td>
			</tr>
			<tr> 
				<td></td>
				<td class="col-md-3"><input type="submit" name="btnSave" value="Save" class="button"></td>
			</tr>
		</table>
	</form>