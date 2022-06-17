@extends('layouts.app')

@section('title', 'Detail Travel')


@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                paket travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/image/Mask Group 15.jpg" class="xzoom" id="xzoom-default"
                                    xoriginal="frontend/image/Mask Group 15.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/image/Mask Group 15.jpg">
                                    <img src="frontend/image/Mask Group 15.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/image/Mask Group 15.jpg">
                                </a>
                                <a href="frontend/image/Mask Group 15.jpg">
                                    <img src="frontend/image/Mask Group 15.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/image/Mask Group 15.jpg">
                                </a>
                                <a href="frontend/image/Mask Group 15.jpg">
                                    <img src="frontend/image/Mask Group 15.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/image/Mask Group 15.jpg">
                                </a>
                                <a href="frontend/image/Mask Group 15.jpg">
                                    <img src="frontend/image/Mask Group 15.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/image/Mask Group 15.jpg">
                                </a>
                                <a href="frontend/image/Mask Group 15.jpg">
                                    <img src="frontend/image/Mask Group 15.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/image/Mask Group 15.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida is an island southeast of Indonesia's island Bali and a district of Klungkung
                            Regency that includes the neighbouring small island of Nusa Lembongan and twelve even
                            smaller islands. The Badung Strait separates the island and Bali.
                        </p>
                        <p>
                            The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than
                            the
                            nearby island of Bali. It is one of the major tourist attractions among the three Nusa
                            islands
                            and is rich in natural beauty.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="frontend/image/Group 18.png" alt="" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">

                                <img src="frontend/image/Group 22.png" alt="" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">

                                <img src="frontend/image/Group 24.png" alt="" class="features-image">
                                <div class="description">
                                    <h3>Food</h3>
                                    <p>Local Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are Going</h2>
                        <div class="members my-2">
                            <img src="frontend/image/Mask Group 16.png" class="member-image mr-1">
                            <img src="frontend/image/Mask Group 17.png" class="member-image mr-1">
                            <img src="frontend/image/Mask Group 18.png" class="member-image mr-1">
                            <img src="frontend/image/Mask Group 19.png" class="member-image mr-1">
                            <img src="frontend/image/Mask Group 20.png" class="member-image mr-1">
                            <img src="frontend/image/Group 29.png" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Deparature</th>
                                <td width="50%" class="text-right">
                                    22 Aug, 2019
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duratin</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / Person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{url('/checkout')}}" class="btn btn-block btn-join-now mt-0 py-3">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libaries/xzoom/xzoom.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libaries/retina/retina.min.js')}}"></script>
<script src="{{url('frontend/libaries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>

@endpush