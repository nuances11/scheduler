<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>subjects">Subjects</a></li>
				<li class="active">Add New Subject</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add New Subject<small></small></h1>
			<!-- end page-header -->
<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add New Subject</h4>
                        </div>
                        <div class="panel-body panel-form">
                        	<?php 
                        		if (validation_errors()) {?>
                        		<div class="alert alert-danger fade in m-b-15">
									<strong>Error!</strong><br>
									<?php echo validation_errors(); ?>
									<span class="close" data-dismiss="alert">×</span>
								</div>
                        	<?php } ?>
                            <form class="form-horizontal form-bordered" action="<?php echo base_url();?>subject/save" method="POST">

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Subject Code:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" value="<?php echo set_value('subCode');?>" id="fullname" name="subCode" placeholder="Subject Code" data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Subject Name:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" value="<?php echo set_value('subName');?>" id="fullname" name="subName" placeholder="Subject Name" data-parsley-required="true" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
										<a href="<?php echo base_url(); ?>subjects" class="btn btn-danger">Cancel</a>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
               
            </div>
            <!-- end row -->