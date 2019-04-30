<?php
    $alphabets=range('A','Z');
include('home1.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <style type="text/css">
    .navbar-nav > li
            {
                margin-left:5px;
                margin-right:5px;
            }
            .navbar-nav > li
            {
                padding-left:1px;
                padding-right:1px;
            }
            #logo
            {
                width:1465px;
                height:630px;
            }
        img
        {
            margin-top:-22px;
            margin-left:-25px;
            height:300px;
            width:1500px;
        }
        a
        {
            color: yellow;
            font-family:cursive;
            font-weight: 650;
            font-size:14px;
        }
        
        a:hover
        {
            color:white;
            text-decoration: none;
        }
        a:visited
        {
            color:green;
            text-decoration: none;
        }
        .navbar-nav.mr-auto
        {
            padding-left: 0px;
        }
        
        #flex-container
        {
            display: flex;
            flex-direction: column;
            background-color: #ECCFC8;
            position: relative;
            top:-20px;
        }
    </style>
    <body>
    
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <?php foreach($alphabets as $value)
                { ?>
    
         
          <a  href="<?php echo "A.php?alpha=$value"; ?>" ><?php echo $value;echo str_repeat("&nbsp;", 2); } ?></a>
    </li>
      
    </ul>
  </div>
</nav>
        <div id="flex-container"></div>
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("a").click(function(){
                    $("#flex-container").load(this.href);
                    return false;
                });
});
           
        </script>
       <script>
              $(document).ready(function(){
                  $("#flex-container").load("A.php?alpha=A");
                  return false;
              });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>