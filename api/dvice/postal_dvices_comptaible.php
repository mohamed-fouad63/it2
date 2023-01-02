<?php
session_start();
if(!empty($_SESSION['all_dvices'])){
$db = $_SESSION['db'];
include '../../conn/conn.php';
$query_all_office = mysqli_query($conn, '
SELECT dvice.office_name,all1.money_code,all1.office_type,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "قارىء باركود" THEN 1 ELSE NULL END) AS postalscanner,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "طابعه باركود" THEN 1 ELSE NULL END) AS postalprinter,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "شاشه عرض عملاء" THEN 1 ELSE NULL END) AS postalmonitor,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "ميزان الكتروني" THEN 1 ELSE NULL END) AS postalscale
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
                    <th>نوع المكتب</th>
                    <th>قارئ باركود</th>
                    <th> طابعه باركود</th>
                    <th>ميزان اليكترونى</th>
                    <th>شاشه عرض عملاء</th>
                 </tr>
<?php
    while($row=mysqli_fetch_assoc($query_all_office)){
$office = $row['office_name'];
$office_type = $row['office_type'];
$postalscanner = $row['postalscanner'];
$postalprinter = $row['postalprinter'];
$postalscale = $row['postalscale'];
$postalmonitor = $row['postalmonitor'];

?>
    <tr>
    <td><?php echo $office ; ?></td>
    <td><?php echo $office_type ; ?></td>
    <td <?PHP if( $postalscanner == 0 ){ echo 'style="background-color:#a51717" ';} ?>><?php echo $postalscanner ;?></td>
    <td><?php echo $postalprinter; ?></td>
    <td><?php echo $postalscale; ?></td>
    <td><?php echo $postalmonitor ; ?></td>
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
