<DOCTYPE>
<lang="fr">
<head>

<meta charset="utf-8">

<!-- Titre de la Page -->
<title>Aurora Infinity | Accueil</title>

<!-- Intégration de la favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">

<!-- Intégration CSS -->
<link rel="stylesheet" href="cssfile/product.css">

</head>

<body>

<header class="header main-grid">
  <div class="header__burger">
    <span class="line"></span>
  </div>
  <div class="header__search">
    <label for="search" class="header__label">search</label>
    <input type="search" id="search" class="header__input">
  </div>
  <div class="header__logo">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 2500 583" width="163" height="24" style="enable-background:new 0 0 2500 583;" xml:space="preserve">
      <path d="M508.9,501.4c0,39.3-32.8,71.2-57.5,71.2H172.1L523.4,11.4H53.7v93h24.1c0-39.3,25.4-71.1,50.2-71.1h241.3L15.9,594.4h509.6
  l0-93H508.9" />
      <g>
        <polygon points="918.3,576.1 918.3,576.1 918.3,576.1  " />
        <path d="M1118.4,549L846.6,11.4l-249.1,538c-4.4,11.8-28.4,26.7-62.4,26.7v18.2h132.6v-18.2c-24.6,0-51-12.2-44.6-26.8L683,419.4
    h229.8L978.1,549c7.4,13.1-25.7,27.2-59.8,27.2v18.2h276l0.1-18.2C1152.6,576.1,1127.1,563.1,1118.4,549z M693,398.4l99.4-218.2
    l111,218.2H693z" />
      </g>
      <path d="M1226,33.9c40.4,0,73.8,10.4,73.8,23c0,100-0.2,491.5,0,491.5c0,13.4-32.9,28.3-73.4,28.3l-0.1,17.6h270.2v-16.4
  c-40.1,0-72.6-16-72.6-29.4V29h77.9c75,0,135.8,62.3,135.8,133c0,70.7-60.8,128.1-135.9,128.1h-53.9c0,0,182.6,276.5,182.9,276.5
  c7.2,10.5,10.8,27.8,10.8,27.8h196.9v-16.4c-37.9,0-57.7-15.7-68.7-29.5l-175.8-229.4c84.4-5.6,149.7-73.8,149.7-154.8
  c0-84.6-72.7-152.9-162.4-152.9H1226V33.9" />
      <path d="M2440,549L2168.2,11.4l-249.1,538c-4.4,11.8-28.3,27.3-62.4,27.3v17.6h132.6v-16.4c-24.6,0-50.9-14-44.6-28.6l59.9-129.9
  h229.8l65.3,129.6c7.5,13.1-25.7,27.8-59.8,27.8h0v17.6h276l0.1-17C2474.2,577.4,2448.7,563.1,2440,549z M2014.5,398.4l99.4-218.2
  l111,218.2H2014.5z" />
    </svg>
  </div>
  <div class="header__cart">
    <h4>cart<sup class="header__numb">3</sup></h4>
  </div>
</header>
<main class="card main-grid">
  <div class="card__content">
    <div class="card__head">
      <h2>t-shirt with <br>
        slogan
      </h2>
      <p class="card__text">Shirt sleeve T-shirt with a round <br> neckline and a contrast from print.</p>
      <p class="card__price">$44.00</p>
    </div>
    <div class="card__choose">
      <div class="card__size">
        <label for="size" class="card__label">size</label>
        <select name="size" id="size" class="card__select">
          <option value="small">S</option>
          <option value="medium">M</option>
          <option value="large">L</option>
          <option value="x-large">XL</option>
        </select>
      </div>
      <div class="card__color">
        <label for="color" class="card__label">color</label>
        <span class="clr clr1"></span>
        <span class="clr clr2"></span>
      </div>  
    </div>
    <div class="card__counter">
        <button class="card__numb" id="sub">-</button>
        <input type="number" class="card__count" value="0"></input>
        <button class="card__numb" id="add">+</button> 
      </div>
     <a href="#" class="btn btn--primary">add to cart</a>
  </div>
  <div class="card__image">
    <img class="cover" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2709552/model.jpg" alt="model">
  </div>
</main>

</body>
