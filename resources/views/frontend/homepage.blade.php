@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">VEHICLES RENTALS</h1>
      <p class="lead fw-normal text-white-50 mb-0">
        JUST ONE TOUCH
      </p>
    </div>
  </div>
</header>
<!-- Section-->
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <h2 class="text-center mb-5">Daftar Kendaraan</h2>
    <h3 class="mb-3">Mobil</h3>
    <hr>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center gap-5">
      @foreach($cars as $car)
      <div class="col mb-5">
        <div class="card h-100" style="width: 18rem;">
          <!-- Sale badge-->
          <div class="badge badge-custom {{ $car->status =='tersedia' ? 'bg-success' : 'bg-warning' }} text-white position-absolute" style="top: 0; right: 0">
            {{ $car->status }}
          </div>
          <!-- Product image-->
          <img class="card-img-top" style="height: 180px; width: 100%;" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">{{ $car->nama_mobil }}</h5>
              <!-- Product price-->
              <div class="rent-price mb-3">
                <span class="text-primary">Rp.{{ number_format($car->harga_sewa) }}/</span>day
              </div>
              <ul class="list-unstyled list-style-group">
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Bahan bakar</span>
                  <span style="font-weight: 600">{{ $car->bahan_bakar }}</span>
                </li>
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Jumlah Kursi</span>
                  <span style="font-weight: 600">{{ $car->jumlah_kursi }}</span>
                </li>
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Transmisi</span>
                  <span style="font-weight: 600">{{ $car->transmisi }}</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer border-top-0 bg-transparent">
            <div class="text-center">
              <a class="btn btn-primary mt-auto{{ $car->status == 'tidak tersedia' ? ' disabled' : '' }}" href="{{ $car->status == 'tidak tersedia' ? '#' : 'https://api.whatsapp.com/send?phone=6289671015164&text=Hallo....%20Saya%20tertarik%20untuk%20menyewa%20mobil%20' . urlencode($car->nama_mobil) . '%20ini%20segera' }}" role="button">
                Sewa
              </a>
              <a class="btn btn-info mt-auto text-white" href="{{ route('detail', $car->slug) }}">Detail</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
    <h3 class="mb-3">Motor</h3>
    <hr>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center gap-5">
      @foreach($motorcycles as $motorcycle)
      <div class="col mb-5">
        <div class="card h-100" style="width: 18rem;">
          <!-- Sale badge-->
          <div class="badge badge-custom {{ $motorcycle->status =='tersedia' ? 'bg-success' : 'bg-warning' }} text-white position-absolute" style="top: 0; right: 0">
            {{ $motorcycle->status }}
          </div>
          <!-- Product image-->
          <img class="card-img-top" style="height: 180px; width: 100%;" src="{{ Storage::url($motorcycle->gambar) }}" alt="{{ $motorcycle->nama_mobil }}" />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">{{ $motorcycle->nama_mobil }}</h5>
              <!-- Product price-->
              <div class="rent-price mb-3">
                <span class="text-primary">Rp.{{ number_format($motorcycle->harga_sewa) }}/</span>day
              </div>
              <ul class="list-unstyled list-style-group">
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Bahan bakar</span>
                  <span style="font-weight: 600">{{ $motorcycle->bahan_bakar }}</span>
                </li>
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Jumlah Kursi</span>
                  <span style="font-weight: 600">{{ $motorcycle->jumlah_kursi }}</span>
                </li>
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Transmisi</span>
                  <span style="font-weight: 600">{{ $motorcycle->transmisi }}</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer border-top-0 bg-transparent">
            <div class="text-center">
              <a class="btn btn-primary mt-auto{{ $motorcycle->status == 'tidak tersedia' ? ' disabled' : '' }}" href="{{ $motorcycle->status == 'tidak tersedia' ? '#' : 'https://api.whatsapp.com/send?phone=6289671015164&text=Hallo....%20Saya%20tertarik%20untuk%20menyewa%20mobil%20' . urlencode($motorcycle->nama_mobil) . '%20ini%20segera' }}" role="button">
                Sewa
              </a>
              <a class="btn btn-info mt-auto text-white" href="{{ route('detail', $motorcycle->slug) }}">Detail</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection