<!doctype html>
<html lang="en">
<head>
    <?php
        require_once '../config.php';

        define('TITLE', 'Make an Appointment');
        include '../template/header.php';
    ?>

    <link rel="stylesheet" href="/css/form_with_background.css">
    <style>
        .bg-image {
            background-image: url('/img/contact_us_bg.png');
        }
        .picker__frame {
            top: 20% !important;
        }
    </style>
</head>
<body>
    <?php include '../template/navbar.html' ?>

    <div class='dummy'>
        <div class="bg-image"></div>

        <div class="container-fluid bg-content">
            <div class="col-md-5 m-auto py-5">
                

                <?php include '../php/make_appointment/make_appointment_form.php'; ?>
            </div>
        </div>
    </div>
    
    <?php include '../template/footer.html' ?>
</body>
</html>

