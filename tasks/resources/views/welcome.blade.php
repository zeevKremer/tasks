<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    @foreach($collection as $item)
    <tr>
        <td  class="valeu">{{$item['taskDesc']}}</td>
        <td   class="valeu">{{$item['addingDate']}}</td>
        <?php 
            if($item['isExecution']=="no")
                echo "<td class='no'></td>";
            else if($item['isExecution']=="yes")
                echo "<td class='yes'></td>";
        ?>
        <td> <form  action="update" method="GET" ><input hidden name="id" value="{{$item['id']}}"></input><input hidden name="Desc" value="{{$item['taskDesc']}}"></input><input hidden name="Execution" value="{{$item['isExecution']}}"></input><input class="btn" type="submit" name="button1" value="עריכה"></input></form></td>
        <td> <form  action="delete" method="GET"   ><input hidden name="delete" value="{{$item['id']}}"></input><input class="btn" type="submit" name="button1" value="מחיקה"></input></form></td></tr>
    </tr>
    @endforeach       
</table><br>

  
<br><br><br>
</center>
    </body>
</html>
