@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="avatar">
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
