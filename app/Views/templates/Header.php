<!doctype html>
<html>
<head>
    <title>Compensar - Leandro Ramírez</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css'); ?>">
<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/1476/1476779.png" >
<style>
  /* Header */
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "League Spartan", sans-serif;
}
#header {
  align-self: self-start;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 80px;
  background-color: #e3e6f3;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
  padding: 10px 30px 10px 50px;
  z-index: 999;
  position: sticky;
  width: 100%;
}

#navbar {
  display: flex;
  align-items: center;
  justify-content: center;
}
#navbar li {
  list-style: none;
  padding: 0 20px;
  position: relative;
}
#navbar li a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  color: #222;
  transition: 0.3s ease;
}
#navbar li a:hover,
#navbar li a.active {
  color: #ff481c;
  fill: #ff481c;
}
#navbar li a.active::after,
#navbar li a:hover::after {
  content: "";
  width: 30%;
  height: 2px;
  background: #ff481c;
  position: absolute;
  bottom: -4px;
  left: 20px;
}
#navbar > li {
  float: left;
}
#navbar li ul {
  display: none;
  position: absolute;
  min-width: 140px;
  background-color: #e3e6f3;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
  padding-bottom: 10px;
}
#navbar li:hover > ul {
  display: block;
}
#navbar li ul li {
  position: relative;
  padding-top: 15px;
}
#navbar li ul li ul {
  right: -180px;
  top: 0px;
}
.logo{
  width: 50px;
}
</style>

</head>
<body>

<section id="header">
    <a href="home"><img src="https://cdn-icons-png.flaticon.com/512/1476/1476779.png"  class="logo" alt="Logo de Cartier"></a>
    <div>
      <ul id="navbar">
        <li><a href="home">Página principal</a></li>
        <li><a href="about">Ingresar Vehiculo</a></li>
        <li><a href="contact">Contacto</a></li>

      </ul>
    </div>
  </section>