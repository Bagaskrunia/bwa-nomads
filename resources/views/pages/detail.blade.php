
@extends('layouts.app')
@section('title','Detail Travel')
    

@section('content')
<main>
    <section class="section-detail-header"></section>
    <section class="section-details-content">
    <div class="container">
        <div class="row">
        <div class="col">
            <div class="col p-0">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
                </ol>
            </nav>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
            <h1>Nusa Peninda</h1>
            <p>Republic of Indonesia Raya</p>
            <div class="gallery">
                <div class="xzoom-container">
                <img src="frontend/images/details.png" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details.png">
                </div>
                <div class="xzoom-thumbs">
                <a href="frontend/images/details.png">
                    <img src="frontend/images/details.png" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/details.png">
                </a>
                <a href="frontend/images/details.png">
                    <img src="frontend/images/details.png" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/details.png">
                </a>
                <a href="frontend/images/details.png">
                    <img src="frontend/images/details.png" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/details.png">
                </a>
                <a href="frontend/images/details.png">
                    <img src="frontend/images/details.png" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/details.png">
                </a>
                <a href="frontend/images/details.png">
                    <img src="frontend/images/details.png" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/details.png">
                </a>
                </div>
            </div>
            <h2>Tentang Wisata</h2>
            <p>
                Bali is the only Hindu-majority province in Muslim-majority Indonesia, with 86.9% of the population adhering to Balinese Hinduism.[3] It is renowned for its highly developed arts, including traditional and modern dance,
                sculpture, painting, leather, metalworking, and music.
            </p>
            <p>
                The Indonesian International Film Festival is held every year in Bali. Other international events held in Bali include the Miss World 2013 and 2018 Annual Meetings of the International Monetary Fund and the World Bank
                Group. In March 2017, TripAdvisor named Bali as the world's top destination in its Traveller's Choice award, which it also earned in January 202
            </p>
            <div class="features row">
                <div class="col-md-4">
                <img src="frontend/images/ic_event1.png" alt="" class="Features-image" />
                <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari kecak</p>
                </div>
                </div>
                <div class="col-md-4 border-left">
                <img src="frontend/images/ic_event2.png" alt="" class="Features-image" />
                <div class="description">
                    <h3>Language</h3>
                    <p>Bahasa Indonesia</p>
                </div>
                </div>
                <div class="col-md-4 border-left">
                <img src="frontend/images/Ic_bahasa.png" alt="" class="Features-image" />
                <div class="description">
                    <h3>Foods</h3>
                    <p>Local Foods</p>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="members my-2">
            <img src="/frontend/images/member-1.png" alt="" class="member-image mr-1">
            <img src="/frontend/images/member-2.png" alt="" class="member-image mr-1">
            <img src="/frontend/images/member-3.png" alt="" class="member-image mr-1">
            <img src="/frontend/images/member-4.png" alt="" class="member-image mr-1">
            <img src="/frontend/images/member-5.png" alt="" class="member-image mr-1">
            </div>
            <hr>
            <h2>Trip Information</h2>
            <table class="trip-informations">
            <tr>
                <th width="50%">Date of Depature</th>
                <td class="text-right">
                22 Agustus 2019
                </td>
            </tr>
            <tr>
                <th width="50%">Duration</th>
                <td class="text-right">
                4D 3N
                </td>
            </tr>
            <tr>
                <th width="50%">Type</th>
                <td class="text-right">
                Open Trip
                </td>
            </tr>
            <tr>
                <th width="50%">Price</th>
                <td class="text-right">
                $80,00 / person
                </td>
            </tr>
            </table>
        </div>
        <div class="join-container">
            <a href="{{route ('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
            Join now
            </a>
        </div>
        </div>
    </div>
    </section>
</main>    
@stop


@push('prepend-style')
      <link rel="stylesheet" href="{{url ('frontend/libraries/xzoom/xzoom.min.css')}}" />
@endpush


@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
      $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffest: 15
        });
      });
    </script>
@endpush


