@extends('layout.app')
@section('content')
<div class="text-center my-12">
  @php
    $user = session('user');

  @endphp
    <h1 class="text-4xl font-playfair font-semibold">Welcome, <span class="text-pink-600">{{$user['name'] }}</span></h1>
  </div>

  <div class="flex flex-wrap justify-center gap-8 px-6 pb-20">

    @php
      $cards = [
        ['title' => 'Warm Spring', 'desc' => 'Warm Periner', 'img' => 'https://i.pinimg.com/736x/ce/42/1b/ce421bc9ef48e6eb4843c8a52d789f90.jpg', 'bg' => '#F6D5CE'],
        ['title' => 'Warm Autumn', 'desc' => 'Cool Summer', 'img' => 'https://i.pinimg.com/736x/0e/df/36/0edf3625991788422a7ef4e61755f0c1.jpg', 'bg' => '#F6D9AD'],
        ['title' => 'Cool Summer', 'desc' => 'Warpveea Flo', 'img' => 'https://i.pinimg.com/736x/4f/bb/02/4fbb02d294ac70644875b04e430d632d.jpg', 'bg' => '#C9DCEC'],
        ['title' => 'Cool Winter', 'desc' => 'Featle Warled', 'img' => 'https://i.pinimg.com/736x/cf/91/0b/cf910b52383bbf71539735251ff86de6.jpg', 'bg' => '#D6C5E3'],
      ];
    @endphp

    @foreach($cards as $card)
    <div class="w-52 rounded-2xl shadow-lg overflow-hidden transition transform hover:scale-105">
      <div style="background-color: {{ $card['bg'] }}" class="h-48 flex items-center justify-center">
        <img src="{{ asset($card['img']) }}" alt="{{ $card['title'] }}" class="h-full w-full object-cover " />
      </div>
      <div class="p-4 bg-white text-center">
        <p class="text-sm text-gray-500">{{ $card['desc'] }}</p>
        <h2 class="font-semibold text-lg">{{ $card['title'] }}</h2>
      </div>
    </div>
    @endforeach
  </div>
@endsection