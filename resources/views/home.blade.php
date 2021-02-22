<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  @extends('master')
  @section('title', 'Social Card')

  @section('content')
  <div class="container p-4">
    <div class="row m-4">

      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/amr_mohammed_abdelnedder.JPG') !!}" class="card-img-top card__img"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">عمرو محمد عبدالندير عبدالامام</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/ahmed_salama_ali.JPG') !!}" class="card-img-top card__img" alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">احمد سلامة علي</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/ahmed_sayed_esmail.JPG') !!}" class="card-img-top card__img" alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">احمد سيد اسماعيل</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/hafez_ashraf_hafez.JPG') !!}" class="card-img-top card__img" alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">حافظ اشرف حافظ</p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row m-4">

      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/hassan_asr_abdallah_asr.JPG') !!}" class="card-img-top card__img"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">حسن عصر عبدالله عصر</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/remon_mokhtar_shohdy.JPG') !!}" class="card-img-top card__img" alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">احمد سلامة علي</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/salem_sobhy_eraki.JPG') !!}" class="card-img-top card__img" alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">احمد سيد اسماعيل</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-3">
        <a href="#" class="link">
          <div class="card">
            <img src=" {!! asset('img/soldiers/atef_mahmoud_abdullah.JPG') !!}" class="card-img-top card__img"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">جندي</h5>
              <p class="card-text">حافظ اشرف حافظ</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>

  {{-- 
      <div class="col-sm">
        <div class="card">
          <img src=" {!! asset('img/ahmed.jpg') !!}" class="card-img-top card__img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

      </div>
      <div class="col-sm">
        <div class="card">
          <img src=" {!! asset('img/ahmed.jpg') !!}" class="card-img-top card__img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

      </div>
      <div class="col-sm">
        <div class="card">
          <img src=" {!! asset('img/ahmed.jpg') !!}" class="card-img-top card__img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> --}}


  </div>
  @endsection
</body>

</html>