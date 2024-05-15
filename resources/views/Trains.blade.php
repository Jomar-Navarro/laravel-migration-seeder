@extends('layout.main')

@section('content')

<div class="container my-5 text-center">
    <h1 class="my-3">Treni</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Agenzia</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Carrozza</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>&euro; {{$train->ticket_price}}</td>
                <td>{{$train->carriages_number}}</td>
            </tr>
            @endforeach
    </tbody>
</table>

{{$trains->links()}}
</div>

@endsection

@section('title')
    Trains
@endsection
