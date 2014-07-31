Исследования
<table>
    <th>Uid</th><th>PatientId</th>
<?php 
 $user='root';
$pass='P@ssw0rd';
$per_page = 10;

//получаем номер страницы и значение для лимита 
$cur_page = 1;
if (isset($_GET['page']) && $_GET['page'] > 0) 
{
    $cur_page = $_GET['page'];
}
$start = ($cur_page - 1) * $per_page;
echo $cur_page;
try {
    $dbh = new PDO('mysql:host=localhost;dbname=megapacs', $user, $pass);
    foreach($dbh->query('SELECT * from study LIMIT '.$cur_page.', '.$per_page) as $row) {
     echo "<tr><td>".$row["InstanceUid"].'</td><td>'.$row["PatientId"]."</td></tr>";
    }
    
//    $dbh = null;
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table>

 