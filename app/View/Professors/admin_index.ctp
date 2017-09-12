


<!-- user view -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Professors
       <!--  <small>Users</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Professors</li>
        <li class="active">All Professors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_addProfessor'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/Professors/index">
                            <input style="width: 150px;float: left !important;" type="text"  name="data[Professor][search]" class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('professor_name') ?></th>
                            <th><?php echo $this->Paginator->sort('professor_description') ?></th>
                            <th class="actions acton_tlt">Action</th>
                        </tr>
                        <?php foreach($Professor as $Professor): ?>
                            <tr>
                                <td><?php echo $Professor['Professor']['professor_name']?></td>
                                <td>
                                <?php  $a = $Professor['Professor']['professor_description'];  $out = strlen($a) > 60 ? substr($a,0,60)."..." : $a;  echo h($out);  ?></td>
                                
                                
                                <td class="actions">
                                   <?php echo $this->Html->link('Edit', array('action' => 'edit', $Professor['Professor']['id']), array('class' => 'btn btn-success', 'title'=>'Edit')); ?>
                                    <?php echo $this->Html->link('View', array('action' => 'view', $Professor['Professor']['id']), array('class' => 'btn btn-primary', 'title'=>'View')); ?>
                                    <?php //echo $this->Html->link('Change password', array('action' => 'password', $userist['User']['id']), array('class' => 'btn btn-primary','title'=>'Change Password')); ?>
         
                                    <?php echo $this->Form->postLink(('Delete'), array('action' => 'delete', $Professor['Professor']['id']), array('class' => 'btn btn-danger','href'=>''), __('Are you sure you want to delete # %s?', $Professor['Professor']['id'])); ?>


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