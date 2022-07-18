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
                <div class="masthead-heading text-uppercase">Explore all the preciouse stones here!</div>
            </div>
        </header>
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Stones</h2>
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
        <!-- Footer-->
        @include('layouts.front.footer')
    </body>
</html>
