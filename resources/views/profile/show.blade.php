@extends('layouts.vertical')

@section('title', 'Profile')

@section('content')
<div class="page-heading">
    <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Account Profile</h3>
                    <p class="text-subtitle text-muted">A page where users can change profile information</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </div>
    <div>
        <!-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> -->
            <div class="card">
                <div class="card-body">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <x-section-border />
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')
                       
                        <x-section-border />
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        @livewire('profile.two-factor-authentication-form')
                       
                        <x-section-border />
                    @endif
                </div>
            </div>

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        <!-- </div> -->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('template/mazer/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/mazer/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/parsley.js') }}"></script>
@endpush