@extends('master')

@section('title','Login')

@section('content')
    <div class="box box-login shadow">
        <div class='header'>
            <a href="{{ url('/vilchis') }}">
                <img src="{{ url('/static/images/IttgLogo.png') }}">
            </a>
        </div>

        <div class="inside">
            {!! Form::open(['url' => '/vilchis']) !!}
            <label for="email" class="font-weight-bold">Ingeniería en Sistemas Computacionales</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
              </div>
              {!! Form::email('email', null, array('class ' => 'form-control text-size', 'placeholder' => 'Angel Antonio Vilchis Rodríguez'))!!}
            </div>

            <label for="password" class="mtop16 font-weight-bold">Programación Web con Frameworks</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
              </div>
              {!! Form::password('password', array('class ' => 'form-control', 'placeholder' => 'Ing. Eli Alejandro Moreno López'))!!}
            </div>

            <input type="button" class="btn btn-success mtop16" value="16270220">
            {!! Form::close() !!}        

            <div class="font-weight-bold footer mtop16">
                <a href="#">D8S</a>
                
            </div>  
        </div>      

    </div>
@stop