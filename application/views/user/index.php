
	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php
		}
	?>

	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-danger"> 
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php
		}
	?>
	<body>
	 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Account </b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button class="button" style="vertical-align:right" onclick="window.location.href='<?php echo base_url('user/add'); ?>'"><span>Add New</span></button>
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

	
	<form action="<?php echo base_url('user/keywords') ?>" method="post" class="example" style="margin:auto;max-width:400px">
		<div class="wrap">
   		<div class="search">
		<input type="text" name="name" class="searchTerm" placeholder="Search name here...">
		<button type="submit" name="submit" value="search"class="searchButton">
			<i class="fa fa-search"></i>
			 </button>
   		</div>
	</div>
	</form>

	<!-- <form action="<?php echo base_url('user/keyword') ?>" method="post" class="example" style="margin:auto;max-width:400px">
	<div class="wrap">
   		<div class="search">
     	 <input type="text" name="search" class="searchTerm" placeholder="Search name here...">
      		<button type="submit" class="searchButton">
        		<i class="fa fa-search"></i>
    		 </button>
   		</div>
	</div>
</form> -->