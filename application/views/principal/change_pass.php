<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li class="active">Change Password</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Change Password<small></small></h1>
			<!-- end page-header -->
<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-body panel-form">
                        	<?php
                        		if (validation_errors()) {?>
                        		<div class="alert alert-danger fade in m-b-15">
									<strong>Error!</strong><br>
									<?php echo validation_errors(); ?>
									<span class="close" data-dismiss="alert">×</span>
								</div>
                        	<?php } ?>

                            <?php echo $this->session->flashdata('success'); ?>
                            <form class="form-horizontal form-bordered" action="<?php echo base_url();?>principal/save_change_pass" method="POST">

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Old Password:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="password" value="<?php echo set_value('old_pass');?>" id="old_pass" name="old_pass" placeholder="Old Password" data-parsley-required="true" />
									</div>
								</div>

                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">New Password:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="password" value="<?php echo set_value('new_pass');?>" id="new_pass" name="new_pass" placeholder="New Password" data-parsley-required="true" />
									</div>
								</div>

                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Confirm Password:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="password" value="<?php echo set_value('cpass');?>" id="cpass" name="cpass" placeholder="Confirm Password" data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
										<a href="<?php echo base_url(); ?>admin" class="btn btn-danger">Cancel</a>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>

            </div>
            <!-- end row -->
