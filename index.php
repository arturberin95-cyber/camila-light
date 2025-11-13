<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://concamila.online/', 'nnvndgqjgdwvhmnwczdc3gwhbphvfdcc');
$client->sendAllParams();       // to send all params from page query
//$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Camila | Formación en Trading Responsable</title>
    <meta name="description" content="Aprende trading de forma responsable con Camila: educación, práctica guiada y comunidad en Telegram. Únete gratis." />
    <meta name="keywords" content="trading, educación, formación, gestión de riesgos, comunidad, Telegram" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="theme-color" content="#fff" />
    <meta name="msapplication-navbutton-color" content="#fff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff" />
    <meta name="theme-color" content="#fff" />
    <link rel="icon" href="images/logo.svg" />
    <link rel="stylesheet" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body class="body loaded">
    <div class="main-wrapper">
      <header class="header">
        <div class="wrapper">
          <a href="#hero" class="header__logo js-scroll">
            <img src="images/logo.svg" alt="" />
            <div class="header__name">Camila</div>
            <a href="<?php echo $client->getOffer() ?>">CLICK TO GO</a>

          </a>
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__list-item"><a href="#about" class="header__list-link js-scroll" data-title="About me">Acerca de mí</a></li>
              <li class="header__list-item"><a href="#reviews" class="header__list-link js-scroll" data-title="Reviews">Opiniones</a></li>
              <li class="header__list-item"><a href="#join" class="header__list-link js-scroll" data-title="Join Our Team">Únete a Nuestra Comunidad</a></li>
            </ul>
            <a href="<?php echo $client->getOffer() ?>" class="header__button send-x'" data-title="Open in Telegram"> Abrir en Telegram </a>
          </nav>
          <a href="<?php echo $client->getOffer() ?>" class="header__button send-x'" data-title="Open in Telegram"> Abrir en Telegram </a>
          <div class="header__burger">
            <span class="header__burger-span"></span>
          </div>
        </div>
      </header>
      <main class="main">
        <section class="hero" id="hero">
          <div class="wrapper">
            <div class="hero__left">
              <h1 class="hero__title hero__title-appl">
                Formación en Trading <br />
                con Camila
              </h1>
              <img src="images/main-img.webp" alt="Camila" style="max-width: 700px; border-radius: 10px; margin: 20px auto; width: 100%" />

              <ul class="hero__list">
                <li class="hero__list-item">Trader y mentora con cinco años de experiencia práctica.</li>
                <li class="hero__list-item">Programa educativo paso a paso: fundamentos, análisis, gestión del riesgo y psicología del trading.</li>
                <li class="hero__list-item">Comunidad de aprendizaje en Telegram con sesiones, materiales y soporte diario.</li>
                <li class="hero__list-item">Enfoque 100% educativo. No ofrecemos asesoramiento financiero ni garantizamos resultados. Aprende a tomar decisiones informadas.</li>
              </ul>
              <p class="hero__desc">Únete gratis a mi canal educativo en Telegram y empieza por una guía de inicio rápido con ejemplos prácticos. 👇</p>
              <div class="hero__wrapper">
                <a href="<?php echo $client->getOffer() ?>" class="hero__button send-x'">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M22.2075 2.45532C22.0913 2.35498 21.9499 2.28825 21.7986 2.26231C21.6473 2.23637 21.4917 2.25222 21.3487 2.30814L2.34937 9.74345C2.0801 9.84815 1.85214 10.0375 1.6998 10.283C1.54745 10.5284 1.47898 10.8168 1.50468 11.1045C1.53037 11.3923 1.64886 11.6639 1.84229 11.8785C2.03572 12.0931 2.29362 12.2391 2.57718 12.2944L7.49999 13.2609V18.75C7.49902 19.049 7.58787 19.3414 7.75503 19.5893C7.92219 19.8372 8.15995 20.0291 8.43749 20.1403C8.71461 20.2535 9.01936 20.2806 9.31213 20.2183C9.60489 20.1559 9.87211 20.0069 10.0791 19.7906L12.4528 17.3288L16.2187 20.625C16.4904 20.866 16.8409 20.9994 17.2041 21C17.3632 20.9999 17.5214 20.9749 17.6728 20.9259C17.9203 20.8474 18.1428 20.7055 18.3183 20.5142C18.4938 20.3229 18.6162 20.0889 18.6731 19.8356L22.4784 3.28126C22.5125 3.13196 22.5052 2.97622 22.4575 2.83072C22.4098 2.68522 22.3234 2.55545 22.2075 2.45532ZM16.4756 5.83032L8.07656 11.8453L3.42656 10.9331L16.4756 5.83032ZM8.99999 18.75V14.2988L11.3241 16.3369L8.99999 18.75ZM17.2059 19.5L9.45468 12.7031L20.6109 4.7072L17.2059 19.5Z"
                      fill="#130A02"
                    ></path>
                  </svg>
                  <span class="hero__button-span">Abrir en Telegram</span>
                </a>
                <div class="hero__wrapper-inner">
                  <div class="">¿No tienes Telegram?</div>
                  <a href="<?php echo $client->getOffer() ?>" target="_blank" class="hero__telegram" data-title="Download link"> Enlace de descarga </a>
                </div>
              </div>
            </div>
          </div>
          <div class="hero__bg">
            <img src="images/hero-bg.svg" alt="" />
          </div>
        </section>
      </main>

      <footer class="footer footer--legal">
        <div class="wrapper">
          <div class="footer__grid" aria-label="Información legal y políticas del sitio">
            <div class="footer__brand">
              <a href="#hero" class="footer__logo js-scroll" aria-label="Volver al inicio">
                <img src="images/logo.svg" alt="Camila" />
              </a>
            </div>
            <nav class="footer__nav">
              <a class="footer__link" href="privacy.html">Política de Privacidad</a>
              <a class="footer__link" href="terms.html">Términos de Servicio</a>
              <a class="footer__link" href="cookies.html">Política de Cookies</a>
              <a class="footer__link" href="contacto.html">Contacto</a>
            </nav>
          </div>
          <div class="footer__disclaimer">
            DESCARGO DE RESPONSABILIDAD: El contenido de este sitio es exclusivamente educativo e informativo. No constituye asesoramiento financiero, legal, contable ni fiscal. Operar en los mercados conlleva riesgos, incluida la posible pérdida del
            capital. Antes de invertir, realiza tu propia investigación (DYOR) y consulta con profesionales certificados. No se garantizan resultados ni rentabilidades futuras. © 2025 camilla.com. Todos los derechos reservados.
          </div>
        </div>
      </footer>

      <footer class="footer">
        <div class="wrapper">
          <div class="footer__copyright wow fadeIn"></div>
        </div>
      </footer>
    </div>

    <script src="/js/libs.min.js"></script>
    <script src="/js/common.min.js"></script>
    
  </body>
</html>
