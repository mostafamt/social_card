<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    </head>
    <body>
    <nav class="navbar">
      <div class="container">
        <div class="nav">
          <h3 class="navbar__title">
            <a href="/" class="navbar__link"
              >منظومة الكارت الإجتماعي</a
            >
          </h3>

          <ul class="navbar__items">
            <li class="navbar__item">
              <a href="/add" class="navbar__item--link">اضافة جديد</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="boxes">
        <div class="box">
          <img src="img/ahmed.jpg" alt="ahmed" class="box__img" />
          <div class="box__content">
            <h3 class="box__name">
              <a href="/profile" class="box__link">أحمد خالد توفيق جمعه</a>
            </h3>
            <p class="box__description">جندي اجراءات</p>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('img/ahmed.jpg') }}" alt="ahmed" class="box__img" />
          <div class="box__content">
            <h3 class="box__name">
              <a href="/profile" class="box__link">أحمد خالد توفيق جمعه</a>
            </h3>
            <p class="box__description">جندي اجراءات</p>
          </div>
        </div>
        <div class="box">
          <img src="img/ahmed.jpg" alt="ahmed" class="box__img" />
          <div class="box__content">
            <h3 class="box__name">
              <a href="/profile" class="box__link">أحمد خالد توفيق جمعه</a>
            </h3>
            <p class="box__description">جندي اجراءات</p>
          </div>
        </div>
        <div class="box">
          <img src="img/ahmed.jpg" alt="ahmed" class="box__img" />
          <div class="box__content">
            <h3 class="box__name">
              <a href="/profile" class="box__link">أحمد خالد توفيق جمعه</a>
            </h3>
            <p class="box__description">جندي اجراءات</p>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>
