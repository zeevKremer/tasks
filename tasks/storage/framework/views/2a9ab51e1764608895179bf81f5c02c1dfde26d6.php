<?php
//קבועים להתקשרות עם בסיס הנתונים
defined('DB_HOST')? null : define('DB_HOST', 'localhost');
defined('DB_USER')? null : define('DB_USER', 'root');
defined('DB_PASS')? null : define('DB_PASS', '');
defined('DB_NAME')? null : define('DB_NAME', 'dbtasks');
$connection = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
$sql = "insert into  tasks (taskDesc,isExecution,isActive) values ('123','no',1)";
mysqli_query($connection,$sql);
mysqli_close($connection);
 ?>
<center>
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
    .btn
    {
        color:white;
        background-color:black;
        height:40px;
        cursor: pointer;
        font-size:14px;
    }    
    textarea
    {
    direction:rtl;
    color:#0026ff;
    font-size:24px;
    text-align:center;
    background-color:#7ad8c7;
    }

</style>
<form action="index.php" method="get">
    <h1>תיאור המשימה</h1>
    <br>
    <textarea rows="10" cols="50" name="textarea2"></textarea><br><br>    
    <input class="btn" type="submit" name="button1" value="אישור">
</form>
</center>
<?php /**PATH C:\xampp\htdocs\tasks1\resources\views/add.blade.php ENDPATH**/ ?>