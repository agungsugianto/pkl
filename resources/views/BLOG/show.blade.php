@extends('layouts.guest')
@section('content')
<section class="post-content-area single-post-area">

				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<div class="feature-img">
										<img src="{{asset('assetsss/dis/img/.$barangs->foto') }}"  
										 style="max-height: 8  00px;max-width: 800px;margin-top: 10px">
										
										<a class="posts-title" href="#"><h3 {{ $data->kategori->kategori }}</h3></a>
									</div>									
								</div>
								<div class="col-lg-9 col-md-9">
									<h3>{{ $data->nama_barang }}</h3>
									<p class="excert">{!!str_limit($data->deskripsi) !!}<br></p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
          
@endsection