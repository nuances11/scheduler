<!-- <pre>
<?php //print_r($schedules);?>

</pre> -->
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
                    <a href="<?php echo base_url(); ?>user" class="btn btn-xs btn-success">
                     <i class="fa fa-pencil"></i> Back</a>
					 <!-- <a href="javascript:void(0)" id="update_sched" data-url="<?php echo base_url();?>" data-grade="<?php echo $this->uri->segment(4);?>" class="btn btn-xs btn-warning">Update Schedule</a> -->
                    <!-- <a href="?print" class="btn btn-xs btn-primary" onclick="javascript:printView('viewprint')"><i class="fa fa-print"></i> Print</a> -->
                </div>
                <h4 class="panel-title">Schedule - Grade <?php echo $this->uri->segment(3);?></h4>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                	<thead>
                        <tr>
                            <th class="text-center">TIME</th>
                            <?php foreach ($sections as $section) : ?>
                                <th class="text-center"><?= $section->sectionName ?></th>
                            <?php endforeach;?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($schedules as $sched) : ?>
                            <tr>
                                <td>
                                    <?php echo $sched->time_start . ' - ' . $sched->time_end;?>
                                </td>
                                <?php foreach($sched->section as $sec) :?>
                                    <td class="text-center">
                                        <?php foreach($sec->sched_data as $data) :?>
                                            <span style="font-size:15px; font-weight:600;"><?php echo strtoupper($data->subCode) . '<br/>';?></span>

                                            <?php foreach($data->days as $day):?>
                                                <?php echo $day['day_id'] . '&nbsp;' ;?>
                                            <?php endforeach;?>
                                            </br>
                                            <?php echo '(' . $data->title . '. ' . $data->lname . ')'; ?>
                                            </br>
                                            </br>
                                        <?php endforeach ;?>
                                    </td>
                                <?php endforeach ;?>
                            </tr>
                        <?php endforeach ;?>


                    </tbody>
                </table>
                <!-- PRINT SECTION -->
                <div class="hidden" id="viewprint">
                    <h3 class="text-center">Schedules List</h3>
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">TIME</th>
                            <?php foreach ($sections as $section) : ?>
                                <th class="text-center"><?= $section->sectionName ?></th>
                            <?php endforeach;?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($schedules as $sched) : ?>
                            <tr>
                                <td>
                                    <?php echo $sched->time_start . ' - ' . $sched->time_end;?>
                                </td>
                                <?php foreach($sched->section as $sec) :?>
                                    <td class="text-center">
                                        <?php foreach($sec->sched_data as $data) :?>
                                            <span style="font-size:15px; font-weight:600;"><?php echo strtoupper($data->subCode) . '<br/>';?></span>

                                            <?php foreach($data->days as $day):?>
                                                <?php echo $day['day_id'] . '&nbsp;' ;?>
                                            <?php endforeach;?>
                                            </br>
                                            <?php echo '(' . $data->title . '. ' . $data->lname . ')'; ?>
                                            </br>
                                            </br>
                                        <?php endforeach ;?>
                                    </td>
                                <?php endforeach ;?>
                            </tr>
                        <?php endforeach ;?>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
<!-- end row -->
