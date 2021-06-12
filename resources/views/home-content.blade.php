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
                                               class="add btn btn-primary font-weight-bold todo-list-add-btn" value="Guardar"/>
                                    </div>
                                </form>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse todo-list">
                                        <li>
                                            <label class="form-check-label">
                                                <button type="submit" class="btn btn-info btn-sm"></button>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label">
                                                <button type="submit" class="btn btn-info btn-sm"></button>
                                                Phasellus quis eros metus. Nam
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label">
                                                <button type="submit" class="btn btn-info btn-sm"></button>
                                                it amet, consectetur adipiscing elit. Vestibulum at
                                            </label>
                                        </li>
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
