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
        a {
            font-size: 20px;
        }
        .btn {
            background-color: #0066FF;
            padding: 10px 12px;
            border-radius: 5px;
            border: 1px solid #0066FF;
        }
    </style>
</head>
<body>
<form action="" class="form-group" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="">
            <input type="hidden" class="form-control" id="" name="id_cmt" value="auto_number" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1" style="font-size: 40px;margin-bottom: 30px;">Nội dung: </label><br>
            <textarea class="form-control" name="description" id="description" cols="10" rows="10"></textarea>
            <?= (isset($err['description']) ? $err['description'] : '') ?>
        </div>
    </div>
    <div class="mt-4">
        <div>
            <button class="btn btn-primary" name="btnSave" style="font-size: 20px;margin-right: 5px;text-transform: uppercase;">Đăng</button>
            <a style=" margin-right: 5px; text-transform: uppercase;" href="<?= BASE_URL ?>/?module=backend">Quay Lại</a>
            <a style="text-transform: uppercase;" href="<?= BASE_URL ?>/index.php">Trang Chủ</a>
        </div>
    </div>
</form>
</body>
</html>