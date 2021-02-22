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
      <div class="profile">
        <a href="#" class="profile__link">
          <img src="img/ahmed.jpg" alt="ahmed" class="profile__img" />
        </a>
        <ul class="profile__items">
          <li class="profile__item">
            <span class="profile__item--head">الاسم:</span>
            <span class="profile__item--description">أحمد خالد توفيق جمعه</span>
          </li>
          <li class="profile__item">
            <span class="profile__item--head">الدرجة:</span>
            <span class="profile__item--description">جندي</span>
          </li>
          <li class="profile__item">
            <span class="profile__item--head">محل الاقامة:</span>
            <span class="profile__item--description"
              >مركز سوهاج، محافظة سوهاج</span
            >
          </li>
          <li class="profile__item">
            <span class="profile__item--head">الرقم العسكري:</span>
            <span class="profile__item--description">2019416623635</span>
          </li>
          <li class="profile__item">
            <span class="profile__item--head">لون العين:</span>
            <span class="profile__item--description">عسلي</span>
          </li>
          <li class="profile__item">
            <span class="profile__item--head">لون البشرة:</span>
            <span class="profile__item--description">أبيض</span>
          </li>
          <li class="profile__item">
            <span class="profile__item--head">الهواية:</span>
            <span class="profile__item--description">شطرنج</span>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
