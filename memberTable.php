<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost","root","",);

if($conn) {
    $selected = mysqli_select_db($conn,"blueshop");
    mysqli_set_charset($conn, "utf8");
}else{
    echo mysql_errno();
}

$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysqli_query($conn, $sql);
?>

<table boder = "1">
    <?php while($row = mysqli_fetch_array($objQuery)){
    ?>
    <tr>
    <td>
    <div style="padding: 15px">
    ชื่อสมาชิก : <?=$row["username"]?><br>
    รหัสผ่าน : <?=$row["password"]?><br>
    ชื่อ-นามสกุล : <?=$row["name"]?><br>
    ที่อยู่ : <?=$row["address"]?><br>
    เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
    อีเมล : <?=$row["email"]?><br>
    </div>
    </td>
    </tr>
    <?php } ?>
</table>