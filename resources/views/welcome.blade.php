<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.front.head')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.front.navbar')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Edelstenan en Mineralen!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Stones <a type="button" class="btn btn-xs btn-primary" href="{{ route('stones.all') }}">View All</a></h2>
                </div>
                <div class="row">
                    @foreach($stones as $stone)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="javascript::void()" onclick="openPopUp('{{ $stone->mineral->name }}', '{{ $stone->form->name }}', '{{ $stone->stone_image }}')">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('images/'.$stone->stone_image) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Edelstenan en Mineralen</h3>
                </div>
                <ul class="">
                    <li class="text-center">
                        <h4>2020-Present</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                                <p class="text-muted">Wholesaler of Lapis Lazuli and other stones found in pakistan and Afghanistan.
                                    we are Based in belgium providing 25 different kinds of stones to all over the world, we provide only Quality stones, price is always reasonable. 
                                    Adress:Malehoeklaan Sint-kruis brugge belgium </p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-white">Please Contact Us at <a type="button" class="btn btn-success" href="https://wa.me/0032484187267">WhatsApp</a> OR <a type="button" class="btn btn-danger" href="mailto:Edelstenen2020mineralen@gmail.com">Email Us!</a></h3>


                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        @include('layouts.front.footer')
    </body>
</html>
