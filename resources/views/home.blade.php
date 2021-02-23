@extends('master')
@section('title', 'Social Card')

@section('content')
<div class="container p-4">
  <div class="row">

    @foreach ($cards as $card)
    <div class="col-3 mb-4">
      <a href="#" class="link">
        <div class="card">
          <img src=" {!! asset('images/'.$card->image) !!}" class="card-img-top card__img" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $card->degree == 1 ? 'عسكري' : 'f' !!}</h5>
            <p class="card-text">{!! $card->name !!}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>


@endsection