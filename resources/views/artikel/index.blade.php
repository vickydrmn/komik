<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(session()->has('success'))
        <x-alert message="{{ session('success')}}" />
        @endif

        <div class="flex mt-6 item-center justify-between">
            <h2 class="font-semibold text-xl">List Komik</h2>
            
            <a href="{{ route('artikel.create') }}">
                <button class="bg-gray-100 px-10 py-2 rounded-md font-semibold">Tambah</button>
            </a>
        </div>

        <div class="flex justify-center mt-4">
            <form method="GET" action="{{ route('artikel.index') }}">
                <input type="text" name="search" placeholder="Cari Artikel" value="{{ request('search') }}" class="border border-gray-300 p-2 rounded-md">
                <button type="submit" class="bg-gray-100 px-10 py-2 rounded-md font-semibold">Cari</button>
            </form>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 mt-4 gap-6">
            @foreach($artikel as $item)
            <div class="border p-4 rounded-lg shadow-md">
                <img src="{{ asset('storage/foto/' . $item->foto) }}" class="w-full h-64 object-cover rounded-lg" alt="{{ $item->nama }}" />

                <div class="mt-4">
                    <p class="text-xl font-bold">{{ $item->nama }}</p>
                    <div class="grid grid-cols-2 gap-2 my-2">
                        <p class="font-semibold">Genre :</p>
                        <p>{{ $item->genre }}</p>

                        <p class="font-semibold">Autor :</p>
                        <p>{{ $item->autor }}</p>

                        <p class="font-semibold">Tanggal Update :</p>
                        <p>{{ $item->tanggal_update }}</p>

                        <p class="font-semibold">Tanggal Rilis :</p>
                        <p>{{ $item->tanggal_rilis }}</p>

                        <p class="font-semibold">Deskripsi :</p>
                        <p class="col-span-2">{{ $item->deskripsi }}</p>
                    </div>
                    <a href="{{ route('artikel.edit', $item->id) }}">
                        <button class="bg-gray-100 px-10 py-2 w-full rounded-md font-semibold">Edit</button>
                    </a>

                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $artikel->links() }}
        </div>
    </div>
</x-app-layout>