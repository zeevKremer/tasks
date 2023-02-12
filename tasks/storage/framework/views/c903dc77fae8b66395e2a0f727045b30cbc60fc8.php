<?php
//קבועים להתקשרות עם בסיס הנתונים
defined('DB_HOST')? null : define('DB_HOST', 'localhost');
defined('DB_USER')? null : define('DB_USER', 'root');
defined('DB_PASS')? null : define('DB_PASS', '');
defined('DB_NAME')? null : define('DB_NAME', 'dbtasks');
$connection = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
$id = $_GET["update"];
$Desc = $_GET["Desc"];
$Execution = $_GET["Execution"];
if( isset($_GET['textarea1']) )
{
   
    
    $textarea1 = $_GET["textarea1"];    
    $sql = "update  tasks set taskDesc = " .$textarea1 . " , isExecution = " .$Execution . " where taskId = ".$id;
    mysqli_query($connection,$sql);
    mysqli_close($connection);
}
    


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
    h3
    {
        color:blue;
        
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
    <input hidden name='id' value=<?php echo $id?>></input>
    <h1>תיאור המשימה</h1>
    <br>
    <textarea rows="10" cols="50" name="textarea1" > <?php echo $Desc; ?> </textarea><br><br>
    <?php if($Execution == "yes" )
    {
        echo  "<h3>המשימה בוצעה</h3><input  type='radio' checked id='execution' name='Execution' value='yes'><h3>המשימה לא בוצעה</h3><input  type='radio'  id='execution' name='Execution' value='no'><br><br>" ;
    }
    else if($Execution == "no" )
    {
        echo  "<h3>המשימה לא בוצעה</h3><input type='radio' checked id='execution' name='Execution' value='no'><h3>המשימה בוצעה</h3><input type='radio'  id='execution' name='Execution' value='yes'><br><br>" ;
    }?>
    
    <input class="btn" type="submit" name="button1" value="אישור">
    
</form>
</center>

<?php /**PATH C:\xampp\htdocs\tasks1\resources\views/update.blade.php ENDPATH**/ ?>