<?php
// database connection
require "model.php";
$DB = new DB();

// (B) SEARCH FOR USERS
$results = $DB->select(
  "SELECT * FROM `user`"
);

// (C) OUTPUT RESULTS
echo json_encode(count($results)==0 ? null : $results);
