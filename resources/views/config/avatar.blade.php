@extends('layouts.todos')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="avatarImage">
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
