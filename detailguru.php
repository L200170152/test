<?php
require_once("config/config.php");
error_reporting(0);

if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($con, "SELECT * from tblguru where id='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>

            <!-- Modal -->
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NIP</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['nipguru'];?>" name="nipguru">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['namaguru'];?>" name="namaguru">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['alamatguru'];?>" name="alamatguru">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NUPTK</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['NUPTK'];?>" name="NUPTK">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mengampu</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['mengampu'];?>" name="mengampu">
                            </div>
                            </div>  
            </form>
        <?php } }
?>