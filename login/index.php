<!doctype html>
<html lang="en">
<head>
    <?php
        require_once '../config.php';
        define('TITLE', 'HOME');
        include ROOT_PATH . '/template/header.php';
    ?>

    <link rel="stylesheet" href="css/form_with_background.css">
    <style>
        .bg-image {
            background-image: url('../img/login_bg.png');
            height: 550px;
        }
    </style>
    

</head>
<body>
    <?php include ROOT_PATH . '/template/navbar.html' ?>

    <div class="dummy">
        <div class="bg-image"></div>

        <div class="container-fluid bg-content justify-content-center">
            <div class="col-md-5 m-auto p-5">
                <?php 
                    include ROOT_PATH .'/php/login/form.php';
                ?>
            </div>
        </div>
    </div>

    <?php include ROOT_PATH . '/template/footer.html' ?>
</body>
</html>
