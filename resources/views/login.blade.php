<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ColorMatch Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }
    h1 {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-tl from-[#F6D5CE] via-rose-100 to-[#F6D9AD] px-4">

  <div class="text-center mb-12">
    <h1 class="text-[3.5rem] font-bold text-gray-800">ColorMatch</h1>
    <p class="text-lg text-gray-700 mt-2 max-w-md">
      - Sistem informasi pengelolaan manajemen kosmetik berdasarkan personal color
    </p>
  </div>

  <div class="bg-white p-10 rounded-3xl shadow-lg w-[22rem] h-auto max-w-md">
    <form action="{{ route('login.ceking') }}" method="POST" class="space-y-6">
      @csrf
      {{-- input username --}}
      <div>
        <input 
          type="text" 
          name="username" 
          placeholder="username" 
          class="w-full border border-gray-300 rounded-xl px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-pink-300" 
          required
        />
      </div>
      {{-- input password --}}
      <div>
        <input 
          type="password" 
          name="password" 
          placeholder="password" 
          class="w-full border border-gray-300 rounded-xl px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-pink-300" 
          required
        />
      </div>
      <button 
        type="submit" 
        class="w-full bg-purple-100 hover:bg-purple-200 text-black font-semibold py-3 rounded-xl shadow-sm transition text-lg"
      >
        Login
      </button>
    </form>
  </div>

</body>
</html>
