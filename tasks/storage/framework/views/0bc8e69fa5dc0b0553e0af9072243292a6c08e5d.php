<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/main.css" rel="stylesheet">

      

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
    <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td  class="valeu"><?php echo e($item['taskDesc']); ?></td>
        <td   class="valeu"><?php echo e($item['addingDate']); ?></td>
        <?php 
            if($item['isExecution']=="no")
                echo "<td class='no'></td>";
            else if($item['isExecution']=="yes")
                echo "<td class='yes'></td>";
        ?>
        <td> <form  action="update" method="get" ><input hidden name="update" value="<?php echo e($item['taskId']); ?>"></input><input hidden name="Desc" value="<?php echo e($item['taskDesc']); ?>"></input><input hidden name="Execution" value="<?php echo e($item['isExecution']); ?>"></input><input class="btn" type="submit" name="button1" value="עריכה"></input></form></td>
        <td> <form  action="delete" method="get"   ><input hidden name="delete" value="<?php echo e($item['taskId']); ?>"></input><input class="btn" type="submit" name="button1" value="מחיקה"></input></form></td></tr>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
</table><br>

  
<br><br><br>
</center>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\tasks1\resources\views/a.blade.php ENDPATH**/ ?>