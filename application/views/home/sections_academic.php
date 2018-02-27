<div class="panel panel-forum">
    <!-- begin panel-heading -->

    <div class="panel-heading">
    	<a href="<?php echo base_url(); ?>home" class="pull-right">Back</a>
        <h4 class="panel-title">Section/Academic/Track List</h4>
    </div>
    <!-- end panel-heading -->
    <!-- begin forum-list -->
    <ul class="forum-list">
    	<?php if (empty($sections)) { ?> 
    		<div class="alert alert-danger">
    			No result found
    		</div>
    	<?php } ?>
    	<?php foreach ($sections as $section) { ?>
        <li>
            <!-- begin media -->
            <div class="media">
                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/icon-track.png" alt="" />
            </div>
            <!-- end media -->
            <!-- begin info-container -->
            <div class="info-container">
                <div class="info">
                    <h4 class="title"><a href="category_list.html"><?php echo $section->sectionName; ?></a>
                    </h4>
	                <p class="desc">
	                	Number of Students enrolled <b>(9)</b>
	           		</p>
                </div>
                <div class="latest-post">
                    <a href="?" class="btn btn-warning">View Schedule</a>
                </div>
            </div>
            <!-- end info-container -->
        </li>
        <?php } ?>
    </ul>
    <!-- end forum-list -->
</div>
<!-- end panel-forum -->