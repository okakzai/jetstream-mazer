@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Chat Application</h3>
                <p class="text-subtitle text-muted">An application for user to check Chat inbox.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chat Application</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Coming Soon!</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            While you wait, you can use the 
                            <a href="{{url('/widget/chatbox')}}">chatbox widget.</a>
                        </p>
                        <p>
                            If you want to contribute, check out our
                            <a
                                href="https://github.com/zuramai/mazer"
                                target="_blank">
                                template repository
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
