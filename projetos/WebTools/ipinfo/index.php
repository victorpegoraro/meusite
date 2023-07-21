<?php

function getIPAddress() {  
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}   

function ip_details($ip) {
    $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
    $details = json_decode($json);
    foreach($details as $x => $val) {
        echo "$x = <b>$val</b><br>";
    }
    
}

function domain_info($domain){

    //get API KEY from environment, or set your API key here
    $api_key = '92ed7f97b059c70c96cdabc609256b33a556fbfdbac0acbf99986244c2d24293';
    //$domain = 'drive.google.com';

    $data = array('apikey' => $api_key,'domain'=> $domain);
    $ch = curl_init();
    $url = 'https://www.virustotal.com/vtapi/v2/domain/report?';
    $url .= http_build_query($data); // append query params
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_VERBOSE, 1); // remove this if your not debugging
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); // please compress data
    curl_setopt($ch, CURLOPT_USERAGENT, "gzip, My php curl client");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);

    $result=curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //print("status = $status_code\n");
    if ($status_code == 200) { // OK
    $js = json_decode($result, true);
    
    if(isset($js['subdomains'])){
        echo "<br>Subdomains:<br>";
        foreach($js['subdomains'] as $subdomain ) {
            echo " - $subdomain <br>";
        }
        
    }
    if(isset($js['resolutions'])){
        echo "<br>Resolutions:<br>";
        foreach($js['resolutions'] as $resoluotion ) {
            echo " - {$resoluotion['ip_address']} <br>";
        }
    }
    if(isset($js['whois'])){
        echo "<br>Whois: <br>";
        echo '<pre>'; 
        print_r($js['whois']);
        echo '</pre>'; 
    }
    if(isset($js['Alexa domain info'])){
        echo "Alexia info: " . $js['Alexa domain info'];
    }
    //echo '<pre>'; 
    //print_r($js);
    //echo '</pre>'; 
    } else {  // Error occured
    print($result);
    }
    curl_close ($ch);

}

function ip_info($ip){

    $api = "https://www.virustotal.com/vtapi/v2/ip-address/report?apikey=92ed7f97b059c70c96cdabc609256b33a556fbfdbac0acbf99986244c2d24293&ip=" . $ip;
    $json = file_get_contents($api);
    $js = json_decode($json, true);
    //echo '<pre>'; 
    //print_r($js);
    //echo '</pre>';
    if(isset($js['detected_urls'])){
        echo "<br>Urls:<br>";
        foreach($js['detected_urls'] as $url ) {
            echo " - {$url['url']} <br>";
        }
    }
    if(isset($js['resolutions'])){
        echo "<br>Resolutions:<br>";
        foreach($js['resolutions'] as $resoluotion ) {
            echo " - {$resoluotion['hostname']} <br>";
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>DEDSEC - IP Info</title>
    <meta charset="utf-8">
    <link rel="icon" href="../tabicon.jpg">
    <link rel="shortcut icon" href="../tabicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
</head>
<body id="particles-js" >
<script src="particles.min.js"></script> 
<script>
particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#33c5dc"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":599.4005994005994,"line_linked":{"opacity":1}},"bubble":{"distance":267.9854800594439,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>

<div class="pagina" >
<style>
    h1, h5{ color: whitesmoke ; }
    #result{ font-size: 20px ; }
    b{ color: whitesmoke ; }
</style>
<div style="width: 100% ; background-color: #333 ;"  >
    <button onclick="location.href='../'" class="logo" > DEDSEC </button>
</div>
<div align="center" class="container" >
    <div class="row">
        <div class="col-md-4" > </div>
        <div class="col-md-4" > 
            <br>
            <h1>IP information</h1>
            <br>
            <form action="" method="post">
                <input type="text" name="valor" placeholder="IP or Domain" class="input-text" >
                <input type="submit" value="SEARCH" name="go" class="btn" >
            </form>
            <br>
        </div>
        <div class="col-md-4" > </div>
        <div class="col-12" >
            <div id='result' align='left' >
            <?php

                if(isset($_POST['go'])){

                    $valor = $_POST['valor'];  
                    if (filter_var($valor, FILTER_VALIDATE_IP)) {
                        ip_details($valor);
                        ip_info($valor);
                    } else {
                        $ip = gethostbyname($valor);  
                        if (filter_var($ip, FILTER_VALIDATE_IP)) {
                            ip_details($ip);
                            domain_info($valor);
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
</body>
</html>