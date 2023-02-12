<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
//קבועים להתקשרות עם בסיס הנתונים
defined('DB_HOST')? null : define('DB_HOST', 'localhost');
defined('DB_USER')? null : define('DB_USER', 'root');
defined('DB_PASS')? null : define('DB_PASS', '');
defined('DB_NAME')? null : define('DB_NAME', 'dbtasks');
$connection = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
$sumRow=0;
if( isset($_GET['textarea2']) && $_GET['textarea2'] != "")
{
    
    $sql1 = "select *  from tasks";
    $result = mysqli_query($connection,$sql1);  
    while($row = mysqli_fetch_assoc($result))             
        $sumRow++;    
    $textarea2 = $_GET["textarea2"]; 
    $d= getdate();
    $f= $d['mday']."/".$d['mon']."/".$d['year']."   ".$d['hours'] .":". $d['minutes'].":". $d['seconds'];
    $sql2 = "insert into  tasks (taskId,taskDesc,addingDate,isExecution,isActive) values ("."'" .$sumRow  ."'". ","."'" .$textarea2 ."'". ","."'" .$f ."'". ",'no',1)";     
    mysqli_query($connection,$sql2);
    mysqli_close($connection);
    
    
}
if( isset($_GET['textarea1']) )
{
    $textarea1 = $_GET["textarea1"];
    $Execution = $_GET["Execution"]; 
    $id = $_GET["id"];   
    $sql = "update  tasks set taskDesc = "."'" .$textarea1 ."'". " , isExecution = "."'" .$Execution ."'". " where taskId = ".$id;    
    mysqli_query($connection,$sql);
    mysqli_close($connection);
}
$connection = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);
$sql = "select * from tasks where isActive = 1";



?>    
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
    table
    {
        
        border-color:black; 
        border-width:3px;
    }
    tr
    {
        height:40px;
       
    }
    td
    {
       
        border-color:black; 
        border-width:1.5px;
        max-width:300px;
    }
    .titel
    {
        color:black;
        background:#ac12ed;
        text-align:center;
        font-size:24px;
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
    .valeu
    {
        color:#0026ff;
        font-size:24px;
        text-align:center;
    }
    .btn
    {
        color:white;
        background-color:black;
        height:40px;
        cursor: pointer;
        font-size:14px;
    }
    .no{
       background-color:red;
       height:20px;
    }
    .yes{
       background-color:green;
    }
</style>
    </head>
    <body class="antialiased">
    <center>
<h1>טבלת משימות</h1>
<br><br>
    <a href="/add">יצירת משימה חדשה</a>
    <br><br>
<table border="1">
    <tr>
        <td class="titel">תיאור המשימה</td>
        <td class="titel">תאריך רישום</td>        
        <td class="titel">בוצעה</td>
        <td class="titel">עריכה</td>
        <td class="titel">מחיקה</td>
    </tr>
    <?php
    if($result = mysqli_query($connection,$sql)) 
    {
        //echo "<tr>";
      while($row = mysqli_fetch_assoc($result))
      {
        
        echo "<tr><td class='valeu'>".$row['taskDesc'] . "</td>";
        echo "<td class='valeu'>".$row['addingDate'] . "</td>";        
        if($row['isExecution']=="no")
            echo "<td class='no'></td>";
        else if($row['isExecution']=="yes")
            echo "<td class='yes'> </td>";
        echo "<td> <form  action='update' method='get'   ><input hidden name='update' value=".$row['taskId']."></input><input hidden name='Desc' value="."'". $row['taskDesc']."'"."></input><input hidden name='Execution' value=".$row['isExecution']."></input><input class='btn' type='submit' name='button1' value='עריכה'></input></form></td>";
        echo "<td> <form  action='delete' method='get'   ><input hidden name='delete' value=".$row['taskId']."></input><input class='btn' type='submit' name='button1' value='מחיקה'></input></form></td></tr>";
      }
     
    } 
   
    ?>
</table><br>

  
<br><br><br>
</center>
    </body>
</html>
