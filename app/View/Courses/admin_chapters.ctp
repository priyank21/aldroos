<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chapter
        <small>View Chapters</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Course</li>
        <li class="active">Chapters</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_chapter'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Course : Chapters</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/Courses/chapters/">
                            <input type="text"  name="data['Chapter']['search']" class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('chapter_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('chapter_discription'); ?></th>
                            <th><?php echo $this->Paginator->sort('course_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            
                            
                            <th class="actions">Actions</th>
                        </tr>
                        <?php foreach ($Chapters as $Chapters_data_array): ?>
                            <tr>
                                <td><?php echo h($Chapters_data_array['Chapter']['chapter_name']); ?></td>
                                <td><?php echo h($Chapters_data_array['Chapter']['chapter_discription']); ?></td>
                                <td><?php echo h($Chapters_data_array['Chapter']['course_name']); ?></td>
                                <td><?php echo h($Chapters_data_array['Chapter']['created']); ?></td>
                                
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'viewchapter', $Chapters_data_array['Chapter']['id']), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'editchapter', $Chapters_data_array['Chapter']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete Video', array('action' => 'deletechapter', $Chapters_data_array['Chapter']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?',  $Chapters_data_array['Chapter']['id'])); ?>
                                    <?php echo $this->Html->link('Add Topic', array('action' => 'addTopic',  $Chapters_data_array['Chapter']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Html->link('All Topics', array('action' => 'viewTopic',  $Chapters_data_array['Chapter']['id']), array('class' => 'btn btn-success')); ?>
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
