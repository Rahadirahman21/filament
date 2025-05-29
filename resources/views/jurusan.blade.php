<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Jurusan</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<header class="bg-gray-800">
  <nav class="container mx-auto px-6 py-3">
    <div class="flex items-center justify-between">
      <div class="text-white font-bold text-xl">
        <a href="#">
          @foreach ($data as $d)
            <div class="flex items-center space-x-2">
              <img src="{{ asset('storage/' . $d->foto) }}" alt="" class="w-10 h-10 object-cover rounded">
              <h1>{{ $d->nama_sekolah }}</h1>
            </div>
          @endforeach
        </a>
      </div>
      <div class="hidden md:block">
        <ul class="flex items-center space-x-8">
          <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
          <li><a href="{{ route('profil') }}" class="text-white">Profil</a></li>
          <li><a href="{{ route('sarana') }}" class="text-white">Sarpras</a></li>
          <li><a href="{{ route('siswa') }}" class="text-white">Siswa</a></li>
          <li><a href="{{ route('jurusan') }}" class="text-white">Kompetensi Keahlian</a></li>
        </ul>
      </div>
      <div class="md:hidden">
        <button class="outline-none mobile-menu-button">
          <svg class="w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
               stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    <div class="mobile-menu hidden md:hidden">
      <ul class="mt-4 space-y-4">
        <li><a href="{{ route('home') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Home</a></li>
        <li><a href="{{ route('profil') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Profil</a></li>
        <li><a href="{{ route('sarana') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Sarpras</a></li>
        <li><a href="{{ route('siswa') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Siswa</a></li>
        <li><a href="{{ route('jurusan') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Kompetensi Keahlian</a></li>
      </ul>
    </div>
  </nav>
</header>

<main class="container mx-auto px-6 py-6">
  @foreach ($data as $d)
    <h1 class="text-2xl font-bold text-center my-5">Kompetensi Keahlian - {{ $d->nama_sekolah }}</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      @foreach ($jurusan as $j)
        <div class="card bg-blue-100 shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300">
          <div class="card-body">
            <div class="flex items-center gap-2 mb-2">
              <img src="{{ asset('storage/' . $j->foto) }}" alt="" class="w-10 h-10 object-cover rounded">
              <h2 class="text-xl font-semibold">{{ $j->nama_jurusan }}</h2>
            </div>
            <p class="text-sm text-gray-700">{{ $j->pengertian }}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
</main>

</body>
</html>
