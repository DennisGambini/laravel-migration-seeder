@extends('layouts.base')

@section('pageTitle', $holiday->name)

@section('mainContent')

<div class="container">
    <h2 class="text-center mt-3">{{$holiday->name}}</h2>

    <div class="detail-image text-center my-5">
        <img src="{{$holiday->img_url}}" alt="{{$holiday->name}} image">
    </div>

    <div class="time my-2">
        <div>
            <span class="red">From day : </span>
            <span>{{$holiday->departure}}</span>
        </div>
        <div>
            <span class="red">To : </span>
            <span>{{$holiday->arrival}}</span>
        </div>
    </div>

    <div class="price" style="float: right; font-size:1.3em;">
        <span class="red">Price : </span>
        <span>{{$holiday->price}} &euro;</span>
    </div>

    <div class="type">
        <span class="red">Type of vacation : </span>
        <span>{{$holiday->type_of_vacation}}</span>
    </div>

    <div class="description">
        <span class="red">Description : </span>{{$holiday->description}}
    </div>

    <div class="pets">
        <span class="red">Pets allowed ? </span>
        <span>{{$holiday->pets = true ? 'Yes' : 'No'}}</span>
    </div>
    <div class="refound">
        <span class="red">Cancellazione gratuita : </span>
        <span>{{$holiday->refound = true ? 'Yes' : 'No'}}</span>
    </div>

    <div class="people">
        <span class="red">Max people number : </span>
        <span>{{$holiday->max_people}}</span>
    </div>
</div>


@endsection
