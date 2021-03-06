@extends('layouts.master')

@push('mytitle')
CREATIVA
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/blog-list.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/custom/contact.css')}}">
@endpush

@section('content')
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Contact us</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info"><i class="fas fa-map-marker-alt"></i>
                    <h3>Find us</h3>
                    <p>1Hd- 50, 010 Avenue, NY 90001 <span>United States</span></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info"><i class="fas fa-phone-alt"></i>
                    <h3>Make a Call</h3>
                    <p>009-215-5596 (toll free) <span>009-215-5595</span></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info"><i class="fas fa-envelope"></i>
                    <h3>Send Mail</h3>
                    <p>contact@example.com <span>info@example.com</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form class="contact-form" id="data-master">
                    @csrf
                    <label class="contact-label"><input type="text" placeholder="Your Name" name="name"><i
                            class="fas fa-user"></i></label><label class="contact-label"><input type="email"
                            placeholder="Your Email" name="email"><i class="fas fa-envelope"></i></label><label
                        class="contact-label"><input name="subject" type="text" placeholder="Your Subject"><i
                            class="fas fa-bookmark"></i></label><label class="contact-label"><textarea
                            placeholder="Your Message" name="message"></textarea><i class="fas fa-pen-nib"></i></label><button
                        type="submit" id="simpan-data" class="btn btn-inline"><i class="fas fa-paper-plane"></i><span>send
                            message</span></button></form>
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
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function reset() {
            $('input').val('');
            $('textarea').val('');
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        $('#data-master').on('submit', function (e) {
            e.preventDefault();
            $('#simpan-data').html("Menyimpan...");
            $('#simpan-data').attr('disabled', true);
            let data = $("#data-master").serialize();
            let datax = new FormData(this);
            console.log(data);

            $.ajax({
                type: "POST",
                url: "{{ url('admin/contactus') }}",
                data: datax,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#jenis_menuHelp").html("");

                    $('#simpan-data').html("Mengirimkan pesan....");
                    $('#simpan-data').removeAttr('disabled');
                    if (response.status == 1) {
                        reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Mengirimkan Pesan !',
                        });
                    } else if (response.status == 2) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Mengirimkan Pesan !'
                        })
                    } else if (response.status == 3) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'Pesan Telah Tersedia !'
                        })
                    }
                },
                error: function (e) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-data').html(`<i class="fas fa-paper-plane"></i><span>send
                            message</span>`);
                    $('#simpan-data').removeAttr('disabled');
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal menyimpan data !'
                    });
                }
            });
        });

    });

</script>
@endpush
