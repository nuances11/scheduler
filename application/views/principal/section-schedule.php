
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
	<div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <!-- <div class="panel-heading-btn">
                    <a href="<?php echo base_url(); ?>student/add" class="btn btn-xs btn-success">
                     <i class="fa fa-pencil"></i> Add new student</a>
                </div> -->
				<div class="panel-heading-btn">
					<a href="<?php echo base_url(); ?>principal" class="btn btn-xs btn-success">
					 <i class="fa fa-pencil"></i> Back</a>
                </div>

                <h4 class="panel-title">Schedule List</h4>
            </div>
            <div class="panel-body">
                <?php echo $this->session->flashdata('success'); ?>
                <table id="data-table" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Teacher</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($schedules as $sched) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $sched->fname . ' ' . $sched->lname;?></td>
                            <td><a href="<?php echo base_url() . 'view/schedule/grade/' . $sched->grade;?>">View Schedule</a></td>
                            <td>
                                <?php
                                if ($sched->schedule_status == '1') {
                                    ?>
                                    APPROVED
                                    <?php
                                }else{
                                    ?>
                                        <a href="javascript:void(0);" data-url="<?php echo base_url();?>" class="approve_sched" data-id="<?php echo $sched->user_id;?>" data-grade="<?php echo $this->uri->segment(3);?>" data-section="<?php echo $this->uri->segment(5);?>">Approve this schedule</a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
<!-- end row -->
