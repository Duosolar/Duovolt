<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Duo Solar</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color: white;
    }

    /* NAVBAR */
    .navbar {
      position: absolute;
      width: 100%;
      display: flex;
      align-items: center;
      padding: 20px;
      box-sizing: border-box;
      z-index: 10;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
      color: #facc15;
    }

    .menu {
      display: flex;
      gap: 40px;
      margin-left: auto;
    }

    .menu a {
      text-decoration: none;
      color: white;
      font-size: 15px;
    }

    .btn-nav {
      background: #facc15;
      color: black;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      margin-left: 20px;
      white-space: nowrap;
    }

    /* HERO */
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)),
        url('https://images.unsplash.com/photo-1509395176047-4a66953fd231');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: flex-start;
      padding: 120px 50px 0 50px;
      box-sizing: border-box;
    }

    .hero-content {
      max-width: 600px;
    }

    .hero h1 {
      font-size: 38px;
      line-height: 1.3;
    }

    .amarillo {
      color: #facc15;
    }

    .hero p {
      margin-top: 20px;
      font-size: 16px;
      color: #ddd;
    }

    .btn {
      display: inline-block;
      margin-top: 25px;
      padding: 15px 25px;
      background: #facc15;
      color: black;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    /* FEATURES */
    .features {
      margin-top: 30px;
      display: flex;
      gap: 10px;
      font-size: 14px;
      color: #ddd;
    }

    .features div {
      padding: 0 10px 40px;
      position: relative;
    }

    .features div:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background: rgba(255,255,255,0.3);
    }

    /* SERVICIOS */
    .servicios {
      background: white;
      color: black;
      padding: 60px 20px;
      text-align: center;
    }

    .servicios h2 {
      margin-bottom: 40px;
    }

    .cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .card {
      width: 250px;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
    }

    .card p {
      margin-top: 10px;
      font-weight: bold;
    }

    /* RESPONSIVE */
    @media (max-width: 600px) {

      .navbar {
        position: absolute;
        top: 0;
        width: 100%;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 15px;
      }

      .logo {
        margin-bottom: 10px;
      }

      .menu {
        margin: 10px 0;
        gap: 20px;
      }

      .btn-nav {
        width: 80%;
        max-width: 250px;
        margin: 10px auto 0;
        display: block;
        text-align: center;
      }

      .hero {
        padding: 160px 20px 0 20px;
        text-align: center;
      }

      .hero-content {
        max-width: 100%;
      }

      .hero h1 {
        font-size: 26px;
      }

      .hero p {
        font-size: 14px;
      }

      .btn {
        width: 80%;
        max-width: 250px;
        margin: 20px auto 0;
        display: block;
      }

      .features {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }

      .features div {
        padding: 15px 0;
        width: 100%;
        border-bottom: 1px solid rgba(255,255,255,0.2);
      }

      .features div:last-child {
        border-bottom: none;
      }

      .features div::after {
        display: none;
      }

      .cards {
        flex-direction: column;
        align-items: center;
      }

    }

  </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
  <div class="logo">DUO SOLAR</div>

  <div class="menu">
    <a href="#">Home</a>
    <a href="#">Servicios</a>
    <a href="#">Contacto</a>
  </div>

  <a class="btn-nav" href="https://wa.me/573208513309" target="_blank">
    Cotizar
  </a>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    
    <h1>
      Energía <span class="amarillo">solar</span>, movilidad 
      <span class="amarillo">eléctrica</span> e 
      <span class="amarillo">inversión</span> para reducir costos y generar valor.
    </h1>

    <p>
      Acompañamos proyectos residenciales, comerciales y de gran escala,
      optimizando costos y maximizando beneficios.
    </p>

    <a class="btn" href="https://wa.me/573208513309" target="_blank">
      Empecemos →
    </a>

    <div class="features">
      <div>Ahorro desde el primer mes</div>
      <div>Acompañamiento completo</div>
      <div>Beneficios tributarios</div>
    </div>

  </div>
</section>

<!-- SERVICIOS -->
<section class="servicios">
  <h2>Nuestros Servicios</h2>

  <div class="cards">

    <div class="card">
      <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231">
      <p>Instalación de paneles solares</p>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1581090700227-4c4f50c3b4b3">
      <p>Mantenimiento y monitoreo</p>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1592833159155-c62df1b65634">
      <p>Asesoría e inversión energética</p>
    </div>

  </div>
</section>

</body>
</html>