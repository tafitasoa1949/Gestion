<?php
$devise = $_GET['devise'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Device</title>
    <link rel="stylesheet" href="../boots/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../boots/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../boots/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../boots/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../boots/assets/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <form method="post" action="<?php echo site_url('index.php/home/traitementD/?device='.$devise ); ?>"> 
            <h2 class="visually-hidden">Update Devise</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3"><input class="form-control" type="text" name="devi"  value='<?php echo $resultats[0]['devise']; ?>'></div>
            <div class="mb-3"><input class="form-control" type="number" name="equivalence" value='<?php echo $resultats[0]['devise_equivalence']; ?>'></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">update</button></div>
        </form>
    </section>
    <script src="../boots/assets/bootstrap/js/bootstrap.min.js"></script>

    <div class="bas">
        
    </div>
</body>

</html>