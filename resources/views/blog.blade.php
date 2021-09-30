﻿@extends('layouts.main')

@section('content')
    

<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-1.png" class="img-fluid" alt="Blog Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post">[Tutorial GitLab] Instalasi Git Secara Mudah Tanpa Pusing!</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Nah, pada kesempatan kali ini penulis akan berbagi tutorial mengenai GitLab khususnya cara untuk instalasi, upload, dan clone project...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post">[Tutorial GitLab] Upload Git Secara Mudah Tanpa Pusing!</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Nah, pada kesempatan kali ini penulis akan berbagi tutorial mengenai GitLab khususnya cara untuk instalasi, upload, dan clone project...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post">[Tutorial GitLab] Clone Project Git Secara Mudah Tanpa Pusing!</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Nah, pada kesempatan kali ini penulis akan berbagi tutorial mengenai GitLab khususnya cara untuk instalasi, upload, dan clone project...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
    </div>

</section>

@endsection