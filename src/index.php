<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main page</title>

  <link rel="stylesheet" href="./static/css/bootstrap.css">
  <link rel="stylesheet" href="./static/css/style.css">
  <link rel="stylesheet" href="./static/css/slider.css">

  <link rel="import" href="./nav/header.html">

</head>

<body>

  <div class="container">

    <div class="navigate">
      <?php include "./nav/header.html" ?>
    </div>


    <video autoplay muted loop id="bgVideo" onclick="myFunction()">
      <source src="./static/video/bgvideo.webm" type="video/webm">
      Your browser does not support HTML5 video.
    </video>


    <div class="about">
      <p>Komplettversorgung mit elektronischen Komponenten</p>
    </div>


    <div id="section-1" class="row" style="padding: 90px; padding-top: 130px;">

      <div class="col">

        <p>
        <h2 style="width: 80%; font-size: 245%;"> <strong>Unabhängiger Distributor aus Überzeugung</strong></h2>
        </p>


        <p>
          Wir sind Ihr unabhängiger Partner für die erstklassige Distribution von elektronischen Bauteilen sowie Komponenten unterschiedlichster Art. Durch unsere schnelle und einfache sowie direkte Belieferung unterstützen wir Sie bei der Überbrückung von Engpässen
          in der Beschaffung. So läuft Ihre Produktion dauerhaft und ohne Verzögerungen weiter!
        </p>

        <p>
          Unser Lager umfasst Tausende von elektronischen Bauteilen sowie Komponenten und wir für Sie dauerhaft erweitert. Dazu kaufen wir Lagerüberbestände auf und beschaffen abgekündigte Bauelemente, die Sie sonst nirgendwo finden. Außerdem kümmern wir uns für
          Sie auch gerne um Sonderbeschaffungen von Bauteilen, die Sie sich wirklich nirgendwo anders liefern lassen können. – Fragen Sie daher gerne einfach an und finden Sie genau die elektronischen Bauteile, nach denen Sie gesucht haben!
        </p>
      </div>
      <div class="col">

        <div class="info row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

          <article class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">60 000</h1>
                <p class="card-text">Warenpositionen</p>
              </div>
            </div>
          </article>

          <article class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">25 000</h1>
                <p class="card-text">Artikel abgekündigt</p>
              </div>
            </div>
          </article>

        </div>

        <div style="padding-top: 45px;" class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

          <article class="col">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">8 000</h1>
                <p class="card-text">Einzigartige spezialkomponenten

                  <br>
                  <span style="color: rgb(138, 138, 138);"><small>die Sie sonst nirgendwo finden werden</small></span>
                </p>

              </div>
            </div>
          </article>

        </div>


      </div>


      <div class="row slider" style="background-color: while; width: 100%; margin-top: 55px; margin-bottom: 100px;">

        <div class="row slider-arrows">

          <div class="col-xs-2">
            <button type="button" class="prev" style="color: whitesmoke;">_</button>
          </div>

          <div class="col-xs-2" style="background-color: white; margin: 0 auto;">
            <?php include "./pages/slider.php" ?>
          </div>


          <div class="col-xs-2">
            <button type="button" class="next" style="color: whitesmoke;">_</button>
          </div>

        </div>


      </div>

    </div>



    <div class="row" style="background-color: #B0936A">
      <div class="col col-md-12 col-xl-12" style="height: 20px;">

      </div>
    </div>

    <div id="section-2" class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

      <article class="col-lg-5">
        <div class="card-fut">
          <div class="card-body" style="margin: 0 auto; text-align: center;">
            <img src="./static/img/image 1.png" alt="" style="width: 330px;">
          </div>
        </div>
      </article>

      <article class="col-lg-6" style="padding-top: 70px; padding-bottom: 100px;">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title-2"><strong>Maximale Qualität </strong></h2>
            <h4><strong>Transparenz & Sicherheit + Zertifizierung & Garantie</strong></h4>
            <br>
            <p>
              Bei uns steht seit jeher die Qualität und Transparenz für unsere Kunden im Mittelpunkt. Daher stellen wir bereits im Einkauf die maximale Qualität unserer elektronischen Bauteile für Sie sicher. Somit gewährleisten wir Ihnen die optimale Funktionalität
              sowie eine lange Lebensdauer Ihrer Bauelemente.
            </p>
            <p>
              Zudem prüfen wir im Zuge unseres Qualitätsmanagements alle elektronischen Bauteile systematisch mithilfe von bewährten Mess- und Prüfverfahren, welche nach DIN EN ISO 9001 zertifiziert ist. Hierzu geben wir Ihnen gerne weitere Auskünfte, sodass Sie genau
              wissen, was hinter unseren Standards und Gewährleistungen wirklich steckt!
            </p>
          </div>
        </div>
      </article>

    </div>


    <div id="section-3" class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

      <article class="col-lg-6">
        <div class="card">
          <div class="card-body-2">
            <h1 style="font-weight: bold; font-size: 170%">
              <strong> Ihr zuverlässiger Partner für die unabhängige Distribution elektronischer Bauteile</strong>
            </h1>
            <br>
            <p>
              Durch abgekündigte Bauteile verlängert sich die Lieferzeit von elektronischen Bauteilen meist direkt, was für Sie als Produzent zu großen Nachteilen führt. Gut, dass wir es uns als unabhängiger Distributor von elektronischen Bauteilen zur Aufgabe gemacht
              haben, die idealen Lösungen für dieses Problem zu bieten.
            </p>
            <p>
              So haben wir uns auf den Vertrieb von abgekündigten Bauteilen im Elektronikbereich spezialisiert. Wir beschaffen diese nicht nur so effektiv und schnell wie möglich, sondern liefern sie Ihnen auch direkt in die Produktion. Dadurch schließen wir Engpässe
              und helfen Ihnen mit hochwertigen Ersatzteilen zu angemessenen Preisen. Nehmen Sie daher gerne direkt Kontakt mit uns auf und teilen Sie uns Ihr Anliegen mit. Gemeinsam finden wir eine ideale Lösung und liefern Ihnen schon bald genau die
              elektronischen Bauteile und Komponenten, die Sie brauchen!
            </p>
          </div>
        </div>
      </article>

      <article class="col-lg-6">
        <div class="card-" style="padding-left: 5%;">
          <div class="card-body-2">
            <img src="./static/img/Rectangle 12.png" alt="" style="width: 100%;">
          </div>
        </div>
      </article>

      <div class="col btn-fnd">
        <button class="btn btn-default" type="submit">Komponentensuche</button>
      </div>

    </div>

    <?php include "./nav/footer.html" ?>

  </div>



  <script src="./static/js/jquery.js" type="text/javascript"></script>
  <script src="./static/js/bootstrap.js" type="text/javascript"></script>
  <script src="./static/js/modal.js" type="text/javascript"></script>
  <script src="./static/js/slider.js" type="text/javascript"></script>
</body>

</html>