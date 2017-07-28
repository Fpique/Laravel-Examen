@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ajouter une marque</div>
        <div class="panel-body">
          <ul>
            @foreach ($marques as $marque)
              <li>{{ $marque }}</li>
            @endforeach
          </ul>
          {{ Form::open(['url' => '/insert/marque']) }}
          {{ Form::label('name', 'marque') }}
          {{ Form::text('name') }}
          {{ Form::submit('Inserer')}}
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
