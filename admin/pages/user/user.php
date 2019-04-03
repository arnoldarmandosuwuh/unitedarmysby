        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>User Created</th>
                                        <th>User Updated</th>
                                        <th>Last Login</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1; 
                                        include "../config/koneksi.php";
                                        $query = "select * from tuser order by id_user asc";
                                        $result = mysqli_query($conn,$query);
                                        while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                            # code...
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row["nama_user"]; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td class="center"><?php echo $row["leveluser"]; ?></td>
                                        <td><?php echo $row["user_created"]; ?></td>
                                        <td><?php echo $row["user_updated"]; ?></td>
                                        <td><?php echo $row["last_login"]; ?></td>
                                        <td class="center"><a href="<?php echo '?page=formuser&id='.$row['id_user']; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a> - <a href="<?php echo 'user/delete_proses.php?id='.$row['id_user']; ?>" class="btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a></td>
                                    </tr>
                                    <?php
                                        $no++;
                                       }
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->