<?php
$lines = readInputFromFile(zip_code.csv);
$zip = fopen("zipdata.sql","w") or die("Unable to open file");

for($count = 1; $count <(count($lines)-1));$count++
{
    list($zipcode,$lat, $long, $city, $state,$country) = explode(",", $lines[$count]);
    $query = "INSERT INTO 'zipcode'('zip,'city', 'state','longitude',''latitude') VALUES ('$zipcode','$city','$state','$long','$lat')";
    $exe = mysqli_query($db,$query);
    $txt = $query.";\n";
    fwrite($zip,$txt);

    if($exe)
    {
        echo "<br>";
        echo "Success in Insert - Record ".$count;
        
        $new_longitude = (int)$long;
        $new_latitude = (int)$lat;

        $update = "UPDATE 'burger_king_location_clean' SET 'zip' = '$zipcode' WHERE 'longitude' = '$new_longitude' AND 'latitude'= '$new_latitude'";
        $update_run = mysqli_query($db,$update);
        
        if($update_run == TRUE)
        {
            echo "<br>";
            echo "Success in Update - Record ".$count;
            echo "<br>";
        }
        else{
            echo "Error in Update ". "<br>".$count . ":". mysqli_error($db);
        }

    }

}  
?>