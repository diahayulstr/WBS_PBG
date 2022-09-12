@extends('layouts.masyarakat')

@section('title')
Dashboard
@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
  {{-- @foreach($liat as $li)
 <li>{{ $li->nik }}</li>
  @endforeach --}}
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Laporkan Pengaduan Anda!
    </h2>


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('masyarakat.store')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label for="text">
          <span class="text-gray-700 ">Alamat Pelapor</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
            rows="1" type="text" placeholder="Isi Alamat Anda" value="{{ old('alamat_pelapor')}}"
            name="alamat_pelapor"></textarea>
        </label>

        <label for="email" class="block mt-4 text-sm">
            <span class="text-gray-700 ">Email Pelapor</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi Email Anda" value="{{ old('email')}}"
              name="email"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
            <span class="text-gray-700 ">No.Hp Pelapor</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi No.Hp Anda" value="{{ old('no_hp')}}"
              name="no_hp"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
            <span class="text-gray-700 ">OPD/Alamat Tempat Tugas Pelapor</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi Alamat Tempat Tugas Anda" value="{{ old('opd')}}"
              name="opd"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
            <span class="text-gray-700 ">Jabatan Pelapor</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi Jabatan Anda" value="{{ old('jabatan_pelapor')}}"
              name="jabatan_pelapor"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
            <span class="text-gray-700 ">Nama Pelaku</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi Nama Pelaku" value="{{ old('nama_pelaku')}}"
              name="nama_pelaku"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
            <span class="text-gray-700 ">Jabatan Pelaku</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
              rows="1" type="text" placeholder="Isi Jabatan Pelaku" value="{{ old('jabatan_pelaku')}}"
              name="jabatan_pelaku"></textarea>
        </label>

        <label for="text" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Kronologis</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Isi Kronologis Laporan Anda" value="{{ old('kronologis')}}"
            name="kronologis"></textarea>
        </label>

        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow">
          Laporkan
        </button>

      </div>
    </form>
</main>
@endsection
