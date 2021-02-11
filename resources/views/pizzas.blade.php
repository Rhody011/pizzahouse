
@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Pizzas
                </div>
                @for($i=0; $i < count($pizza); $i++)
                <p> {{$pizza[$i]['type']}}</p>
                @endfor

            </div>
        </div>
@endsection