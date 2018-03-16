<div class="panel panel-forum">
    <!-- begin panel-heading -->

    <div class="panel-heading">
        <h4 class="panel-title">View Schedule</h4>
    </div>
    <table class="table table-striped table-bordered">
    	<thead>
            <tr>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>TH</th>
                <th>F</th>
                <th>S</th>
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
        				}
        			}?>
        		</td>
        	</tr>

        </tbody>
    </table>
 </div>