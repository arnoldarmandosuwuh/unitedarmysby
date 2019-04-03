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
                                        <th>Video</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1; 
                                        include "../config/koneksi.php";
                                        $query = "select * from video, tuser where tuser.id_user = video.id_user order by id_video asc";
                                        $result = mysqli_query($conn,$query);
                                        while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                            # code...
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row["nama_video"]; ?></td>
                                        <td><?php echo $row["caption_video"]; ?></td>
                                        <td class="center"><?php echo $row["nama_user"]; ?></td>
                                        <td class="center"><?php echo $row["video_created"]; ?></td>
                                        <td class="center"><?php echo $row["video_updated"]; ?></td>
                                        <td class="center">
                                            <video width="320" height="240" controls>
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/MP4">
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/mp4">
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/MKV">
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/mkv">
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/3GP">
                                                <source src="<?php echo 'upload/video/'.$row["link_video"]; ?>" type="video/3gp">
                                            </video>
                                        </td>
                                        <td class="center"><a href="<?php echo '?page=vformgalery&id='.$row['id_video']; ?>" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a> - <a href="<?php echo 'video/delete_proses.php?id='.$row['id_video']; ?>" class="btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a></td>
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