@extends('layout.app')

@section('content')
<div class="bg-pink-50 min-h-screen py-10 px-6">
    <h1 class="text-4xl font-bold text-center text-pink-600 mb-10">Personal Color Product Dashboard</h1>
    {{-- manggila data dari pagecontroller function login() --}}
    @foreach($dataImg as $tipe => $products)
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-pink-500 mb-4">{{ $tipe }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                    <div class="rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 {{ $bgColors[$tipe] }}">
                        <img src="{{ $images[$product] ?? 'https://via.placeholder.com/300x200.png?text=Produk' }}" alt="Produk" class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="text-md font-semibold mb-2">{{ $product }}</h3>
                            <p class="text-sm text-opacity-80 mb-4">Tipe: <strong>{{ $tipe }}</strong></p>
                            <a href="#" class="inline-block px-4 py-2 bg-white bg-opacity-30 rounded-lg text-sm font-medium hover:bg-opacity-50 transition">Lihat Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
