@extends('layaout.template')

@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url({{ asset('images/bg_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Evitons le gaspillage de nos produits & Aliementaire</h1>
                            <h2 class="subheading mb-4">Changeons notre façon de consommer</h2>
                            <p><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('images/bg_2.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Faites des achats en toute simplicité</h1>
                            <h2 class="subheading mb-4">Des produits à bas prix tout près de chez vous</h2>
                            <p><a href="#" class="btn btn-primary">View Détails</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Livraison Gratuite près de chez vous</h3>
                            <span>0 fcfa sur toutes vos livraisons</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Tout le temps moin chère</h3>
                            <span>Faites des Economies</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Obtenez des recettes personalises</h3>
                            <span>Recettes</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Support</h3>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                 style="background-image: url({{ asset('images/category.jpg') }});">
                                <div class="text text-center">
                                    <h2>Vegetables</h2>
                                    <p>Faire des achats en toute simplicité</p>
                                    <p><a href="{{ route('produits.index') }}" class="btn btn-primary">
                                            Acheter maintenant </a></p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                 style="background-image: url({{ asset('images/category-1.jpg') }});">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Fruit</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                 style="background-image: url({{ asset('images/category-2.jpg') }});">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Vegetables</a></h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                         style="background-image: url({{ asset('images/category-3.jpg') }});">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Juices</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                         style="background-image: url({{ asset('images/category-4.jpg')}});">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Dried</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
