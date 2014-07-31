<!DOCTYPE html>
<script src="Scripts/jquery-2.1.1.min.js" type="text/javascript"></script>
<html>
    <head>
        <title>Studies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
//получаем номер страницы и значение для лимита 
$cur_page = 1;
if (isset($_GET['page']) && $_GET['page'] > 0) 
{
    $cur_page = $_GET['page'];
}
echo "cur_page: ".$cur_page;
?>
        <div id="Studies">TODO write content</div>
    </body>
</html>
<?php
echo 1111111111111111;
echo '<script>';
echo '$("#Studies").load("Studies.php?page='.$cur_page.'")';
echo '</script>';
