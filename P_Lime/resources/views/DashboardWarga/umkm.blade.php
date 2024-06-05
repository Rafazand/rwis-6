<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layoutWarga.header')

    <div class="container d-flex flex-wrap justify-content-between h-70 overflow-auto mt-5">
        @foreach ($umkms as $umkm)
            <div class="card" style="width: 25rem;">
                <div class="image-container position-relative">
                    <span class="badge badge-warning position-absolute" style="top:0; right:0;">UMKM</span>
                    <img class="card-img-top" src="https://picsum.photos/300/100" alt="Card image cap">
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="container">
                            <div class="row">
                                @php $i = 0; @endphp
                                @foreach($umkms as $d)
                                    @if($i % 2 == 0 && $i != 0)
                                        </div><div class="row mt-3">
                                    @endif
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <img src="{{ asset('storage/photo-acara/2024-05-13Tempat pelatihan umkm daerah padamara 083114610391.jpeg') }}" class="card-img-top" alt="Placeholder" style="width: 100%; height: 200px; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $d->umkm }}</h5>
                                                <p class="card-text">Penjelasan Detail Tentang UMKM Tersebut</p> <!-- $d->deskripsi -->
                                                <span class="btn btn-success ikut-kegiatan" data-id="{{ $d->umkm_id }}" data-toggle="modal" data-target="#confirmationModal{{ $d->umkm_id }}">Ikut Kegiatan</span>
                                                <div class="text-right">
                                                    <span class="badge badge-pill badge-info">{{ $d->tipe_umkm }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $i++; @endphp
                                @include('umkm.modal')
                                @endforeach
                            </div>
                        </div>                            
                    </div>
                </div>

            </div>    
                

                
        <div class="lime-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="footer-text"></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
