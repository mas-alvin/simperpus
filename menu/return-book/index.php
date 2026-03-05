<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <p class="text-sm font-medium text-slate-500">Total Denda Aktif</p>
            <span class="material-symbols-outlined text-rose-accent">warning</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Rp 14.000</h3>
        <p class="text-xs text-rose-accent mt-2 font-medium flex items-center gap-1">
            <span class="material-symbols-outlined text-xs">trending_up</span>
            +Rp 2.000 hari ini
        </p>
    </div>
    <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <p class="text-sm font-medium text-slate-500">Buku Terlambat</p>
            <span class="material-symbols-outlined text-amber-500">schedule</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">3 Buku</h3>
        <p class="text-xs text-amber-600 mt-2 font-medium flex items-center gap-1">
            <span class="material-symbols-outlined text-xs">info</span>
            Segera lakukan pengembalian
        </p>
    </div>
    <div class="bg-primary/5 p-6 rounded-xl border border-primary/20 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <p class="text-sm font-medium text-primary">Tarif Denda</p>
            <span class="material-symbols-outlined text-primary">calculate</span>
        </div>
        <h3 class="text-2xl font-bold text-primary">Rp 2.000/Hari</h3>
        <p class="text-xs text-primary/70 mt-2 font-medium">Berdasarkan kebijakan perpustakaan</p>
    </div>
</div>
<!-- Loans Table Section -->
<div
    class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
        <h4 class="font-bold text-lg">Daftar Pinjaman Aktif</h4>
        <div class="flex gap-2">
            <button
                class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">Semua</button>
            <button
                class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-rose-accent/10 text-rose-accent border border-rose-accent/20">Terlambat</button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-xs uppercase">
                <tr>
                    <th class="px-6 py-4 font-semibold">Buku</th>
                    <th class="px-6 py-4 font-semibold">Tgl Pinjam</th>
                    <th class="px-6 py-4 font-semibold">Jatuh Tempo</th>
                    <th class="px-6 py-4 font-semibold">Keterlambatan</th>
                    <th class="px-6 py-4 font-semibold text-rose-accent">Estimasi Denda</th>
                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                <!-- Overdue Item -->
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-14 bg-slate-100 dark:bg-slate-800 rounded flex-shrink-0 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-primary/40"
                                    data-alt="Book cover placeholder"></div>
                                <span
                                    class="material-symbols-outlined absolute inset-0 m-auto text-slate-400">image</span>
                            </div>
                            <div>
                                <p class="font-bold">Laskar Pelangi</p>
                                <p class="text-xs text-slate-500">Andrea Hirata</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">12 Okt 2023</td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">19 Okt 2023</td>
                    <td class="px-6 py-4">
                        <span
                            class="px-2 py-1 bg-rose-accent/10 text-rose-accent text-[10px] font-bold rounded uppercase">4
                            Hari</span>
                    </td>
                    <td class="px-6 py-4 font-bold text-rose-accent">Rp 8.000</td>
                    <td class="px-6 py-4 text-right">
                        <button
                            class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-xs font-bold transition-colors">Proses
                            Kembali</button>
                    </td>
                </tr>
                <!-- Overdue Item -->
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-14 bg-slate-100 dark:bg-slate-800 rounded flex-shrink-0 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-indigo-200 to-indigo-300"
                                    data-alt="Book cover placeholder"></div>
                                <span
                                    class="material-symbols-outlined absolute inset-0 m-auto text-slate-400">image</span>
                            </div>
                            <div>
                                <p class="font-bold">Filosofi Teras</p>
                                <p class="text-xs text-slate-500">Henry Manampiring</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">15 Okt 2023</td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">22 Okt 2023</td>
                    <td class="px-6 py-4">
                        <span
                            class="px-2 py-1 bg-rose-accent/10 text-rose-accent text-[10px] font-bold rounded uppercase">2
                            Hari</span>
                    </td>
                    <td class="px-6 py-4 font-bold text-rose-accent">Rp 4.000</td>
                    <td class="px-6 py-4 text-right">
                        <button
                            class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-xs font-bold transition-colors">Proses
                            Kembali</button>
                    </td>
                </tr>
                <!-- On Time Item -->
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-14 bg-slate-100 dark:bg-slate-800 rounded flex-shrink-0 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-emerald-100 to-emerald-200"
                                    data-alt="Book cover placeholder"></div>
                                <span
                                    class="material-symbols-outlined absolute inset-0 m-auto text-slate-400">image</span>
                            </div>
                            <div>
                                <p class="font-bold">Atomic Habits</p>
                                <p class="text-xs text-slate-500">James Clear</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">20 Okt 2023</td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">27 Okt 2023</td>
                    <td class="px-6 py-4 text-slate-500 italic">Belum jatuh tempo</td>
                    <td class="px-6 py-4 font-bold text-slate-400">Rp 0</td>
                    <td class="px-6 py-4 text-right">
                        <button
                            class="bg-slate-200 dark:bg-slate-800 text-slate-900 dark:text-slate-100 px-4 py-2 rounded-lg text-xs font-bold hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">Proses
                            Kembali</button>
                    </td>
                </tr>
                <!-- Overdue Item -->
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-14 bg-slate-100 dark:bg-slate-800 rounded flex-shrink-0 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-amber-100 to-amber-200"
                                    data-alt="Book cover placeholder"></div>
                                <span
                                    class="material-symbols-outlined absolute inset-0 m-auto text-slate-400">image</span>
                            </div>
                            <div>
                                <p class="font-bold">Bumi Manusia</p>
                                <p class="text-xs text-slate-500">Pramoedya Ananta Toer</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">18 Okt 2023</td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">25 Okt 2023</td>
                    <td class="px-6 py-4">
                        <span
                            class="px-2 py-1 bg-rose-accent/10 text-rose-accent text-[10px] font-bold rounded uppercase">1
                            Hari</span>
                    </td>
                    <td class="px-6 py-4 font-bold text-rose-accent">Rp 2.000</td>
                    <td class="px-6 py-4 text-right">
                        <button
                            class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-xs font-bold transition-colors">Proses
                            Kembali</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="p-4 bg-slate-50 dark:bg-slate-800/50 flex justify-between items-center text-xs text-slate-500 font-medium">
        <p>Menampilkan 4 dari 12 pinjaman aktif</p>
        <div class="flex items-center gap-2">
            <button class="p-1 hover:bg-slate-200 dark:hover:bg-slate-700 rounded"><span
                    class="material-symbols-outlined text-sm">chevron_left</span></button>
            <button class="w-6 h-6 bg-primary text-white rounded flex items-center justify-center">1</button>
            <button
                class="w-6 h-6 hover:bg-slate-200 dark:hover:bg-slate-700 rounded flex items-center justify-center">2</button>
            <button
                class="w-6 h-6 hover:bg-slate-200 dark:hover:bg-slate-700 rounded flex items-center justify-center">3</button>
            <button class="p-1 hover:bg-slate-200 dark:hover:bg-slate-700 rounded"><span
                    class="material-symbols-outlined text-sm">chevron_right</span></button>
        </div>
    </div>
</div>
<!-- Real-time Calculator Summary -->
<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div
        class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-center">
        <h4 class="font-bold text-lg mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">analytics</span>
            Kalkulator Denda Real-time
        </h4>
        <div class="space-y-4">
            <div
                class="flex justify-between items-center pb-2 border-b border-dashed border-slate-200 dark:border-slate-800">
                <span class="text-sm text-slate-500">Jumlah Buku Terlambat</span>
                <span class="font-bold">3 Buku</span>
            </div>
            <div
                class="flex justify-between items-center pb-2 border-b border-dashed border-slate-200 dark:border-slate-800">
                <span class="text-sm text-slate-500">Akumulasi Hari Terlambat</span>
                <span class="font-bold">7 Hari</span>
            </div>
            <div
                class="flex justify-between items-center pb-2 border-b border-dashed border-slate-200 dark:border-slate-800">
                <span class="text-sm text-slate-500">Tarif per Hari</span>
                <span class="font-bold">Rp 2.000</span>
            </div>
            <div class="flex justify-between items-center pt-2">
                <span class="text-base font-bold">Total Denda Harus Dibayar</span>
                <span class="text-xl font-black text-rose-accent">Rp 14.000</span>
            </div>
        </div>
    </div>
    <div class="bg-primary p-8 rounded-xl text-white shadow-lg flex flex-col justify-between relative overflow-hidden">
        <!-- Abstract Pattern Background -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-24 -mt-24 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/5 rounded-full -ml-12 -mb-12 blur-2xl"></div>
        <div class="relative">
            <h4 class="text-xl font-bold mb-2">Informasi Pembayaran</h4>
            <p class="text-primary-100 text-sm opacity-90 leading-relaxed mb-6">Denda dapat dibayarkan langsung di loket
                perpustakaan atau melalui dompet digital (GoPay/OVO/Dana) saat proses pengembalian buku di aplikasi.</p>
        </div>
        <div class="relative flex gap-4">
            <button
                class="bg-white text-primary px-6 py-2.5 rounded-lg text-sm font-bold shadow-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">payments</span>
                Bayar Denda Sekarang
            </button>
            <button
                class="border border-white/30 hover:bg-white/10 text-white px-6 py-2.5 rounded-lg text-sm font-bold transition-colors">
                Lihat Riwayat
            </button>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>