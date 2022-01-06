<?php
    include("db_connect.php");
    ob_start();
	session_start();
    $query="SELECT * FROM Members";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Members</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    
    
    <style>
        <style type="text/css">

        button, button:focus 
        {
            outline: none !important;
            box-shadow: none !important;
        }
        .ralewayFont
        {
            font-family: 'Raleway', sans-serif;
        }
        .balooThambi2
        {
            font-family: 'Baloo Thambi 2', cursive;
        }
        .rubikFont
        {
            font-family: 'Rubik', sans-serif;
        }
        .lobsterFont
        {
            font-family: 'Lobster', cursive;
        }
        .color-primary 
        {
            color: #003859;
        }

        .color-primary-bg 
        {
            background: #003859;
        }

        .color-secondary 
        {
            color: #00A5C4;
        }

        .color-secondary-bg 
        {
            background: #00A5C4;
        }

        .color-yellow 
        {
            color: #FFD289;
        }

        .color-yellow-bg 
        {
            background: #FFD289;
        }
         
       
        .committee-item
        {
          width:16rem;border-radius:10px;
        }
        /*.item*/
        /*{*/
        /*    margin:20px;*/
        /*}*/
       .kymitem img
        {
        margin:auto;
           width:100%;
           height:269px;
        }
        .scroll{
            overflow:hidden;
            height:150px;
        }
        .scroll:hover{
            max-height: 200px;
            overflow-y:scroll;
                        }
        
        .title
        {
            font-size:30px;
        }
       
        
        .kymitem
        {
            width:17rem;
            margin:14px;
        }
        
        
       @media screen and (min-width: 800px) 
       {        
        .kym-body
        {
            width:99%;
            /*background-color:blue;*/
        }
       }
      
        
            /*.result-item*/
            /*{*/
            /*    width:22%;*/
            /*    height:440px;*/
            /*    overflow:auto;*/
            /*    margin:auto;*/
            /*    margin-top:15px;*/
            /*    margin-bottom:15px;*/
            /*}*/
         
        

      
       @media screen and (max-width: 450px) {
          
        .committee-item
        {
           width: 11rem;height:10vh;border-radius:10px;color:blue;
        }
        .item
        {
            width:30%;
        }
        .kymitem img
        {
            margin:auto;
           width:100%;
           height:24vh;

        }
        
        .kymitem
        {
            width:47%;
            margin:5px;
        }
        
        .card-title
        {
            font-size:18px;
        }
        .card-text
        {
            font-size:14px;
        }
        
        }

    </style>
    </style>
</head>

<body>
    <div >
       <a href="index.php" style="margin:15px;"><i style="text-align:center;font-size:50px;" class="fas fa-arrow-left"></i></a>
        
        <h1 style="text-align:center;"><b>Know your members</b></h1>
    </div>
    
    <div>
        <section>
          
          
          
          
          <div>
            <div>
                
                <div class="container-fluid kym-body">
                  <div class="row " style="">
                    <?php foreach ($rows as $row) {include('kymitem.php');} ?>
                  </div>
              </div>
         </div>
              
              
                 
            </div>
          </section>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>

</html>