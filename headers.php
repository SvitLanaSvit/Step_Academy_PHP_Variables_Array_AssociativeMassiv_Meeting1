<?
$headers=apache_request_headers();
if($headers){
    echo "<table><thead><tr><th>Headers</th><th>Value</th></tr></thead>";
    foreach($headers as $key=>$val){
        echo "<tr><td>$key</td><td>$val</td></tr>";
    }
    echo "</table>";
}
else{
    echo "There aren`t any headers in request!";
}