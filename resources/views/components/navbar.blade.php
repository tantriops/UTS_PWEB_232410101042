<style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    h1, .font-playfair {
      font-family: 'Playfair Display', serif;
    }
</style>

<nav class="flex justify-between items-center px-10 py-5 shadow-sm bg-white sticky top-0 z-50">
  <!-- Logo dengan ukuran teks responsif -->
  <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold font-playfair text-gray-900">
    ColorMatch
  </div>

  <!-- Menu untuk layar besar dengan ukuran teks responsif -->
  <ul class="flex space-x-8 font-medium text-xs sm:text-sm md:text-base lg:text-lg">
    <li><a href="{{ route('dashboard') }}" class="hover:text-pink-500 transition">Dashboard</a></li>
    <li><a href="{{ route('pengelolaan') }}" class="hover:text-pink-500 transition">Product Management</a></li>
    <li><a href="{{ route('profile') }}" class="hover:text-pink-500 transition">Profile</a></li>
  </ul>


  <!-- Tombol Sign Out dengan ukuran teks responsif -->
  <a href="{{ route('login') }}">
    <button class="px-5 py-2 border-2 rounded-full hover:bg-gray-100 text-xs sm:text-sm md:text-base lg:text-lg transition">Sign out</button>
  </a>
</nav>
