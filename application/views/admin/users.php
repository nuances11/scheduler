<ol class="breadcrumb pull-right">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li class="active">Users</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Users  <small>list</small></h1>

<div class="row">
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="<?php echo base_url(); ?>user/add" class="btn btn-xs btn-success">
                                 <i class="fa fa-pencil"></i> Add new user</a>
                            </div>
                            <h4 class="panel-title">Users</h4>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->session->flashdata('success'); ?>
                            <table id="data-table" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) { ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo strtoupper($user->lname) . ', ' .ucfirst($user->fname) . ' ' . ucfirst($user->mname); ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($user->status == 0) { ?>
                                                        <span class="badge badge-danger">Inactive</span>
                                                <?php } else {?>
                                                        <span class="badge badge-success">Active</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($user->user_type == '2') {
                                                        echo ucfirst('principal');
                                                    }elseif ($user->user_type == '3') {
                                                        echo ucfirst('head teacher');
                                                    }elseif ($user->user_type == '1') {
                                                        echo strtoupper('admin');
                                                    }
                                                ?>    
                                            </td>
                                            <td><?php echo $user->email; ?></td>
                                            <td>
                                                <?php 
                                                    if ($user->user_type == '1') {
                                                        echo '';
                                                    }else{
                                                        ?>
                                                            <a href="<?php echo base_url();?>user/edit/<?php echo $user->user_id?>" class="btn btn-xs btn-success">
                                                            <i class="fa fa-pencil"></i> Edit</a>
                                                            <?php
                                                                if ($user->status == 0) {
                                                                    ?>
                                                                        <a href="<?php echo base_url();?>user/activate/<?php echo $user->user_id?>" class="btn btn-xs btn-default">
                                                                        <i class="fa fa-check"></i> Activate</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                        <a href="<?php echo base_url();?>user/deactivate/<?php echo $user->user_id?>" class="btn btn-xs btn-danger">
                                                                        <i class="fa fa-times"></i> Deactivate</a>
                                                                    <?php
                                                                }
                                                            ?>
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