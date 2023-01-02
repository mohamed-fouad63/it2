<?php
session_start();
if(!empty($_SESSION['all_dvices'])){
$db = $_SESSION['db'];
include '../../conn/conn.php';
$query_all_office = mysqli_query($conn, '
SELECT dvice.office_name,all1.money_code,all1.office_type,
COUNT(CASE WHEN dvice.id = "pc" THEN 1 ELSE NULL END) AS pc ,
COUNT(CASE WHEN dvice.id = "monitor" THEN 1 ELSE NULL END) AS monitor
FROM dvice INNER JOIN all1 ON dvice.office_name = all1.office_name GROUP BY office_name ORDER BY money_code DESC;
    ');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../assets/css/m.css">
  <style>
      .middle {
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style> 
        </head>
<body dir="rtl">
    <div class="middle">
        <div class="menu">
            
            <table class="">
                <tr class="">
                    <th>اسم المكتب</th>
                    <th>عدد الاجهزه</th>
                    <th> عدد الشاشت</th>

                 </tr>
<?php
    while($row=mysqli_fetch_assoc($query_all_office)){
$office = $row['office_name'];
$pc = $row['pc'];
$monitor = $row['monitor'];







// $all_postal_dvice_counter = $rowcount_scanner + $rowcount_parcode_printer + $rowcount_scale + $rowcount_display ;
// if($all_postal_dvice_counter != 0 and $office_type != 'قسم'
// or
// $all_postal_dvice_counter != 0 and $office_type != 'اداره عامه'
// or
// $all_postal_dvice_counter != 0 and $office_type != 'خزينه'
// or
// $all_postal_dvice_counter != 0 and $office_type != 'مباحث البريد'
// )
//   {

?>
    <tr>
    <td><?php echo $office ; ?></td>
    <td><?php echo $pc; ?></td>
    <td><?php echo $monitor; ?></td>
    </tr>

<?php } 
// }
 ?>

            </table>
        </div>
    </div>
</body>
</html>
<?php } else {
     header('location:../../views');
} ?>