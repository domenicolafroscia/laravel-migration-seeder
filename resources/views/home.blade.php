@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center my-5"><strong>TRAIN</strong></h1>
        <div class="row row-cols-3">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="ms_card card mb-4">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>Agency:</strong> {{ $train->agency }}</li>
                                <li><strong>Departure station:</strong> {{ $train->departure_station }}</li>
                                <li><strong>Arrival station:</strong> {{ $train->arrival_station }}</li>
                                <li><strong>Date:</strong> {{ $train->date }}</li>
                                <li><strong>Departure time:</strong> {{ \Carbon\Carbon::parse($train->departure_time)->format('H:i') }}</li>
                                <li><strong>Arrival time:</strong> {{ \Carbon\Carbon::parse($train->arrival_time)->format('H:i') }}</li>
                                <li><strong>Train code:</strong> {{ $train->train_code }}</li>
                                <li><strong>Carriages number:</strong> {{ $train->carriages_number }}</li>
                                <li><strong>State:</strong> {{ $train->in_time === 1 ? "In orario" : "Non in orario"}}</li>
                                <li><strong>Deleted:</strong> {{ $train->deleted === 1 ? "Cancellato" : "" }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
