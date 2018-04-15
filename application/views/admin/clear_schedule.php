<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li class="active">Clear Schedule</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Clear Schedule<small></small></h1>
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
                            <form class="form-horizontal form-bordered" action="<?php echo base_url();?>admin/delete_schedule" method="POST">

                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Admin Password:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="password" value="<?php echo set_value('admin_pass');?>" id="admin_pass" name="admin_pass" placeholder="Admin Password" data-parsley-required="true" />
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
