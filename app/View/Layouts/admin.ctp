<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'Al-Droos';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>

        </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?=
        $this->Html->css(array('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css', 'dashboard/bower_components/font-awesome/css/font-awesome.min.css',
            'dashboard/bower_components/Ionicons/css/ionicons.min.css', 'dashboard/dist/css/AdminLTE.min.css', 'dashboard/dist/css/all-skins.min.css',
            'dashboard/bower_components/morris.js/morris.css', 'dashboard/bower_components/jvectormap/jquery-jvectormap.css',
            'dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css',
            'dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'))
        ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
    <body>

    <!-- dashboard main content fetching here -->
    <?php  echo $this->element('Dashboard/header'); ?>
    <?php echo $this->element('Dashboard/sidebar'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('Dashboard/footer'); ?>

    </script>
    <?php
        echo $this->Html->script(array('bower_components/jquery/dist/jquery.min.js', 'bower_components/jquery-ui/jquery-ui.min.js', 'bower_components/bootstrap/dist/js/bootstrap.min.js',
            'bower_components/raphael/raphael.min.js', 'bower_components/morris.js/morris.min.js',
            'bower_components/jquery-sparkline/dist/jquery.sparkline.min.js','plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
            'plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'bower_components/jquery-knob/dist/jquery.knob.min.js',
            'bower_components/moment/min/moment.min.js', 'bower_components/bootstrap-daterangepicker/daterangepicker.js', 'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'bower_components/jquery-slimscroll/jquery.slimscroll.min.js', 'bower_components/fastclick/lib/fastclick.js', 'dist/js/adminlte.min.js', 'dist/js/pages/dashboard.js', 'dist/js/demo.js','customjs/uploadsamplevideo.js'));
        ?>
    <script>
        $(function () {
            $(".alert-success").delay(5000).fadeOut('slow');
        });
        $(function () {
            $(".alert-danger").delay(5000).fadeOut('slow');
        });

//request for autogenrating user
$("#sbmt_auto").click(function (event) {
    event.preventDefault();
    var url = '<?php echo $this->webroot ?>admin/users/PrePaiduser';
    var login_limit = $('#login_limit').val();
    var user_number = $('#user_number').val();
    if(login_limit == '' || user_number ==''){
        $('#alrt_classs_auto_gen').removeClass('alert-success').addClass('alert-danger');
        $('#alert_msgs_auto_gen').html('Both fields are mandatory !!');
        $('#msg_blocks_auto_gen').removeClass('hidden');
        return false;
    }
    $.ajax({    
        type: 'POST',    
        url: url,    
        data:{
            'login_limit': login_limit,
            'user_number': user_number,
        },    
        beforeSend: function() {        
                $("#sbmt_auto").html('Genrating...');

                },    
        success: function(data) {
            $("#sbmt_auto").html('Genrated');    
        }
    });
});








    </script>
    