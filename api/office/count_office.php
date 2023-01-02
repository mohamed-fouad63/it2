<?php
include("../../middleware/middleware_session.php");
// session_login_auth(!$_SESSION['all_dvices']);
if(!empty($_GET['office_type'])){
    $db = $_SESSION['db'];
    include_once "../../conn/conn.php";
$office_type = $_GET['office_type'];

$query_offices_type=mysqli_query($conn, "select office_name ,post_group,money_code,post_code,postal_code,tel,address,office_type from all1 WHERE office_type = '$office_type' ");


?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/all.css">
        <link rel="stylesheet" href="../../assets/css/count_dvice.css">
  <style>
      
    </style> 
        </head>
<body dir="rtl">
    <div class="middle">
        <div class="menu">
            <table class="">
                <tr class="">
                    <th>نوع الوحده اللبريديه</th>
                    <th>اسم الوحده</th>
                    <th>مجموعه بريد</th>
                    <th>كود مالى</th>
                    <th>كود بريدى</th>
                    <th>كود بوستال</th>
                    <th>تليفون</th>
                    <th>عنوان</th>
                 </tr>
            <?php
                while($row=mysqli_fetch_assoc($query_offices_type)){ ?>
                    <tr>
                    <td><?php echo $row['office_type'] ; ?></td>
                    <td><?php echo $row['office_name'] ; ?></td>
                    <td><?php echo $row['post_group']; ?></td>
                    <td><?php echo $row['money_code']; ?></td>
                    <td><?php echo $row['post_code']; ?></td>
                    <td><?php echo $row['postal_code']; ; ?></td>
                    <td><?php echo $row['tel'];; ?></td>
                    <td><?php echo $row['address']; ; ?></td>
                    </tr>
    <?php } ?> 
            </table>
        </div>
    </div>
</body>
</html>
<?php } else {
      header('location:../../views');
} ?>