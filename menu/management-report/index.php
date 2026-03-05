<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="p-2 print-area">
    <!-- Report Meta (Visible on Print) -->
    <div class="hidden print:block mb-8 border-b-2 border-slate-900 pb-6 text-center">
        <h1 class="text-2xl font-bold uppercase">Sistem Informasi Perpustakaan PustakaPro</h1>
        <p class="text-sm mt-1">Laporan Ringkasan Bulanan - Periode Oktober 2023</p>
        <p class="text-[10px] text-slate-500 mt-2 italic">Dicetak pada: 01 November 2023, 09:00 WIB</p>
    </div>
    <div class="flex flex-col mb-4 md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Reports</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Library statistics and performance overview.</p>
        </div>
        <div class="flex items-center gap-3">
            <button
                class="flex items-center gap-2 px-4 py-2 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 rounded-lg text-sm font-medium border border-slate-200 dark:border-slate-700">
                <span class="material-symbols-outlined text-lg">calendar_month</span>
                <span>1 Okt 2023 - 31 Okt 2023</span>
                <span class="material-symbols-outlined text-lg">expand_more</span>
            </button>
            <button
                class="flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-lg text-sm font-bold hover:bg-primary hover:text-white transition-all">
                <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                <span>PDF</span>
            </button>
            <button
                class="flex items-center gap-2 px-4 py-2 bg-green-500/10 text-green-600 rounded-lg text-sm font-bold hover:bg-green-600 hover:text-white transition-all">
                <span class="material-symbols-outlined text-lg">table_view</span>
                <span>Excel</span>
            </button>
        </div>
    </div>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 text-xs font-bold uppercase tracking-wider">Total Peminjaman</span>
                <div class="p-2 bg-blue-100 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 rounded-lg">
                    <span class="material-symbols-outlined">import_contacts</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <span class="text-3xl font-black">1.284</span>
                <span class="text-green-500 text-xs font-bold flex items-center mb-1">
                    <span class="material-symbols-outlined text-xs">trending_up</span> 12%
                </span>
            </div>
            <p class="text-slate-500 text-xs mt-1">Selesai tepat waktu: 940</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 text-xs font-bold uppercase tracking-wider">Anggota Aktif</span>
                <div class="p-2 bg-purple-100 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400 rounded-lg">
                    <span class="material-symbols-outlined">group</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <span class="text-3xl font-black">456</span>
                <span class="text-slate-500 text-xs font-bold flex items-center mb-1">
                    Baru: 42
                </span>
            </div>
            <p class="text-slate-500 text-xs mt-1">Total anggota terdaftar: 2.105</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 text-xs font-bold uppercase tracking-wider">Denda Terkumpul</span>
                <div class="p-2 bg-amber-100 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 rounded-lg">
                    <span class="material-symbols-outlined">payments</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <span class="text-2xl font-black italic">Rp 4.250.000</span>
            </div>
            <p class="text-slate-500 text-xs mt-1">Tertunggak: Rp 850.000</p>
        </div>
    </div>
    <!-- Table Summary -->
    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
            <h3 class="font-bold text-lg">Rincian Transaksi Terbaru</h3>
            <div class="no-print flex items-center gap-2">
                <div class="relative">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                    <input
                        class="pl-9 pr-4 py-1.5 text-sm bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary"
                        placeholder="Cari peminjam..." type="text" />
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr
                        class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 font-bold uppercase text-[10px] tracking-widest border-b border-slate-200 dark:border-slate-800">
                        <th class="px-6 py-4">Peminjam</th>
                        <th class="px-6 py-4">Judul Buku</th>
                        <th class="px-6 py-4">Tgl Pinjam</th>
                        <th class="px-6 py-4">Tgl Kembali</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Denda</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr>
                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900 dark:text-white">Andi Wijaya</div>
                            <div class="text-[10px] text-slate-500">ID: LIB-00921</div>
                        </td>
                        <td class="px-6 py-4 max-w-[200px] truncate">Filosofi Teras</td>
                        <td class="px-6 py-4">12 Okt 2023</td>
                        <td class="px-6 py-4">19 Okt 2023</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-green-100 text-green-700 dark:bg-green-500/10 dark:text-green-400 rounded-full text-[10px] font-bold uppercase tracking-tight">Dikembalikan</span>
                        </td>
                        <td class="px-6 py-4 text-right font-medium">Rp 0</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900 dark:text-white">Siti Aminah</div>
                            <div class="text-[10px] text-slate-500">ID: LIB-00812</div>
                        </td>
                        <td class="px-6 py-4 max-w-[200px] truncate">Hujan - Tere Liye</td>
                        <td class="px-6 py-4">15 Okt 2023</td>
                        <td class="px-6 py-4">22 Okt 2023</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400 rounded-full text-[10px] font-bold uppercase tracking-tight">Terlambat</span>
                        </td>
                        <td class="px-6 py-4 text-right font-medium text-red-500">Rp 15.000</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900 dark:text-white">Rizky Ramadhan</div>
                            <div class="text-[10px] text-slate-500">ID: LIB-00773</div>
                        </td>
                        <td class="px-6 py-4 max-w-[200px] truncate">Atomic Habits</td>
                        <td class="px-6 py-4">20 Okt 2023</td>
                        <td class="px-6 py-4">27 Okt 2023</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-blue-100 text-blue-700 dark:bg-blue-500/10 dark:text-blue-400 rounded-full text-[10px] font-bold uppercase tracking-tight">Dipinjam</span>
                        </td>
                        <td class="px-6 py-4 text-right font-medium">Rp 0</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900 dark:text-white">Laila Sari</div>
                            <div class="text-[10px] text-slate-500">ID: LIB-00910</div>
                        </td>
                        <td class="px-6 py-4 max-w-[200px] truncate">Seni Untuk Bersikap Bodo Amat</td>
                        <td class="px-6 py-4">10 Okt 2023</td>
                        <td class="px-6 py-4">17 Okt 2023</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-green-100 text-green-700 dark:bg-green-500/10 dark:text-green-400 rounded-full text-[10px] font-bold uppercase tracking-tight">Dikembalikan</span>
                        </td>
                        <td class="px-6 py-4 text-right font-medium">Rp 0</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900 dark:text-white">Doni Kusuma</div>
                            <div class="text-[10px] text-slate-500">ID: LIB-00855</div>
                        </td>
                        <td class="px-6 py-4 max-w-[200px] truncate">Bumi Manusia</td>
                        <td class="px-6 py-4">18 Okt 2023</td>
                        <td class="px-6 py-4">25 Okt 2023</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400 rounded-full text-[10px] font-bold uppercase tracking-tight">Terlambat</span>
                        </td>
                        <td class="px-6 py-4 text-right font-medium text-red-500">Rp 5.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div
            class="no-print p-6 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800 flex justify-between items-center text-xs">
            <span class="text-slate-500">Menampilkan 5 dari 1,284 transaksi</span>
            <div class="flex gap-2">
                <button
                    class="px-3 py-1 border border-slate-300 dark:border-slate-700 rounded bg-white dark:bg-slate-900 disabled:opacity-50"
                    disabled="">Sebelumnya</button>
                <button
                    class="px-3 py-1 border border-slate-300 dark:border-slate-700 rounded bg-white dark:bg-slate-900 hover:bg-slate-50">Berikutnya</button>
            </div>
        </div>
    </div>
    <!-- Footer Signatures (Visible on Print) -->
    <div class="hidden print:grid grid-cols-2 mt-20 text-center gap-12">
        <div>
            <p class="text-sm">Mengetahui,</p>
            <p class="text-sm font-bold mt-20">Budi Santoso, M.Hum</p>
            <p class="text-[10px] border-t border-slate-900 mt-2 pt-2">Kepala Perpustakaan</p>
        </div>
        <div>
            <p class="text-sm">Dicetak Oleh,</p>
            <p class="text-sm font-bold mt-20">Siska Putri</p>
            <p class="text-[10px] border-t border-slate-900 mt-2 pt-2">Admin Sistem</p>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>