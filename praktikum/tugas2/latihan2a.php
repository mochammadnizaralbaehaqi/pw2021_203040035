<?php 
// Nama : Mochammad nizar albaehaqi
// Nrp : 203040035
// Shift : Rabu 9.00 - 10.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2a</title>
    <style>
        .style1{
            width : 50%;
            margin : auto;
            border : 2px solid black;
            box-shadow : 0 0 15px #000;
            border-radius : 5px;
        }
        .style2{
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    
    <?php 
    
    function gantiStyle($tulisan, $Style1 = "style1", $Style2 = "style2"){
        return "<div class = $Style1><p class = $Style2>$tulisan</p></div>";
    }
    echo gantiStyle("Selamat datang di praktikum PW");
    ?>


</body>
</html>