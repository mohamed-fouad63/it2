<?php
session_start();
if(!empty($_SESSION['all_dvices'])){
$db = $_SESSION['db'];
include '../../conn/conn.php';
$querypc = mysqli_query($conn, '
SELECT dvice.office_name,all1.money_code,all1.office_type,
COUNT(CASE WHEN dvice.id = "pc" THEN 1 ELSE NULL END) AS pc ,
COUNT(CASE WHEN dvice.id = "monitor" THEN 1 ELSE NULL END) AS monitor ,
COUNT(CASE WHEN dvice.id = "printer" THEN 1 ELSE NULL END) AS printer ,
COUNT(CASE WHEN dvice.id = "pos" AND dvice_name = "verifone vx 520" OR  dvice_name = "verifone vx 675"  THEN 1 ELSE NULL END)  AS posfinance ,
COUNT(CASE WHEN dvice.id = "pos" AND dvice_name = "verifone vx 510" THEN 1 ELSE NULL END)  AS vx510 ,
COUNT(CASE WHEN dvice.id = "pos" AND dvice_name = "VERIFONE V200T" THEN 1 ELSE NULL END)  AS V200T ,
COUNT(CASE WHEN dvice.id = "pos" AND dvice_name = "BITEL IC3600" THEN 1 ELSE NULL END)  AS BITEL ,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "قارىء باركود" THEN 1 ELSE NULL END) AS postalscanner,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "طابعه باركود" THEN 1 ELSE NULL END) AS postalprinter,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "شاشه عرض عملاء" THEN 1 ELSE NULL END) AS postalmonitor,
COUNT(CASE WHEN dvice.id = "postal" AND dvice_type = "ميزان الكتروني" THEN 1 ELSE NULL END) AS postalscale
FROM dvice INNER JOIN all1 ON dvice.office_name = all1.office_name GROUP BY office_name ORDER BY money_code DESC;
    ');
while ($row = mysqli_fetch_assoc($querypc)) {
     $row_read_dvice_json[] = $row;
}
echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
//     echo "<tr>
//     <td>" . $row['office_name'] . "</td>
//     <td>" . $row['office_type'] . "</td>
//     <td>" . $row['money_code'] . "</td>
//     <td>" . $row['pc'] . "</td>
//     <td>" . $row['monitor'] . "</td>
//     <td>" . $row['printer'] . "</td>
//     <td>" . $row['posfinance'] . "</td>
//     <td>" . $row['V200T'] . "</td>
//     <td>" . $row['BITEL'] . "</td>
//     <td>" . $row['postalscanner'] . "</td>
//     <td>" . $row['postalprinter'] . "</td>
//     <td>" . $row['postalmonitor'] . "</td>
//     <td>" . $row['postalscale'] . "</td>
//     </tr>";
// }
 } else {
     header('location:../../views');
} ?>
