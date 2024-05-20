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

        <link rel="stylesheet" href="../css/form1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Angkor&family=Inter:wght@100..900&family=Outfit:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">




    </head>
    <body class="form-body">

        <div class="form-main-div col-12  d-flex flex-column justify-content-center align-items-center" style="height:100vh">

        
                <div class="col-12 d-flex justify-content-between container">
                    <div class="col-3">
                        <h2 style="color:white; text-decoration: underline;
                            text-decoration-thickness: 1px; text-underline-offset: 6px;">INFO</h2>
                    </div>
                    <div>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <h5 style="color:white">Ferox</h5>
                            <a class="" href="#all"><img class="" src="../images/logo.png" alt="Logo" style="width:60px"></a>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <form class="container ">
                        <div class="container mt-5">
                                <div class="col-md-3 ">
                                    <select class="form-control custom-select" id="exampleSelect">
                                        <option>BUDGET</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            
                        </div>


                    </form>
                </div>









        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR5nQTf1eHhTVr2Zc+Y4v1xNxRoKQmN6NaGOX8qKn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>

