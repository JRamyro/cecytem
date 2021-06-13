@extends('layouts.todos')

@section('content')
    <div class="container">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="card px-3">
                            <div class="card-body">
                                <h4 class="card-title">Tareas</h4>
                                <form action="{{route('guardarTarea')}}" method="post">
                                    @csrf
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input"
                                               placeholder="Que necesitas hacer hoy? 🧐"
                                               name="nuevoTodo"/>
                                        <input type="submit" name="submit"
                                               class="add btn btn-primary font-weight-bold todo-list-add-btn"
                                               value="Guardar"/>
                                    </div>
                                </form>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse todo-list">
                                        @if(count($todos)==0)
                                            <h1>No tienes pendientes hoy! 🎉</h1>
                                            <iframe width="100%" height=415"
                                                    src="https://www.youtube.com/embed/96Y1E-zdQs0" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        @endif
                                        @foreach($todos as $todo )
                                            <li>
                                                <label class="form-check-label">
                                                    <form action="{{route('quieroBorrarTarea')}}" method="post">
                                                        <input type="hidden" value="{{$todo->id}}" name="todoId">
                                                        @csrf
                                                        <input type="submit" class="btn btn-info btn-sm" value="Off"/>
                                                        {{$todo->todo}}
                                                    </form>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
