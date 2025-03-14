@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>TinyMCE </h3>
                <p class="text-subtitle text-muted">Allow your users to provide formatted content with a powerful WYSIWYG editor.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">TinyMCE</li>
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
                        <h4 class="card-title">Default Editor</h4>
                    </div>
                    <div class="card-body">
                        <textarea name="" id="default" cols="30" rows="10"></textarea>
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
                        <h4 class="card-title">Code Toolbar</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('template/mazer/extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/tinymce.js') }}"></script>
@endpush