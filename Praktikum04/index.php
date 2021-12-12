<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum4</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="" onclick="loadTabelle()">Praktikum4</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="tabelle" class="nav-link active" aria-current="page" href="#" onclick="loadTabelle()">Tabelle</a>
                  </li>
                  <li class="nav-item">
                    <a id="kalender" class="nav-link" href="#" onclick="loadCalender()">Kalender</a>
                  </li>
                  </ul>
              </div>
            </div>
        </nav>

        <body id="flexBox" class="d-flex flex-column min-vh-100">
          <div id="pageContainer" class="d-flex" style="flex: 1;"></div>
          <script>
            function loadTabelle() {
              document.getElementById("pageContainer").innerHTML='<iframe src="pages/table.php" style="border:none; flex: 1;"></iframe>';
            }
            function loadCalender() {
              document.getElementById("pageContainer").innerHTML='<iframe src="pages/calender.php" style="border:none; flex: 1;"></iframe>';
            }
            window.onload = loadTabelle; //home.html beim ersten Mal besuchen der Seite laden
          </script>
        </body>
    </body>
</html>