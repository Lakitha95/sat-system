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
                        Item
                        <small>Control panel</small>
                    </h1>


                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href='<?php echo base_url(); ?>index.php/item/add' class="btn btn-info"> Add New Item </a>&nbsp;&nbsp;
                                    <a href='<?php echo base_url(); ?>index.php/itemBrand/index' class="btn btn-primary" > Add New Brand </a>
                                    <a href='<?php echo base_url(); ?>index.php/itemType/index' class="btn btn-primary" > Add New Item Type </a>
                                </div>
                            </div>	
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">

                                        <?php
//
                                        if (isset($_SESSION['success_msg'])) {
                                            echo '<h4 class="alert alert-success" id="success">' . $this->session->flashdata('success_msg') . '</h4>';
                                        } else if (isset($_SESSION['fail_msg'])) {
                                            echo '<h4 class="btn-danger" id="failed">' . $this->session->flashdata('fail_msg') . '</h4>';
                                        }
                                        ?>

                                        <h3 class="box-title">Items </h3>
                                    </div>
                                    <div class="box-body">
                                        <table id="tblItemDet" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Edit</th>
                                                    <th>View</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($ItemData as $item) {
                                                    echo "<tr>";
                                                    echo "<td>" . $item->id . "</td>";
                                                    echo "<td>" . $item->name . "</td>";
                                                    echo "<td>" . $item->description . "</td>";
                                                    echo "<td>" . $item->quantity . "</td>";
                                                    echo "<td><a href='" . base_url() . "index.php/supplier/edit/" . $item->id . "'><i class='fa fa-pencil'><i/></a></td>";
                                                    echo "<td><a href='" . base_url() . "index.php/supplier/view/" . $item->id . "'><i class='fa fa-eye'><i/></a></td>";
                                                    echo "<td><a href='" . base_url() . "index.php/supplier/delete/" . $item->id . "'><i class='fa fa-remove'><i/></a></td>";
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
//            $(document).ready(function () {
//                $('#success').onload(function () {
//                    $('#success').show().fadeOut(4000);
//                });
//                $('#failed').onload(function () {
//                    $('#failed').show().fadeOut(4000);
//                });
//
//            });
            $(function () {
                $('#success').stop().fadeOut(4000);
            });
            $(function () {
                $('#failed').stop().fadeOut(4000);
            });
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
