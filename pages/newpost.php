<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Asadovlar blog</title>
</head>
<body> <!--Bu konteyner boshi-->
    <div class="container-fluid" >
        <header class="row">
            <div class="col"> <!-- Navbar content -->
                <header class="d-flex justify-content-center py-3" style="background-color: #e3f2fd;">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="../Asadovlar.php" class="nav-link active" aria-current="page">Asadovlar</a></li>
                        <li class="nav-item"><a href="newpost.php" class="nav-link">Yangi post</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Galereya</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Hikoyalar</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Haqimizda</a></li>
                    </ul>
                </header>
            </div>
            <!--Header qismi tugadi-->
        </header>
        <main> <!--Bu yerda main qismi boshlandi-->
          <div class="container container-sm container-md container-lg container-xl">
            <form action="create.php" method="post">
              
              <div class="mb-3">
                <label for="textofpost" class="form-label">Postni kiriting</label>
                <textarea class="form-control" id="textofpost" name="textofpost" rows="3"></textarea>
              </div>

              <div class="mb-3">
                <label for="author" class="form-label">Postning muallifi</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Muallif ism-sharifi">
              </div>
              <a class="btn btn-primary" href="#" role="button">Link</a>
              <button class="btn btn-primary" type="submit">Button</button>
              <input class="btn btn-primary" type="button" value="Input">
              <input class="btn btn-primary" type="submit" value="Submit">
              <input class="btn btn-primary" type="reset" value="Reset">
            </form>
          </div>
        </main>
        <!--Bu yerda Footewr boshlangan-->
        <footer class="row">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                  <li class="nav-item"><a href="Asadovlar.html" class="nav-link active px-2 text-muted">Asadovlar</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hikoyalar</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Haqimizda</a></li>
                </ul>
                <p class="text-center text-danger"> © 2022 Asadovlar shaxshiy blogi !!! </p>
              </footer>
        <!--Bu yerda Footewr tugagan-->
        </footer>
    </div>
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>