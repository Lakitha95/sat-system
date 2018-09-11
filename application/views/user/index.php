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
                        User
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="">
                                <a href='<?php echo base_url(); ?>index.php/user/add' class="btn btn-info"> Add New User</a>
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
                                                <th>Username</th>
                                                <th>role</th>
                                                
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($UserData as $user) {
                                                echo "<tr>";
                                                echo "<td>" . $user->id . "</td>";
                                                echo "<td>" . $user->username . "</td>";
                                                echo "<td></td>";
                                                echo "<td><a href='" . base_url() . "index.php/user/view/" . $user->id . "' title='Veiw'><i class='fa fa-eye'></i></a>"
                                                        . "&nbsp&nbsp&nbsp  "
                                                        . "<a href='" . base_url() . "index.php/user/edit/" . $user->id . "' title='Edit'><i class='fa fa-pencil'></i></a>"
                                                        . "&nbsp&nbsp&nbsp  "
                                                        . "<a href='" . base_url() . "index.php/user/delete/" . $user->id . "' title='Delete'><i class='fa fa-remove'></i></a></td>";
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
