@extends('admin.layouts.app')

@section('title', 'Manajemen Kelas')

@section('content')

<div class="flex flex-col gap-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>
            <h1 class="text-3xl font-bold text-primary">
                Manajemen Kelas
            </h1>

            <p class="text-on-surface-variant mt-1">
                Kelola data kelas, wali kelas, dan jumlah siswa pada LMS.
            </p>
        </div>

        <div class="flex items-center gap-3">

            <button
                class="px-5 py-2.5 rounded-xl border border-outline-variant text-sm font-medium hover:bg-surface-container transition-all">
                <i class="fa-solid fa-file-export mr-2"></i>
                Export
            </button>

            <button onclick="openModal()"
                class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                <i class="fa-solid fa-plus mr-2"></i>
                Tambah Kelas
            </button>

        </div>

    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Total Kelas
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        24
                    </h2>
                </div>

                <div
                    class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">
                    <i class="fa-solid fa-school text-primary text-xl"></i>
                </div>

            </div>

        </div>

        <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Total Siswa
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        1,248
                    </h2>
                </div>

                <div
                    class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">
                    <i class="fa-solid fa-users text-green-700 text-xl"></i>
                </div>

            </div>

        </div>

        <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Wali Kelas
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        18
                    </h2>
                </div>

                <div
                    class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center">
                    <i class="fa-solid fa-user-tie text-orange-600 text-xl"></i>
                </div>

            </div>

        </div>

    </div>

    {{-- Search --}}
    <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">

        <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

            <div class="flex items-center gap-3">

                <div class="relative">

                    <i
                        class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-sm text-on-surface-variant">
                    </i>

                    <input type="text"
                        placeholder="Cari kelas..."
                        class="w-[280px] pl-11 pr-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                </div>

                <button
                    class="px-5 py-3 rounded-2xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                    Cari
                </button>

            </div>

            <div class="flex items-center gap-3">

                <select
                    class="px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none">

                    <option>Semua Tingkatan</option>
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>

                </select>

                <select
                    class="px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none">

                    <option>Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>

                </select>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

        <div
            class="px-6 py-5 border-b border-outline-variant flex items-center justify-between">

            <div>
                <h2 class="text-xl font-bold text-primary">
                    Data Kelas
                </h2>

                <p class="text-sm text-on-surface-variant mt-1">
                    Daftar seluruh kelas yang tersedia di LMS.
                </p>
            </div>

        </div>

        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="bg-surface-container">

                    <tr class="text-left">

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Nama Kelas
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Tingkatan
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Wali Kelas
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Jumlah Siswa
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Status
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary text-center">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody class="divide-y divide-outline-variant">

                    {{-- Item --}}
                    <tr class="hover:bg-surface-container-lowest transition-all">

                        <td class="px-6 py-5">

                            <div>
                                <h3 class="font-semibold text-on-surface">
                                    X RPL 1
                                </h3>

                                <p class="text-xs text-on-surface-variant mt-1">
                                    Kode: KLS-001
                                </p>
                            </div>

                        </td>

                        <td class="px-6 py-5 text-sm">
                            X
                        </td>

                        <td class="px-6 py-5 text-sm">
                            Pak Budi Santoso
                        </td>

                        <td class="px-6 py-5 text-sm">
                            32 Siswa
                        </td>

                        <td class="px-6 py-5">

                            <span
                                class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                                Aktif
                            </span>

                        </td>

                        <td class="px-6 py-5">

                            <div class="flex items-center justify-center gap-2">

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                    <i class="fa-solid fa-eye text-primary"></i>

                                </button>

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                    <i class="fa-solid fa-pen text-orange-600"></i>

                                </button>

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-red-50 transition-all">

                                    <i class="fa-solid fa-trash text-red-600"></i>

                                </button>

                            </div>

                        </td>

                    </tr>

                    {{-- Item --}}
                    <tr class="hover:bg-surface-container-lowest transition-all">

                        <td class="px-6 py-5">

                            <div>
                                <h3 class="font-semibold text-on-surface">
                                    XI TKJ 2
                                </h3>

                                <p class="text-xs text-on-surface-variant mt-1">
                                    Kode: KLS-002
                                </p>
                            </div>

                        </td>

                        <td class="px-6 py-5 text-sm">
                            XI
                        </td>

                        <td class="px-6 py-5 text-sm">
                            Bu Sinta Maharani
                        </td>

                        <td class="px-6 py-5 text-sm">
                            28 Siswa
                        </td>

                        <td class="px-6 py-5">

                            <span
                                class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs font-semibold">
                                Nonaktif
                            </span>

                        </td>

                        <td class="px-6 py-5">

                            <div class="flex items-center justify-center gap-2">

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                    <i class="fa-solid fa-eye text-primary"></i>

                                </button>

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                    <i class="fa-solid fa-pen text-orange-600"></i>

                                </button>

                                <button
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-red-50 transition-all">

                                    <i class="fa-solid fa-trash text-red-600"></i>

                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        @include('admin.components.pagination')

    </div>

</div>

{{-- Modal --}}
<div id="modal-kelas"
    class="hidden fixed inset-0 bg-black/40 z-[9999] flex items-center justify-center px-4">

    <div
        class="w-full max-w-2xl bg-white rounded-3xl shadow-xl overflow-hidden">

        {{-- Header --}}
        <div
            class="px-6 py-5 border-b border-outline-variant flex items-center justify-between">

            <div>
                <h2 class="text-xl font-bold text-primary">
                    Tambah Kelas
                </h2>

                <p class="text-sm text-on-surface-variant mt-1">
                    Tambahkan data kelas baru.
                </p>
            </div>

            <button onclick="closeModal()"
                class="w-10 h-10 rounded-xl hover:bg-surface-container transition-all">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>

        {{-- Form --}}
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">

            <div>
                <label class="text-sm font-semibold">
                    Nama Kelas
                </label>

                <input type="text"
                    placeholder="Contoh: X RPL 1"
                    class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <div>
                <label class="text-sm font-semibold">
                    Kode Kelas
                </label>

                <input type="text"
                    placeholder="KLS-001"
                    class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <div>
                <label class="text-sm font-semibold">
                    Tingkatan
                </label>

                <select
                    class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary">

                    <option>Pilih Tingkatan</option>
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>

                </select>
            </div>

            <div>
                <label class="text-sm font-semibold">
                    Wali Kelas
                </label>

                <select
                    class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary">

                    <option>Pilih Guru</option>
                    <option>Pak Budi</option>
                    <option>Bu Sinta</option>

                </select>
            </div>

            <div class="md:col-span-2">
                <label class="text-sm font-semibold">
                    Deskripsi
                </label>

                <textarea rows="4"
                    class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant resize-none focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="Deskripsi kelas..."></textarea>
            </div>

        </div>

        {{-- Footer --}}
        <div
            class="px-6 py-5 border-t border-outline-variant flex items-center justify-end gap-3">

            <button onclick="closeModal()"
                class="px-5 py-3 rounded-2xl border border-outline-variant font-medium hover:bg-surface-container transition-all">
                Batal
            </button>

            <button
                class="px-5 py-3 rounded-2xl bg-primary text-white font-medium hover:opacity-90 transition-all">
                Simpan
            </button>

        </div>

    </div>

</div>

<script>
    function openModal() {
        document.getElementById('modal-kelas').classList.remove('hidden')
        document.body.classList.add('overflow-hidden')
    }

    function closeModal() {
        document.getElementById('modal-kelas').classList.add('hidden')
        document.body.classList.remove('overflow-hidden')
    }
</script>

@endsection