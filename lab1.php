<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=?, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="style/style.css"> -->
    <style>
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }

        .wrapper{
            max-width: 1200px;
            margin: 0 auto;
        }

        .title{
            color: cornflowerblue;
            text-shadow: 2px 2px 1px #b3b300;
            text-align: center;
        }

        .back_color{
            padding: 20px;
            background-color: bisque;
        }

        .info{
            font-size: 20px;
            margin-bottom: 10px;
        }

        td{
            width: 40px;
            height: 40px;
        }

        .td_color_1{
            background: lightgray;
            text-align: center;
        }

        th{
            font-weight: bold;
            text-align: center;
            background-color: darkgray;
            width: 40px;
            height: 40px;
        }

        .multi_table{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="back_color">
        <div class="wrapper">
            <h2 class="title">TASK 1</h2>
                <?
                //------------------task_1--------------------
                $cars = [
                    'BMW'=>[
                        'model' => 'X5', 
                        'price' => 10000, 
                        'year' => 2015
                    ],
                    'TOYOTA'=>[
                        'model' => 'Camry', 
                        'price' => 8000, 
                        'year' => 2012
                    ],
                    'SKODA'=>[
                        'model' => 'Octavia', 
                        'price' => 6000, 
                        'year' => 2010
                    ]
                ];
                $num=0;
                foreach($cars as $key=>$car){
                    echo "<h2>Car #".(++$num).":</h2>";
                    echo "<div class='info'>model - ".$car['model'].", price - ".$car['price'].", year - ".$car['year'].";</div>";
                }
            ?>
        </div>  
    </div>

    <div class="back_color">
        <div class="wrapper">
            <h2 class="title">TASK 2.1</h2>
            <div class="multi_table">
                <?
                    //------------------task_2.1--------------------
                    $rows=5;
                    $cols=5;

                    echo "<table>";

                    echo "<tr>";
                    echo "<th></th>";

                    for($i = 1; $i <= $cols; $i++){
                        echo "<th>".$i."</th>";
                    }

                    echo "</tr>";

                    for($i = 1; $i <= $rows; $i++){

                        echo "<tr>";
                        echo "<th>".$i."</th>";

                        for($j = 1; $j <= $cols; $j++){
                            $res = $i * $j;
                            echo "<td class='td_color_1'>".$res."</td>";
                        }

                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </div>
        </div> 
    </div>

    <div class="back_color">
        <div class="wrapper">
            <h2 class="title">TASK 2.2</h2>
            <div class="multi_table">  
                <?
                    //------------------task_2.2--------------------
                    $cols = 5;
                    $rows = 5;

                    echo '<table>';

                    for ($i = 1; $i <= $rows; $i++) {
                        echo '<tr>';

                        for ($j = 1; $j <= $cols; $j++) {
                            $res = $i * $j;

                            $style = '';
                            if ($i === 1 || $j === 1) {
                                $style = 'style="font-weight: bold; text-align: center; background: darkgray;"';
                            } else {
                                $style = 'style="background: lightgray; text-align: center;"';
                            }

                            echo '<td ' . $style . '>' . $res . '</td>';
                        }

                        echo '</tr>';
                    }

                    echo '</table>';
                ?>
            </div>
        </div> 
    </div>
    
</body>
</html>