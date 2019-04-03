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
                            Form Galery
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                        if (isset($_GET['id'])){
                                            include "../config/koneksi.php";
                                            $idu = $_GET['id'];
                                            $query = "select * from video where id_video=$idu";
                                            $result = mysqli_query($conn,$query);
                                            while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $id = $data['id_video'];
                                                $nama = $data['nama_video'];
                                                $caption = $data['caption_video'];
                                                $link = $data['link_video'];
                                            }
                                        }
                                        else {
                                            $id = "";
                                            $nama = "";
                                            $caption = "";
                                            $link = "";
                                        }
                                    ?>
                                    <form role="form" action="video/video_proses.php" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return postForm()">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>" placeholder="Enter Your Name">
                                        <input type="hidden" name="img" id="img" class="form-control" value="<?php echo $link; ?>" placeholder="Enter Your Name">
                                        <div class="form-group">
                                            <label>Judul Video</label>
                                            <input class="form-control" name="judul" id="judul" value="<?php echo $nama; ?>" placeholder="Masukkan Judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Caption</label>
                                            <textarea class="form-control summernote" name="caption" id="caption" value="" placeholder="Masukkan Caption"><?php echo $caption; ?></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label>Video</label>
                                            <input type="file" class="form-control" name="video" id="video" value="">
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Submit</button>
                                        <a href="?page=vgalery"><button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button></a>
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
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
