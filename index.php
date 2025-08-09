<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Header AHI PEGA</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: sans-serif;
      background-color: #ffffff;
    }

    /* Header base */
    .header {
      background-color: #e5e5e5;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      position: relative;
      z-index: 10;
    }

    .map-icon {
      height: 35px;
    }

    .menu-toggle {
      position: absolute;
      right: 15px;
      display: none;
      flex-direction: column;
      justify-content: center;
      cursor: pointer;
    }

    .menu-toggle div {
      width: 25px;
      height: 4px;
      background-color: #f25022;
      margin: 3px 0;
      border-radius: 2px;
      transition: 0.3s;
    }

    /* Menú lateral oculto */
    .menu {
      position: fixed;
      top: 0;
      right: -250px;
      width: 250px;
      height: 100vh;
      background-color: #ffffff;
      box-shadow: -2px 0 5px rgba(0,0,0,0.1);
      padding: 20px;
      transition: right 0.3s ease-in-out;
      z-index: 9;
    }

    .menu.active {
      right: 0;
    }

    .menu ul {
      list-style: none;
      padding: 0;
      margin-top: 40px;
    }

    .menu ul li {
      padding: 10px 0;
      border-bottom: 1px solid #eee;
      font-size: 16px;
    }

    /* SECCIÓN DEL LOGO CENTRADO */
    .logo-section {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      background: #f9f9f9;
    }

    .logo-img {
      max-width: 180px;
      height: auto;
    }

    /* SECCIÓN DEL BUSCADOR CLÁSICO */
    .search-section {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      padding: 30px 0 10px 0;
    }

    .search-form {
      display: flex;
      align-items: center;
      width: 100%;
      max-width: 400px;
      background: #f1f1f1;
      border-radius: 25px;
      padding: 5px 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .search-input {
      flex: 1;
      border: none;
      background: transparent;
      font-size: 16px;
      padding: 8px 12px;
      outline: none;
    }

    .search-btn {
      background: #f25022;
      border: none;
      color: #fff;
      font-size: 20px;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background 0.2s;
    }

    .search-btn:hover {
      background: #d13c0f;
    }

    /* SECCIÓN DE CATEGORÍAS */
    .categories-section {
      padding: 40px 0;
      background: #f9f9f9;
    }

    .categories-title {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
      position: relative;
    }

    .categories-title::after {
      content: '';
      position: absolute;
      width: 60px;
      height: 4px;
      background: #f25022;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .categories-carousel {
      display: flex;
      overflow-x: auto;
      padding: 0 20px;
      scroll-snap-type: x mandatory;
    }

    .category-item {
      min-width: 250px;
      margin-right: 15px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
      scroll-snap-align: start;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .category-item:last-child {
      margin-right: 0;
    }

    .category-header {
      background: var(--color);
      color: #fff;
      padding: 10px;
      font-size: 18px;
      text-align: center;
      position: relative;
    }

    .category-header::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0,0,0,0.1);
      z-index: 1;
    }

    .category-header span {
      position: relative;
      z-index: 2;
    }

    .category-footer {
      padding: 10px;
      font-size: 14px;
      text-align: center;
      background: #f1f1f1;
    }

    .category-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    /* Responsive - móvil */
    @media (max-width: 768px) {
      .header {
        justify-content: flex-start;
        padding: 0 15px;
      }

      .menu-toggle {
        display: flex;
      }

      .map-icon {
        margin-right: auto;
      }

      .categories-carousel {
        flex-direction: column;
        align-items: center;
      }

      .category-item {
        width: 90%;
        max-width: 300px;
      }
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <img src="images/mapa.png" alt="Mapa" class="map-icon">
    <div class="menu-toggle" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- SECCIÓN DEL LOGO CENTRADO -->
  <section class="logo-section">
    <img src="images/logo.png" alt="Logo" class="logo-img">
  </section>

  <!-- BUSCADOR CLÁSICO -->
  <section class="search-section">
    <form class="search-form" action="#" method="get">
      <input type="text" class="search-input" placeholder="Buscar...">
      <button type="submit" class="search-btn">
        🔍
      </button>
    </form>
  </section>

  <!-- SECCIÓN DE CATEGORÍAS -->
  <section class="categories-section">
    <h2 class="categories-title">CATEGORÍAS</h2>
    <div class="categories-carousel">
      <div class="category-item" style="--color:#2336a3;">
        <div class="category-header">ENTRETENIMIENTO NOCTURNO</div>
        <img src="images/cat1.jpg" alt="Entretenimiento nocturno">
        <div class="category-footer">EVENTOS CULTURALES</div>
      </div>
      <div class="category-item" style="--color:#c92e5b;">
        <div class="category-header">TURISMO</div>
        <img src="images/cat2.jpg" alt="Turismo">
        <div class="category-footer">DEPORTE</div>
      </div>
      <div class="category-item" style="--color:#2336a3;">
        <div class="category-header">CORPORATIVOS Y EMPRESARIALES</div>
        <img src="images/cat3.jpg" alt="Corporativos">
        <div class="category-footer">TECNOLOGÍA E INNOVACIÓN</div>
      </div>
      <div class="category-item" style="--color:#c92e5b;">
        <div class="category-header">MODA</div>
        <img src="images/cat4.jpg" alt="Moda">
        <div class="category-footer">GASTRONOMÍA Y FERIAS</div>
      </div>
      <div class="category-item" style="--color:#2336a3;">
        <div class="category-header">MÚSICA Y CONCIERTOS</div>
        <img src="images/cat5.jpg" alt="Música">
        <div class="category-footer"></div>
      </div>
      <!-- Agrega más categorías si lo necesitas -->
    </div>
  </section>

  <!-- MENÚ LATERAL -->
  <div class="menu" id="menu">
    <ul>
      <li>Inicio</li>
      <li>Categorías</li>
      <li>Publicar</li>
      <li>Contacto</li>
      <li>Mi cuenta</li>
    </ul>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById('menu');
      menu.classList.toggle('active');
    }
  </script>

</body>
</html>
