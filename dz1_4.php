<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        table{
            width: 600px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 20px auto;
            width:25%;
        }
        td {
            padding: 10px;
           background-color: lightgrey;
        }
        th{
            background-color: red;
            height: 30px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Year</th>
        <th>SumStart</th>
        <th>SumEnd</th>
        <th>Profit</th>
    </tr>
        <?php
$mySum = 300;
$percent=0.2;

        for($year=1;$year<=20;$year++) {
          $sumStart=$mySum;
          $profit=$sumStart*$percent;
          $sumEnd=$mySum+$profit;

          $sumStart2=number_format($sumStart,2);
          $sumEnd2=number_format($sumEnd,2);
          $profit2=number_format($profit,2);

          echo "<tr>
            <td>$year</td>
        <td>$sumStart2</td>
        <td>$sumEnd2</td>
        <td>$profit2</td>
            </tr>";
          $mySum=$sumEnd;
        }
        ?>

</table>
</body>
</html>
