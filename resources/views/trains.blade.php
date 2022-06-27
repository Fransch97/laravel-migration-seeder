@extends('layout.trains')



@section('title')
Trains
@endsection

@section('content')
<h1>trains</h1>
@dump($trains)
    @foreach ( $trains as $train)
        <ul>
            <li>id treno:{{$train->id}}</li>
            <li>agenzia treno:{{$train->agency}}</li>
            <li>partenza:{{$train->start_station}}</li>
            <li>arrivo:{{$train->arrival_place}}</li>
            <li>arrivo ora:{{$train->arrival_time}}</li>
            <li>codice treno:{{$train->train_code}}</li>
            <li>numero vagoni:{{$train->carriages_num}}</li>
            @if (!$train->in_time)

            <li>non in tempo</li>
            @endif
            @if(!$train->deleted)
            <li>treno cancellato</li>
            @endif
        </ul>
    @endforeach
@endsection
