<?php
//קבועים להתקשרות עם בסיס הנתונים
defined('DB_HOST')? null : define('DB_HOST', 'localhost');
defined('DB_USER')? null : define('DB_USER', 'root');
defined('DB_PASS')? null : define('DB_PASS', '');
defined('DB_NAME')? null : define('DB_NAME', 'dbtasks');
$connection = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
$id = $_GET["delete"];
$sql = "update  tasks set isActive = 0 where taskId = ".$id;
mysqli_query($connection,$sql);
mysqli_close($connection);    
?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
                body
    {
        direction:rtl;
        background:#b8cef6;
    }
    h1
    {
        color:blue;
    }    
    a
    {
        background-color: #54e6a0;
        color: #af22f1;
        text-decoration: none;
        height: 40px;
        width: 100px;
        font-size: 25px;
    }
    a:hover {
        background-color: #4800ff;
        color: #00ff21;
        text-decoration: none;
    }
        </style>
      
</head>      
<body class="antialiased">      
    <center>
        <br><br>
        <h1>המשימה נמחקה בהצלחה</h1>
        <br><br>
        <a href="index.php">חזרה לדף המשימות</a>
    </center>
</body<?php /**PATH C:\xampp\htdocs\tasks1\resources\views/delete.blade.php ENDPATH**/ ?>