
<!-- /.content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         All Links
        <small>Links</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>View Links</li>
        <li class="active">All Links</li>
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
                    <h3 class="box-title">Links </h3>

                </div>
                <?php echo $this->Session->flash('admin_link'); ?>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th><?php echo $this->Paginator->sort('Name'); ?></th>
                            <th><?php echo $this->Paginator->sort('Link'); ?></th>
                            <th><?php echo $this->Paginator->sort('Action'); ?></th>
                            
                            
                        </tr>
                        <?php foreach ($links as $link) { ?>
                            <tr>
                                <td><?php echo $link['Link']['name']; ?></td>
                                <td><?php echo $link['Link']['link']; ?></td>
                                <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $link['Link']['id']), array('class' => 'btn btn-success')); ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
   
</section>
</div>
</section>