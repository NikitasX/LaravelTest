<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>NanoLink</title>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-light d-flex justify-content-start">
                <h1 class="logo pr-5">NanoLink</h1>
                <div class="navbar navbar-expand" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Why NanoLink?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Company</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- <h1 class="logo">NanoLink</h1>-->
        </header>

        <div class="content">
            <div>
                <h2>Create Clickable Links</h2>
                <p>Build and protect your brand using powerful, recognizable nano links.</p>
                <a href="">Get Started for Free</a>
            </div>


            <div>
                <form action="/urls" method="post">
                    @csrf
                    <input type="text" name="url_to_short" value="" placeholder="Nanize your link">
                    <button type="submit">Nanize</button>

                    @error('url_to_short')
                        <strong>{{ $message }}</strong>
                    @enderror

                </form>
                <span>By clicking Nanize, you are agreeing to NanoLink's Terms of Service and Privacy Policy</span>
            </div>

            <div class="row d-flex justify-content-around p-lg-4">
                <h3 class="most-recognizable">The most recognizable brands in the world love NanoLink</h3>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="brand-cards col-sm-6 d-flex justify-content-between">
                    <div class="brand-card col-sm-1 col-lg-4">
                        <div class="brand-inner">
                            <img src="{{ asset('storage/disney_background.png') }}" class="w-100" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <!--
                    <div>
                        <h4>Disney</h4>
                        <button>Follow</button>
                    </div>
                    <img src="{{ asset('storage/disney_logo.jpg') }}" alt="">-->

                <!--
                    <div class="brand-card col-sm-12 col-lg-4">
                        <img src="{{ asset('storage/nike_background.png') }}" alt="">
                        <img src="{{ asset('storage/nike_logo.jpg') }}" alt="">
                        <h4>Nike</h4>
                        <button>Follow</button>
                    </div>
                    <div class="brand-card col-sm-12 col-lg-4">
                        <img src="{{ asset('storage/amazon_background.png') }}" alt="">
                        <img src="{{ asset('storage/amazon_logo.jpg') }}" alt="">
                        <h4>Amazon</h4>
                        <button>Follow</button>
                    </div>-->
                </div>
                <div class="col-sm-3"></div>
                <a href="">Load More</a>

            </div>


        </div>

        <div class="row footer">
            <div class="col-sm-3"></div>
            <footer class="d-flex justify-content-around col-sm-6">
                <div>
                    <h4><i class="fas fa-info-circle"></i> Why NanoLink</h4>
                    <ul>
                        <li>What is NanoLink</li>
                        <li>Integrations & API</li>
                        <li>Enterprise Class</li>
                        <li>Pricing</li>
                    </ul>
                </div>

                <div>
                    <h4><i class="fas fa-info-circle"></i> Solutions</h4>
                    <ul>
                        <li>Social Media</li>
                        <li>Digital Marketing</li>
                        <li>Customer Service</li>
                        <li>For Developers</li>
                    </ul>
                </div>

                <div>
                    <h4><i class="fas fa-envelope"></i> Contact</h4>
                    <ul>
                        <li>email</li>
                        <li>Careers</li>
                        <li>Social Life</li>
                        <div>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </ul>
                </div>
            </footer>
            <div class="col-sm-3"></div>
        </div>

    </body>
</html>
