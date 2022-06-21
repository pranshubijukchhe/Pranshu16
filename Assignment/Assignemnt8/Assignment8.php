<?php
$staff = [
    [
        "acedemic" =>
        [

            [
                "name" => "Ashok Raj Parajuli",
                "address" => "Bagar",
                "mobile" => [9888888888,9877777777],
                "subject" => ["computing"]
            ],
            [
                "name" => "Rajendra Bahadur Thapa",
                "address" => "Lamachour",
                "mobile" => [987123456,912345678],
                "subject" => ["C++","C"]
            ],
            [
                "name" => "Nishal gurung",
                "address" => "Bagar",
                "mobile" => [9888868888,9873777777],
                "subject" => ["web tech"]
            ]
        ]
    ],
    [
        "nonacedemic" =>
        [

            [
                "name" => "Pranshu man",
                "address" => "Bagar",
                "mobile" => [9888888888,9877777777],
                "subject" => "none"
            ],
            [
                "name" => "Rohan ",
                "address" => "Lamachour",
                "mobile" => [9888888844,9855777777],
                "subject" => "none"
            ],
        ] 
    ]
];
echo "<h1>Assignment 8</h1>";
echo "<table border=' solid black'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Acedemic</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "<th>Subjects</th>";
echo "</tr>";
for($i=0;$i<=1;$i++){
    foreach($staff[$i] as $option => $content){
       if($i)
       {
            for($k = 0;$k <=1;$k++)
            {
                echo "<tr>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
               
                echo "<td>None</td>";
                echo "</tr>";

            }
        }
        else{
            for($k = 0;$k <3;$k++){
                echo "<tr>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
                $temp = " ";
                for($j=0;$j<2;$j++){
                    $temp .= $content[$k]["subject"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                echo "</tr>";
            }
        }
    }    
}
echo "</table>";
?><?php
$staff = [
    [
        "acedemic" =>
        [

            [
                "name" => "Ashok Raj Parajuli",
                "address" => "Bagar",
                "mobile" => [9888888888,9877777777],
                "subject" => ["computing"]
            ],
            [
                "name" => "Rajendra Bahadur Thapa",
                "address" => "Lamachour",
                "mobile" => [987123456,912345678],
                "subject" => ["C++","C"]
            ],
            [
                "name" => "Nishal gurung",
                "address" => "Bagar",
                "mobile" => [9888868888,9873777777],
                "subject" => ["web tech"]
            ]
        ]
    ],
    [
        "nonacedemic" =>
        [

            [
                "name" => "Pranshu man",
                "address" => "Bagar",
                "mobile" => [9888888888,9877777777],
                "subject" => "none"
            ],
            [
                "name" => "Rohan ",
                "address" => "Lamachour",
                "mobile" => [9888888844,9855777777],
                "subject" => "none"
            ],
        ] 
    ]
];
echo "<h1>Assignment 8</h1>";
echo "<table border=' solid black'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Acedemic</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "<th>Subjects</th>";
echo "</tr>";
for($i=0;$i<=1;$i++){
    foreach($staff[$i] as $option => $content){
       if($i)
       {
            for($k = 0;$k <=1;$k++)
            {
                echo "<tr>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
               
                echo "<td>None</td>";
                echo "</tr>";

            }
        }
        else{
            for($k = 0;$k <3;$k++){
                echo "<tr>";
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"])? $test = "true": $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for($j=0;$j<count($content[$k]["mobile"]);$j++){
                    $temp .= $content[$k]["mobile"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
                $temp = " ";
                for($j=0;$j<2;$j++){
                    $temp .= $content[$k]["subject"][$j]."</br>";
                }
                echo "<td>$temp</td>";
                echo "</tr>";
            }
        }
    }    
}
echo "</table>";
?>