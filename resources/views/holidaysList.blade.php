@extends('layouts.base')

@section('pageTitle', 'I nostri pacchetti vacanza')

@section('mainContent')

<div class="container">
    <div class="row">

        @foreach ($holidays as $holiday)    
            <div class="col">
                <div class="card">{{$holiday->name}}</div>

                <div class="card" style="width: 18rem;">
                    <img src="{{$holiday->img_url}}" class="card-img-top" alt="{{$holiday->name}} image">
                    <div class="card-body">
                        <h5 class="card-title">{{$holiday->name}}</h5>
                        <p class="card-text">{{$holiday->description}}</p>
                        <p class="card-text">{{$holiday->price}} &euro;</p>
                        <a href="{{route('singleHoliday', $id = $holiday->id)}}" class="btn btn-primary">Visita</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection