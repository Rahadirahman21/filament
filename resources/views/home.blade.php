<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <header class="bg-gray-800">
  <nav class="container mx-auto px-6 py-3">
    <div class="flex items-center justify-between">
        <div class="text-white font-bold text-xl">
            <a href="#">@foreach ($data as $d)
               <div class="flex items-center">
                 <img src="{{ asset('storage/' . $d->foto) }}" alt="" class="w-10">
                <h1>{{ $d->nama_sekolah }}</h1>
               </div>
    @endforeach</a>
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
          <svg class="w-6 h-6 text-white" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    <div class="mobile-menu hidden md:hidden">
      <ul class="mt-4 space-y-4">
        <li><a href="{{ route('home') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Home</a></li>
        <li><a href="{{ route('profil') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Profil</a></li>
        <li><a href="{{ route('sarana') }}" class="text-white">Sarpras</a></li>
        <li><a href="{{ route('siswa') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Siswa</a></li>
        <li><a href="{{ route('jurusan') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Kompetensi Keahlian</a></li>
      </ul>
    </div>
    
  </nav>
</header>
<div class="flex w-full">
<div class="left w-1/2">
<h1>askdakjsgdkja</h1>
</div>
<div class="right w-1/2">
  <div class="card w-full card-side bg-base-100 shadow-sm">
  @foreach ($datas as $d) 
  <figure>
    <img
    src="{{ asset('storage/' . $d->foto) }}"
    alt="Movie" class="w-40"/>
  </figure>
  @endforeach
  @foreach ($data as $d) 
  <div class="card-body">
    <h2 class="card-title">Sambutan Kepala Sekolah</h2>
    <h1>{{ $d->nama_kepsek }}</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, explicabo ipsa! Ipsa harum repellat incidunt consequatur laboriosam quae commodi dignissimos quod labore repudiandae iusto esse unde fuga magnam, quis quas.</p>
      
    </div>
    @endforeach
</div>
</div>
</div>
     
</body>
</html>