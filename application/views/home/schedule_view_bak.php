<div class="panel panel-forum">
    <!-- begin panel-heading -->

    <div class="panel-heading">
        <a href="<?php echo base_url(); ?>sections-academic/<?php echo $this->uri->segment(3);?>" class="pull-right">Back</a>
        <h4 class="panel-title">View Schedule</h4>
    </div>
    <table class="table table-striped table-bordered">a
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
