<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<header
    class="h-16 border-b rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex items-center justify-between px-8">
    <div class="flex items-center gap-4">
        <h2 class="text-xl font-bold text-slate-800 dark:text-white">Daftar Anggota</h2>
    </div>
    <div class="flex items-center gap-4">
        <div class="relative hidden sm:block">
            <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
            <input
                class="pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm w-64 focus:ring-2 focus:ring-primary"
                placeholder="Cari ID atau nama..." type="text" />
        </div>
        <a href="add.php"
            class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center gap-2 hover:bg-primary/90 transition-all">
            <span class="material-symbols-outlined text-sm">person_add</span>
            <span>Tambah Anggota</span>
        </a>
    </div>
</header>
<!-- Dashboard Content -->
<div class="p-2 overflow-auto">
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">group</span>
                <span class="text-emerald-500 text-xs font-bold">+12%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Anggota</p>
            <h3 class="text-2xl font-bold mt-1">1,284</h3>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span
                    class="material-symbols-outlined text-emerald-500 bg-emerald-500/10 p-2 rounded-lg">how_to_reg</span>
                <span class="text-emerald-500 text-xs font-bold">+5%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Anggota Aktif</p>
            <h3 class="text-2xl font-bold mt-1">1,150</h3>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-amber-500 bg-amber-500/10 p-2 rounded-lg">person_off</span>
                <span class="text-rose-500 text-xs font-bold">-2%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Ditangguhkan</p>
            <h3 class="text-2xl font-bold mt-1">42</h3>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-indigo-500 bg-indigo-500/10 p-2 rounded-lg">verified</span>
                <span class="text-emerald-500 text-xs font-bold">+8%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Pendaftaran Baru</p>
            <h3 class="text-2xl font-bold mt-1">92</h3>
        </div>
    </div>
    <!-- Table Section -->
    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div
            class="p-6 border-b border-slate-200 dark:border-slate-800 flex flex-wrap items-center justify-between gap-4">
            <div>
                <h3 class="text-lg font-bold">Data Anggota</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">Kelola informasi dan status keanggotaan
                    perpustakaan.</p>
            </div>
            <div class="flex gap-2">
                <button
                    class="p-2 text-slate-500 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800">
                    <span class="material-symbols-outlined">filter_list</span>
                </button>
                <button
                    class="p-2 text-slate-500 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800">
                    <span class="material-symbols-outlined">download</span>
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead
                    class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 uppercase text-xs font-bold">
                    <tr>
                        <th class="px-6 py-4">ID Anggota</th>
                        <th class="px-6 py-4">Nama Lengkap</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-primary">LIB-2024-001</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    AS</div>
                                <span class="text-sm font-semibold">Andi Saputra</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">andi.saputra@email.com</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-slate-400 hover:text-rose-500 transition-colors ml-2">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-primary">LIB-2024-002</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    RM</div>
                                <span class="text-sm font-semibold">Rina Melati</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">rina.melati@gmail.com</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-slate-400 hover:text-rose-500 transition-colors ml-2">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-primary">LIB-2024-003</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    BS</div>
                                <span class="text-sm font-semibold">Bambang Susanto</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">bambang.s@outlook.com</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 text-rose-800 dark:bg-rose-900/30 dark:text-rose-400">
                                Ditangguhkan
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-slate-400 hover:text-rose-500 transition-colors ml-2">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-primary">LIB-2024-004</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    DW</div>
                                <span class="text-sm font-semibold">Dewi Wijaya</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">dewiwijaya@edu.id</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-slate-400 hover:text-rose-500 transition-colors ml-2">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-primary">LIB-2024-005</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="size-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">
                                    FP</div>
                                <span class="text-sm font-semibold">Fajar Putra</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">fajar.putra@test.com</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
                                Menunggu
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-slate-400 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-slate-400 hover:text-rose-500 transition-colors ml-2">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-6 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
            <span class="text-sm text-slate-500">Menampilkan 5 dari 1,284 anggota</span>
            <div class="flex gap-2">
                <button
                    class="px-3 py-1 text-sm border border-slate-200 dark:border-slate-800 rounded hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50"
                    disabled="">Sebelumnya</button>
                <button class="px-3 py-1 text-sm bg-primary text-white rounded">1</button>
                <button
                    class="px-3 py-1 text-sm border border-slate-200 dark:border-slate-800 rounded hover:bg-slate-50 dark:hover:bg-slate-800">2</button>
                <button
                    class="px-3 py-1 text-sm border border-slate-200 dark:border-slate-800 rounded hover:bg-slate-50 dark:hover:bg-slate-800">3</button>
                <button
                    class="px-3 py-1 text-sm border border-slate-200 dark:border-slate-800 rounded hover:bg-slate-50 dark:hover:bg-slate-800">Berikutnya</button>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>