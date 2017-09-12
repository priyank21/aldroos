<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subscription    
        <small>All Subscription</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Subscription Plan</a></li>
        <li class="active">Subscription</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_samplevideo'); ?>
      <div class="row">
      



    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sample Videos </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/home/samplevideos">
                            <input type="text"  name=data[Samplevideo][search] class="form-control pull-right" placeholder="Search">

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
                            <th><?php //echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('video_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('video_description'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th><?php echo $this->Paginator->sort('main_video'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            
                            <th class="actions">Actions</th>
                        </tr>
                        <?php foreach ($Samplevideo as $Samplevideo_data_array): ?>
                            <tr>
                                <td><?php //echo h($folder_data_array['Folder']['id']); ?></td>
                                <td><?php echo h($Samplevideo_data_array['Samplevideo']['video_name']); ?></td>
                                <td><?php echo h($Samplevideo_data_array['Samplevideo']['video_description']); ?></td>
                                
                                <?php if ($Samplevideo_data_array['Samplevideo']['status'] == 1) { ?>
                                    <td><?php echo 'Active'; ?></td>       
                                    <?php } else {
                                    ?>
                                    <td><?php echo 'Inactive'; ?></td>       
                                <?php }
                                ?>
                                <?php if ($Samplevideo_data_array['Samplevideo']['main_video'] == 1) { ?>
                                    <td><?php echo 'Main video'; ?></td>       
                                      
                                    <?php } else {
                                    ?>
                                    <td><?php echo 'Normal Sample'; ?></td>       
                                <?php }
                                ?>
                                
                                <td><?php echo h($Samplevideo_data_array['Samplevideo']['created']); ?></td>
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'viewsamplevideos', $Samplevideo_data_array['Samplevideo']['id']), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'editsamplevideo', $Samplevideo_data_array['Samplevideo']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete Video', array('action' => 'deletesamplevideo', $Samplevideo_data_array['Samplevideo']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $Samplevideo_data_array['Samplevideo']['video_name'])); ?>
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