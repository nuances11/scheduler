<ol class="breadcrumb pull-right">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li class="active">Sections</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Section  <small>list</small></h1>

<div class="row">
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>section/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new section</a>
                            </div>
                            <h4 class="panel-title">Sections</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Section/Academic Track</th>
                                        <th>Grade</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sections as $section) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $section->sectionName; ?></td>
                                        <td><?php echo $section->grade; ?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>section/edit/<?php echo $section->sec_id?>" class="btn btn-xs btn-success">
                                            <i class="fa fa-pencil"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-xs btn-default">
                                            <i class="fa fa-eye"></i> View</a>
                                            <a href="javascript:;" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                   <?php } ?>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>