        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Galery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Galery
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Caption</th>
                                        <th>User</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1; 
                                        include "../config/koneksi.php";
                                        $query = "select * from gambar, tuser where tuser.id_user = gambar.id_user order by id_gambar asc";
                                        $result = mysqli_query($conn,$query);
                                        while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                            # code...
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row["nama_gambar"]; ?></td>
                                        <td><?php echo $row["caption_gambar"]; ?></td>
                                        <td class="center"><?php echo $row["nama_user"]; ?></td>
                                        <td class="center"><?php echo $row["gambar_created"]; ?></td>
                                        <td class="center"><?php echo $row["gambar_updated"]; ?></td>
                                        <td class="center"><img src="<?php echo 'upload/img/'.$row["link_gambar"]; ?>" width="320" height="240"></td>
                                        <td class="center"><a href="<?php echo '?page=pformgalery&id='.$row['id_gambar']; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a> - <a href="<?php echo 'galery/delete_proses.php?id='.$row['id_gambar']; ?>" class="btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a></td>
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