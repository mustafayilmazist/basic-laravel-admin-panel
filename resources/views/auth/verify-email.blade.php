@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{-- {{ __('Verify Your Email Address') }} --}}Eposta adresinizi doğrulayın
                    </div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{-- {{ __('A fresh verification link has been sent to your email address.') }} --}}
                                E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.
                            </div>
                        @endif

                        {{-- {{ __('Before proceeding, please check your email for a verification link.') }} --}}
                        Devam etmeden önce, lütfen bir doğrulama bağlantısı için e-postanızı kontrol edin,
                        {{-- {{ __('If you did not receive the email') }}, --}}
                        E-postayı almadıysanız
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{-- {{ __('click here to request another') }} --}}
                                Yeni bir istekte bulunmak için buraya tıklayın
                            </button>
                            .
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
