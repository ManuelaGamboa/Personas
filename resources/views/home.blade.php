@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">PAISES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>1</th>
                            <td>{{ $persona['name'] }}</td>
                            @foreach ($persona['country'] as $persona['country'])
                            <td>{{ $persona['country']['country_id'] }} {{ $persona['country']['probability'] }}</td>
                            
                            @endforeach
                            </tr>
                        </tbody>

                    </table>
        
                    <div class="container">
                    <h5 class="text-center">Personas ordenadas por edad</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card text-center">
                                <div class="card-body">
                                    @foreach ($personas as $persona)
                                    <p class="fw-bold">{{ $persona->nombre }} {{ $persona->edad }}</p>
                                    <p> </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
