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
                        Item Types
                        <small>Control panel</small>
                    </h1>


                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Add Item Type</h3>
                                </div>
                                <div class="box-body">
                                    <ul>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <form action="<?php echo base_url(); ?>index.php/itemType/add" method="post" enctype="multipart/form-data">
                                                    <input class="form-control input-sm"  value="<?php echo $Item_type_serial; ?>" name="txtID" type="text" >
                                                    <br />
                                                    <input class="form-control input-sm" name="txtName" type="text" placeholder="Item Name">
                                                    <br />
                                                    <input class="form-control input-sm btn btn-info"  type="submit" value="Add">
                                                    <br />  
                                                </form>
                                            </div>

                                        </div>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><b>Item Types</b></h3>
                                </div>
                                <div class="box-body">
                                    <table id="tblItemDet" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($ItemTypeData as $itemType) {
                                                echo "<tr>";
                                                echo "<td>" . $itemType->id . "</td>";
                                                echo "<td>" . $itemType->name . "</td>";
                                                echo "<td><a href='" . base_url() . "index.php/supplier/edit/" . $itemType->id . "'><i class='fa fa-pencil'><i/></a></td>";
                                                echo "<td><a href='" . base_url() . "index.php/supplier/delete/" . $itemType->id . "'><i class='fa fa-remove'><i/></a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
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
                $('#tblItemDet').DataTable({
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
