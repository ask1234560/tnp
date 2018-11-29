<?php

$cname=$_GET['cname'];

?>


<!DOCTYPE html>
<html>
<head>

	<title>TNP</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <style>
 *, :before, :after {
  box-sizing: border-box;
}

body {
  background: #232323;
  font-family: 'Raleway', sans-serif;
  text-align: center;
}

h1 {
  font-weight: 200;
  color: rgba(255, 255, 255, 0.2);
  padding-top: 3rem;
}

#reset {
  background: transparent;
  border: solid 1px rgba(255, 255, 255, 0.2);
  margin-top: 3rem;
  padding: 0.5rem 1rem 0.66rem;
  color: rgba(255, 255, 255, 0.2);
  font-size: 1.5rem;
  font-weight: 200;
  text-transform: lowercase;
  transition: 0.15s linear all;
}
#reset:hover {
  background: rgba(255, 255, 255, 0.2);
  color: #232323;
}

.button,
[class*='button-'] {
  background: #00B6E9;
  display: inline-block;
  padding: 1rem 2rem;
  color: #232323;
  font: 200 1.5rem "Source Sans Pro";
  text-transform: lowercase;
  text-decoration: none;
  text-align: left;
  transition: 0.5s linear all;
}
.button:hover,
[class*='button-']:hover {
  background: #50d9ff;
}

.download-wrap {
  perspective: 80rem;
  perspective-origin: 50% 50% 0;
  width: 15rem;
  height: 4rem;
  margin: 0 auto;
}

.download {
  position: relative;
  width: 15rem;
  height: 4rem;
  transform-style: preserve-3d;
  transform-origin: 50% 50% 0;
  transform: rotateX(0deg);
  transition: 0.2s linear all;
}
.download.is-active {
  transform: rotateX(90deg) translateZ(2rem);
}
.download.is-active .meter-progress {
  right: 0%;
}

.button-download,
.meter {
  position: relative;
  width: 15rem;
  height: 4rem;
  font-size: 1.5rem;
  font-weight: 200;
  line-height: 4rem;
  padding: 0 2rem;
  transform-origin: top center;
}

.meter {
  background: #C41564;
  overflow: hidden;
  transform: rotateX(270deg);
}
.meter:before, .meter:after {
  display: block;
  text-align: center;
  color: rgba(255, 255, 255, 0.5);
}
.meter:before {
  content: 'downloading...';
  animation: white-pulse 1s infinite alternate;
}
.meter:after {
  content: 'done!';
  display: none;
  color: #fff;
}
.meter.is-done:before {
  display: none;
}
.meter.is-done:after {
  display: block;
}
.meter .meter-progress {
  display: block;
  width: 100%;
  position: absolute;
  right: 100%;
  top: 0;
  bottom: 0;
  background-image: linear-gradient(-45deg, rgba(0, 0, 0, 0.15) 10%, rgba(0, 0, 0, 0.2) 10%, rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0.15) 20%, rgba(0, 0, 0, 0.15) 30%, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0.2) 40%, rgba(0, 0, 0, 0.15) 40%, rgba(0, 0, 0, 0.15) 50%, rgba(0, 0, 0, 0.2) 50%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.15) 60%, rgba(0, 0, 0, 0.15) 70%, rgba(0, 0, 0, 0.2) 70%, rgba(0, 0, 0, 0.2) 80%, rgba(0, 0, 0, 0.15) 80%, rgba(0, 0, 0, 0.15) 90%, rgba(0, 0, 0, 0.2) 90%, rgba(0, 0, 0, 0.2));
  transition: 4s linear all;
}

.icon-wrap {
  position: absolute;
  right: 0.5rem;
  top: 0;
  bottom: 0;
  width: 4rem;
  padding-top: 1.66rem;
  background: rgba(0, 0, 0, 0.1);
}

.icon-download {
  position: relative;
  display: block;
  width: 2.5rem;
  height: 1rem;
  margin: auto;
  border: solid 0.5rem #232323;
  border-top: none;
}
.icon-download:before, .icon-download:after {
  content: '';
  display: block;
  position: absolute;
  animation: icon-bounce .5s infinite alternate;
}
.icon-download:before {
  left: 0.5rem;
  top: -0.5rem;
  width: 0.5rem;
  height: 0.5rem;
  background: #232323;
}
.icon-download:after {
  left: 0.25rem;
  top: -0.125rem;
  width: 0;
  height: 0;
  border-left: solid 0.5rem transparent;
  border-right: solid 0.5rem transparent;
  border-top: solid 0.5rem #232323;
}

@keyframes icon-bounce {
  from {
    transform: translateY(-5px);
  }
  to {
    transform: translateY(0);
  }
}
@keyframes white-pulse {
  from {
    color: rgba(255, 255, 255, 0.2);
  }
  to {
    color: rgba(255, 255, 255, 0.5);
  }
}
.header {
	border-bottom: 5px solid grey;
  overflow: hidden;
  background-color:white;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
	padding-left:10%;
	color:white;
  font-size: 25px;
  font-weight: bold;
}



.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
	color:white;
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>


<div class="header">
  <a href="#default" class="logo" style=color:black>Training and Placement Cell</a>
  <div class="header-right">
    <a href="../user/index.html" style=color:black;font-weight:bold;margin-left:-110%;font-size:25px> <span class="glyphicon glyphicon-home"></span> Home</a>

  </div>
</div> 
<div class="download-wrap" style=margin-top:20%;margin-bottom:15%>
  <div class="download">
     <a href="#" class="button-download">
      download
      <span class="icon-wrap">
        <i class="icon-download"></i>
      </span>
    </a>
    <div class="meter">
      <span class="meter-progress"></span> 
    </div>
  </div>
</div>
<hr>
<center style=color:white;font-size:20px>
 M A College of Engineering<br>
 Kothamangalam
</center>
<script>
 var download = $('.download'),
 meter = $('.meter');

 $('.button-download').on('click', function(e) {
  window.location.href = "expo.php?cname=<?php echo $cname ?>";

  download.toggleClass('is-active');

  setTimeout(function() {
    meter.toggleClass('is-done');
  }, 4000);

  e.preventDefault();
});

 $('#reset').on('click', function() {
  download.removeClass('is-active');
  meter.removeClass('is-done');
});
</script>
</body>
</html>