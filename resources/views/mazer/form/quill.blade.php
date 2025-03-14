@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Quill Form Editor </h3>
                <p class="text-subtitle text-muted">Allow your users to provide formatted content with a powerful WYSIWYG editor.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quill</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Quill.js Snow Editor</h4>
            </div>
            <div class="card-body">
                <p>Snow is a clean editor theme</p>
                <div id="snow">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bubble Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="bubble">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Full Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="full">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/quill/quill.snow.css') }}">
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/quill/quill.bubble.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('template/mazer/extensions/quill/quill.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/quill.js') }}"></script>
@endpush