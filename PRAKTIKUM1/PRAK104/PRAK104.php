<!DOCTYPE html>
<head>
    <style>
       table, tr, td{
        margin: 0;
        padding: 0;
        border: 2px solid black;
       } 
       h4{
        margin: 0;
        padding: 0;
       }
    </style>
</head>
<body>
    <table>
        <tr><td><h4>Daftar Smartphone Samsung</h4></td></tr>
        <?php
            $arr = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
            for ($i = 0;$i<sizeof($arr); $i++){
            echo "<tr><td>$arr[$i]</td></tr>";
            }
        ?>
    </table>

</body>
</html>