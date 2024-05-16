<?php
include 'navbar.php';
// include 'database.php';

// $currentDate = date('d-m-Y'); 
// $currentTime = date('H:i A'); 


// if(isset($_POST['submit']) && strtotime($currentDate) < strtotime($_POST['date']) && strtotime($currentTime) < strtotime($_POST['time'])) {
    
//     $fname = $_POST['fname'] ;
//     $email = $_POST['email'] ;
//     $company_name = $_POST['company_name'] ;
//     $date = $_POST['date'] ;
//     $time = $_POST['time'] ;

//     $insert_db = 'INSERT INTO '; 

//     mysqli_query($insert_db);
// }


?>
<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/form.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Angkor&family=Inter:wght@100..900&family=Outfit:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">



      

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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR5nQTf1eHhTVr2Zc+Y4v1xNxRoKQmN6NaGOX8qKn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>

