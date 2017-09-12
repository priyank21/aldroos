


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Courses
        <small>View Courses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>View Courses</li>
        <li class="active">All Courses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_course'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Course </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/courses/index">
                            <input style="width:150px;float:left!important;" type="text"  name="data[Course][search]" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                                                </form>
                        </div>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th><?php echo $this->Paginator->sort('course_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('professor_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('Samplevideo'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            
                            
                            <th class="actions acton_tlt">Actions</th>
                        </tr>
                        <?php foreach ($Course as $Course_data_array): ?>
                            <tr>
                                <td><?php  $a = $Course_data_array['Course']['course_name'];  $out = strlen($a) > 14 ? substr($a,0,14)."..." : $a;// 7
                                echo h($out);  ?>
                                </td>
                                <td><?php echo h($Course_data_array['Course']['professor_name']); ?></td>
                                <td><?php  $a = $Course_data_array['Samplevideo']['video_name'];  $out = strlen($a) > 14 ? substr($a,0,14)."..." : $a;// 7
                                echo h($out);  ?></td>
                                <td></td>
                                
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'viewcourse', $Course_data_array['Course']['id']), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'editcourse', $Course_data_array['Course']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete VIdeo', array('action' => 'deletecourse', $Course_data_array['Course']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $Course_data_array['Course']['id'])); ?>
                                    <?php echo $this->Html->link('Add Chapter', array('action' => 'addchapter', $Course_data_array['Course']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('All Chapters', array('action' => 'chapters', $Course_data_array['Course']['id']), array('class' => 'btn btn-success')); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <?php echo $this->element('pagination-counter'); ?>
<?php echo $this->element('pagination'); ?>
</section>
</div>
</section>
<!-- /.content -->
