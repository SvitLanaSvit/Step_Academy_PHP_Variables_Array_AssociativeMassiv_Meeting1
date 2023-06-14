<?
$num1 = 10;
$num2 = 100;
echo "<span style='color: red;font-size: 20px;'> Sum: ".($num1 + $num2)."</span><br>";
echo "$num1 + $num2 = ".($num1 + $num2)."<br>";
echo '$num1 + $num2 = '.($num1 + $num2)."<br>"; 
$role = "manager";
switch($role){
    case "admin":
        echo "You can full access to resource<br>";
        break;
    case "manager":
        echo "You can full access to CMS<br>";
        break;
    case "user":
        echo "You can only view info<br>";
        break;
    default:
        echo "Not allowed!<br>";
}
$arr = array();
$arr1[0] = "Hello";
$arr1[1] = "PHP";
$arr1[] = "The Best!<br>";
echo "$arr1[0] $arr1[1] $arr1[2]";

$i = 0;
$str = "";

while($i<count($arr1)){
    $str.="$arr1[$i] ";
    $i++;
}
echo $str;