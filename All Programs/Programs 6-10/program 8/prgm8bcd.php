<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 8 BCD</title>
</head>
<body>
    <form action="prgm8bcd.php" method="post">
        <table>
            <tr><h5>Matrix 1</h5></tr>
            <tr>
                <td>Enter [ 0 , 0 ]: </td>
                <td><input type="text" name="M100" required /></td>
            </tr>
            <tr>
                <td>Enter [ 0 , 1 ]: </td>
                <td><input type="text" name="M101" required /></td>
            </tr>
            <tr>
                <td>Enter [ 1 , 0 ]: </td>
                <td><input type="text" name="M110" required /></td>
            </tr>
            <tr>
                <td>Enter [ 1 , 1 ]: </td>
                <td><input type="text" name="M111" required /></td>
            </tr>
        </table>
        <table>
            <tr><h5>Matrix 2</h5></tr>
            <tr>
                <td>Enter [ 0 , 0 ]: </td>
                <td><input type="text" name="M200" required /></td>
            </tr>
            <tr>
                <td>Enter [ 0 , 1 ]: </td>
                <td><input type="text" name="M201" required /></td>
            </tr>
            <tr>
                <td>Enter [ 1 , 0 ]: </td>
                <td><input type="text" name="M210" required /></td>
            </tr>
            <tr>
                <td>Enter [ 1 , 1 ]: </td>
                <td><input type="text" name="M211" required /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="pop" value="Calculate">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

    if(isset($_POST['pop'])) {

        $M100 = $_POST["M100"];
        $M101 = $_POST["M101"];
        $M110 = $_POST["M110"];
        $M111 = $_POST["M111"];

        $M200 = $_POST["M200"];
        $M201 = $_POST["M201"];
        $M210 = $_POST["M210"];
        $M211 = $_POST["M211"];

        // transpose matrix
        $matrix1 = array(array($M100, $M101), array($M110, $M111));
        $matrix2 = array(array($M200, $M201), array($M210, $M211));
        $rowCount = count($matrix1); //Provides the rowcount of matrix
        $colCount = count($matrix1[0]); //Provides the column count of matrix
        $rowCount2 = count($matrix2);
        $colCount2 = count($matrix2[0]);

        echo "<hr>";
        echo "<table><tr><td>";
        echo "<h5>The input matrix 1 of (". count($matrix1) . "x" . count($matrix1[0]) .") :</h5>";
        for ($r = 0; $r < $rowCount; $r++) {
            echo "</br>";
            for ($c = 0; $c < $colCount; $c++) {
                echo $matrix1[$r][$c] . " ";
            }
        }
        echo "</td><td>";

        echo "<h5>The input matrix 2 of (". count($matrix2) . "x" . count($matrix2[0]) .") :</h5>";
        for ($r = 0; $r < $rowCount; $r++) {
            echo "</br>";
            for ($c = 0; $c < $colCount; $c++) {
                echo $matrix2[$r][$c] . " ";
            }
        }
        echo "</td></tr></table>";
        echo "<hr>";

        echo "<table><tr><td>";
        //The sum of the matrix
        echo "<h5>[D] The Sum of matrix is:</h5>";
        $sumerr=false;
        $sum="";
        for ($r = 0; $r < $rowCount; $r++) {
            echo "</br>";
            for ($c = 0; $c < $colCount; $c++) {
                if(is_numeric($matrix1[$r][$c]) && is_numeric($matrix2[$r][$c])){
                    $val = $matrix1[$r][$c] + $matrix2[$r][$c];
                    $sum = $sum . " " . $val;
                }else $sumerr=true;
            }
            $sum = $sum . " <br>";
            if($sumerr==true) break;
        }
        if($sumerr==true) echo "Addition of these Matrices is not Possible";
        else echo $sum;
        echo "</td><td>";

        echo "<h5>[C] The Multiplication of matrix is:</h5>";
        $mulerr=false;
        $mul="";
        if($colCount == $rowCount2)
        {
            for($r = 0;$r < $rowCount;$r++)
            {
                echo "</br>";
                for($c = 0;$c < $colCount;$c++)
                {
                    if(is_numeric($matrix1[$r][$c]) && is_numeric($matrix2[$r][$c])){
                        $val = $matrix1[$r][$c] * $matrix2[$r][$c];
                        $mul = $mul . " " . $val;
                    }
                    else $mulerr=true;
                }
                $mul = $mul . " <br>";
                if($mulerr==true) break;
            }
            if($mulerr==true) echo "Multiplication of these Matrices is not Possible";
            else echo $mul;
        } else {
            echo "<h5>The matrix multiplication is not possible.</h5>";
        }
        echo "</td></tr></table>";
        echo "<hr>";

        echo "<table><tr><td>";
        //The transpose of the matrix
        echo "<h5>[B] Transpose Matrix 1:</h5>";
        for ($r = 0; $r < $colCount; $r++) {
            echo "</br>";
            for ($c = 0; $c < $rowCount; $c++) {
                echo $matrix1[$c][$r] . " ";
            }
        }
        echo "</td><td>";
        echo "<h5>Transpose Matrix 2:</h5>";
        for ($r = 0; $r < $colCount2; $r++) {
            echo "</br>";
            for ($c = 0; $c < $rowCount2; $c++) {
                echo $matrix2[$c][$r] . " ";
            }
        }
        echo "</td></tr></table>";
        echo "<hr>";
    }
?>