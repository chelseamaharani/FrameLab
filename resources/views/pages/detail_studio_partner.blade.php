@extends('layouts.app6')

@section('title', 'Detail Studio Space')

@section('content')
<div class="container mx-auto mt-4 px-4">
  <a href="/tampilan_studiogabungan" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
    <i class="fas fa-arrow-left mr-2"></i> BACK
  </a>
</div>

<div class="container mx-auto mt-4 px-4">
  <h2 class="text-center font-bold text-2xl mb-8">Detail Studio Space</h2>
<div class="bg-primary text-white p-4 rounded-3xl flex flex-col md:flex-row items-start justify-start">
    <div class="w-1/2 h-[415px] overflow-hidden rounded-3xl ml-25">
      <img src="{{ asset('images/gambar19.jpeg') }}" alt="LEXUS Photobox" class="w-full h-full object-cover rounded-3xl">
    </div>
<div class="text-white pt-0 mt-0 self-start max-w-md w-full ml-14 mr-32">
      <h3 class="text-2xl font-bold mb-2">LEXUS Photobox</h3>
      <p class="text-base leading-relaxed">
        LEXUS Photobox offers photobox stands with a vintage classic theme.<br>
        Using Canon cameras and lighting, it will produce clear and bright photos. Suitable for rent for weddings, concerts and bazaars.<br>
        For more details, please contact number 081-1331-2001
      </p>
    </div>
  </div>
</div>
@endsection
