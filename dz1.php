<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            height: 40px;
        }
    </style>
</head>
<body>
    <?
        $arr_color = array("deeppink", "yellow", "cornflowerblue", "darkmagenta", "goldenrod", "lawngreen");
        $arr_selected_colors = array();

        while(count($arr_selected_colors) < 4){
            $rand_index = array_rand($arr_color);
            $random_color = $arr_color[$rand_index];

            if(!in_array($random_color, $arr_selected_colors)){
                $arr_selected_colors[] = $random_color;
            }
        }

        foreach($arr_selected_colors as $color){
            echo "<div style='background-color: ".$color."'></div>";
        }
    ?>
</body>
</html>