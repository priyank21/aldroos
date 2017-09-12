
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonials
        <small>All Testimonials</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Testimonials</li>
        <li class="active">All Testimonials</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_testimonial'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Testimonial</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/testimonials">
                            <input style="width:150px;float:left !important" type="text"  name="data[Testimonial][search]" class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('Auther_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('testimonial_description'); ?></th>
                            
                            
                            
                            <th class="actions acton_tlt">Actions</th>
                        </tr>
                        <?php foreach ($testimonial as $testimonial_data_array): ?>
                            <tr>
                                <td><?php echo h($testimonial_data_array['Testimonial']['Auther_name']); ?></td>
                                <td><?php 
                                  $a = $testimonial_data_array['Testimonial']['testimonial_desc'];  $out = strlen($a) > 25 ? substr($a,0,25)."..." : $a;// 7
                                echo h($out); 
                                 ?></td>
                               
                                
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'view', $testimonial_data_array['Testimonial']['id']), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'edittestimonial', $testimonial_data_array['Testimonial']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete Testimonial', array('action' => 'deletetestimonial', $testimonial_data_array['Testimonial']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?',  $testimonial_data_array['Testimonial']['id'])); ?>
                                    
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
