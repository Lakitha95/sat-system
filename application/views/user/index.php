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

                            <button id="btnAddUser" class="btn btn-info">Add New User</button>

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
                            <!--add user modal starting-->
                            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">

                                        <!--<form action="<?php //echo base_url();                         ?>index.php/itemType/add" method="post" enctype="multipart/form-data">-->
                                                    <input class="form-control input-sm" name="txtUsername" id ="txtUsername" type="text" placeholder="Username">
                                                    </br>
                                                    <input class="form-control input-sm" name="txtPassword" id ="txtPassword" type="password" placeholder="Password">
                                                    </br>
                                                    <input class="form-control input-sm" name="txtCPassword" id ="txtCPassword" type="password" placeholder="Confirm Password">
                                                    <br />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="btn-item-type" data-dismiss="modal">Add User</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--add user modal End-->
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

            $(document).ready(function () {

            });
            //Modal control
            $('#btnAddUser').click(function () {
                $('#addUser').modal('show');
            });
            $('#tblStudentDet').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
            //Save data ajax
            $("#btn-item-type").click(function () {
                var uname = $("#txtUsername").val();
                var password = $("#txtUsername").val();
                var cpassword = $("#txtUsername").val();
                var success1 = "<h6 class='success alert alert-success' id='message'>Item type Successfully added</h6>";
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>itemType/addModal",
                    dataType: 'json',
                    data: {uname: uname, password: password},
                    success: function () {
                        $("#txtName").val('');
                        $("#hello").show();
                        $(success1).appendTo("#hello");
                    },
                    error: function () {
                        $(success1).appendTo("#hello");
                        $("#hello").show();
                        $("#message").fadeOut(4000)();
                        alert("Something went wrong add");
                    }
                });

            });
        </script>

    </body>
</html>
