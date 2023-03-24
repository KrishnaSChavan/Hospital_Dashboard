<head>
    <meta charset="utf-8" />
    <title>Hospital Management System -A Super Responsive Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="icons.min.css" rel="stylesheet" type="text/css" />
    <link href="app.min.css" rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href="ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="footable.core.min.css" rel="stylesheet" type="text/css" />

    <!--Load Sweet Alert Javascript-->
    <script src="swal.js"></script>

    <!--Inject SWAL-->
    <?php if (isset($success)) { ?>
        <!--This code for injecting an alert-->
        <script>
            setTimeout(function() {
                    swal("Success", "<?php echo $success; ?>", "success");
                },
                100);
        </script>

    <?php } ?>

    <?php if (isset($err)) { ?>
        <!--This code for injecting an alert-->
        <script>
            setTimeout(function() {
                    swal("Failed", "<?php echo $err; ?>", "Failed");
                },
                100);
        </script>

    <?php } ?>

</head>