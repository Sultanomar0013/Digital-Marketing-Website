<?php
include 'navbar.php';
include 'database.php';

$currentDate = date('d-m-Y'); 
$currentTime = date('H:i A'); 


if(isset($_POST['submit']) && strtotime($currentDate) < strtotime($_POST['date']) && strtotime($currentTime) < strtotime($_POST['time'])) {
    
    $fname = $_POST['fname'] ;
    $email = $_POST['email'] ;
    $company_name = $_POST['company_name'] ;
    $date = $_POST['date'] ;
    $time = $_POST['time'] ;

    $insert_db = 'INSERT INTO '; 

    mysqli_query($insert_db);
}


?>
<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
        <link rel="stylesheet" href="../css/form.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        



    </head>
    <body class="form-body">

        <div class="form-main-div">

            <div class="form-sub-div"> 
            <fieldset class="form-fieldset" >
                <legend class="form-legend" ><strong>SET A MEETING WITH US</strong></legend>
                <div class="form-table-main-div">

                <div class="form-table-div">
                    <table style="color:white">
                            
                            <th>
                                <tr>
                                    
                                    <th> <label class="" style="float:left"><strong>NAME :</strong></label></th>
                                    <td>  <input name="fname"type="text" class="form-control col-6"  id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                        
                                </tr>
                                <tr>
                                    <th> <label class="" style="float:left"><strong>EMAIL :</strong></label></th>
                                    <td>  <input name="email" type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                                </tr>
                                <tr>
                                    <th> <label class="" style="float:left"><strong>COMPANY NAME :</strong></label></th>
                                    <td>  <input name="company_name" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                                </tr>
                                <tr>
                                    <th> <label class="" style="float:left"><strong>SELECT MEETING DATE:</strong></label></th>
                                    <td> 
                                    <input name="date" type="date" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label class="" style="float:left"><strong> SELECT MEETING TIME:</strong></label></th>
                                    <td> 
                                            <input name="time" type="time" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </td>
                                </tr>
                            
                            </th>

                    
                    </table>
                    <button name="submit" type="submit" class="btn btn-primary" style="margin-top:2%">Submit</button> 
                </div>



                </div>
            
        
        <form class="form-form">

        </form>
            
        
        </fieldset>
                    
            </div>
        </div>

    
    </body>
</html>

