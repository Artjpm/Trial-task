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
            #Text {
              background-position: 10px 10px;
              
              font-size: 16px;
              padding: 10px 20px 12px 10px;
              border: 1px solid black;
              margin-bottom: 1px;
              margin-top: 50px;
              margin-left: 20px;
            }
            #input {
             background-position: 10px 10px;
              
              font-size: 16px;
              padding: 10px 20px 12px 10px;
              border: 1px solid black;
              margin-bottom: 1px;
              width: 170px;
              margin-top: 10px;
              margin-left: 20px;   
            }
            #title {
                margin-top: 15px;
                margin-left: 20px;
                font-size: 18px;
            }
            label {
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <h1>New line</h1>
        <form action = "input.php" method = "post">
          <div>
            <label >Firstname</label>
            <input type="text" 
                id="Text" 
                name="Firstname">
          </div>
          <div>
            <label>Lastname</label>
            <input type="text" 
                id="Text" 
                name="Lastname">    
          </div>
          <div>
            <label>GroupNum</label>
            <input type="text" 
                id="Text" 
                name="GroupNum">    
          </div>
          <div>
            <label>Teacher ID</label>
            <input type="number" 
                id="Text" 
                name="Teacher_id">    
          </div>
            
          <div>  
            <label>Level</label>
            <input type="number" 
                  id="Text" 
                  name="Level">
          </div>
            
          <div>
            <label>Thesis</label>
            <input type="number" 
                  id="Text" 
                  name="Thesis">    
          </div>
            
            
            
            <div id = "title">Status </div>
            <div id = "input">
              <input type="radio" id="Teacher" name="Status" value = "0" checked/>
               <label>Student </label>
              <input type="radio" id="Teacher" name="Status" value = "1"/>
              <label>Teacher </label>
            </div>
            <button id = "input">Submit</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
