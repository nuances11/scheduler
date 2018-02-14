<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>users">Users</a></li>
				<li class="active">Add New User</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add New User<small></small></h1>
			<!-- end page-header -->
<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add New User</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Last Name:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="lastname" placeholder="Last Name" data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">First Name:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="firstname" placeholder="First Name" data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Middle Name:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="middlename" placeholder="Middle Name" data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Email Address:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="email" name="email" data-parsley-type="Email Addresss" placeholder="Email" data-parsley-required="true" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
										<a href="<?php echo base_url(); ?>users" class="btn btn-danger">Cancel</a>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
               
            </div>
            <!-- end row -->