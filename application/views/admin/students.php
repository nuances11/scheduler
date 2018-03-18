<ol class="breadcrumb pull-right">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li class="active">Students</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Students  <small>list</small></h1>

<div class="row">
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>student/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new student</a>
                            </div>
                            <h4 class="panel-title">Students</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Student Number</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $student->studno; ?></td>
                                        <td>
                                            <?php echo strtoupper($student->lname) . ', ' .ucfirst($student->fname) . ' ' . ucfirst($student->mname); ?>
                                        </td>
                                        <td><?php echo $student->gender; ?></td>
                                        <td><?php echo $student->address; ?></td>
                                        <td>
                                        	<a href="<?php echo base_url();?>student/edit/<?php echo $student->studno?>" class="btn btn-xs btn-success">
                                 			<i class="fa fa-pencil"></i> Edit</a>
                                            <a href="delete/student/<?php echo $student->id;?>" class="btn btn-xs btn-danger">
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
