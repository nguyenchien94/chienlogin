<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <div class="info">
    <?php if (!isset($_SESSION['user'])) {
                require_once "nav.php";
            } else {
                require_once "navigation.php";
            } ?>
        </div>
        <div class="container-fluid" style="height: 100%;padding: 0;">
            <?php require_once APP_PATH . '/view/' . $module . '/' . $view_name; ?>
        </div>
        
</body>
</html>