


<!-- user view -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
       <!--  <small>Users</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Home</li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <?php echo $this->Session->flash('admin_add'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/users/index">
                            <input style="width: 150px;float: left !important;" type="text"  name="data[User][search]" class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('name') ?></th>
                            <th><?php echo $this->Paginator->sort('email') ?></th>
                            <th><?php echo $this->Paginator->sort('role') ?></th>
                            <th><?php echo $this->Paginator->sort('phone') ?></th>
                            <th><?php echo $this->Paginator->sort('status') ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_status') ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_start_date') ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_end_date') ?></th>

                            <th class="actions acton_tlt">Action</th>
                        </tr>
                        <?php foreach($users as $userist): ?>
                            <tr>
                                <td><?php echo $userist['User']['first_name']?></td>
                                <td><?php echo $userist['User']['email']?></td>
                                <td><?php echo $userist['User']['role']?></td>
                                <td><?php echo $userist['User']['phone']?></td>
                                <td><?php if($userist['User']['status'] == 1){
                                    echo 'Activated';
                                    }else{echo 'Deactivated'; }?></td>
                                <td><?php if($userist['User']['subscription_status'] == 1){
                                    echo 'Subscription';
                                    }else{echo 'No Subscription'; }?></td>
                               
                                <td><?php if(!empty($userist['User']['subscription_start_date'])){
                                    echo $userist['User']['subscription_start_date'];
                                    }else{echo '-'; }?></td>
                                <td><?php if(!empty($userist['User']['subscription_end_date'])){
                                    echo $userist['User']['subscription_end_date'];
                                    }else{echo '-'; }?></td>
                                
                                <td class="actions">
                                   <?php echo $this->Html->link('Edit', array('action' => 'edit', $userist['User']['id']), array('class' => 'btn btn-success', 'title'=>'Edit')); ?>
                                    <?php echo $this->Html->link('View', array('action' => 'view', $userist['User']['id']), array('class' => 'btn btn-primary', 'title'=>'View')); ?>
                                    <?php //echo $this->Html->link('Change password', array('action' => 'password', $userist['User']['id']), array('class' => 'btn btn-primary','title'=>'Change Password')); ?>
         
                                    <?php echo $this->Form->postLink(('Delete'), array('action' => 'delete', $userist['User']['id']), array('class' => 'btn btn-danger','href'=>''), __('Are you sure you want to delete # %s?', $userist['User']['id'])); ?>


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