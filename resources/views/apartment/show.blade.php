@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
           
                {{-- <div class="card"> --}}
                    {{-- <div class="card-header"> --}}

                        <div class="title-apartment mb-4">
                            <h2>{{ $apartment->title}}</h2>
                        </div>

                    {{-- </div> --}}

                    {{-- <div class="card-body"> --}}
                        <div class=" d-flex justify-content-center apartment-container-img">
                             <img class="img-fluid mt-2 mb-5" src=" {{ $apartment->img}}" alt="{{ $apartment->title}}">
                         </div>

                             <hr>

                        <h3>Descrizione Appartamento</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="apartment-description mb-3 mt-3">
                                        <i class="bi bi-house-fill"></i>  N.di stanze: {{ $apartment->n_beedroom}}
                                    </div>
                                    <div class="apartment-description mb-3">
                                        <i class="bi bi-layout-sidebar-reverse"></i> N.di letti: {{ $apartment->n_beds}}
                                    </div>
                                    <div class="apartment-description mb-3">
                                        <i class="bi bi-vr"></i>  Numero di Bagni: {{ $apartment->n_bathrooms}}
                                    </div>
                                    <div class="apartment-description mb-3">
                                        <i class="bi bi-app-indicator"></i> Metri quadrati: {{ $apartment->square_meters}}
                                    </div>
                                 </div>
                             
                                <div class="col-md-6">
                                    <div class="apartment-description mb-3">
                                        <i class="bi bi-geo-alt"></i> Indirizzo: {{ $apartment->address}}
                                    </div>

                                    <div>
                                        <i class="bi bi-moon-stars-fill"></i>  Prezzo a notte:{{ $apartment->price_per_night}} 
                                    </div>
                                </div>
                            </div>

                            <hr>
                                              
                        
                        
                        <div class='row'>
                            <ul> <h3>Servizi</h3>
                                @foreach ($apartment->service as $service)
                                <li>
                                    {{$service->name}}
                                </li>
                                @endforeach
                            </ul>
                        </div> 

                        <hr>

                        <div class='row'>
                            <ul> <h3>Messaggi</h3>
                                @foreach($apartment->message as $message)
                                <li>
                                    {{$message->text}}
                                </li>
                                @endforeach
                            </ul>   
                        </div>     
                        <div>
                            <ul> Sponsor:
                                @foreach($apartment->sponsor as $sponsor)
                                <li>
                                    {{$sponsor->name}}
                                </li>
                                @endforeach
                            </ul>   
                        </div>           
                    </div>
                {{-- </div> --}}
        </div>
    </div>
</div>
@endsection