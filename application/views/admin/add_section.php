<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>sections">Sections</a></li>
				<li class="active">Add New Section</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add New Section<small></small></h1>
			<!-- end page-header -->
<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add New Section</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Section Name:</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="sectionName" data-parsley-type="true" placeholder="Section Name" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Grade:</label>
									<div class="col-md-6 col-sm-6">
										<select class="form-control" id="select-required" name="grade" data-parsley-required="true">
											<option value="">Please choose</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
										<a href="<?php echo base_url(); ?>sections" class="btn btn-danger">Cancel</a>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
               
            </div>
            <!-- end row -->