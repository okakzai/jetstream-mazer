@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Welcome, {{ Auth::user()->name }}!</h5>
                    <p>You are logged in.</p>
                </div>
            </div>
        </div>
    </div>
@endsection


