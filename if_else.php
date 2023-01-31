<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $mong="9";
        if ($mong=="1"){
            echo "a";
        }elseif ($mong=="2"){
            echo "b";
        }elseif ($mong=="9"){
            echo "PNV";
        }
        switch($mong){
            case "1":
                echo "a";
                break;
            case "2":
                echo "b";
                break;
            case "9":
                echo "PNV";
                break;

        }
    ?>
</body>
</html>