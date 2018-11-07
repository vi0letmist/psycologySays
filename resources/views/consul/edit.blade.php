@extends('consul.consultation')

@section('content')
    <h3>Edit</h3>    
    {!! Form::open(['action' => ['ConsulController@update', $Consul->id_c], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('judul','Judul')}}
            {{Form::text('judul', $Consul->judul, ['class' =>  'form-control','placeholder' => 'Judul'])}}
        </div>
        <div class="form-group">
            {{Form::label('isi','Isi')}}
            {{Form::text('isi', $Consul->isi, ['class' =>  'form-control','placeholder' => 'Isi'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection