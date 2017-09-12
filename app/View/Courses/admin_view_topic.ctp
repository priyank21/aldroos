


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course
        <small>View Chapters</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Course</li>
        <li class="active">Chapters</li>
        <li class="active">Topics</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_topic'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Course : Chapters : topics</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <form method="post" action="#">
                            <input type="text"  name="data['Topic']['search']" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                                                </form>
                        </div>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <div class="form-group">
                        <div class="col-sm-10"> 
                            <?php $file = $Chapter['Chapter']['video_name']; 
                            $get_extension = $id = substr($file, strrpos($file, '.') + 1);
                            ?>
                            <video width="320" height="240"  controls>
                                <source src="<?php echo $this->webroot.'videos/chapter_videos/'.$file; ?>" type="video/<?php echo $get_extension; ?>">
                            </video>
                        </div>
                    </div>




                    <table class="table table-hover">
                        <tr>
                            <th><?php echo $this->Paginator->sort('course_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('chapter_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('topic_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('topic_timing'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            
                            
                            <th class="actions">Actions</th>
                        </tr>
                        <?php foreach ($Topicview as $Topicview_data_array): ?>
                            <tr>
                                <td><?php echo h($Topicview_data_array['Topic']['course_name']); ?></td>
                                <td><?php echo h($Topicview_data_array['Topic']['chapter_name']); ?></td>
                                <td><?php echo h($Topicview_data_array['Topic']['topic_name']); ?></td>
                                <td><?php echo h($Topicview_data_array['Topic']['topic_timing']); ?></td>
                                <td><?php echo h($Topicview_data_array['Topic']['created']); ?></td>
                                
                                <td class="actions">
                                    <?php echo $this->Html->link('Edit', array('action' => 'editTopic', $Chapter['Chapter']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete Topic', array('action' => 'deleteTopic', $Topicview_data_array['Topic']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?',  $Topicview_data_array['Topic']['topic_name'])); ?>
                                    
                                    
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
