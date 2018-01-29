<?php

require_once "app.php";

$jsonText = "{
 \"firstName\":\"John\",
 \"lastName\": \"Doe\",
 \"age\": 20 
}";

$app = new App();
$person = $app->getPersonObjectFromJson($jsonText);
if ($person instanceof Person){
    echo "Done";
}