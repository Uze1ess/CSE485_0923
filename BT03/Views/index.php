<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <button class="btn btn-primary col-1" ><a href="views/home/add_album.php" style="text-decoration: none;color: white">Thêm dữ liệu</a></button>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên bài há</th>
                    <th>Ca sĩ</th>
                    <th>Thể loại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($students as $student){
                        ?>
                        <tr>
                            <th><?php echo  $student->getId(); ?></th>
                        </tr>
                        <tr>
                            <th><?php echo  $student->gettensinhVien(); ?></th>
                        </tr>
                        <tr>
                            <th><?php echo  $student->getEmail(); ?></th>
                        </tr>
                        <tr>
                            <th><?php echo  $student->getngaySinh(); ?></th>
                        </tr>
                        <tr>
                            <th><?php echo  $student->getidLop(); ?></th>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
