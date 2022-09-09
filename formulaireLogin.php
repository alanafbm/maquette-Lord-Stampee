<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lord Stampee</title>
    <link rel="stylesheet" href="./assets/CSS/root.css">
    <link rel="stylesheet" href="./assets/CSS/navigation.css">
    <link rel="stylesheet" href="./assets/CSS/footer.css">
    <link rel="stylesheet" href="./assets/CSS/header.css">
    <link rel="stylesheet" href="./assets/CSS/sections.css">
    <link rel="stylesheet" href="./assets/CSS/mediaquerys.css">
    <link rel="stylesheet" href="./assets/CSS/formLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <script src="./assets/JS/eye.js" defer></script>
</head>
<body>
<nav>
    <div class="icon">
      <img class="imgIcon" src="./assets/images/logoStampee-2.png" alt="">
    </div>
    <div class="subMenu">
      <a href="index.html" class="menuFont">Accueil</a>
    </div>
    <div class="subMenu">
      <a href="catalogue.html" class="menuFont">Enchères</a>
      <div>
        <a href="#">En vedette</a>
        <a href="#">En cours</a>
        <a href="#">Passé</a>
      </div>
    </div>
    <div class="subMenu">
      <a href="#" class="menuFont">A propos</a>
      <div>
        <a href="#">Lord Stampee</a>
        <a href="#">Termes et conditions</a>
        <a href="#">Nous contacter</a>
      </div>
    </div>
    <a href="formulaireLogin.php" class="menuFont">Login</a>
    <input type="search" name="recherche" placeholder="Recherche">
  </nav>
  <section class="containerLogin">
      <form action="" method="post" class="box">
          <div class="containerText">
              <h1>CONNEXION</h1>
              <!-- <h2>Bienvenue à nouveau, vous nous avez manqué !</h2> -->
          </div>
          <div class="containerInput">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <img src="https://api.iconify.design/mdi:eye-off-outline.svg?color=%23636363" alt="" id="icon-eye-open" class="iconify-eye">
            <img src="https://api.iconify.design/mdi:eye-outline.svg?color=%23636363" alt="" class="iconify-eye hidden" id="icon-eye-close">
          </div>
          <p>Mot de passe oublié</p>
          <a class="buttonLogin" href="">Sign In</a>
          <div class="continueWith">
              <div class="lign"></div>
              <h3>Ou continuer avec</h3>
              <div class="lign"></div>
          </div>        
          <section class="containerIcon">
              <div class="iconContainer">
                  <button class="icon"><svg class="svgLogin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--logos" width="31.27" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg>
                  </button>
              </div>
              <div class="iconContainer">
                  <button class="icon"><svg class="svgLogin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--logos" width="26.67" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 24"><path fill="#636363" d="M20.091 17.524a13.902 13.902 0 0 1-1.805 3.651l.03-.046q-1.861 2.827-3.706 2.827a6.649 6.649 0 0 1-2.064-.478l.044.016a6.254 6.254 0 0 0-2.167-.461h-.011a5.531 5.531 0 0 0-2.083.49l.035-.014a5.137 5.137 0 0 1-1.889.49L6.46 24q-2.192 0-4.342-3.735a14.628 14.628 0 0 1-2.12-7.236v-.02A8.524 8.524 0 0 1 1.644 7.59l-.017.024a5.005 5.005 0 0 1 4.061-2.08h.037h-.002a9.587 9.587 0 0 1 2.621.452l-.068-.019a8.888 8.888 0 0 0 1.95.428l.041.004a7.198 7.198 0 0 0 2.111-.508l-.048.017a7.944 7.944 0 0 1 2.48-.49h.085a5.25 5.25 0 0 1 3.019.949l-.017-.011c.572.416 1.066.89 1.488 1.424l.012.016a9.451 9.451 0 0 0-1.627 1.678l-.017.024a5.09 5.09 0 0 0-.938 2.958v.029v-.001v.062c0 1.181.373 2.275 1.007 3.171l-.012-.017a4.41 4.41 0 0 0 2.248 1.814l.031.01zM14.668.606a5.507 5.507 0 0 1-.432 1.998l.014-.036a5.94 5.94 0 0 1-1.34 1.992l-.001.001a4.102 4.102 0 0 1-1.53 1.031l-.028.009a7.66 7.66 0 0 1-1.475.243l-.025.001v-.028c0-1.372.42-2.647 1.139-3.701l-.015.023A5.754 5.754 0 0 1 14.547.005L14.581 0c.013.043.026.097.035.152l.001.008c.01.063.023.117.039.17l-.003-.01q0 .058.007.144t.007.142z"></path></svg>
                  </button>
              </div>
              <div class="iconContainer">
                  <button class="icon"><svg class="svgLogin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--logos" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"></path><path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825"></path></svg>
                  </button>
              </div>
          </section>
          <h3>Vous n'êtes pas membre? <a href="">S'inscrire maintenant</a></h3>
      </form>
    </section>
     <!---------------------------------Footer------------------------->
  <footer>
    <nav class="footerNav">
      <div class="navColumn">
        <a href="#">Trouvez une enchére</a>
        <a href="#">Termes & conditions</a>
        <a href="#">Devenir membre</a>
      </div>
      <div class="footerStampee">
        <img src="./assets/images/logoStampee-2.png" alt="">
        <p>info@lordstampee.qc.ca</p>
        <p>514-454-4444</p>
        <p>Copyright © 2022 Enchères Stampee</p>
        <p>Tous droits réservés.</p>
      </div>
      <div class="navColumn">
        <a href="#">Nous contacter</a>
        <a href="#">Nous suivre</a>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            aria-hidden="true" role="img" class="iconify iconify--entypo-social" width="32" height="32"
            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
            <path fill="currentColor"
              d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z">
            </path>
          </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
            role="img" class="iconify iconify--entypo-social" width="32" height="32" preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 20 20">
            <path fill="currentColor"
              d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h14c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2zM9.984 15.523a5.539 5.539 0 0 0 5.538-5.539c0-.338-.043-.664-.103-.984H17v7.216a.69.69 0 0 1-.693.69H3.693a.69.69 0 0 1-.693-.69V9h1.549c-.061.32-.104.646-.104.984a5.54 5.54 0 0 0 5.539 5.539zM6.523 9.984a3.461 3.461 0 1 1 6.922 0a3.461 3.461 0 0 1-6.922 0zM16.307 6h-1.615A.694.694 0 0 1 14 5.308V3.691c0-.382.31-.691.691-.691h1.615c.384 0 .694.309.694.691v1.616c0 .381-.31.693-.693.693z">
            </path>
          </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
            role="img" class="iconify iconify--ion" width="32" height="32" preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 512 512">
            <path
              d="M182.8 384V212.9h-54.9V384h54.9zm-25.4-197c18.3 0 29.7-13.1 29.7-29.5-.3-16.7-11.4-29.5-29.4-29.5S128 140.8 128 157.5c0 16.4 11.4 29.5 29 29.5h.4z"
              fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
            <path
              d="M320.6 209c-29.1 0-41.6 16.4-49.6 27.8V213h-55v171h55v-97.4c0-5 .4-10 1.9-13.5 4-10 13-20.3 28.2-20.3 19.9 0 27.9 15.3 27.9 37.7V384h55v-99.9c0-51.3-27.2-75.1-63.4-75.1z"
              fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
            <path
              d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM414 416H99.1c-1.8 0-3.1-1.4-3.1-3.1V98c0-1.1 1-2 2-2h316c1 0 2 1 2 2v316c0 .9-.9 2-2 2z"
              fill="currentColor"></path>
          </svg></a>
      </div>
    </nav>
  </footer>
</body>
</html>