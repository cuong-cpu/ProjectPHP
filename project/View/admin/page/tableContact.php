<link rel="stylesheet" href="../css/index.css">
<?php
    include("db-connect.php");

    $sql = "SELECT * FROM `contact` WHERE 1";
    $values = mysqli_query($connect, $sql);
    $i = 0;

    $row = mysqli_num_rows($values);
    if ($row == 0) {
?>
    <h2>Danh sách phản hồi rỗng ...!</h2>
<?php
    } 

    // Hiển hị nội dung
    else {
?> 

<table border="1px" width="100%" cellspacing="0px" cellpadding="5px">
    <!-- Tiêu đề bảng -->
    <tr>
        <th class="column-firts">STT</th>
        <th>Tên người dùng</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Nội dung phản hồi</th>
        <th>Phản hồi lúc</th>
        <th>Trạng thái</th>
        <th class="column_update_contact" colspan="2">Cập nhật</th>
    </tr>
    <!-- end tiêu bảng -->

<?php
        foreach($values as $v) {
            $i++;
?>

    <!-- hiển thị nội dung -->
    <tr>
        <td> <?php echo $i ?> </td>
        <td> <?php echo $v['name']?> </td>
        <td> <?php echo $v['phone']?> </td>
        <td> <?php echo $v['email']?> </td>
        <td> <?php echo $v['content']?> </td>
        <td> <?php echo $v['time']?> </td>
        <td> 
            <?php 
                if ($v['trang_thai'] == 0) {
                    echo "chưa phản hồi lại";
                }
                else {
                    echo "đã phản hồi";
                }
            ?> 
        </td>
        <td class="column_update_contact">
            <form action="./Model/Handle/update_contact.php?id=<?php echo$v['id']?>" method="post">
                <select name="edit_trang_thai" id="edit_trang_thai">
                    <option value="0">chưa phản hồi lại</option>
                    <option value="1">đã phản hồi</option>
                </select>
                <button class="edit" type="submit">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
                <div class="cl-fl"></div>
            </form>
        </td>
    </tr>
    <!-- end hiển thị nội dung -->
<?php
        }
    }
    mysqli_close($connect);
?>

</table>