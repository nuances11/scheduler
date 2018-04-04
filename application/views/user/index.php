
<ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Home</a></li>
	<li class="active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard </h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
	<div class="col-md-4">
        <!-- begin panel -->
		<?php echo $this->session->flashdata('success'); ?>
            <div class="panel-heading">
                <h4 class="panel-title"></h4>
            </div>
            <div class="panel-body panel-form">
               <form action="<?php echo base_url()?>schedule/save" method="POST">
                    <div class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Grade:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" name="grade" id="select_grade" data-parsley-required="true" data-url="<?php echo base_url();?>">
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
                        <label class="control-label col-md-4 col-sm-4">Section/Academic<br/>/Track:</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="section_select" name="sec_id" data-parsley-required="true">
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4"></label>
                        <div class="col-md-6 col-sm-6">
                            <a href="javascript:void(0);" id="get_sched" class="btn btn-danger">Check</a>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        <!-- end panel -->
    </div>
	<div class="col-md-8">
        <table class="table table-striped table-bordered" id="my_schedule" width="100%"></table>

        <hr>
        <button class="btn btn-primary" id="submit_sched" data-url="<?php echo base_url();?>" data-user="<?php echo $_SESSION['id'];?>">Submit Schedule</button>
    </div>
</div>
<!-- end row -->
