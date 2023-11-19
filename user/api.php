<?php 

header("Content-Type: application/json");

$db = mysqli_connect(
    'localhost',
    'root',
    '',
    'dpm_server_db'
);

$results = mysqli_query($db, "SELECT * FROM data_hiv");
$data = [];

foreach($results as $item) {
    $data[] = 
    [
        "id" => $item['id'],
        "kode" => $item['kode_gejala'],
        "gejala" => $item['gejala']
    
    ];
}
echo json_encode($data);

?>