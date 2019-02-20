@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Edit Place
                    </p>
                </header>
                <div class="card-content">
                    <form method="post" action="/categorias/{{$categoria->id}}" class="box">
                        @csrf
                        @method('PATCH')
                        <div class="field is-grouped">
                            <div class="control is-expanded {{$errors->has('nombre')?'has-icons-right':''}}">
                                <input class="input {{$errors->has('nombre')?'is-danger':''}}" type="text" name="nombre"
                                    aria-label="edit" value="{{old('nombre',$categoria->nombre)}}">
                                @if($errors->has('nombre'))
                                <span class="icon is-small is-right has-text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <p class="help is-danger">{{$errors->first('nombre')}}</p>
                                @endif
                            </div>
                            <div class="control">
                                <button class="button is-info" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
