
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subscription Plan
        <small>View Subscription plan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Subscription Plan</a></li>
         <li><a href="#">Subscription Plan</a></li>
        <li class="active">View Subscription Plan</li>
      </ol>
    </section>
    
<section style="padding-top:15px;">

<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="box">

<div class="box-header with-border">
	<h3 class="box-title">Subscription Detail</h3>
</div>

<div class="box-body"> 
    <table class="table table-striped table-bordered usrlistng" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Subscription Plan Name</th>
                <td><?php echo h($Subscription_val['Subscription']['subscription_plan_name']); ?></td>
            </tr>
           <tr>
                <th>Subscription Duration</th>
                <td><?php echo h($Subscription_val['Subscription']['subscription_duration']); ?></td>
            </tr>

            <tr>
                <th>Subscription Monthly Rate</th>
                <td><?php echo h($Subscription_val['Subscription']['subscription_monthly_rate']); ?></td>
            </tr>
            <tr>
                <th>Subscription Monthly There After</th>
                <td><?php echo h($Subscription_val['Subscription']['subscription_ monthly thereafter']); ?></td>
            </tr>
            
        </thead>
    </table>

    </div>
</div>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</div> 
