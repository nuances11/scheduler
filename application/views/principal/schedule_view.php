
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
                <div class="panel-heading-btn">
                    <a href="<?php echo base_url(); ?>principal" class="btn btn-xs btn-success">
                     <i class="fa fa-pencil"></i> Back</a>
                </div>
                <h4 class="panel-title">Choose Grade</h4>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                	<thead>
                        <tr>
                            <th width="16%">M</th>
                            <th width="16%">T</th>
                            <th width="16%">W</th>
                            <th width="16%">TH</th>
                            <th width="16%">F</th>
                            <th width="16%">S</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '1' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '2' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '3' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '4' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '5' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '6' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '7' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '8' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'M'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'T'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'W'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'TH'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'F'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    		<td>
                    			<?php foreach($schedule as $sched){
                    				if($sched->time_id == '9' && $sched->day_id == 'S'){
                    					?>
                    					<?php echo $sched->time_start . '-' . $sched->time_end ;?><br/>
            			        		<?php echo $sched->subName ;?><br/><br/>
            			        		<?php echo $sched->title . '. ' . $sched->fname . ' ' . $sched->lname ;?><br/><br/>
            			        		<?php
                    				}else{
                                        ?>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        &nbsp;<br/>
                                        <?php
                                    }
                    			}?>
                    		</td>
                    	</tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
<!-- end row -->
