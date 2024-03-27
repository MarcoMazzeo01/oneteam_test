@extends('layouts.app')

@section('content')
    <section class="container mt-5">
        <h1>Appartamenti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Indirizzo</th>
                    <th>ID Proprietario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apartments as $apartment)
                    <tr>
                        <td>{{ $apartment->address }}</td>
                        <td>{{ $apartment->landlord_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
