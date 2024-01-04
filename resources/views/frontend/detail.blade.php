@extends('layouts.frontend')

@section('content')
<!-- Section-->
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row justify-content-center">
      <h2>{{ $car->nama_mobil }}</h2>
      <div class="col-lg-8 mb-5">

        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">

            <div class="info">
              <!-- Product name-->
              <h3 class="fw-bolder text-primary">Deskripsi</h3>
              <p>
                {{ $car->deskripsi }}
              </p>
              <div class="border p-2 rounded-3 mb-3" style="box-shadow: -3px 10px 8px -5px rgba(204,204,204,1);">
                <h6><strong>Kebijakan Rental</strong></h6>
                <ul>
                  <li class="gap-2 d-flex align-items-center">
                    <iconify-icon icon="fluent-mdl2:money" style="color: #27609a; font-size: 20px; text-align: center;"></iconify-icon>
                    <span>Full Refund</span>
                  </li>
                  <li class="gap-2 d-flex align-items-center">
                    <iconify-icon icon="mingcute:shield-line" style="color: #27609a;"></iconify-icon>
                    <span>Termasuk Asuransi</span>
                  </li>
                  <li class="gap-2 d-flex align-items-center">
                    <iconify-icon icon="mdi:customer-service" style="color: #27609a;"></iconify-icon>
                    <span>Customer Service 24 Jam</span>
                  </li>
                  <li class="gap-2 d-flex align-items-center">
                    <iconify-icon icon="fluent:gas-pump-24-regular" style="color: #27609a;"></iconify-icon>
                    <span>Mengembalikan bensi seperti semula</span>
                  </li>
                  <li class="gap-2 d-flex align-items-center">
                    <iconify-icon icon="iconoir:clock" style="color: #27609a;"></iconify-icon>
                    <span>Penggunaan dari jam 00.00 hinga 23.59 per hari</span>
                  </li>
                </ul>
              </div>
              <div class="border p-2 rounded-3 mb-3" style="box-shadow: -3px 10px 8px -5px rgba(204,204,204,1);">
                <h6><strong>Informasi Penting</strong></h6>
                <p><strong>Sebelum Anda Pesan</strong></p>
                <ul>
                  <li>Pastikan untuk membaca syarat rental.</li>
                </ul>
                <p><strong>Saat Pengambilan</strong></p>
                <ul>
                  <li>Bawa KTP, SIM, dan dokumen-dokumen lain yang dibutuhkan</li>
                  <li>Saat Anda bertemu dengan staf rental, cek kondisi mobil dengan staf</li>
                  <li>Setelah itu, baca dan tandatangan perjanjian rental</li>
                </ul>

              </div>
              <div class="mobil-info-list border-top pt-4">
                <ul class="list-unstyled">
                  <li>
                    @if($car->p3k)
                    <i class="ri-checkbox-circle-line"></i>
                    <span>P3K</span>
                    @else
                    <i class="ri-close-circle-line text-secondary"></i>
                    <span>P3K</span>
                    @endif
                  </li>
                  <li>
                    @if($car->charger)
                    <i class="ri-checkbox-circle-line"></i>
                    <span>CHARGER</span>
                    @else
                    <i class="ri-close-circle-line text-secondary"></i>
                    <span>CHARGER</span>
                    @endif
                  </li>
                  <li>
                    @if($car->audio)
                    <i class="ri-checkbox-circle-line"></i>
                    <span>AUDIO</span>
                    @else
                    <i class="ri-close-circle-line text-secondary"></i>
                    <span>AUDIO</span>
                    @endif
                  </li>
                  <li>
                    @if($car->ac)
                    <i class="ri-checkbox-circle-line"></i>
                    <span>AC</span>
                    @else
                    <i class="ri-close-circle-line text-secondary"></i>
                    <span>AC</span>
                    @endif
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card">
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bolder">Harga Sewa</h5>
                <div class="rent-price mb-3">
                  <span style="font-size: 1rem" class="text-primary">Rp.{{ number_format($car->harga_sewa) }}/</span>day
                </div>
              </div>
              <ul class="list-unstyled list-style-group">
                <li class="border-bottom p-2 d-flex justify-content-between">
                  <span>Bahan Bakar</span>
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
              <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto{{ $car->status == 'tidak tersedia' ? ' disabled' : '' }}" href="{{ $car->status == 'tidak tersedia' ? '#' : 'https://api.whatsapp.com/send?phone=6289671015164&text=Hallo....%20Saya%20tertarik%20untuk%20menyewa%20mobil%20' . urlencode($car->nama_mobil) . '%20ini%20segera' }}" style="column-gap: 0.4rem" role="button">
                Sewa Mobil <i class="ri-whatsapp-line"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection