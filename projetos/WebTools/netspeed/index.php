<!DOCTYPE html>
<html>
<head>
    <title>DEDSEC - NetSpeed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Chelsea Market' rel='stylesheet'>

</head>
<body>
<div style="width: 100% ; background-color: #333 ;"  >
    <button onclick="location.href='../'" class="logo" > DEDSEC </button>
</div>
<br>
<div align="center" class="conainer-fluid">
    <div class="container" >
        <div class="row">
            <div class="col-md-4" > </div>
            <div class="col-md-4" > 
                <br>
                <h1>Internet Speed</h1>
                <br>
                <div style="text-align:right;">
                <div style="min-height:360px;">
                <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
                <iframe style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;" src="https://www.metercustom.net/plugin/"></iframe></div></div></div>
                <br><br>
            </div>
            <div class="col-md-4" > </div>
        </div>
    </div>
</div>
</body>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script>
particlesJS("particles-js", {"particles":{"number":{"value":40,"density":{"enable":false,"value_area":3000}},"color":{"value":"#6ca3e6"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":10},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.9,"random":false,"anim":{"enable":false,"speed":0.24362316369040352,"opacity_min":0.503487871626834,"sync":false}},"size":{"value":3,"random":false,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#b7c0bc","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":328.8912709820448,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":16.241544246026905,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":279.72027972027973,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;</script>

</html>