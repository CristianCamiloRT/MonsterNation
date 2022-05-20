<?php $cakeDescription = 'Monster Nation'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->

        <?= $this->Html->css(['bootstrap.min', 'style', 'responsive', 'colors', 'bootstrap-select', 'perfect-scrollbar', 'custom']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
            <?= $this->element('sliderbar'); ?>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
               <?= $this->element('topbar'); ?>
            <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <?= $this->fetch('content') ?>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                           <p>Copyright © <?= date('Y'); ?> - Monster Nation.<br><br>
                           Universidad Compensar
                           </p>
                     </div>
                  </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>
   <?= $this->Html->script(['jquery.min', 'popper.min', 'bootstrap.min', 'animate', 'bootstrap-select', 'owl.carousel', 'Chart.min', 'Chart.bundle.min', 'utils', 'analyser', 'perfect-scrollbar.min', 'custom', 'chart_custom_style1']) ?>
   <?= $this->fetch('script') ?>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
</body>
</html>
