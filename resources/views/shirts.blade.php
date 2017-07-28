@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Liste des tee-shirts</div>


        <div class="panel-body">
          <table style="width:100%">
            <tr class="table-marque">
              <th>Marque</th>
              <th>Taille</th>
              <th>Image</th>
              <th>Modifier/Supprimer</th>
            </tr>
          </table>
          @foreach ($shirts as $shirt)
            <tr class="table-content">
              <th>{{ $shirt['marque'] }}</th>
              <th>
              @foreach ($shirt['marque'] as $marque)
                {{ $marque }}
              @endforeach
              </th>
              <th><img style="max-width: 40px;" src="{{ URL::asset($shirt['image']) }}"></th>
              <th id="update-delete">
            {{ Form::open(['url' => '/delete/shirt']) }}
            {{ Form::hidden('id', $shirt['id']) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
            {{ Form::open(['url' => '/update/shirt']) }}
            {{ Form::hidden('id', $shirt['id']) }}
            {{ Form::submit('Update') }}
            {{ Form::close() }}
            </th>
            </tr>
          @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
