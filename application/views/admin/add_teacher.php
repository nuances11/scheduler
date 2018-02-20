<!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>teachers">Teachers</a></li>
                <li class="active">Add New Teacher</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add New Teacher <small></small></h1>
            <!-- end page-header -->
<!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">Add New Teacher</h4>
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
                            <form class="form-horizontal form-bordered" action="<?php echo base_url();?>teacher/save" method="POST">

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Title:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" id="select-required" name="title" data-parsley-required="true">
                                            <option value="">Please choose</option>
                                            <option value="MR" <?php if (set_value('title') == 'MR') {
                                                echo "selected";
                                            }?>>MR</option>
                                            <option value="MRS" <?php if (set_value('title') == 'MRS') {
                                                echo "selected";
                                            }?>>MRS</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Last Name:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo set_value('lname');?>" id="fullname" name="lname" placeholder="Last Name" data-parsley-required="true" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">First Name:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo set_value('fname');?>" id="fullname" name="fname" placeholder="First Name" data-parsley-required="true" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Middle Name:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo set_value('mname');?>" id="fullname" name="mname" placeholder="Middle Name" data-parsley-required="true" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Gender:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" id="select-required" name="gender" data-parsley-required="true">
                                            <option value="">Please choose</option>
                                            <option value="Male" <?php if (set_value('gender') == 'Male') {
                                                echo "selected";
                                            }?>>Male</option>
                                            <option value="Female" <?php if (set_value('gender') == 'Female') {
                                                echo "selected";
                                            }?>>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Position:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo set_value('position');?>" id="fullname" name="position" placeholder="Position" data-parsley-required="true" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Address:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo set_value('address');?>" id="fullname" name="address" placeholder="Address" data-parsley-required="true" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"></label>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>teachers" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
               
            </div>
            <!-- end row -->