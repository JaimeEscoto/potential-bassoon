<!DOCTYPE html>
<html lang="en">

<head>
  <style>
.danger {
    /*background-color: #ffdddd; */
    border-left: 6px solid #f44336;
    border-right:  thin solid black;
    border-top:  thin solid black;
    border-bottom:   thin solid black;
}

.success {
    /*background-color: #ddffdd; */
    border-left: 6px solid #4CAF50;
    border-right:  thin solid black;
    border-top:  thin solid black;
    border-bottom:   thin solid black;
}

.info {
    /*background-color: #e7f3fe; */
    border-left: 6px solid #2196F3;
    border-right:  thin solid black;
    border-top:  thin solid black;
    border-bottom:   thin solid black;
}


.warning {
    /* background-color: #ffffcc; */
    border-left: 6px solid #ffeb3b;
    border-right:  thin solid black;
    border-top:  thin solid black;
    border-bottom:   thin solid black;
}
</style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27162090-6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-27162090-6');
  </script>

  <meta charset="UTF-8">
  <title>Fuente Bibliográfica +</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/popUp.css">

  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="container">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- JE_Site_01 -->
<ins class="adsbygoogle"
 style="display:block"
 data-ad-client="ca-pub-2987567760800321"
 data-ad-slot="2796881558"
 data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- The Gallery JS -->
<script src="fbi.js">
</script>
</div>
  <header id="header" class="container">
    <p>
    <img src="logo1.png" width="7%" align="left">
    <h1>.    Fuente Bibliográfica + </h1>
    </p>
    <p class="lead">
      Éste sitio fue creado para ayudarte a encontrar <code>fuentes bibliográficas</code> <strong>fácilmente</strong>. Pronto agregaremos una descripción con más información.
    </p>
    <a href="index.php"><button type="button" name="button"><i class="fa fa-home" aria-hidden="true"></i></button></a>
    <a href="autores.php"><button type="button" name="button"><i class="fa fa-users" aria-hidden="true"></i> | Ver autores</button></a>
    <a href="libros.php"><button type="button" name="button"><i class="fa fa-book" aria-hidden="true"></i> | Ver libros</button></a>
    <a href="definiciones.php"><button type="button" name="button"><i class="fa fa-quote-right" aria-hidden="true"></i> | Ver definiciones</button></a>
    <hr>
    <form action="index.php" method="get">
      Escriba el <code>término</code> que desea buscar: <input type="text" placeholder="Buscar..." name="search"><button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

    </form>
    <h2>
    <?php

    include "getInfraestructure.php";
    if (isset($_GET['search'])) {
        $search = ($_GET['search']);
        $definiciones= getDefinicionesGeneral($search);
        echo "Valor buscado: ".$search;
    } else {
        $definiciones= getDefinicionesGeneral("");
    }

     ?>
     </h2>
  </header>
  <!-- Posts -->
  <!-- <div id="grid" class="container"> -->

  <div class="container" id="grid">
    <div id="posts">
      <?php


while ($definicion = $definiciones->fetch_assoc()) {
    //printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);?>
      <div class="post
      <?php $color = rand(0, 2);
    switch ($color) {
    case 0:
        echo "info";
        break;
    case 1:
        echo "success";
        break;
    case 2:
        echo "warning";
        break;
} ?>" >
        <strong><h2><?php echo $definicion["Termino"]; ?></h2> </strong>
        <br>
        <br>
        <p><?php echo $definicion["Definicion"]; ?></p>
        <p><cite><i class="fa fa-book" aria-hidden="true"></i>
        <?php echo $definicion["NombreLibro"]; ?></cite> - <?php echo $definicion["NombreAutor"]; ?> - Página: <?php echo $definicion["Pagina"].". "; ?>  <strong>  <?php echo $definicion["Anio"]; ?></strong>.</p>
        <p> <code>ISBN Proximamente</code> </p>
        <p>
          <div class="box">
          	<a class="button" href="#popupBS<?php echo $definicion["Codigo"]; ?>">
<i class="fa fa-leanpub" aria-hidden="true"></i>
            | Basada en autor</a>
          </div>

          <div id="popupBS<?php echo $definicion["Codigo"]; ?>" class="overlay">
          	<div class="popup">
          		<h2>Cita basada en el autor</h2>
          		<a class="close" href="#">&times;</a>
          		<div class="content">
          			<p>Texto...</p> <p>
                   <?php echo $definicion["NombreAutor"]." (".$definicion["Anio"].")"; ?> afirma que: "<?php echo $definicion["Definicion"]."\" p. (".$definicion["Pagina"].")"; ?>
                 </p>
                 <p>
                Texto...
              </p>
              </div>
          	</div>
          </div>

          <div class="box">
            <a class="button" href="#popupBT<?php echo $definicion["Codigo"]; ?>">
        <i class="fa fa-leanpub" aria-hidden="true"></i>
            | Basada en texto</a>
          </div>

          <div id="popupBT<?php echo $definicion["Codigo"]; ?>" class="overlay">
            <div class="popup">
              <h2>Cita basada en el texto</h2>
              <a class="close" href="#">&times;</a>
              <div class="content">
                <p>Texto...</p> <p>

                  <div style="padding-left:5px;">
                      **Parafrasear **
                    <?php echo $definicion["Definicion"]."(".$definicion["NombreAutor"].", ".$definicion["Anio"].", p.".$definicion["Pagina"].")"; ?>
**Parafrasear **
                  </div>

                 </p>
                 <p>
                Texto...
              </p>
              </div>
            </div>
          </div>
         </p>
         <br>
         <div class="box">
           <a class="button"  href="javascript:downloadZotero('<?php echo $definicion["NombreLibro"].$definicion["Termino"].'.bibtex'; ?>','@book{bodie2003finanzas,
             title={Finanzas},
             author={Bodie, Z. and Merton, R.C.},
             isbn={9789702600978},
             series={{\'A}rea Universitarios},
             url={https://books.google.hn/books?id=jPTppKDvIv8C},
             year={2003},
             publisher={Pearson Educaci{\'o}n}
           }');">
       <i class="fa fa-level-down" aria-hidden="true"></i>
           | Zotero</a>
         </div>
        <small>Relacionados: Proximamente | Proximamente | Proximamente</small>
      </div>
    <?php
}?>
      <div class="post" style="border: thin solid black">



    </div>
  </div>
  <div class="container">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- JE_Site_01 -->
<ins class="adsbygoogle"
 style="display:block"
 data-ad-client="ca-pub-2987567760800321"
 data-ad-slot="2796881558"
 data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>
