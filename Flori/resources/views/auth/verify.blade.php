@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica adresa de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link a fost trimis pe adresa de email. ') }}
                        </div>
                    @endif

                    {{ __('Inainte de procedura, verificati mail-ul pentru un link de confirmare.') }}
                    {{ __('Daca nu ati primit email-ul') }}, <a href="{{ route('verification.resend') }}">{{ __('Click pentru a primi altul. ') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
