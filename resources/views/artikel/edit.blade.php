<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex mt-6 justify-between items-center">
            <h2 class="font-semibold text-xl">Edit Komik</h2>
            @include('artikel.partials.delete-artikel')
        </div>

        <div class="mt-4" x-data="{ imageUrl: '{{ asset('storage/foto/' . ($artikel->foto ?? 'noimage.png')) }}' }">
            <form enctype="multipart/form-data" method="POST" action="{{ route('artikel.update', $artikel->id) }}" class="flex flex-col md:flex-row gap-8">
                @csrf
                @method('PUT')

                <div class=" w-full">
                    <img :src="imageUrl" class="rounded-md w-80 h-100 object-cover" alt="{{ $artikel->nama }}" />

                <div class="w-90">
                    <div class="mt-4">
                        <x-input-label for="no" :value="__('No')" />
                        <x-text-input id="no" class="block mt-1 w-full" type="number" name="no" value="{{ $artikel->no }}" required />
                        <x-input-error :messages="$errors->get('no')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{ $artikel->nama }}" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="genre" :value="__('Genre')" />
                        <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" value="{{ $artikel->genre }}" required />
                        <x-input-error :messages="$errors->get('genre')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="autor" :value="__('Autor')" />
                        <x-text-input id="autor" class="block mt-1 w-full" type="text" name="autor" value="{{ $artikel->autor }}" required />
                        <x-input-error :messages="$errors->get('autor')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="tanggal_update" :value="__('Tanggal Update')" />
                        <x-text-input id="tanggal_update" class="block mt-1 w-full" type="date" name="tanggal_update" value="{{ $artikel->tanggal_update }}" required />
                        <x-input-error :messages="$errors->get('tanggal_update')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="tanggal_rilis" :value="__('Tanggal Rilis')" />
                        <x-text-input id="tanggal_rilis" class="block mt-1 w-full" type="date" name="tanggal_rilis" value="{{ $artikel->tanggal_rilis }}" required />
                        <x-input-error :messages="$errors->get('tanggal_rilis')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <x-text-area id="deskripsi" class="block mt-1 w-full p-2" name="deskripsi">{{ $artikel->deskripsi }}</x-text-area>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="foto" :value="__('Foto')" />
                        <x-text-input accept="image/*"
                            id="foto"
                            class="block mt-1 w-full border"
                            type="file" name="foto"
                            @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>
                    <x-primary-button class="justify-center w-full mt-4">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
