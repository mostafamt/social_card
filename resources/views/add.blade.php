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
        <form action="#" class="form">
          <div class="form__group">
            <label for="name" class="form__label">الاسم:</label>
            <input
              id="name"
              type="text"
              class="form__input"
              placeholder="الاسم"
            />
          </div>
          <div class="form__group">
            <label for="position" class="form__label">الدرجة:</label>
            <input
              id="position"
              type="text"
              class="form__input"
              placeholder="الدرجة"
            />
          </div>
          <div class="form__group">
            <label for="military_number" class="form__label"
              >الرقم العسكري:</label
            >
            <input
              id="military_number"
              type="text"
              class="form__input"
              placeholder="الرقم العسكري"
            />
          </div>
          <div class="form__group">
            <button class="btn">اضافة</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
