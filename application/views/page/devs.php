<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 1.2s ease;
  background-color: black;
  opacity:100%;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<div class="container-md-12">
<div class="container col-md-12">
<h2><center>THE DEVS</h2>
<p>Together We Stand</center>></p>
</div>
<center>
<div class="container col-md-12">

<div class="col-md-1"></div>
<div class="col-md-2">
  <img src="<?php echo base_url('bootstrap/img/team/Sena.jpg')?>" alt="Avatar" class="image" style="width: 50%; height: 50%;">
  <div class="overlay">
    <div class="text">John Mark Sena<br /><br />Position</div>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <img src="<?php echo base_url('bootstrap/img/team/Ron.jpg')?>" alt="Avatar" class="image" style="width: 50%; height: 50%;">
  <div class="overlay">
    <div class="text">Ronald Fernando<br /><br />Position</div>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <img src="<?php echo base_url('bootstrap/img/team/Mae.jpg')?>" alt="Avatar" class="image" style="width: 50%; height: 50%;">
  <div class="overlay">
    <div class="text">Mae Historillo<br /><br />Position</div>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <img src="<?php echo base_url('bootstrap/img/team/Renzo.jpg')?>" alt="Avatar" class="image" style="width: 50%; height: 50%;">
  <div class="overlay">
    <div class="text">Renzo Payod<br /><br />Position</div>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <img src="<?php echo base_url('bootstrap/img/team/Vince.jpg')?>" alt="Avatar" class="image" style="width: 50%; height: 50%;">
  <div class="overlay">
    <div class="text">Vince Amadeo Zoleta<br /><br />Position</div>
  </div>
</div>
<div class="col-md-1"></div>
</div>
</div>
</center>
</body>
</html>