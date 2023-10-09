<?php
  include_once 'lib.php';
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
          * {
             box-sizing: border-box;
            }

            #searchInput {
              background-position: 10px 10px;
              
              font-size: 16px;
              padding: 12px 20px 12px 10px;
              border: 1px solid #ddd;
              margin-bottom: 12px;
              margin-top: 150px;
              margin-left: 80%;
            }
            #searchField{
              
              font-size: 16px;
            }

            #dataTable {
              border-collapse: collapse;
              width: 80%;
              border: 1px solid #ddd;
              font-size: 18px;
              margin-left: 15%;
            }

            #dataTable th, #dataTable td {
               text-align: left;
               padding: 12px;
            }

            #dataTable tr {
              border-bottom: 1px solid #ddd;
            }

            #dataTable tr.header, #dataTable tr:hover {
              background-color: #f1f1f1;
            }
            .siteHeader {
                position: fixed;
                width: 100%;
                background-color: green;
                height: 100px;
                text-align : center;
	top: 0;
	left: 0;
            }
            .siteContent{
                margin-top: 10px;
            }
            .sideBar{
                    padding: 2px 12px;
                    margin-top: 150px;
                    height: 70%;
                    width: 12%;
                    margin-left: 10px;
                    background-color: red;
                    position: fixed!important;
                    z-index: 1;
                    overflow: auto;
            }
        </style>
        <link  real = "stylesheet" href = "CSS/styles.css" media ="all" type = "text/css">
    </head>
    <body>
        <div class = "siteHeader">
        <h1>
            Hello World!
            </h1>
        </div>
        <div class = "sideBar">
            <h2>
                red
            </h2>
            <h4>
                Search line
            </h4>
            <div>
             <input type="radio" id="searchField" name="colum" value="0" checked />
             <label>Person ID</label>
            </div>

            <div>
              <input type="radio" id="searchField" name="colum" value="1" />
              <label>Firstname</label>
            </div>

            <div>
              <input type="radio" id="searchField" name="colum" value="2" />
              <label>Lastname</label>
            </div>
            <div>
             <input type="radio" id="searchField" name="colum" value="3"/>
             <label>GroupNum</label>
            </div>

            <div>
              <input type="radio" id="searchField" name="colum" value="4" />
              <label>Level</label>
            </div>
            <div>
              <input type="radio" id="searchField" name="colum" value="5" />
              <label>Teacher</label>
            </div>
            <div>
             <input type="radio" id="searchField" name="colum" value="6"/>
             <label>Status</label>
            </div>

            <div>
              <input type="radio" id="searchField" name="colum" value="7" />
              <label>Thesis name</label>
            </div>

            <div>
              <input type="radio" id="searchField" name="colum" value="8" />
              <label>Thesis anotation</label>
            </div>
            
            <div>
              <input type="radio" id="colum" name="colum" value="9" />
              <label>Year</label>
            </div>
        </div>
        <input type="text" 
              id="searchInput" 
              onkeyup="dataSearch()" 
              placeholder="Search.." 
              title="SearchLine">
        <div class = "siteContent">
          <table id = "dataTable">
              <tr class = "header">
                  <th>
                      Person ID
                  </th>
                  <th>
                     Firstname 
                  </th>
                  <th>
                      Lastname
                  </th>
                  <th>
                      GroupNum
                  </th>
                  <th>
                      Level
                  </th>
                  <th>
                      Teacher
                  </th>
                  <th>
                      Status
                  </th>
                  <th>
                      Thesis name
                  </th>
                  <th>
                      Thesis anotation
                  </th>
                  <th>
                      year
                  </th>
                
              </tr>
          <?php
          /*
            $sql = "SELECT * FROM person;";
            $result = mysqli_query($con, $sql);
            //$resultCheck = mysql_num_rows($result);
           if (!$result) {
             
           } else {
               foreach ($result as $row) {
                  echo "<tr><td>" . $row["Person_id"] . "</td></tr> ";
               }
             
           }
           * 
           */
          echo $dataTable;
          ?>
          </table>
        </div>
        <script>
          function dataSearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput"); // data by user
            filter = input.value.toUpperCase(); // uper case all symbols in the line
            table = document.getElementById("dataTable"); // get table
            radio = document.getElementsByName("colum");
            for (let radioButton  of radio) {
                if(radioButton.checked) {
                    columNum = radioButton.value;
                }
            }
            //console.log(columNum);
            tr = table.getElementsByTagName("tr"); // elements tr contains elemts th or td
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[columNum]; // td element of tr[i] number of colum
              if (td) {
                txtValue = td.textContent || td.innerText;
                //console.log(td.textContent);
                //console.log(td.innerText);
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }        
            }
           }
         </script>
    </body>
</html>
