
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Manage Citizen Data</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/track.css')}}" rel="stylesheet">
        

        <link href="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css')}}" rel="stylesheet">  

      
        <!-- Theme Styles -->
        <link href="{{ asset('lime/theme/assets/css/lime.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        @include('layouts.sidebar')
        
        @include('layouts.header')

        

        <div class="row">
            <div class="col-xl">
                <div class="container">
                    
                    <div class="row">

                        
                        @foreach ($data as $key => $d)
                            <div class="col-10">
                                <div class="card">
                                    @php
                                        $allowedRoles = ['secretary', 'rw', 'rt']; // Daftar peran yang diizinkan
                                    @endphp
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3 class="mt-3">{{ $d->judul }}</h3>
                                        @if(auth()->check() && auth()->user()->role == 'rw')
                                            <img src="{{ asset('storage/photo-acara/comment1.png') }}" width="25" data-toggle="modal" data-target="#comment_{{ $d->laporan_id }}">
                                        @endif
                                        @if(auth()->check() && in_array(auth()->user()->role, $allowedRoles))
                                            <img src="{{ asset('storage/photo-acara/comment1.png') }}" width="25" data-toggle="modal" data-target="#datacomment_{{ $d->laporan_id }}">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                        <small>{{ $d->created_at }}</small>
                                        @if ($d->warga)
                                            <h5 class="card-title">{{ $d->warga->nama_lengkap }}</h5>
                                        @else
                                            <h5 class="card-title text-danger">Unknown Warga</h5>
                                        @endif
                                        <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#Read_More_{{ $d->laporan_id }}">Read More</a>
                                        <div class="text-right">
                                            <a href="#" class="badge {{ $d->status == 'Belum Selesai' ? 'badge-danger' : 'badge-success' }} status-toggle" data-id="{{ $d->laporan_id }}">{{ $d->status }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('laporan.modal')
                        @endforeach
                        

                        <!-- Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="timeline">
                                        <div class="container-track left-container">
                                            <img src="{{ asset('storage/photo-acara/counter1.png') }}" alt="">
                                            <div class="text-box-track">
                                                <h2>Alphabet Inc.</h2>
                                                <small>2018-2020</small>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est animi, eligendi debitis iusto eos repellat maiores at aliquam ut inventore, corrupti corporis sint beatae cupiditate facilis labore officiis architecto vitae.</p>
                                                <span class="left-container-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="container-track right-container">
                                            <img src="{{ asset('storage/photo-acara/counter2.png') }}" alt="">
                                            <div class="text-box-track">
                                                <h2>Amazon Inc.</h2>
                                                <small>2019-2020</small>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est animi, eligendi debitis iusto eos repellat maiores at aliquam ut inventore, corrupti corporis sint beatae cupiditate facilis labore officiis architecto vitae.</p>
                                                <span class="right-container-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="container-track left-container">
                                            <img src="{{ asset('storage/photo-acara/counter3.png') }}" alt="">
                                            <div class="text-box-track">
                                                <h2>Tesla Inc.</h2>
                                                <small>2020-2021</small>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est animi, eligendi debitis iusto eos repellat maiores at aliquam ut inventore, corrupti corporis sint beatae cupiditate facilis labore officiis architecto vitae.</p>
                                                <span class="left-container-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="container-track right-container">
                                            <img src="{{ asset('storage/photo-acara/counter4.png') }}" alt="">
                                            <div class="text-box-track">
                                                <h2>Toyota Inc.</h2>
                                                <small>2019-2020</small>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est animi, eligendi debitis iusto eos repellat maiores at aliquam ut inventore, corrupti corporis sint beatae cupiditate facilis labore officiis architecto vitae.</p>
                                                <span class="right-container-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Skrip JavaScript -->
                        <script>
                            $(document).ready(function(){
                                // Mengaktifkan modal ketika gambar diklik
                                $('#myModal').on('shown.bs.modal', function () {
                                    $('#myModal').modal('show');
                                });
                            });
                        </script>
                        <!-- jQuery -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $('.status-toggle').on('click', function(event){
                                    event.preventDefault(); // Mencegah tindakan default tautan
                                    var $this = $(this);
                                    var laporanId = $this.data('id');
                                    var newStatus = $this.hasClass('badge-danger') ? 'Selesai' : 'Belum Selesai';
                                    
                                    $.ajax({
                                        url: '{{ route('laporan.updateStatus') }}',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            id: laporanId,
                                            status: newStatus
                                        },
                                        success: function(response) {
                                            if (response.success) {
                                                if ($this.hasClass('badge-danger')) {
                                                    $this.removeClass('badge-danger').addClass('badge-success');
                                                    $this.text('Selesai');
                                                } else {
                                                    $this.removeClass('badge-success').addClass('badge-danger');
                                                    $this.text('Belum Selesai');
                                                }
                                            } else {
                                                alert('Failed to update status');
                                            }
                                        },
                                        error: function() {
                                            alert('Error updating status');
                                        }
                                    });
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>


       

                    
            
        
        
        <!-- Javascripts -->
        <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/plupload/js/plupload.full.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/pages/plupload.js')}}"></script>
    </body>
</html>