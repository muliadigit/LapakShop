<?php 
include "admin/koneksi.php";

if(isset($_POST["login"])) {
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    try {
        $sql = "SELECT * FROM admin WHERE user = :username AND pass = :password"; 
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute(); 

        $count = $stmt->rowCount(); 
        if($count == 1) { 
            $_SESSION["pengguna"] = $username;
          header("Location: admin/home_admin.php");
            return;
        }else{
            echo "Anda tidak dapat login";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous"/>
<style type="text/css">
.login,
.image {
  min-height: 92vh;
}

.bg-image {
  background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
  background-size: cover;
  background-position: center center;
}
</style>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-6">Login your account</h3>
                            <br/>
                            <form action="?page=login" method="post">
                                <div class="form-group mb-3">
                                    <input type="text" name="username" placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" name="login" value="Login" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
                                <div class="text-center d-flex justify-content-between mt-4"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

