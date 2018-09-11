<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("header-css"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view("header"); ?>
  <?php $this->load->view("leftmenu"); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      
    </section>
    <section class="content">
      
    </section>
  </div>
  <?php $this->load->view("footer"); ?>
  <?php $this->load->view("rightsidebar"); ?>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view("header-js"); ?>
</body>
</html>
