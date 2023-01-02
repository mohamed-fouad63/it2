<?php
session_start();
if(!empty($_SESSION['all_dvices'])){
$db = $_SESSION['db'];
include '../../conn/conn.php';
$query1=mysqli_query($conn, "SELECT a.sn,a.office_name,a.dvice_name FROM dvice a JOIN (SELECT sn, COUNT(sn) FROM dvice WHERE sn !='' GROUP BY sn HAVING count(sn) > 1 ) b ON a.sn = b.sn ORDER BY a.sn
");
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
                    <th>الجهاز</th>
                    <th>السريال</th>
                    
                 </tr>
<?php
             while($row=mysqli_fetch_assoc($query1)){   
    echo "<tr><td>".
        $row['office_name']."</td><td>".$row['dvice_name']."</td><td>".$row['sn']."</td></tr>";
} ?> 
            </table>
        </div>
    </div>
</body>
</html>
<?php } else {
     header('location:../../views');
} ?>