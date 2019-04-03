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
                            Form News
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                        if (isset($_GET['id'])){
                                            include "../config/koneksi.php";
                                            $idu = $_GET['id'];
                                            $query = "select * from berita where id_berita=$idu";
                                            $result = mysqli_query($conn,$query);
                                            while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $id = $data['id_berita'];
                                                $judul = $data['judul_berita'];
                                                $berita = $data['berita'];
                                            }
                                        }
                                        else {
                                            $id = "";
                                            $judul = "";
                                            $berita = "";
                                        }
                                    ?>
                                    <form role="form" action="news/news_proses.php" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return postForm()">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>" placeholder="Enter Your Name">
                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input class="form-control" name="judul" id="judul" value="<?php echo $judul; ?>" placeholder="Masukkan Judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Berita</label>
                                            <textarea class="form-control summernote" name="berita" id="berita" value="" placeholder="Masukkan Caption"><?php echo $berita; ?></textarea> 
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Submit</button>
                                        <a href="?page=pgalery"><button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button></a>
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
