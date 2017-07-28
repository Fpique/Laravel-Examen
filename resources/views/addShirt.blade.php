@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ajouter un tee-shirt</div>
        <div class="panel-body">
          {{ Form::open(['url' => '/insert/shirt', 'files' => true]) }}
          {{ Form::label('marque', 'Marque du tee-shirt') }}
          {{ Form::text('marque') }}
          {{ Form::label('taille', 'Taille') }}
          {{ Form::select('taille[]', $tailles, null, array('multiple' => 'multiple')) }}
          {{ Form::file('cover') }}
          {{ Form::submit('Inserer')}}
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
