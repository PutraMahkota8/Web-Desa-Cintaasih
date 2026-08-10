@extends('admin.layouts.app')

@section('title', 'Manajemen User – EduFoundation LMS')

@push('styles')
    <style>
        .custom-select {
            position: relative;
            user-select: none;
        }

        .custom-select .trigger {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            background: #fff;
            border: 1px solid #dcdcdc;
            border-radius: 14px;
            font-size: 14px;
            font-weight: 500;
            color: #555;
            cursor: pointer;
            min-width: 140px;
            transition: .2s ease;
        }

        .custom-select .trigger:hover {
            border-color: #bdbdbd;
            background: #fafafa;
        }

        .custom-select .trigger.active {
            color: #111;
        }

        .custom-select .chevron {
            margin-left: auto;
            font-size: 12px;
            transition: .2s ease;
        }

        .custom-select .trigger.open .chevron {
            transform: rotate(180deg);
        }

        .custom-select .dropdown {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            width: 100%;
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 16px;
            overflow: hidden;
            display: none;
            z-index: 999;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .custom-select .dropdown.open {
            display: block;
        }

        .custom-select .opt {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            font-size: 14px;
            cursor: pointer;
            transition: .15s ease;
        }

        .custom-select .opt:hover {
            background: #f5f5f5;
        }

        .custom-select .opt.selected {
            font-weight: 600;
            color: #111;
        }

        .custom-select .check {
            margin-left: auto;
            opacity: 0;
            font-size: 12px;
        }

        .custom-select .opt.selected .check {
            opacity: 1;
        }

        .table-hover tbody tr {
            transition: .15s ease;
        }

        .table-hover tbody tr:hover {
            background: #fafafa;
        }
    </style>
@endpush

@section('content')

<div class="flex flex-col gap-6">

    {{-- Header --}}
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

        <div>
            <h1 class="text-3xl font-bold text-primary">
                Manajemen Pengguna
            </h1>

            <p class="mt-2 text-sm text-on-surface-variant">
                Kelola akun administrator, guru, dan siswa di LMS.
            </p>
        </div>

        <div class="flex items-center gap-3">

            <button
                class="h-11 px-5 rounded-2xl border border-outline-variant bg-white text-sm font-medium hover:bg-surface-container transition-all">
                <i class="fa-solid fa-file-excel mr-2"></i>
                Export Excel
            </button>

            <a href="{{ route('user-management.form') }}"
                class="h-11 px-5 rounded-2xl bg-primary text-white text-sm font-medium flex items-center hover:opacity-90 transition-all shadow-sm">
                <i class="fa-solid fa-plus mr-2"></i>
                Tambah User
            </a>

        </div>

    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <div class="bg-white rounded-3xl border border-outline-variant p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Total Pengguna
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        20
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">
                    <i class="fa-solid fa-users text-primary text-xl"></i>
                </div>

            </div>

        </div>

        <div class="bg-white rounded-3xl border border-outline-variant p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Pengguna Aktif
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        12
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">
                    <i class="fa-solid fa-user-check text-green-700 text-xl"></i>
                </div>

            </div>

        </div>

        <div class="bg-white rounded-3xl border border-outline-variant p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm text-on-surface-variant">
                        Nonaktif
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        8
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center">
                    <i class="fa-solid fa-user-slash text-red-600 text-xl"></i>
                </div>

            </div>

        </div>

    </div>

    {{-- Filter --}}
    <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">

        <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4">

            <div class="flex flex-wrap items-center gap-3">

                {{-- Role --}}
                <div class="custom-select" id="sel-role">

                    <div class="trigger" onclick="toggleSelect('sel-role')">
                        <span class="label">Role</span>
                        <i class="fa-solid fa-chevron-down chevron"></i>
                    </div>

                    <div class="dropdown">

                        <div class="opt" onclick="pickSelect('sel-role','guru','Guru',this)">
                            Guru
                            <i class="fa-solid fa-check check"></i>
                        </div>

                        <div class="opt" onclick="pickSelect('sel-role','siswa','Siswa',this)">
                            Siswa
                            <i class="fa-solid fa-check check"></i>
                        </div>

                    </div>

                </div>

                {{-- Status --}}
                <div class="custom-select" id="sel-status">

                    <div class="trigger" onclick="toggleSelect('sel-status')">
                        <span class="label">Status</span>
                        <i class="fa-solid fa-chevron-down chevron"></i>
                    </div>

                    <div class="dropdown">

                        <div class="opt" onclick="pickSelect('sel-status','aktif','Aktif',this)">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Aktif
                            <i class="fa-solid fa-check check"></i>
                        </div>

                        <div class="opt" onclick="pickSelect('sel-status','nonaktif','Nonaktif',this)">
                            <span class="w-2 h-2 rounded-full bg-gray-400"></span>
                            Nonaktif
                            <i class="fa-solid fa-check check"></i>
                        </div>

                    </div>

                </div>

            </div>

            {{-- Search --}}
            <div class="flex items-center gap-3">

                <div class="relative">

                    <i
                        class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-sm text-on-surface-variant">
                    </i>

                    <input type="text"
                        placeholder="Cari pengguna..."
                        class="w-[260px] h-11 pl-11 pr-4 rounded-2xl border border-outline-variant bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                </div>

                <button
                    class="h-11 px-5 rounded-2xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                    Cari
                </button>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="bg-white rounded-3xl border border-outline-variant shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="min-w-full table-hover">

                <thead class="bg-surface-container">

                    <tr class="text-left">

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Pengguna
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Role
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Email
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

                    {{-- Row --}}
                    <tr>

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-4">

                                <div
                                    class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-semibold">
                                    G
                                </div>

                                <div>
                                    <h3 class="font-semibold text-on-surface">
                                        Gwe
                                    </h3>

                                    <p class="text-xs text-on-surface-variant mt-1">
                                        ID: USR-001
                                    </p>
                                </div>

                            </div>

                        </td>

                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">
                                Guru
                            </span>
                        </td>

                        <td class="px-6 py-5 text-sm text-on-surface">
                            gwe@example.com
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
                                    <i class="fa-solid fa-pen text-orange-500"></i>
                                </button>

                                <button onclick="openDeleteModal()"
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-red-50 transition-all">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                    {{-- Row --}}
                    <tr>

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-4">

                                <div
                                    class="w-12 h-12 rounded-2xl bg-gray-200 text-gray-700 flex items-center justify-center font-semibold">
                                    A
                                </div>

                                <div>
                                    <h3 class="font-semibold text-on-surface">
                                        Admin
                                    </h3>

                                    <p class="text-xs text-on-surface-variant mt-1">
                                        ID: USR-002
                                    </p>
                                </div>

                            </div>

                        </td>

                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-semibold">
                                Admin
                            </span>
                        </td>

                        <td class="px-6 py-5 text-sm text-on-surface">
                            admin@example.com
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
                                    <i class="fa-solid fa-pen text-orange-500"></i>
                                </button>

                                <button onclick="openDeleteModal()"
                                    class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-red-50 transition-all">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        {{-- Pagination --}}
        @include('admin.components.pagination')
    </div>

</div>

{{-- Modal Delete --}}
<div id="modal-delete-user"
    class="hidden fixed inset-0 z-[9999] bg-black/40 flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-3xl overflow-hidden shadow-xl">

        <div class="px-6 py-8 text-center">

            <div
                class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-5">
                <i class="fa-solid fa-trash text-red-600 text-2xl"></i>
            </div>

            <h2 class="text-xl font-bold text-on-surface">
                Hapus Pengguna?
            </h2>

            <p class="text-sm text-on-surface-variant mt-3 leading-relaxed">
                Data pengguna akan dihapus permanen.
                Manusia memang suka bikin data lalu panik sendiri pas data ilang.
            </p>

        </div>

        <div
            class="px-6 py-5 border-t border-outline-variant flex items-center justify-end gap-3">

            <button onclick="closeDeleteModal()"
                class="px-5 py-3 rounded-2xl border border-outline-variant font-medium hover:bg-surface-container transition-all">
                Batal
            </button>

            <button
                class="px-5 py-3 rounded-2xl bg-red-600 text-white font-medium hover:bg-red-700 transition-all">
                Hapus
            </button>

        </div>

    </div>

</div>

<script>

    // ===== Delete Modal =====
    function openDeleteModal() {
        document.getElementById('modal-delete-user').classList.remove('hidden')
        document.body.classList.add('overflow-hidden')
    }

    function closeDeleteModal() {
        document.getElementById('modal-delete-user').classList.add('hidden')
        document.body.classList.remove('overflow-hidden')
    }

    // ===== Select =====
    function toggleSelect(id) {

        document.querySelectorAll('.custom-select').forEach(s => {

            if (s.id !== id) {
                s.querySelector('.trigger').classList.remove('open')
                s.querySelector('.dropdown').classList.remove('open')
            }

        })

        const el = document.getElementById(id)

        el.querySelector('.trigger').classList.toggle('open')
        el.querySelector('.dropdown').classList.toggle('open')
    }

    function pickSelect(id, val, label, optEl) {

        const el = document.getElementById(id)

        el.querySelector('.label').textContent = label

        el.querySelector('.trigger').classList.add('active')

        el.querySelectorAll('.opt').forEach(o => {
            o.classList.remove('selected')
        })

        optEl.classList.add('selected')

        el.querySelector('.trigger').classList.remove('open')
        el.querySelector('.dropdown').classList.remove('open')
    }

    // ===== Close Outside =====
    window.addEventListener('click', function (e) {

        if (!e.target.closest('.custom-select')) {

            document.querySelectorAll('.custom-select').forEach(s => {

                s.querySelector('.trigger').classList.remove('open')
                s.querySelector('.dropdown').classList.remove('open')

            })

        }

        if (e.target.id === 'modal-delete-user') {
            closeDeleteModal()
        }

    })

</script>

@endsection