<?php


// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $uri = explode('?', $uri);

// $out = file_get_contents("script/JohnOba.php");
// echo $out;
//main directory of all script files
$dir = opendir("script"); 
//a json based array of all the data
$data = []; 
while ($file = readdir($dir)) {
    //file type of the script e.g js, php, py
    $fileExt = explode(".", $file)[count(explode(".", $file)) - 1]; 
// echo $fileExt;
    switch ($fileExt) {
        case 'php':

            exec("php script/$file", $output, $stat);
            $datum = json_decode($output[0], true);
            $data[]= $datum;
            $output = [];
            break;
        case 'js' :
            exec("node script/$file", $output, $stat);
            $datum = json_decode($output[0], true);
            if ($stat == 0) {
                # code...
            }
            $data[]= $datum;
            $output = [];
                
            break;
        case 'py' :
            exec("python script/$file", $output, $stat);
            $datum = json_decode($output[0], true);
            $data[]= $datum;
            $output = [];

            break;
        case 'dart' :
            exec("dart script/$file", $output, $stat);
            $datum = json_decode($output[0], true);
            $data[]= $datum;
            $output = [];

            break;
        default:
            # code...
            break;
    }
    // exec("php script/$file", $output, $stat);
}

// $output = [];
// $stat;
// exec("node script/JohnOba.js", $output, $stat);
if (isset($_GET["json"])) {
        header("Content-Type: application/json");
        echo json_encode($data);
    
}
else {
    header("Content-Type: text/html");
    echo "<table>
            <tr>
                <td>Output</td>
                <td>Name</td>
                <td>HNG-ID</td>
                <td>email</td>
                <td>Language</td>
            </tr>
            
            ";
    foreach ($data as $datums) {
        echo "<tr>";
            foreach (array_keys($datums) as $value) {
                echo "<td>$datums[$value]</td>";
            }
            
        echo "</tr>";
        
        

    }
    
}