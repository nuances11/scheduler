<ol class="breadcrumb pull-right">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li class="active">Teachers</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Teachers  <small>list</small></h1>

<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			        <h5>
			            Key features include:
			        </h5>
                    <ul class="p-l-25 m-b-15">
                        <li>Freezes the left most column to the side of the table</li>
                        <li>Option to freeze two or more columns</li>
                        <li>Full integration with DataTables' scrolling options</li>
                    </ul>
			    </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-10">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>teacher/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new teacher</a>
                            </div>
                            <h4 class="panel-title">Teachers</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Position</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($teachers as $teacher) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo strtoupper($teacher->lname) . ', ' .ucfirst($teacher->fname) . ' ' . ucfirst($teacher->mname); ?></td>
                                        <td><?php echo $teacher->gender; ?></td>
                                        <td><?php echo $teacher->position; ?></td>
                                        <td><?php echo $teacher->address; ?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>teacher/edit/<?php echo $teacher->teacher_id?>" class="btn btn-xs btn-success">
                                            <i class="fa fa-pencil"></i> Edit</a>
                                            <a href="javascript:;" class="btn btn-xs btn-default">
                                            <i class="fa fa-user"></i> Profile</a>
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