<?php include_once("header.php"); ?>
<?php

    if(isset($_SESSION["user"])!=""){
        header("Location:index.php");
    }
    require_once("./entities/user.class.php");

    if(isset($_POST["btn_register"])){
        $u_name = $_POST['txt_name'];
        $u_email = $_POST['txt_email'];
        $u_password = $_POST['txt_password'];
        $account = new User($u_name,$u_email,$u_password);
        $result = $account ->save();
        if(!$result){
            ?>
                <script>alert('có lỗi xảy ra');</script>
            <?php
        }
        else{
            
            $_SESSION["user"]=$u_name;//lưu thông tin session
            header("Location:index.php");

        }
    }
?>
 <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Đăng ký tài khoản</h2>
						<div class="page_link">
							<a href="index.php">Trang chủ</a>
							<a href="register.php">Đăng ký</a>
						</div>
					</div>
				</div>
            </div>
        </section>
<div class="container">
    <div class="jumbotron">
        <form method="POST" enctype="multipart/form-data"  >
            <div class="form-group">
                <label >Tên người dùng</label>:</label>
                <input class="form-control input-sm"  name="txt_name"  required/> 
            </div>
            <div class="form-group">
                <label >Email</label>:</label>
                <input  type="email" class="form-control" name="txt_email"    required/>
            </div>
            <div class="form-group">
                <label >Password</label>:</label>
                <input type="password"  class="form-control" name="txt_password" required/>
            </div>
            <input type="submit" name="btn_register" class="btn btn-lg btn-primary" value="Đăng ký"></input>
        </form>
    </div>
</div>
<?php  include_once("footer.php"); ?>

