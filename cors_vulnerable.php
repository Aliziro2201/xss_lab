<?php
header("Access-Control-Allow-Origin: *"); // همه دامنه‌ها اجازه دسترسی دارند
echo json_encode(["message" => "This endpoint is vulnerable to CORS misconfiguration"]);
?>