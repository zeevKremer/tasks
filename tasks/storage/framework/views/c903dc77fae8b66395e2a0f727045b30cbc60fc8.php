<?php

$id = $_GET["update"];
$Desc = $_GET["Desc"];
$Execution = $_GET["Execution"];
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
<form action="update" method="GET">
    <input hidden name='id' value=<?php echo $id?>></input>
    <h1>תיאור המשימה</h1>
    <br>    
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