<html>
<head>
    <style>
       table, tr, td{
        margin: 0;
        padding: 0;
        border: 2px solid black;
       } 
       #tableHead{
        background-color: red;
       }
       h4{
        margin: 10 auto;
       }
    </style>
</head>
<body>
    <table>
        <tr><td id=tableHead><h4>Daftar Smartphone Samsung</h4></td></tr>
        <?php
            $arr = [10 =>'Samsung Galaxy S22', 11 => 'Samsung Galaxy S22+', 12 => 'Samsung Galaxy A03', 13 => 'Samsung Galaxy Xcover 5'];
            foreach($arr as $val){
            echo "<tr><td>$val</td></tr>";
            }
        ?>
    </table>

</body>
</html>