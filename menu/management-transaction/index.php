<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="p-2 max-w-6xl mx-auto w-full">
    <div class="mb-8">
        <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">Formulir Peminjaman Buku</h2>
        <p class="text-slate-500 mt-2">Buat catatan peminjaman baru untuk anggota perpustakaan.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Form Section -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Step 1: Member Selection -->
            <section
                class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 rounded-full bg-blue-700/10 text-blue-700 flex items-center justify-center font-bold text-sm">
                        1</div>
                    <h3 class="text-lg font-bold">Pilih Anggota</h3>
                </div>
                <div class="relative">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama atau ID
                        Anggota</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">person_search</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 border border-slate-200 dark:border-slate-700 rounded-lg bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-blue-700 outline-none transition-all"
                            type="text" value="Budi Sudarsono" />
                    </div>
                    <!-- Autocomplete Dropdown (Simulated) -->
                    <div
                        class="absolute w-full mt-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl shadow-xl z-20 hidden">
                        <div
                            class="p-2 border-b border-slate-100 dark:border-slate-700 hover:bg-blue-700/5 cursor-pointer flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-slate-200" data-alt="Avatar anggota 1"></div>
                            <div>
                                <p class="text-sm font-bold">Budi Sudarsono</p>
                                <p class="text-xs text-slate-500">ID: LIB-2023-042</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 p-4 rounded-lg bg-blue-700/5 border border-blue-700/10 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-slate-300 overflow-hidden" data-alt="Foto profil Budi"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDvBW_JlxZRzfTLLevQpMCeYkxuESqxdooV35cedOx30QvsGJ6XwO0-Q87cQ-QZDqBYNWAlqzThptIwn2tE81g4pREUKNqPKmwMXd4K4SVCcTcVOOKxh3VZ4xiwFkMF6mM1iaj9RN5W2lZCtbBZyc1WJlU2EfsogWu39aU00Hx3_h1HOOPlpb5D1JFDNFg2mgbyMWBBk0uhBqoRiSp8acujgEV7JZbWft_qTx2Jwd6r4GkvWsmh8KH3NAeNgL3spGOER8jDsIrLwb10'); background-size: cover;">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white">Budi Sudarsono</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Status: <span
                                class="text-emerald-600 font-medium">Aktif</span> • Limit: 2/5 Buku</p>
                    </div>
                    <button class="ml-auto text-sm text-blue-700 font-medium hover:underline">Ganti</button>
                </div>
            </section>
            <!-- Step 2: Book Selection -->
            <section
                class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 rounded-full bg-blue-700/10 text-blue-700 flex items-center justify-center font-bold text-sm">
                        2</div>
                    <h3 class="text-lg font-bold">Pilih Koleksi Buku</h3>
                </div>
                <div class="mb-6">
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">library_add</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700 outline-none"
                            placeholder="Ketik judul buku atau scan barcode..." type="text" />
                    </div>
                </div>
                <!-- Selected Books List -->
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div
                        class="flex items-center gap-4 p-4 border border-slate-100 dark:border-slate-800 rounded-xl hover:border-blue-700/30 transition-colors">
                        <div class="w-16 h-20 bg-slate-200 rounded overflow-hidden flex-shrink-0"
                            data-alt="Cover buku The Psychology of Money"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA2dyDQ0HkQ06_S3PF9NPa2NnzVm4h6kyu5pE9y9TwIM2WLyUx1_0dPPXcuvxPhI4JRcrVY6ie4viWoTROT54VidodVPUxK9KOZeMjaza5zj2Ij9bvbiETOJBWxvLwmfGCjPPzP9s0yj6wBi14ImbhnzIDqOXRUeotHIX6DN_mSjnQTfJYqq7A2K51i7QGM2dA_i_GqkqVLP-gBxZMHfMf07evb7gFEkOatres4LFKQEXeJpsXNBcDVDXobG3GcQOglnU6nvXDNW7yX'); background-size: cover;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-slate-900 dark:text-white truncate">The Psychology of Money</h4>
                            <p class="text-sm text-slate-500">Morgan Housel • Bisnis &amp; Keuangan</p>
                            <div class="mt-2 flex items-center gap-2">
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                    Tersedia: 8
                                </span>
                                <span class="text-xs text-slate-400">ISBN: 978-602-06-4812-5</span>
                            </div>
                        </div>
                        <button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                    <!-- Item 2 -->
                    <div
                        class="flex items-center gap-4 p-4 border border-slate-100 dark:border-slate-800 rounded-xl hover:border-blue-700/30 transition-colors">
                        <div class="w-16 h-20 bg-slate-200 rounded overflow-hidden flex-shrink-0"
                            data-alt="Cover buku Atomic Habits"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJKxAMvEn3amFsyafy_L8mbESs0ml3sNJraAKgRF6KzwES61gMt26MllLqLre99OjHjfUP8al7d2BZBqAYmGGIdeNZ2FcfT5oE28M0H2SSIvDaI9EQR9KXWzeAV41RzdogLwU-H6tZOeEMO-LHtUdMJ8d7TLLhP53o7VDbNMbV85Se2JufmyP6ybG8ZoSVb2HxNPS_JgObwtNl12epBR4rp7rYjwtthDvsxjmFMmgC80K1T3n9tsdQ1E9aq9DA4eI5uB6qpWmAAVu0'); background-size: cover;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-slate-900 dark:text-white truncate">Atomic Habits</h4>
                            <p class="text-sm text-slate-500">James Clear • Self Development</p>
                            <div class="mt-2 flex items-center gap-2">
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                    Tersedia: 3
                                </span>
                                <span class="text-xs text-slate-400">ISBN: 978-602-06-3317-6</span>
                            </div>
                        </div>
                        <button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                    <button
                        class="w-full py-3 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl text-slate-400 text-sm font-medium hover:text-blue-700 hover:border-blue-700/50 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">add_circle</span>
                        Tambah Buku Lainnya
                    </button>
                </div>
            </section>
        </div>
        <!-- Summary & Date Picker -->
        <div class="space-y-6">
            <section
                class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm sticky top-24">
                <h3 class="text-lg font-bold mb-6">Ringkasan Pinjaman</h3>
                <div class="space-y-4 mb-6">
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-500">Total Buku</span>
                        <span class="font-bold text-slate-900 dark:text-white">2 Judul</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-500">Tanggal Pinjam</span>
                        <span class="font-bold text-slate-900 dark:text-white">24 Mei 2024</span>
                    </div>
                    <hr class="border-slate-100 dark:border-slate-800" />
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Tanggal
                            Pengembalian</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">calendar_month</span>
                            <input
                                class="w-full pl-10 pr-4 py-2.5 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700 outline-none text-sm"
                                type="date" value="2024-05-31" />
                        </div>
                        <p class="text-[10px] text-blue-700 mt-2 flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">info</span>
                            Durasi pinjam: 7 hari
                        </p>
                    </div>
                </div>
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Catatan Tambahan
                        (Opsional)</label>
                    <textarea
                        class="w-full p-3 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700 outline-none text-sm h-24 resize-none"
                        placeholder="Tambahkan catatan jika diperlukan..."></textarea>
                </div>
                <div class="mt-8 space-y-3">
                    <button
                        class="w-full bg-blue-700 hover:bg-blue-700/90 text-white font-bold py-3 px-4 rounded-xl shadow-lg shadow-blue-700/20 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">assignment_turned_in</span>
                        Proses Peminjaman
                    </button>
                    <button
                        class="w-full bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 font-bold py-3 px-4 rounded-xl transition-all">
                        Batalkan Transaksi
                    </button>
                </div>
            </section>
            <div class="bg-blue-700/10 p-4 rounded-xl border border-blue-700/20">
                <div class="flex gap-3">
                    <span class="material-symbols-outlined text-blue-700">verified_user</span>
                    <div>
                        <p class="text-xs font-bold text-blue-700 uppercase tracking-wider">Info Penting</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                            Anggota yang terlambat mengembalikan buku akan dikenakan denda otomatis sebesar
                            Rp2.000/hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>