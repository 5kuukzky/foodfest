<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
                <a href="/tambah-makanan" class="btn btn-primary mt-4">Tambah Makanan</a>
                <a href="/tambah-event" class="btn btn-secondary mt-4">Tambah Event</a>
                <a href="/tambah-provinsi" class="btn btn-thirdty mt-4">Tambah Provinsi</a>

                <div class="overflow-x-auto my-8">
                    <h1 class="text-lg font-bold sm:text-xl my-8">Table Event</h1>
                    <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
                        @csrf
                        @method('delete')

                        <thead>
                            <tr class="divide-x divide-gray-100">
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Judul</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Deskripsi
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Lokasi</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Tanggal</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Gambar</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($acara as $i)
                        <tbody class="divide-y divide-gray-200">
                            <tr class="divide-x divide-gray-100">
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $i->judul }}</td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $i->deskripsi }}
                                </td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $i->lokasi }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $i->tanggal }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <img
                                        src="{{ asset('storage/image_event/'. $i->gambar) }}"></td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <a style="color: red" href={{
                                        url('event/hapus/'. $i->id) }} >Hapus</a><a href={{ url('edit-event/'. $i->slug)
                                        }}>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="overflow-x-auto my-8">
                    <h1 class="text-lg font-bold sm:text-xl my-8">Table Provinsi</h1>
                    <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
                        @csrf
                        @method('delete')

                        <thead>
                            <tr class="divide-x divide-gray-100">
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Nama
                                    Provinsi</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Deskripsi
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Logo</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($provinsi as $j)
                        <tbody class="divide-y divide-gray-200">
                            <tr class="divide-x divide-gray-100">
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $j->nama }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $j->deskripsi }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $j->logo }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <a style="color: red" href={{
                                        url('provinsi/hapus/'. $j->id) }} >Hapus</a><a href={{ url('edit-provinsi/'.
                                        $j->slug)
                                        }}>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto my-8">
                    <h1 class="text-lg font-bold sm:text-xl my-8">Table Makanan</h1>
                    <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
                        @csrf
                        @method('delete')

                        <thead>
                            <tr class="divide-x divide-gray-100">
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Nama</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Asal
                                    Provinsi</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Gambar
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Deskripsi
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Cara Masak
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($makanan as $k)

                        <tbody class="divide-y divide-gray-200">
                            <tr class="divide-x divide-gray-100">
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $k->nama }}</td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{
                                    $k->provinsi->nama}}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $k->gambar }}
                                </td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $k->deskripsi }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $k->cara }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <a style="color: red" href={{
                                        url('makanan/hapus/'. $k->id) }} >Hapus</a><a href={{
                                        url('edit-makanan/'.$k->slug) }}>Edit</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>