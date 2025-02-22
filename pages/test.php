<?php

require __DIR__ ."/../vendor/autoload.php";

use App\DataBaseQuery;

// Create an instance of DataBaseQuery

$dbQuery = new DataBaseQuery();

$id = 5;
// Example Query to Fetch Data
$query = "SELECT locationName, rateper_anna,road_type,road_diameter FROM 
landrates WHERE id = ?";

$parameters = [$id];  // Example ID
$types = "i";        // "i" means integer for bind_param

$result = $dbQuery->fetchData($query, $parameters, $types);

if (!empty($result)) {
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} else {
    echo "No data found or query failed.";
}
?>
