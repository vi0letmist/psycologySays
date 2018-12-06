@extends('layouts.layout')

@section('content')
    <h3>Edit Blog</h3>
    {!! Form::open(['action' => ['ShareController@update', $Share->id_s], 'method' => 'POST']) !!}
        <div class="form-group">
            <br>
            {{Form::text('blog', $Share->blog, ['class' =>  'form-control','placeholder' => 'Topic Title','data-rule'  => 'minlen:4','data-msg' => 'Please enter at least 8 chars of subject'])}}
            <div class="validation"></div>
        </div>
        <div class="form-group">
            <br>
            {{Form::text('gambar', $Share->gambar, ['class' =>  'form-control','placeholder' => 'Link Gambar','data-rule'  => 'required','data-msg' => 'Please enter a picture that describe your topic'])}}
            <div class="validation"></div>
        </div>
        <div class="form-group">
            <br>
            {{Form::textarea('isi', $Share->isi, ['class' =>  'form-control','placeholder' => 'Message', 'data-rule'  => 'required', 'data-msg' => 'Please enter at least 8 chars of subject', 'rows'=>'5'])}}
            <div class="validation"></div>
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
