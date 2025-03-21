@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Placeholder</h3>
                <p class="text-subtitle text-muted">Placeholders are used to enhance your app experience.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Placeholder</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Example</h4>
            </div>
            <div class="card-body">
                <p>
                    In the example below, we take a typical card component and recreate it with placeholders applied to
                    create a “loading card”. Size and proportions are the same between the two.
                </p>
                <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                </h5>
                <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                </p>
                <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Width</h4>
            </div>
            <div class="card-body">
                <p>
                    You can change the <code>width</code> through grid column classes, width utilities, or inline
                    styles.
                </p>
                <span class="placeholder col-6"></span>
                <span class="placeholder w-75"></span>
                <span class="placeholder" style="width: 25%;"></span>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Color</h4>
            </div>
            <div class="card-body">
                <p>
                    By default, the <code>placeholder</code> uses the <code>currentColor</code>. This can be overridden with
                    an utility class or custom color.
                </p>
                <span class="placeholder col-12"></span>

                <span class="placeholder col-12 bg-primary"></span>
                <span class="placeholder col-12 bg-secondary"></span>
                <span class="placeholder col-12 bg-success"></span>
                <span class="placeholder col-12 bg-danger"></span>
                <span class="placeholder col-12 bg-warning"></span>
                <span class="placeholder col-12 bg-info"></span>
                <span class="placeholder col-12 bg-light"></span>
                <span class="placeholder col-12 bg-dark"></span>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sizing</h4>
            </div>
            <div class="card-body">
                <p>
                    The size of <code>.placeholder</code> is based on the typographic style of the parent element.
                    Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or
                    <code>.placeholder-xs</code>.
                </p>
                <span class="placeholder col-12 placeholder-lg"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12 placeholder-sm"></span>
                <span class="placeholder col-12 placeholder-xs"></span>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Animation</h4>
            </div>
            <div class="card-body">
                <p>
                    Animate placeholders with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better
                    convey the perception of something being actively loaded.
                </p>
                <p class="placeholder-glow">
                    <span class="placeholder col-12"></span>
                </p>

                <p class="placeholder-wave">
                    <span class="placeholder col-12"></span>
                </p>
            </div>
        </div>
    </section>

</div>
@endsection


