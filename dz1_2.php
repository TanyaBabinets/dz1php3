<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            padding: 10px;

            border: 1px solid black;
        }
    </style>
</head>
<body>

 <table>
     <tr>

     <?php
     for($i=2;$i<=10;$i++) {
         echo "<td>";
         for ($j = 2; $j <= 10; $j++) {
             echo "$i * $j=" . ($i * $j)."<br>";
         }
         echo "</td>";
     }
     ?>
     </tr>
     </table>
</body>
</html>
