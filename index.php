<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Coffee-machine</title>
  </head>
  <body>
  <div class="container">
    <div class="row coffee-machine" id="coffee">
      <div class="col-6 coffee-list d-flex flex-column justify-content-around">
        <div class="coffee-item" onclick="buyCoffee('Американо', 50, this)">
          <img src="img/americano.png" alt="">
          <span>Американо - 50 руб.</span>
        </div>
        <div class="coffee-item" onclick="buyCoffee('капучино', 92, this)">
          <img src="img/cappuccino.png" alt="">
          <span>капучино - 92 руб.</span>
        </div>
        <div class="coffee-item" onclick="buyCoffee('экспрессо', 66, this)">
          <img src="img/espresso.png" alt="">
          <span>экспрессо - 66 руб.</span>
        </div>
        <div class="coffee-item" onclick="buyCoffee('Латте', 128, this)">
          <img src="img/latte.jpg" alt="">
          <span>Латте - 128 руб.</span>
        </div>
      </div>
      <div class="col-6 coffee-oper">
         <div class="row p-3"> 
          <div class="col-6">
            <div class="display">
             <p class="display-text"> Выберите кофе</p>
              <div class="progress">
               <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
              </div>
            </div>
            <div class="coffee-cup">
              <img class="d-none" src="img/americano.png" alt="">
           </div>
          </div>
           <div class="col-6">
            <div class="input-group mb-3">
                 <input type="text" class="form-control" placeholder="баланс" aria-label="Имя получателя" aria-describedby="basic-addon2">
             <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">руб.</span>
             </div>
            </div>
              <div class="atm">
              <img src="img/bill_acc.png" alt="">
              </div>
              <button class="btn btn-primary btn-block mt-3">Сдача</button>
              <div class="change-box mt-3" ></div>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bills">
    <img src="img/50rub.jpg" alt="">
    <img src="img/100rub.jpg" alt="">
    <img src="img/500rub.jpg" alt="">
  </div>
    <!-- Optional JavaScript -->
    <script src="coffee.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>