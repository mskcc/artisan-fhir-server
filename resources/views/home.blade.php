@extends('layouts.app')

@section('content')
<div class="container">

    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">{{ config('app.name', 'Artisan FHIR Server') }}</h1>
        <p class="lead"></p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <p>
                Head over to the <a href="/api/documentation">documentation section</a> to get started with the API.
            </p>

        </div>
    </div>
</div>
@endsection
