<?
$persons["Svit"] = array("name"=>"Lana", "surname"=>"Sweet", "position"=>"student");
$persons["Dmytro"] = array("name"=>"Dmytro", "surname"=>"Yoshi", "position"=>"student");
foreach($persons as $elem){
    echo "<div>Name: ". $elem['name']." ". $elem['surname'].", Position: ".$elem['position']."</div>";
}