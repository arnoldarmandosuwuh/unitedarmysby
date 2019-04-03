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
                            Form User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                        if (isset($_GET['id'])){
                                            include "../config/koneksi.php";
                                            $idu = $_GET['id'];
                                            $query = "select * from tuser where id_user=$idu";
                                            $result = mysqli_query($conn,$query);
                                            while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                $id = $data['id_user'];
                                                $nama = $data['nama_user'];
                                                $username = $data['username'];
                                                $password = $data['password_user'];
                                            }
                                        }
                                        else {
                                            $id = "";
                                            $nama = "";
                                            $username = "";
                                            $password = "";
                                        }
                                    ?>
                                    <form role="form" action="user/user_proses.php" method="post" autocomplete="off">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>" placeholder="Enter Your Name">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" id="name" value="<?php echo $nama; ?>" placeholder="Enter Your Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="uname" id="uname" autocomplete="off" value="<?php echo $username; ?>" placeholder="Enter Your Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="pass" id="pass" autocomplete="off" value="<?php echo $password; ?>" placeholder="Enter Your Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level" id="level">
                                                <option value="">- Pilih Level -</option>
                                                <option value="Super Admin">Super Admin</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Pengurus">Pengurus</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Submit</button>
                                        <a href="?page=user"><button type="reset" class="btn btn-danger"><i class="fa fa-times-circle"></i> Reset</button></a>
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