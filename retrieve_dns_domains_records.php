<?php
function fetchAPI($url) {
    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Execute cURL request
    $response = curl_exec($ch);
    
    // Close cURL session
    curl_close($ch);
    
    return json_decode($response, true);
}

$api_key = 'h523hDtETbkJ3nSJL323hjYLXbCyDaRZ';
$base_url = 'https://api.recruitment.shq.nz';
$client_id = 100;

// Fetch domains for the client
$domains_url = "$base_url/domains/$client_id?api_key=$api_key";
$domains_data = fetchAPI($domains_url);

if (!$domains_data) {
    echo "Failed to fetch domains.";
    exit;
}

echo "Domains and DNS Records for client_id $client_id:\n\n";

for ($i = 0; $i < count($domains_data); $i++) {
    
    // Get zones data
    $zones_data = $domains_data[$i]['zones'];

    for ($j = 0; $j < count($zones_data); $j++) {
        $domain_name = $domains_data[$i]['name'];
        echo "Domain Name: $domain_name\n";

        $zone_name = $zones_data[$j]['name'];
        echo "Zone Name: $zone_name\n";

        $zone_uri = $zones_data[$j]['uri'];
        
        $zones_url = "$base_url$zone_uri?api_key=$api_key";

        // Fetch dns records for the zone
        $zones_datalist = fetchAPI($zones_url);

        // Print DNS records
        if ($zones_datalist) {
            print_r($zones_datalist);
        } else {
            echo "\nFailed to fetch records for Zone URI: $zone_uri\n";
        }
    }

    echo "\n";
}
?>