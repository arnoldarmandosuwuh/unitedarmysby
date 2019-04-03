        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data News
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Judul</th>
                                        <th>News</th>
                                        <th>User</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1; 
                                        include "../config/koneksi.php";
                                        $query = "select * from berita, tuser where tuser.id_user = berita.id_user order by id_berita asc";
                                        $result = mysqli_query($conn,$query);
                                        while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                            # code...
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row["judul_berita"]; ?></td>
                                        <td><?php echo $row["berita"]; ?></td>
                                        <td class="center"><?php echo $row["nama_user"]; ?></td>
                                        <td class="center"><?php echo $row["date_posted"]; ?></td>
                                        <td class="center"><?php echo $row["date_updated"]; ?></td>
                                        <td class="center"><a href="<?php echo '?page=formnews&id='.$row['id_berita']; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a> - <a href="<?php echo 'news/delete_proses.php?id='.$row['id_berita']; ?>" class="btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a></td>
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