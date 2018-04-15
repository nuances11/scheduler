<div class="panel panel-forum">
    <!-- begin panel-heading -->

    <div class="panel-heading">
        <a href="<?php echo base_url(); ?>" class="pull-right">Back</a>
        <h4 class="panel-title">View Schedule</h4>
    </div>
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
