@extends('layouts.main')

@section('content')
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">Hallo !</h6>
                <h1 class="text-uppercase poppins-font"><span>I'm</span> Bhisma</h1>
                <p class="open-sans-font">Saya merupakan seorang mahasiswa semester lima dari Program Studi Pendidikan Teknik Informatika, Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan, Universitas Pendidikan Ganesha, Bali.</p>
                <a href="about" class="btn btn-about">more about me</a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->
@endsection
