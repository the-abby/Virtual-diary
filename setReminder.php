<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set  Diary Reminder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container">
         <?php include "./includes/link.php" ?>
       
           
            <?php include "./includes/header.php" ?>
            
            
                <div class="container">

                        <div class="row">

                            <div class="col-lg-5" style="border-right: 2px solid;">
                            <a class="btn btn-primary " href="addPost.php?valid=false">Home</a>
                                    <h1>Add  reminder</h1>
                                       
                                        <form action="" method="post" enctype="multipart/form-data">

                                                       
                                                        <div class=" form-group">
                                                            <label id="label-1" for="cc-payment" class="control-label">Reminder title</label>
                                                            <input type="text"  required name="title" placeholder="something you do not want to forget" class="form-control page-name" >
                                                        </div> 

                                                        <div class=" form-group">
                                                            <label id="label-1" for="cc-payment" class="control-label">Time</label>
                                                            <input type="time"  required name="timeout" placeholder="something hidden" class="form-control page-name" >
                                                        </div> 
                                                   
                                                      

                                               
                                                <div class="form-group "> 
                                                    <button id="payment-button"  class="btn btn-primary "  name="upload" type="submit">
                                                    <span id="payment-button-amount">Update your Diary</span>
                                                    </button>  
                                                    <?php 
                                                
                                                    if(isset($_POST["upload"])){ 
                                                        $title = addslashes($_POST["title"]);
                                                        $timeout = addslashes($_POST["timeout"]);
                                                        
                                                        if (! empty($title) || ! empty($timeout) ) {

                                                                    $title =  base64_encode($title);
                                                                    $timeout =  base64_encode($timeout);

                                                                        $sqlQuery = "INSERT INTO `reminder`(`id`, `user_id`, `title`, `datetime`, `status`, `deleted`)
                                                                        VALUES (null,'$loggedInUser','$title','$timeout','0','0')";
                                                                        $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                          // echo $sqlQuery;
                                                                        if($Query){
                                                                               
                                                                                echo "uploaded successfully!";


                                                                        }else{
                                                                                echo "Something, please try again later!!!";
                                                                        }
                                                                    
                                                        }
                                                        
                                                    }else{
                                                         echo "Fields can't be empty, please try again!!!";
                                                    }
                                                
                                                ?>
                                                    
                                                </div>   


                                                

                                        </form>
                         
                                                    <hr>

                            </div>


                            <div class="col-lg-7">

                            
                                                                                                                                                


                                                                        <div class="row">
                                                                                    <div class="px-2">
                                                                                        <div class="flex-row-between py-2">
                                                                                            <h5>List of Reminders  </h5>
                                                                                            <div class="add-page-btn">
                                                                                            <a href="addPost.php">
                                                                                                <svg style="width: 2em; height: 2em;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                                                            </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                          <form  method="post">
                                                                                                <input type="search" name="keywith"  placeholder="Input secret key to view content ">
                                                                                                    <button type="submit" name="viewContent" class="btn btn-primary">
                                                                                                        view content
                                                                                                    </button>
                                                                                          </form>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text-sm-bold px-2 pt-4 pb-2">Recent</div>
                                                                                    <div class="px-2 pages-list " data-id="34">
                                                                                    
                                                                                            
                                                                                        <?php

                                                                                            if(isset($_POST["viewContent"])){
                                                                                                        $key = base64_encode($_POST["keywith"]);

                                                                                                        $fetchMyDiary = "select * from  secret_key where user_id = '$loggedInUser' and keyy = '$key' ";

                                                                                                        $Query = mysqli_query($mysqli, $fetchMyDiary);		
                                                                                                                                    
            
                                                                                                        $rowcount = mysqli_num_rows($Query); 
            
            
                                                                                                        if($rowcount > 0){

                                                                                                                echo "<script> window.location.replace('setReminder.php?valid=true') </script>";
                                                                                                        }   else{
                                                                                                            echo "<b>Please your valid secret key</b>";
                                                                                                        }

                                                                                            }

                                                                                            $fetchMyDiary = "select * from  reminder where user_id = '$loggedInUser' ";


                                                                                            $Query = mysqli_query($mysqli, $fetchMyDiary);		
                                                                                                                        

                                                                                            $rowcount = mysqli_num_rows($Query); 


                                                                                            if($rowcount > 0){

                                                                                            


                                                                                                $valid = $_GET["valid"];
                                                                                                $t = 0;

                                                                                                while ($row = mysqli_fetch_row($Query) ){
                                                                                                $t +=1;
                                                                                                    // print_r($row[1]);

                                                                                        
                                                                                        ?>
                                                                                        
                                                                                        <a href="#" style="    color: #fff;text-decoration: none;">
                                                                                                    <input type="text" class="time-<?php  echo $t?>" value="<?php echo  base64_decode($row[3]) ; ?>">
                                                                                                <div class="pages-list-item p-2 ">
                                                                                                        <div class="page-list-item-title"><?php echo ($valid == "false") ? $row[3] : base64_decode($row[3]) ; ?> ❤️</div>
                                                                                                        <span class="page-list-item-content"><?php echo ($valid == "false") ? $row[2] : base64_decode($row[2]) ;?></span>
                                                                                                </div>
                                                                                                <hr>
                                                                                        </a>
                                                                                            
                                                                                        <?php } 


                                                                                            }else{

                                                                                                    echo  " <br> <i> <h6> How was your day? Please lets hear from you today 😀. </h6> </i>";

                                                                                            }
                                                                                        
                                                                                                
                                                                                        
                                                                                        ?>

                                                                                        <div class="text-sm-bold text-center px-2 pt-4 pb-2">Keep Writing More Pages</div>
                                                                                    </div>
                                                                                </div>
                            
                            </div>

                        </div>

                </div>
    
    </div>
    <footer class="py-1 text-center">
        &copy; 2021 Virtual-Diary. | Developed By Abisola. | All Rights Reserved.
    </footer>

	<!--Bootstrap-->
	<script src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script>

                (function alamFunction () {
                    var totalAlert =  document.querySelector(".pages-list").childElementCount - 1;
                    var alertClassValue = [];
                    for(var i = 0; i < totalAlert; i++){
                        var ds = `.time-${i + 1}`;
                        alertClassValue[i] = document.querySelector(ds).value;
                    }
                    console.log(alertClassValue);
                    var g = setInterval(eve => {
                                var d = new Date();
                                var h = d.getHours();
                                var m = d.getMinutes();

                                var hr = (h.toString().length > 1) ? h : `0${h}` ; 
                                var mi = (m.toString().length > 1) ? m : `0${m}` ; 
                                var timeString =  `${hr}:${mi}`;

                                alertClassValue.forEach(eve =>{
                                    if(eve == timeString)
                                     alert(`${timeString} :: Its time `)
                                })
                                console.log(timeString)
                             }
                    ,10);
                })();
                

    </script>
  
</body>
</html>


