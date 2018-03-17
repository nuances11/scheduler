<ol class="breadcrumb pull-right">
	<li><a href="<?php echo base_url(); ?>admin">Home</a></li>
	<li class="active">Principals</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Principal  <small>list</small></h1>

<div class="row">
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>principal/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new Principal</a>
                            </div>
                            <h4 class="panel-title">Principals</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($principals as $principal) { ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo strtoupper($principal->lname) . ', ' .ucfirst($principal->fname) . ' ' . ucfirst($principal->mname); ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($principal->status == 0) { ?>
                                                        <span class="badge badge-danger">Inactive</span>
                                                <?php } else {?>
                                                        <span class="badge badge-success">Active</span>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $principal->email; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url();?>principal/edit/<?php echo $principal->user_id?>" class="btn btn-xs btn-success">
                                     			<i class="fa fa-pencil"></i> Edit</a>
                                                <?php
                                                    if ($principal->status == 0) {
                                                        ?>
                                                            <a href="<?php echo base_url();?>principal/activate/<?php echo $principal->user_id?>" class="btn btn-xs btn-default">
                                                            <i class="fa fa-check"></i> Activate</a>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <a href="<?php echo base_url();?>principal/deactivate/<?php echo $principal->user_id?>" class="btn btn-xs btn-danger">
                                                            <i class="fa fa-times"></i> Deactivate</a>
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
                <!-- end col-10 -->
            </div>
