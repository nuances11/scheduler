<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="<?php echo base_url(); ?>">Home</a></li>
    <li><a href="<?php echo base_url(); ?>teachers">Teachers</a></li>
    <li class="active">Add Schedule</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Add Schedule<small></small></h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <h4 class="panel-title">Add Schedule</h4>
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
                <form class="form-horizontal form-bordered" action="<?php echo base_url();?>schedule/save" method="POST">

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Grade:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="select-required" name="grade" data-parsley-required="true">
                                <option value="">Please choose</option>
                                <option value="7" <?php if (set_value('grade') == '7') {
                                	echo "selected";
                                }?>>7</option>
                                <option value="8" <?php if (set_value('grade') == '8') {
                                	echo "selected";
                                }?>>8</option>
                                <option value="9" <?php if (set_value('grade') == '9') {
                                	echo "selected";
                                }?>>9</option>
                                <option value="10" <?php if (set_value('grade') == '10') {
                                	echo "selected";
                                }?>>10</option>
                                <option value="11" <?php if (set_value('grade') == '11') {
                                	echo "selected";
                                }?>>11</option>
                                <option value="12" <?php if (set_value('grade') == '12') {
                                	echo "selected";
                                }?>>12</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Section/Academic/Track:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="select-required" name="sec_id" data-parsley-required="true">
                                <option value="">Please choose</option>
                                <?php foreach ($sections as $section) { ?>
                                	<option value="<?php echo $section->sec_id; ?>" <?php if (set_value('sec_id') == $section->sec_id) {
                                    echo "selected";
                                }?>><?php echo $section->sectionName; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Subject:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="select-required" name="sub_id" data-parsley-required="true">
                                <option value="">Please choose</option>
                                <?php foreach ($subjects as $subject) { ?>
                                	<option value="<?php echo $subject->sub_id; ?>" 
                                		<?php if (set_value('sub_id') == $subject->sub_id) {
                                    echo "selected";
                                }?>><?php echo $subject->subCode; ?> | <?php echo $subject->subName; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Teacher:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="select-required" name="teacher_id" data-parsley-required="true">
                                <option value="">Please choose</option>
                                <?php foreach ($teachers as $teacher) { ?>
                                	<option value="<?php echo $teacher->teacher_id; ?>" <?php if (set_value('teacher_id') == $teacher->teacher_id) {
                                    echo "selected";
                                }?>><?php echo $teacher->lname; ?>, <?php echo $teacher->fname; ?></option>
                                <?php } ?>
                            </select>
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