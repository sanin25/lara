<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
          <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/myscript.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easytabs.js') }}"></script>
        </style>
    </head>
    <body>
        <section class="height cont1 container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <img src="{{asset('img/logo.png')}}" id="logo" alt="" />
                
            </div>
        </section>
         <section class="height cont2 container">
            <div class="content2 clearfix">
                <h3>Дружный фермер</h3>
                    <div class="tabs clearfix">
                        <ul>
                            <li><a href="#tab1"><img src="<?php echo asset('img/foto/jen.jpg') ?>" alt="" ></a></li>
                            <li><a href="#tab2"> <img src="<?php echo asset('img/foto/kh.jpg')?>" alt="" ></a></li>
                            <li> <a href="#tab3"><img src="<?php echo asset('img/foto/jen.jpg') ?>" alt="" ></a></li>
                           
                        </ul>
                        <div class="tabtext">
                        <div id="tab1">
                            ОдЫин
                        </div>
                        <div id="tab2">
                            дЫва
                        </div>
                        <div id="tab3">
                            трЫ
                        </div>
                        </div>
                     </div>       
         </section>
         <section class="height cont3 container">
            <div class="content">
                <div class="title">Laravel 5</div>
                               
            </div>
        </section>
    </body>
</html>