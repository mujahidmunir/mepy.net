@extends('layouts.master')

@push('mytitle')
MEPY | LOGIN
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/contact.css') }}">
@endpush


@section('slide')
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Login</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form class="contact-form">
                    <label class="contact-label">
                        <input type="text" placeholder="Your Email" name="email" required maxlength="30" id="email">
                        <i class="fas fa-envelope"></i>
                    </label>
                    <br>
                    <label class="contact-label">
                        <input type="password" placeholder="Your Password" name="password" required maxlength="30" id="password"><i class="fas fa-key"></i> <i class="fas fa-eye" style="margin-left: 450px; cursor:pointer;" id="togglePassword"></i>           
                    </label>
                    <br>
                    <button class="btn btn-inline"><i class="fas fa-sign-in-alt"></i><span>Login</span>
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="100%"
                        aria-hidden="false" tabindex="0"></iframe></div>
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
