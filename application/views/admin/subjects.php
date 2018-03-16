<ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Home</a></li>
	<li class="active">Subjects</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Subjects  <small>list</small></h1>

<div class="row">
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>subject/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new subject</a>
                            </div>
                            <h4 class="panel-title">Subjects</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subjects as $subject) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $subject->subCode; ?></td>
                                        <td><?php echo $subject->subName; ?></td>
                                        <td>
                                        	<a href="<?php echo base_url();?>subject/edit/<?php echo $subject->sub_id?>" class="btn btn-xs btn-success">
                                 			<i class="fa fa-pencil"></i> Edit</a>
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