@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sweet Alert</h3>
                <p class="text-subtitle text-muted">A beautiful replacement for javascript alerts.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Sweet Alert</h4>
                        <p class="text-muted">SweetAlert automatically centers itself on the page and looks great no
                            matter if you're using a desktop computer, mobile or tablet. It's even highly customizable,
                            as you can see below!</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <button id="basic" class="btn btn-outline-primary btn-lg btn-block">Basic
                                    Example</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="title" class="btn btn-outline-primary btn-lg btn-block">A title with a text</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="footer" class="btn btn-outline-primary btn-lg btn-block">With
                                    Footer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Toast</h4>
                        <p class="text-muted">SweetAlert can also show a message in the corner of your screen!</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <button id="toast-success" class="btn btn-outline-primary btn-lg btn-block">Success Example</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="toast-failed" class="btn btn-outline-primary btn-lg btn-block">Failed Toast</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="toast-warning" class="btn btn-outline-primary btn-lg btn-block">Toast Warning</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Types</h4>
                        <p class='text-muted'>The type of the modal. SweetAlert comes with 5 built-in types which will
                            show a corresponding icon animation: "warning", "error", "success" and "info". You can also
                            set it as "input" to get a prompt modal. It can either be put in the object under the key
                            "icon" or passed as the third parameter of the function.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <button id="success" class="btn btn-outline-success btn-lg btn-block">Success</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="error" class="btn btn-outline-danger btn-lg btn-block">Error</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="warning" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 col-12">
                                <button id="info" class="btn btn-outline-info btn-lg btn-block">Info</button>
                            </div>
                            <div class="col-md-6 col-12">
                                <button id="question"
                                    class="btn btn-outline-secondary btn-lg btn-block">Question</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Alert Input</h4>
                        <p class='text-muted'>The type of the modal. SweetAlert comes with 5 built-in types which will
                            show a corresponding icon animation: "warning", "error", "success" and "info". You can also
                            set it as "input" to get a prompt modal. It can either be put in the object under the key
                            "icon" or passed as the third parameter of the function.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <button id="text" class="btn btn-outline-success btn-lg btn-block">Text</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="email" class="btn btn-outline-danger btn-lg btn-block">Email</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="url" class="btn btn-outline-warning btn-lg btn-block">URL</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 col-12">
                                <button id="password" class="btn btn-outline-info btn-lg btn-block">Password</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="textarea"
                                    class="btn btn-outline-secondary btn-lg btn-block">Textarea</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="select" class="btn btn-outline-secondary btn-lg btn-block">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/extra-component-sweetalert.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('template/mazer/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/sweetalert2.js') }}"></script>
@endpush

