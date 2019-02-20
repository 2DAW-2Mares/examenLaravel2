@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Todas las Categorías
                    </p>
                </header>
                <div class="card-content">
                    <nav class="panel">
                        @foreach($categorias as $categoria)
                        <a class="panel-block" href="/categorias/{{$categoria->id}}">
                            <span class="panel-icon">
                                <i class="fas fa-map-pin" aria-hidden="true"></i>
                            </span>{{$categoria->nombre}}
                        </a>
                        @endforeach
                        <div class="panel-block">
                            <a href="{{url('/categorias/create')}}" class="button is-link is-outlined is-fullwidth">
                                Añadir nueva Categoría
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection