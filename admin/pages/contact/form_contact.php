        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Contact
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                        if (isset($_GET['id'])){
                                            include "../config/koneksi.php";
                                            $idu = $_GET['id'];
                                            $query = "select * from contact where id_contact=$idu";
                                            $result = mysqli_query($conn,$query);
                                            while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                            $id = $data["id_contact"];
                                            $home = $data["homebase"];
                                            $alamat = $data["alamat"];
                                            $gmaps = $data["gmaps"];
                                            $email = $data["email"];
                                            $fb = $data["facebook"];
                                            $twit = $data["twitter"];
                                            $ig = $data["instagram"];
                                            $yt = $data["youtube"];
                                            $line = $data["line"];
                                            $bbm = $data["bbm"];
                                            $wa = $data["whatsApp"];
                                            }
                                        }
                                        else {
                                            $id = "";
                                            $home = "";
                                            $alamat = "";
                                            $gmaps = "";
                                            $email = "";
                                            $fb = "";
                                            $twit = "";
                                            $ig = "";
                                            $yt = "";
                                            $line = "";
                                            $bbm = "";
                                            $wa = "";
                                        }
                                    ?>
                                    <form role="form" action="contact/contact_proses.php" method="post" autocomplete="off">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Homebase</label>
                                            <input class="form-control" name="home" id="home" value="<?php echo $home; ?>" placeholder="Enter Your Homebase">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" placeholder="Enter Your Address">
                                        </div>
                                        <div class="form-group">
                                            <label>GMaps</label>
                                            <input class="form-control" name="gmaps" id="gmaps" value="<?php echo $gmaps; ?>" placeholder="Enter Your GMaps">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input class="form-control" name="fb" id="fb" value="<?php echo $fb; ?>" placeholder="Enter Your Facebook">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input class="form-control" name="twit" id="twit" value="<?php echo $twit; ?>" placeholder="Enter Your Twitter">
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input class="form-control" name="ig" id="ig" value="<?php echo $ig; ?>" placeholder="Enter Your Instagram">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input class="form-control" name="yt" id="yt" value="<?php echo $yt; ?>" placeholder="Enter Your Youtube">
                                        </div>
                                        <div class="form-group">
                                            <label>Line</label>
                                            <input class="form-control" name="line" id="line" value="<?php echo $line; ?>" placeholder="Enter Your Line">
                                        </div>
                                        <div class="form-group">
                                            <label>BBM</label>
                                            <input class="form-control" name="bbm" id="bbm" value="<?php echo $bbm; ?>" placeholder="Enter Your BBM">
                                        </div>
                                        <div class="form-group">
                                            <label>Whatsapp</label>
                                            <input class="form-control" name="wa" id="wa" value="<?php echo $wa; ?>" placeholder="Enter Your Whatsapp">
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Submit</button>
                                        <a href="?page=contact"><button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button></a>
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