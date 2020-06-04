<?php


//main directory of all script files
$dir = opendir("script"); 
//a json based array of all the data
$data = []; 
while ($file = readdir($dir)) {
    //file type of the script e.g js, php, py
    $fileExt = pathinfo($file, PATHINFO_EXTENSION);
    switch ($fileExt) {
        case 'php':

            if(exec("php script/$file", $output, $stat)){
                
                $datum = json_decode($output[0], true);
                $data[]= $datum;

                $output = [];
            }
            
            break;
        case 'js' :
           if( exec("node script/$file", $output, $stat)){
                $datum = json_decode($output[0], true);
                $data[]= $datum;
                $output = []; 
           }
            
            if ($stat == 0) {
                # code...
            }    
            break;
        case 'py' :
            if(exec("python script/$file", $output, $stat)){
                $datum = json_decode($output[0], true);
                $data[]= $datum;
                $output = [];
            }
            
            break;
        case 'dart' :
            if(exec("dart script/$file", $output, $stat)){
                $datum = json_decode($output[0], true);
                $data[]= $datum;
                $output = [];
            };
            

            break;
        default:
            # code...
            break;
    }
}

if (isset($_GET["json"])) {
        header("Content-Type: application/json");
        echo json_encode($data);
    
}
else {
    header("Content-Type: text/html");
    include "Layout/header.php";
    foreach ($data as $datums) {
        echo "<tr>";
            foreach (array_keys($datums) as $value) {
                echo "<td>$datums[$value]</td>";
            }
            
        echo "</tr>";
        
        

    }
    include "Layout/footer.php";
}