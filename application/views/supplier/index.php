<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("header-css"); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view("header"); ?>
  <?php $this->load->view("leftmenu"); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Supplier
        <small>Control panel</small>
      </h1>
        
      
    </section>
    <section class="content">
	<div class="row">
	<div class="col-xs-12">
          <div class="">
		<a href='<?php echo base_url(); ?>index.php/supplier/add' class="btn btn-info"> Add New Supplier </a>
			</div>
	</div>	
	</div>
	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Grid</h3>
            </div>
			<div class="box-body">
              <table id="tblStudentDet" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Edit</th>
                  <th>View</th>
				  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
			<?php 
			foreach($SupplierData as $supplier){
			echo "<tr>";
				echo "<td>".$supplier->id."</td>";
				echo "<td>".$supplier->name."</td>";
				echo "<td>".$supplier->address."</td>";
				echo "<td><a href='".base_url()."index.php/supplier/edit/".$supplier->id."'><i class='fa fa-pencil'><i/></a></td>";
				echo "<td><a href='".base_url()."index.php/supplier/view/".$supplier->id."'><i class='fa fa-eye'><i/></a></td>";
				echo "<td><a href='".base_url()."index.php/supplier/delete/".$supplier->id."'><i class='fa fa-remove'><i/></a></td>";
			echo "</tr>";
			}	?>
                </tbody>
              </table>
            </div>
		  </div>	
		</div>
	</div>		
    </section>
  </div>
  <?php $this->load->view("footer"); ?>
  <?php $this->load->view("rightsidebar"); ?>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view("header-js"); ?>
<script src="<?php echo base_url(); ?>/theme/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
	
  $(function () {
    $('#tblStudentDet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>
