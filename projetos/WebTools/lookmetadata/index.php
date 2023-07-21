<!DOCTYPE html>
<html>
<head>
    <title>DEDSEC - Lookmetadata</title>
    <meta charset="utf-8">
    <link rel="icon" href="../tabicon.jpg">
    <link rel="shortcut icon" href="../tabicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="width: 100% ; background-color: #333 ;"  >
    <button onclick="location.href='../'" class="logo" > DEDSEC </button>
</div>
<br>
<div align="center" class="conainer-fluid">
    <div class="container" style="background-color: rgba(0,0,0,0.9);"  >
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"> 
                <br>
                <h1>LookMetadata</h1>
                <br><br>
                <form action="" method="post" enctype="multipart/form-data" >
                    <div class='input-wrapper'>
                        <label for='input-file' >
                            Choose file
                        </label>
                        <input name="img" id='input-file' type='file' value='' accept=".jpg, .jpeg" required />
                        <span id='file-name'></span>
                    </div>
                    <input type="submit" name="ext" value="EXTRACT" class="btn" style=" width: 30% ;" >
                </form>
            </div>
            <div class="col-md-4" ></div>
            <div class="col-md-4" ></div>
            <div class="col-md-8" >
            <br>
            <div align="left" style="font-size: 15px ;" >
                <?php

                    if(isset($_POST['ext'])){

                        $exif = exif_read_data($_FILES['img']['tmp_name'],  0, true);
                        foreach($_FILES as $file){
                            echo "<br><b>File name</b> = " , $file['name']  .  "<br>";
                            foreach ($exif as $key => $section) {
                                foreach ($section as $name => $val) {
                        
                                    echo "<b>{$name}</b> = {$val} <br>";
                                    }
                                }
                            } 
                    }

                ?>
            </div>
            <br>
            </div>
        </div>
    </div>
    <br>
</div>
</div>
</body>
</html>