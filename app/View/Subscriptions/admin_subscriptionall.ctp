
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
     <?php echo $this->Session->flash('admin_subscription'); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Subscription Plan </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form method="post" action="<?php echo $this->webroot  ?>admin/Subscriptions/subscriptionall">
                            <input style="width:150px;float:left !important;" type="text"  name=data[Subscription][search] class="form-control pull-right" placeholder="Search">

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
                            <th><?php echo $this->Paginator->sort('subscription_plan_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_duration'); ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_monthly_rate'); ?></th>
                            <th><?php echo $this->Paginator->sort('subscription_ monthly thereafter'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            
                            <th class="actions">Actions</th>
                        </tr>
                        <?php foreach ($Subscription as $Subscription_val): ?>
                            <tr>
                                <td><?php //echo h($folder_data_array['Folder']['id']); ?></td>
                                <td><?php  $a = $Subscription_val['Subscription']['subscription_plan_name'];  $out = strlen($a) > 14 ? substr($a,0,14)."..." : $a;// 7
                                echo h($out);  ?>
                                </td>
                                <td><?php echo h($Subscription_val['Subscription']['subscription_duration']); ?></td>
                                <td><?php echo h($Subscription_val['Subscription']['subscription_monthly_rate']); ?></td>
                                <td><?php echo h($Subscription_val['Subscription']['subscription_ monthly thereafter']); ?></td>
                                
                                
                                <td><?php echo h($Subscription_val['Subscription']['created']); ?></td>
                                <td class="actions">
                                    <?php echo $this->Html->link('View', array('action' => 'viewsubscription', $Subscription_val['Subscription']['id'],'admin'=>true), array('class' => 'btn btn-primary')); ?>

                                    <?php echo $this->Html->link('Edit', array('action' => 'editsamplevideo', $Subscription_val['Subscription']['id']), array('class' => 'btn btn-success')); ?>
                                    <?php echo $this->Form->postLink('Delete Video', array('action' => 'deletesubscription', $Subscription_val['Subscription']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $Subscription_val['Subscription']['id'])); ?>
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