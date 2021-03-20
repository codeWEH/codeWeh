		<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Search </b>Results</b></h2></div>
                    <div class="col-sm-4">
                        <button class="button " style="vertical-align:right;float:right;" onclick="window.location. href='<?php echo base_url('user/index'); ?>'"><span>Back</span></button>
                    </div>
                </div>
            </div>
       <table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td width="50px">ID</td>
				<th width="120px">Name</th>
				<th width="120px">Email</th>
				<th width="120px">Password</th>
				<th width="50px">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				if($users){
					foreach($users as $user){
			?>
			<tr>
				<td><?php echo $user->id; ?></td>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->password; ?></td>
				<td>
					<a href="<?php echo base_url('user/edit/'.$user->id); ?>" title="Edit" data-toggle="tooltip">
						<i class="glyphicon glyphicon-edit"></i>
					</a> |
					<a  href="<?php echo base_url('user/delete/'.$user->id); ?>" onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip">
						<i class="material-icons">&#xE872;</i>
					</a>
				</td>
			</tr>	
		</tbody>
		<?php 
				}
			}
		?>
	</table>

