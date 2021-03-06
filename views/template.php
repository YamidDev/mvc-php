<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/dark.css">
    <script src="./public/js/jquery-3.4.1.slim.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/sweetalert2.min.js"></script>
    <title>Template</title>
</head>
<body>
    <?php require_once 'modules/navigation.php'; ?>
    <div class="container">
        <section>
            <?php $mvc = new MvcController(); $mvc->linkPagesController(); ?>
        </section>
    </div>
</body>
</html>