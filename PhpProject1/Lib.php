<?php
include_once 'config/db.php';
$dataTable = "<tr>";
$sql = "SELECT * FROM person;";
$result = mysqli_query($con, $sql);
if (!$result) {
  die("error");             
} else {
  foreach ($result as $row) {
    $dataTable .= 
      "<td>" . $row["Person_id"] . "</td>"          //1
      . "<td>" . $row["FirstName"] . "</td>"        //2
      . "<td>" . $row["LastName"]  . "</td>"        //3
      . "<td>" . $row["GroupNum"]  . "</td>"        //4
      . "<td>" . $row["Level"]  . "</td>"           //5
      . "<td>" . $row["Teacher"]  . "</td>"         //6
      . "<td>" . $row["Teacher_status"]  . "</td>"; //7 
    if (!$row["Thesis"]) {
      $dataTable .= "<td></td>"        //8
        . "<td></td>"                  //9 
        . "<td></td>";                  //10
    } else {
     $sql = "SELECT * FROM thesis WHERE Thesis_id  = " . $row["Thesis"] . ";";
     $thesis = mysqli_query($con, $sql);
     if (mysqli_num_rows($thesis) > 0) {
     foreach($thesis as $thesisRow){
       $dataTable .= "<td>" . $thesisRow["Name"]  . "</td>"        //8
         . "<td>" . $thesisRow["Annotation"]  . "</td>"                  //9 
         . "<td>" . $thesisRow["Year"]  . "</td>";                  //10
     }
     } else {
        $dataTable .= "<td></td>"        //8
          . "<td></td>"                  //9 
          . "<td></td>";                  //10  
     }
    }
    $dataTable .= "</tr>";    
  }           
}
mysqli_close($con);

