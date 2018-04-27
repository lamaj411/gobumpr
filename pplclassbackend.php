<?php

$link = mysqli_connect("localhost","root","", "gobumpr");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//....................................................................
/*
if(isset($_REQUEST['name'])){
    
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    
    $search_query=  explode("/", $name);
    
    if(isset($search_query['3']))
     $query="courseid LIKE '%".$search_query['0']."%' AND semid LIKE '%".$search_query['1']."%' AND branch_or_specialisation LIKE '%".$search_query['2']."%' AND deptname LIKE '%".$search_query['3']."%'";
 elseif(isset($search_query['2']))
     $query="courseid LIKE '%".$search_query['0']."%' AND semid LIKE '%".$search_query['1']."%' AND branch_or_specialisation LIKE '%".$search_query['2']."%'";
 elseif(isset($search_query['1']))
     $query="courseid LIKE '%".$search_query['0']."%' AND semid LIKE '%".$search_query['1']."%'";
 elseif(isset($search_query['0']))
     $query="courseid LIKE '%".$search_query['0']."%'";
 else
    $query="";



$sql = "SELECT * FROM res_name WHERE $query AND active LIKE 'YES'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            
            echo "<p class='name'>" . $row['rid'] ."/".$row['name'] ."/". "</p>";
        }
        
        mysqli_free_result($result);
    } else{
        echo "<p>No matches found</p>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}*/


//...................................................................................

//....................................................................

if(isset($_REQUEST['name'])){
    
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $sql = "SELECT * FROM res_name WHERE name LIKE '" . $name . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p class='name'>" . $row['name'] . "</p>";
            }
            
            mysqli_free_result($result);
        } else{
            //echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}


//...................................................................................





mysqli_close($link);
?>