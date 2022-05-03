<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <div class="row text-center mt-5 calculator ">
            <div class="col-sm-12 Sonuc-ekran" >
                <h5 id="historical"></h5>
                <div class="Sonuc-ekran2 ">
                    <input id="inp" type="text"   class="form-control">
                </div>
            </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3"><button type="button" onclick="func(7)" class="btn btn-outline-dark">7</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(8)"  class="btn btn-outline-dark">8</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(9)"  class="btn btn-outline-dark">9</div>
                        <div class="col-sm-3"><button type="button" onclick="func('+');f('+');"  class="btn btn-outline-dark">+</button></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"><button type="button" onclick="func(4)"  class="btn btn-outline-dark">4</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(5)"  class="btn btn-outline-dark">5</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(6)"  class="btn btn-outline-dark">6</button></div>
                        <div class="col-sm-3"><button type="button" onclick="f('-')"  class="btn btn-outline-dark">-</button></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"><button type="button" onclick="func(1)"  class="btn btn-outline-dark">1</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(2)" class="btn btn-outline-dark">2</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func(3)"  class="btn btn-outline-dark">3</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func('*');f(); "  class="btn btn-outline-dark">*</button></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"><button type="button"  onclick="func(0)"  class="btn btn-outline-dark">0</button></div>
                        <div class="col-sm-3"><button type="button" onclick="func('.')" class="btn btn-outline-dark">.</button></div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3"><button type="button" onclick="f('/')"  class="btn btn-outline-dark">/</button></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9"><button name="equal" type="submit"  onclick="show()" class="btn btn-outline-dark w-100">=</button></div>
                        <div class="col-sm-3"><button type="button" onclick="cls()" class="btn btn-outline-dark">C</button></div>
                    </div>
                </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>