@extends('admin.layouts.app')

@section('title', 'Mata Pelajaran – EduFoundation LMS')

@push('styles')
    <style>
        body.modal-open {
            overflow: hidden;
        }

        /* ===== Custom Select ===== */
        .custom-select {
            position: relative;
            user-select: none;
        }

        .custom-select .trigger {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            background: white;
            border: 1px solid var(--outline-variant, #d6d6d6);
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
            color: var(--on-surface-variant, #666);
            cursor: pointer;
            min-width: 120px;
            transition: .2s ease;
        }

        .custom-select .trigger:hover {
            border-color: var(--outline, #999);
        }

        .custom-select .trigger.active {
            color: var(--on-surface, #111);
        }

        .custom-select .chevron {
            margin-left: auto;
            font-size: 11px;
            transition: .2s ease;
        }

        .custom-select .trigger.open .chevron {
            transform: rotate(180deg);
        }

        .custom-select .dropdown {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            min-width: 100%;
            background: white;
            border: 1px solid var(--outline-variant, #ddd);
            border-radius: 14px;
            overflow: hidden;
            display: none;
            z-index: 50;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }

        .custom-select .dropdown.open {
            display: block;
        }

        .custom-select .opt {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            font-size: 13px;
            cursor: pointer;
            transition: .15s ease;
        }

        .custom-select .opt:hover {
            background: #f5f5f5;
        }

        .custom-select .opt.selected {
            font-weight: 600;
            color: black;
        }

        .custom-select .check {
            margin-left: auto;
            opacity: 0;
            font-size: 11px;
        }

        .custom-select .opt.selected .check {
            opacity: 1;
        }

        /* ===== Modal ===== */
        .modal-overlay {
            transition: opacity .2s ease;
        }

        .modal-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .modal-box {
            transition: all .2s ease;
        }

        .modal-overlay.hidden .modal-box {
            transform: translateY(-12px);
            opacity: 0;
        }

        .modal-overlay:not(.hidden) .modal-box {
            transform: translateY(0);
            opacity: 1;
        }

        /* ===== Table ===== */
        .table-head {
            @apply px-md py-sm text-sm font-bold text-primary;
        }

        .table-body {
            @apply px-md py-sm text-sm font-medium text-primary;
        }
    </style>
@endpush

@section('content')

    <div class="flex flex-col gap-6">

        {{-- Header --}}
        <div class="flex items-center justify-between">

            <div>
                <h2 class="text-2xl font-bold text-primary">
                    Mata Pelajaran
                </h2>

                <p class="mt-2 text-sm text-on-surface-variant font-medium">
                    <i class="fa-solid fa-book-open mr-1"></i>
                    Total: 20 Mata Pelajaran
                </p>
            </div>

            <div class="flex items-center gap-3">

                <button
                    class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-surface-container border border-outline-variant text-sm font-medium hover:bg-surface-container-high transition-all">

                    <i class="fa-solid fa-file-excel"></i>
                    Export Excel
                </button>

                <button onclick="openModal()"
                    class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 active:scale-95 transition-all shadow-sm">

                    <i class="fa-solid fa-plus"></i>
                    Tambah
                </button>

            </div>

        </div>

        {{-- Filter --}}
        <div class="bg-white border border-outline-variant rounded-3xl p-5 shadow-sm">
            <div class="flex items-center justify-between gap-4 flex-wrap">

                <div class="flex items-center gap-3">

                    <div class="custom-select" id="filter-status">

                        <div class="trigger" onclick="toggleSelect('filter-status')">
                            <span class="label">Status</span>
                            <i class="fa-solid fa-chevron-down chevron"></i>
                        </div>

                        <div class="dropdown">

                            <div class="opt" onclick="pickSelect('filter-status','aktif','Aktif',this)">
                                Aktif
                                <i class="fa-solid fa-check check"></i>
                            </div>

                            <div class="opt" onclick="pickSelect('filter-status','nonaktif','Nonaktif',this)">
                                Nonaktif
                                <i class="fa-solid fa-check check"></i>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="flex items-center gap-2">

                    <div class="relative">

                        <i
                            class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-sm text-on-surface-variant"></i>

                        <input type="text" placeholder="Cari mata pelajaran..."
                            class="w-[260px] py-2.5 pl-11 pr-4 rounded-xl border border-outline-variant bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                    </div>

                    <button
                        class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                        Cari
                    </button>

                </div>

            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-hidden rounded-2xl border border-outline-variant bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="min-w-full divide-y divide-outline-variant">

                    <thead class="bg-surface-container">

                        <tr class="text-center">

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Kode
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Mata Pelajaran
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Deskripsi
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-outline-variant">

                        <tr class="text-center hover:bg-surface-container-lowest transition-all">

                            <td class="px-6 py-4 text-sm font-medium">
                                MPL001
                            </td>

                            <td class="px-6 py-4 text-sm font-semibold">
                                Ekonomi
                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface-variant">
                                Pelajaran ekonomi dasar
                            </td>

                            <td class="px-6 py-4">

                                <div class="action-wrap relative inline-block">

                                    <button onclick="toggleAction(this)"
                                        class="w-10 h-10 rounded-xl hover:bg-surface-container flex items-center justify-center transition-all">

                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>

                                    <div
                                        class="action-dropdown fixed hidden min-w-[170px] bg-white border border-outline-variant rounded-2xl shadow-xl z-[999] overflow-hidden">

                                        <button onclick="openEditModal('Ekonomi', 'Pelajaran ekonomi dasar')"
                                            class="w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-surface-container transition-all">

                                            <i class="fa-solid fa-pen text-primary"></i>
                                            Edit
                                        </button>

                                        <div class="h-px bg-outline-variant"></div>

                                        <button onclick="openDeleteModal()"
                                            class="w-full flex items-center gap-3 px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-all">

                                            <i class="fa-solid fa-trash"></i>
                                            Hapus
                                        </button>

                                    </div>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            @include('admin.components.pagination')
        </div>


    </div>

    {{-- ===== Modal Tambah ===== --}}
    <div id="modal-tambah-mapel"
        class="modal-overlay hidden fixed inset-0 z-[9999] flex items-center justify-center bg-black/40 px-4">

        <div
            class="modal-box w-full max-w-md bg-white rounded-3xl shadow-2xl border border-outline-variant overflow-hidden">

            <div class="flex items-center justify-between px-6 py-5 border-b border-outline-variant">

                <div>
                    <h3 class="text-lg font-bold">
                        Tambah Mata Pelajaran
                    </h3>

                    <p class="text-sm text-on-surface-variant mt-1">
                        Tambahkan data mata pelajaran baru
                    </p>
                </div>

                <button onclick="closeModal()"
                    class="w-9 h-9 rounded-xl hover:bg-surface-container flex items-center justify-center transition-all">

                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>

            <form>

                <div class="p-6 flex flex-col gap-5">

                    <div class="flex flex-col gap-2">

                        <label class="text-sm font-semibold">
                            Nama Mata Pelajaran
                        </label>

                        <input type="text" id="nama_mapel" placeholder="Contoh: Ekonomi"
                            class="w-full px-4 py-3 rounded-xl border border-outline-variant text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                    </div>

                    <div class="flex flex-col gap-2">

                        <label class="text-sm font-semibold">
                            Deskripsi
                        </label>

                        <textarea id="deskripsi" rows="4" placeholder="Deskripsi mata pelajaran..."
                            class="w-full px-4 py-3 rounded-xl border border-outline-variant text-sm resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>

                    </div>

                </div>

                <div
                    class="flex items-center justify-end gap-3 px-6 py-5 border-t border-outline-variant bg-surface-container-lowest">

                    <button type="button" onclick="closeModal()"
                        class="px-5 py-2.5 rounded-xl bg-surface-container text-sm font-medium hover:bg-surface-container-high transition-all">

                        Batal
                    </button>

                    <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">

                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

    {{-- ===== Modal Edit ===== --}}
    <div id="modal-edit-mapel"
        class="modal-overlay hidden fixed inset-0 z-[9999] flex items-center justify-center bg-black/40 px-4">

        <div
            class="modal-box w-full max-w-md bg-white rounded-3xl shadow-2xl border border-outline-variant overflow-hidden">

            <div class="flex items-center justify-between px-6 py-5 border-b border-outline-variant">

                <h3 class="text-lg font-bold">
                    Edit Mata Pelajaran
                </h3>

                <button onclick="closeEditModal()"
                    class="w-9 h-9 rounded-xl hover:bg-surface-container flex items-center justify-center">

                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>

            <form>

                <div class="p-6 flex flex-col gap-5">

                    <div class="flex flex-col gap-2">

                        <label class="text-sm font-semibold">
                            Nama Mata Pelajaran
                        </label>

                        <input type="text" id="edit_nama_mapel"
                            class="w-full px-4 py-3 rounded-xl border border-outline-variant text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                    </div>

                    <div class="flex flex-col gap-2">

                        <label class="text-sm font-semibold">
                            Deskripsi
                        </label>

                        <textarea id="edit_deskripsi" rows="4"
                            class="w-full px-4 py-3 rounded-xl border border-outline-variant text-sm resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>

                    </div>

                </div>

                <div
                    class="flex items-center justify-end gap-3 px-6 py-5 border-t border-outline-variant bg-surface-container-lowest">

                    <button type="button" onclick="closeEditModal()"
                        class="px-5 py-2.5 rounded-xl bg-surface-container text-sm font-medium">

                        Batal
                    </button>

                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium">

                        Update
                    </button>

                </div>

            </form>

        </div>

    </div>

    {{-- ===== Modal Delete ===== --}}
    <div id="modal-delete-mapel"
        class="modal-overlay hidden fixed inset-0 z-[9999] flex items-center justify-center bg-black/40 px-4">

        <div class="modal-box w-full max-w-sm bg-white rounded-3xl shadow-2xl overflow-hidden">

            <div class="p-7 flex flex-col items-center text-center">

                <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mb-5">

                    <i class="fa-solid fa-trash text-red-600 text-2xl"></i>

                </div>

                <h3 class="text-xl font-bold">
                    Hapus Data?
                </h3>

                <p class="text-sm text-on-surface-variant mt-2">
                    Data mata pelajaran akan dihapus permanen dan tidak bisa dikembalikan.
                </p>

                <div class="flex items-center gap-3 w-full mt-7">

                    <button onclick="closeDeleteModal()"
                        class="flex-1 px-4 py-3 rounded-xl bg-surface-container text-sm font-medium">

                        Batal
                    </button>

                    <button
                        class="flex-1 px-4 py-3 rounded-xl bg-red-600 text-white text-sm font-medium hover:bg-red-700 transition-all">

                        Hapus
                    </button>

                </div>

            </div>

        </div>

    </div>

    <script>

        // ===== Modal Helper =====
        function openModalById(id) {
            document.getElementById(id).classList.remove('hidden')
            document.body.classList.add('modal-open')
        }

        function closeModalById(id) {
            document.getElementById(id).classList.add('hidden')

            if (
                document.querySelectorAll('.modal-overlay:not(.hidden)').length === 0
            ) {
                document.body.classList.remove('modal-open')
            }
        }

        // ===== Tambah =====
        function openModal() {
            openModalById('modal-tambah-mapel')

            document.getElementById('nama_mapel').focus()
        }

        function closeModal() {
            closeModalById('modal-tambah-mapel')
        }

        // ===== Edit =====
        function openEditModal(nama, deskripsi) {

            openModalById('modal-edit-mapel')

            document.getElementById('edit_nama_mapel').value = nama
            document.getElementById('edit_deskripsi').value = deskripsi

            closeAllActions()
        }

        function closeEditModal() {
            closeModalById('modal-edit-mapel')
        }

        // ===== Delete =====
        function openDeleteModal() {
            openModalById('modal-delete-mapel')

            closeAllActions()
        }

        function closeDeleteModal() {
            closeModalById('modal-delete-mapel')
        }

        // ===== Close Backdrop =====
        document.querySelectorAll('.modal-overlay').forEach(modal => {

            modal.addEventListener('click', function (e) {

                if (e.target === this) {

                    this.classList.add('hidden')

                    document.body.classList.remove('modal-open')
                }

            })

        })

        // ===== Escape =====
        document.addEventListener('keydown', function (e) {

            if (e.key === 'Escape') {

                document.querySelectorAll('.modal-overlay').forEach(modal => {
                    modal.classList.add('hidden')
                })

                document.body.classList.remove('modal-open')
            }

        })

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

            el.querySelectorAll('.opt').forEach(o => {
                o.classList.remove('selected')
            })

            optEl.classList.add('selected')

            el.querySelector('.trigger').classList.remove('open')
            el.querySelector('.dropdown').classList.remove('open')
        }

        // ===== Action Dropdown =====
        let activeAction = null

        function toggleAction(btn) {

            const drop = btn.nextElementSibling

            if (activeAction && activeAction !== drop) {
                activeAction.classList.add('hidden')
            }

            if (!drop.classList.contains('hidden')) {

                drop.classList.add('hidden')
                activeAction = null
                return
            }

            const rect = btn.getBoundingClientRect()

            drop.style.top = (rect.bottom + window.scrollY + 6) + 'px'
            drop.style.left = (rect.right - 170) + 'px'

            drop.classList.remove('hidden')

            activeAction = drop
        }

        function closeAllActions() {

            document.querySelectorAll('.action-dropdown').forEach(d => {
                d.classList.add('hidden')
            })

            activeAction = null
        }

        // ===== Outside Click =====
        window.addEventListener('click', function (e) {

            if (!e.target.closest('.action-wrap')) {
                closeAllActions()
            }

            if (!e.target.closest('.custom-select')) {

                document.querySelectorAll('.custom-select').forEach(s => {

                    s.querySelector('.trigger').classList.remove('open')
                    s.querySelector('.dropdown').classList.remove('open')

                })

            }

        })

    </script>

@endsection