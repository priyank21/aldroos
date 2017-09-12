
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staticpages
        <small>All Staticpages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Staticpages</li>
        <li class="active">All Staticpages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_editstaticpage'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Staticpages</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/testimonials">
                            <input style="width:150px;float:left !important" type="text" name="data[Staticpage][search]" class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('title'); ?></th>
                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                            
                            
                            
                            <th class="actions">Actions</th>
                        </tr>
                        <?php foreach ($staticpages as $staticpage): ?>
                            <tr>
                                <td><?php echo h($staticpage['Staticpage']['title']); ?></td>
                                <td><?php 
                                  $a = $staticpage['Staticpage']['description'];  $out = strlen($a) > 25 ? substr($a,0,25)."..." : $a;// 7
                                echo strip_tags($out); 
                                 ?></td>
                               
                                
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'viewstaticpage', $staticpage['Staticpage']['id']), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'editstaticpage', $staticpage['Staticpage']['id']), array('class' => 'btn btn-success')); ?>
                                    
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
