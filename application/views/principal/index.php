
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
                <h4 class="panel-title">Choose Grade</h4>
            </div>
            <div class="panel-body">
                <?php echo $this->session->flashdata('success'); ?>
                <table id="data-table" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>Grade - Section</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sections as $section) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $section->grade . ' - ' . $section->sectionName; ?></td>
                            <td>
                                <a href="<?php echo base_url();?>view/grade/<?php echo $section->grade;?>/section/<?php echo $section->sec_id;?>" class="btn btn-xs btn-default">
                                <i class="fa fa-eye"></i> View</a>
								<a href="<?php echo base_url();?>principal/schedule/grade/<?php echo $section->grade;?>/section/<?php echo $section->sec_id;?>" class="btn btn-xs btn-default">
                                <i class="fa fa-calendar"></i> View Calendar</a>
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
