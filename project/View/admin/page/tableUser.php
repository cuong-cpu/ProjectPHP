<table border="1px" width="100%" cellspacing="0px" cellpadding="5px">
    <!-- Tiêu đề bảng -->
    <tr>
        <th class="column-firts">STT</th>
        <th>Tên user</th>
        <th>SĐT</th>
        <th>password</th>
        <th>Quyền truy cập</th>
        <th class="column_update">Cập nhật</th>
    </tr>
<?php
    include("db-connect.php");

    $sql = "SELECT * FROM `users` WHERE 1";
    $values = mysqli_query($connect, $sql);
    $i = 0;

    foreach($values as $v) {
        $i++;
?> 
    <!-- end tiêu bảng -->
    
    <!-- hiển thị nội dung -->
    <tr>
        <td><?php echo $i ?> </td>
        <td><?php echo $v['name'] ?> </td>
        <td><?php echo $v['phone'] ?> </td>
        <td>********</td>
        <td>
            <?php 
                if ($v["access_rights"] == 0) {
                    echo "user thường";
                }
                else {
                    echo "user admin";
                }
            ?>
        </td>
        <td class="column_update">
            <a href="index.php?controller=admin&action=editUser&id=<?php echo $v['id']?>" class="edit">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>

            <!-- Xóa user -->
            <a href="./Model/Handle/Handle_user/deleta_user.php?id=<?php echo $v['id']?>&accessRights=<?php echo $v['access_rights']?>" class="delete">
                <i class="fa-solid fa-xmark"></i>
            </a>
            <div class="cl-fl"></div>
        </td>
    </tr>
    <!-- end hiển thị nội dung -->
<?php
    }
    mysqli_close($connect);
?>

</table>