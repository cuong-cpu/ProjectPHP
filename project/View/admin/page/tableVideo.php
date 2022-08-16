<?php
    include("db-connect.php");

    $sql = "SELECT * FROM `video` WHERE 1";
    $values = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($values);
    $i = 0;

    if ($row == 0) {
?>
    <h2>Danh sách video rỗng ...!</h2>
<?php 
    }
    // nếu danh sách không rỗng hiển thị danh sách
    else {
?> 

<table border="1px" width="100%" cellspacing="0px" cellpadding="5px">
    <!-- Tiêu đề bảng -->
    <tr>
        <th class="column-firts">STT</th>
        <th>Tên Video</th>
        <th>Link video</th>
        <th class="column_update">Cập nhật</th>
    </tr>
    <!-- end tiêu bảng -->

<?php
        foreach($values as $v) {
            $i++
?>    
    <!-- hiển thị nội dung -->
    <tr>
        <td> <?php echo $i ?> </td>
        <td> <?php echo $v['name'] ?> </td>
        <td> <?php echo $v['src'] ?></td>
        <td class="column_update">
            <a href="index.php?controller=admin&action=editVideo&id=<?php echo $v['id']?>" class="edit">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            
            <!-- Xóa Video -->
            <a href="./Model/Handle/Handle_video_document/deleta_video.php?id=<?php echo $v['id']?>" class="delete">
                <i class="fa-solid fa-xmark"></i>
            </a>
            <div class="cl-fl"></div>
        </td>
    </tr>
    <!-- end hiển thị nội dung -->
<?php  
        }      
    }
    mysqli_close($connect);
?>

</table>