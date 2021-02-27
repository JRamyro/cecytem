@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <form method="post" action="#">
                        @csrf
                        <input type="text" name="title">
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
