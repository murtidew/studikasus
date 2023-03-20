<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Masukan angka</h3>
        <form action="#" method ="POST">
            <table>
                <tr>
                    <td><input type="text" placeholder="angka1" name="a"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="angka2" name="b"></td>
                </tr>
                <tr><td></td></tr>
            </table>
            <input type="submit" name="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $a = $_POST['a'] ;
            $b = $_POST['b'] ;
            echo "<br>" ;
            echo "<hr>" ;
            if($a > $b){
                echo "<br>" ;
                echo "Angka terbesar: " . $a ;
            }elseif($b > $a){
                echo "<br>" ;
                echo "Angka terbesar: " . $b ;
            }
        }
        ?>
    </center>
</body>
</html>