<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Nov 11 2022 08:37:09 GMT+0000 (Coordinated Universal Time)  -->
<?php
  // PHP Data Objects(PDO) Sample Code:
  try {
      $conn = new PDO("sqlsrv:server = tcp:acp-sql-db-server.database.windows.net,1433; Database = acp-sql-database", "lucasrietsch", "Ttkroj77!");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
      print("Error connecting to SQL Server.");
      die(print_r($e));
  }

  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "lucasrietsch", "pwd" => "Ttkroj77!", "Database" => "acp-sql-database", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:acp-sql-db-server.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
<html data-wf-page="60571e6606fa625cd14e26b3" data-wf-site="60571e6606fa62cfe24e26b2">
<head>
  <meta charset="utf-8">
  <title>Bakery</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/my-great-bakery.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="hero-bakery wf-section">
    <h1 data-w-id="824bca0a-3e76-1561-3d58-17e6a73a1f74" style="opacity:0" class="heading">
      Welcome to my great bakery, <?php print("I'm in baby"); ?>
    </h1>
    <a href="#s2" data-w-id="e987ea6a-0940-7328-fb65-86dfeee77c07" style="opacity:0" class="link-block w-inline-block">
      <div class="text-block">let see our products</div>
    </a>
    <div class="icons">
      <a href="https://www.facebook.com/Boulangerie-Pâtisserie-Stéphane-et-Isabelle-422265968237447/about/?ref=page_internal" target="_blank" class="lb w-inline-block"><img src="images/pngfind.com-facebook-icon-white-png-80808.png" loading="lazy" style="opacity:0" data-w-id="58e26f40-ffac-33aa-0398-f199395f83be" alt="" class="image-2"></a>
      <a href="#" class="lb w-inline-block"><img src="images/pngfind.com-mail-icon-png-534728.png" loading="lazy" style="opacity:0" data-w-id="1bbb5f02-9cd0-13c6-b792-e2348dc66778" sizes="30px" srcset="images/pngfind.com-mail-icon-png-534728-p-500.png 500w, images/pngfind.com-mail-icon-png-534728-p-800.png 800w, images/pngfind.com-mail-icon-png-534728-p-1080.png 1080w, images/pngfind.com-mail-icon-png-534728.png 1481w" alt="" class="image-2"></a>
    </div>
  </div>
  <div id="s2" class="section-2 wf-section">
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
      <div class="w-container">
        <a href="#" class="w-nav-brand"><img src="images/kisspng-bakery-logo-cake-bread-pastry-logo-5adb9eac98eed9.9591246215243424446264.png" loading="lazy" alt="" class="image-5"></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="#produits" class="navlink w-nav-link">Products</a>
          <a href="#a-propos" class="navlink w-nav-link">About</a>
          <a href="#boulangerie" class="navlink w-nav-link">Our bakery</a>
          <a href="#footer" class="navlink w-nav-link">Contact</a>
        </nav>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <h1 class="heading heading2">Your bakery offers you fresh products<br>baked every morning</h1>
    <br>
    <?php
      $tsql="select * from [dbo].['Bakery - Teams$']";
      $getResults= sqlsrv_query($conn, $tsql);
      echo ("Reading data from table");
      if ($getResults == FALSE)
          echo (sqlsrv_errors());
      while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
       echo ($row['id'] . " " . $row['name']);
      }
    ?>
    <div id="produits" class="items">
      <h1 class="heading-3">Pastries</h1>
      <div class="patisserie">
        <div class="item">
          <div class="top-item"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Pastries</span><br>Croissant</div>
            <div class="text-block-2">0,9 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item chocolatine"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Pastries</span><br>Pain au chocolat<br></div>
            <div class="text-block-2">1,10 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item raisin"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Pastries</span><br>Pain au raisin<br></div>
            <div class="text-block-2">0,9 €</div>
          </div>
        </div>
      </div>
      <a href="#" class="button w-button">Load more</a>
    </div>
    <div class="items">
      <h1 class="heading-3">Pastries &amp; Cakes</h1>
      <div class="patisserie">
        <div class="item">
          <div class="top-item paris-brest"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Pastries</span><br>Paris-Brest</div>
            <div class="text-block-2">2,90 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item framboises"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Pastries</span><br>Tartelettes aux framboises<br></div>
            <div class="text-block-2">2,90 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item honore"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Cakes</span><br>Saint-Honoré<br></div>
            <div class="text-block-2">8,10 €</div>
          </div>
        </div>
      </div>
      <a href="#" class="button w-button">Load more</a>
    </div>
    <div class="items items-last">
      <h1 class="heading-3">Breads &amp; Buns</h1>
      <div class="patisserie">
        <div class="item">
          <div class="top-item baguette"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Breads</span><br>Baguette</div>
            <div class="text-block-2">0,8 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item brioche"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Buns</span><br>Brioche tressée<br></div>
            <div class="text-block-2">3,10 €</div>
          </div>
        </div>
        <div class="item">
          <div class="top-item graines"></div>
          <div class="item-description">
            <div class="text-block-2"><span class="categorie">Breads</span><br>Pain complet<br></div>
            <div class="text-block-2">1,90 €</div>
          </div>
        </div>
      </div>
      <a href="#" class="button w-button">Load more</a>
    </div>
    <div id="a-propos" class="a-propos"><img src="images/nick-karvounis-jN_M0McVNeI-unsplash.jpg" loading="lazy" srcset="images/nick-karvounis-jN_M0McVNeI-unsplash-p-500.jpeg 500w, images/nick-karvounis-jN_M0McVNeI-unsplash-p-1080.jpeg 1080w, images/nick-karvounis-jN_M0McVNeI-unsplash-p-1600.jpeg 1600w, images/nick-karvounis-jN_M0McVNeI-unsplash-p-2000.jpeg 2000w, images/nick-karvounis-jN_M0McVNeI-unsplash-p-2600.jpeg 2600w, images/nick-karvounis-jN_M0McVNeI-unsplash-p-3200.jpeg 3200w, images/nick-karvounis-jN_M0McVNeI-unsplash.jpg 3700w" sizes="(max-width: 479px) 90vw, (max-width: 767px) 80vw, (max-width: 991px) 45vw, 40vw" alt="" class="image-3">
      <div class="a-propos-txt">
        <div class="text-block-3">About us</div>
        <h1 data-w-id="f257948c-1c20-d228-ed66-1bbd28a8a1ba" style="opacity:0" class="heading-4">Let&#x27;s talk a bit about our bakery</h1>
        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        <a href="#footer" class="button-2 w-button">Contact us</a>
      </div>
    </div>
    <div id="boulangerie" class="a-propos a-propos-2"><img src="images/yeh-xintong-go3DT3PpIw4-unsplash.jpg" loading="lazy" srcset="images/yeh-xintong-go3DT3PpIw4-unsplash-p-1080.jpeg 1080w, images/yeh-xintong-go3DT3PpIw4-unsplash-p-1600.jpeg 1600w, images/yeh-xintong-go3DT3PpIw4-unsplash-p-2000.jpeg 2000w, images/yeh-xintong-go3DT3PpIw4-unsplash-p-2600.jpeg 2600w, images/yeh-xintong-go3DT3PpIw4-unsplash-p-3200.jpeg 3200w, images/yeh-xintong-go3DT3PpIw4-unsplash.jpg 4271w" sizes="(max-width: 479px) 90vw, (max-width: 767px) 80vw, (max-width: 991px) 45vw, 40vw" alt="" class="image-3">
      <div class="a-propos-txt">
        <div class="text-block-3">Our bakery</div>
        <h1 data-w-id="432f9bb2-9843-bbac-bb3b-2104fc9438b8" style="opacity:0" class="heading-4">A wide choice of authentic and delicious products!</h1>
        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        <a href="#produits" class="button-2 w-button">Order online</a>
      </div>
    </div>
    <div id="footer" class="footer">
      <div class="footer-left">
        <div class="text-block-4"><span class="text-span">Contact</span><br><br>my-bakery@free.fr<br></div>
        <div class="contact">
          <div class="text-block-4">All rights reserved © 2021<br></div>
        </div>
      </div>
      <div class="footer-rs">
        <a href="https://www.facebook.com/Boulangerie-Pâtisserie-Stéphane-et-Isabelle-422265968237447/about/?ref=page_internal" target="_blank" class="w-inline-block"><img src="images/5c25d7f49a1575522286865b_logo-fb.svg" loading="lazy" alt="" class="image-4"></a>
        <a href="#" class="w-inline-block"><img src="images/5c25d7f59a1575bc9f86865c_logo-insta.svg" loading="lazy" alt="" class="image-4"></a>
      </div>
      <div class="html-embed w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42080.956896712836!2d3.017901676655557!3d48.76165419507304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8b163e743a4f9%3A0x40b82c3688c4bb0!2sSaints%2C%20Beautheil-Saints!5e0!3m2!1sfr!2sfr!4v1617529416154!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60571e6606fa62cfe24e26b2" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
