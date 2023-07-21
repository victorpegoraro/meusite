<!DOCTYPE html>
<html>
<head>
    <title>DEDSEC - ScanFile</title>

    <link rel="icon" href="tabicon.jpg">
    <link rel="shortcut icon" href="tabicon.jpg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>

</head>
<div style="width: 100% ; background-color: #333 ;"  >
    <button onclick="location.href='../'" class="logo" > DEDSEC </button>
</div>
<br>
<div align="center" class="conainer-fluid">
    <div class="container" style="background-color: rgba(0,0,0,0.7);" >
        <div class="row">
            <div class="col-md-4" > </div>
            <div class="col-md-4" > 
                <br>
                <h1>File to MD5</h1>
                <br><br>
                <form action="" method="post" enctype="multipart/form-data" >
                    <div class='input-wrapper'>
                        <label for='input-file' >
                            Choose file
                        </label>
                        <input name="img" id='input-file' type='file' value='' required />
                        <span id='file-name'></span>
                    </div>
                    <input type="submit" name="ext" value="SCAN" class="btn" style=" width: 30% ;" >
                </form>
                <br><br>
                <div style="font-size: 20px ; color: whitesmoke ;" >
                    <?php

                        if(isset($_POST['ext'])){

                            $hash = hash_file('md5', $_FILES['img']['tmp_name']);
                            echo "MD5: " . $hash;
                                
                        }

                    ?>
                <br>
                </div>
                <br>
            </div>
            <div class="col-md-4" ></div>
        </div>
    </div>
    <br>
</div>
</body>
</html>