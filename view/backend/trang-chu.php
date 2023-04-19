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
        .sidebar-item  {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="width: 100vh;">
        <div class="row">
            <div class="col-12">
                <h2 style="font-size: 25px; font-weight: bold; font-family: tahoma;text-align: center;margin-bottom: 30px;">Thông Tin Tài Khoản</h2>
                <table class="mt-5 table table-sm" style="width: 100%;margin-bottom: 30px;">
                    <?php $user = $_SESSION['user']  ?>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="row">username</th>
                        <th scope="row">Họ tên</th>
                        <th scope="row">Email</th>
                        <th scope="row">SĐT</th>
                        <th scope="row">Vai Trò</th>
                        <th scope="row">Trạng Thái</th>
                    </tr>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['fullname'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone_number'] ?></td>
                        <td><?= $user['role'] ?  'Khách hàng' : 'Nhân viên'  ?></td>
                        <td><?= $user['status'] ?  'Không có hiệu lực' : 'Có hiệu lực'  ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="display: flex;">
            <div class="col-6">
                <a href="?module=backend&controller=user&action=list" class="sidebar-item">
                    <i class="fas fa-user-friends sidebar-icon"></i>
                    <span class="sidebar-text"> Danh sách Khách Hàng</span>
                </a>
            </div>
            <div class="col-6">
                <a href="?module=backend&controller=comment&action=add" class="sidebar-item">
                    <i class="fas fa-user-friends sidebar-icon"></i>
                    <span class="sidebar-text"> Thêm mới comment</span>
                </a>
            </div>
            <div class="exit">
                <a style="text-transform: uppercase;font-size: 20px;" href="<?= BASE_URL ?>/index.php">trang chủ</a>
            </div>
        </div>
    </div>
</body>
</html>