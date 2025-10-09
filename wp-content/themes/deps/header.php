<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPS | Innovación Educativa</title>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/src/img/favicon.png">

    <!-- Oculta el header para el ifarme de la APP -->
    <script>
    (function () {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get("id") === "app") {
        document.documentElement.classList.add("is-app");
      }
    })();
  </script>


    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DGQNCQ231Q"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-DGQNCQ231Q');
    </script>
    
</head>

<body class="js-modal-body">