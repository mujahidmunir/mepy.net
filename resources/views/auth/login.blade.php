@extends('layouts.master')

@push('mytitle')
MEPY | LOGIN
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/contact.css') }}">
@endpush

@section('content')

<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <form class="contact-form" method="post" action="{{route('login')}}">
                    @csrf
                    <label class="contact-label">
                        <input type="text" placeholder="Your Email" name="email" required maxlength="30" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                        <i class="fas fa-envelope"></i>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </label>
                    <br>
                    <label class="contact-label col-lg-12">
                        <input type="password" class="@error('password') is-invalid @enderror" placeholder="Your Password" name="password" required maxlength="30" id="password"><i class="fas fa-key"></i> <i class="fas fa-eye" style="margin-left: 90%; cursor:pointer;" id="togglePassword"></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </label>
                    <br>
                    <button type="submit" class="btn btn-inline"><i class="fas fa-sign-in-alt"></i><span>Login</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@push('myjs')

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
@endpush
