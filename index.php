<?php include __DIR__ . '/layouts/layout.php'; ?>
<div class="p-2 space-y-8">
    <div>
        <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Dashboard Overview</h2>
        <p class="text-slate-500 dark:text-slate-400">Selamat datang kembali, berikut ringkasan perpustakaan hari ini.
        </p>
    </div>
    <!-- Bento Grid Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-6">
        <!-- Stat 1: Total Books (Large Icon) -->
        <div
            class="md:col-span-3 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Books
                </p>
                <h3 class="text-4xl font-bold mt-1">12,450</h3>
                <div class="flex items-center gap-1 text-emerald-500 text-sm font-bold mt-2">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    <span>+2.5% bln ini</span>
                </div>
            </div>
            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-4xl font-light">auto_stories</span>
            </div>
        </div>
        <!-- Stat 2: Total Members -->
        <div
            class="md:col-span-3 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Members
                </p>
                <h3 class="text-4xl font-bold mt-1">3,200</h3>
                <div class="flex items-center gap-1 text-rose-500 text-sm font-bold mt-2">
                    <span class="material-symbols-outlined text-sm">trending_down</span>
                    <span>-1.2% bln ini</span>
                </div>
            </div>
            <div class="w-16 h-16 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-500">
                <span class="material-symbols-outlined text-4xl font-light">group_add</span>
            </div>
        </div>
        <!-- Stat 3: Borrowed vs Available (Progress/Chart) -->
        <div class="md:col-span-6 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10">
            <div class="flex justify-between items-start mb-4">
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Book
                    Availability</p>
                <span class="text-xs font-bold bg-primary/10 text-primary px-2 py-1 rounded">Live</span>
            </div>
            <div class="flex items-end justify-between mb-2">
                <h3 class="text-2xl font-bold">65% Dipinjam</h3>
                <span class="text-sm text-slate-500">8,092 / 12,450</span>
            </div>
            <div class="w-full h-4 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                <div class="bg-primary h-full rounded-full" style="width: 65%"></div>
            </div>
            <p class="text-xs text-slate-400 mt-3 flex items-center gap-1">
                <span class="material-symbols-outlined text-xs">info</span>
                4,358 buku tersedia untuk dipinjam
            </p>
        </div>
        <!-- Stat 4: Transactions This Month (Trend) -->
        <div class="md:col-span-3 lg:col-span-6 bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10">
            <div class="flex items-center gap-4">
                <div
                    class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-300">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                        Transactions (July)</p>
                    <div class="flex items-center justify-between">
                        <h3 class="text-3xl font-bold">850</h3>
                        <div
                            class="flex items-center gap-2 bg-emerald-500/10 text-emerald-600 px-3 py-1 rounded-full text-sm font-bold">
                            <span class="material-symbols-outlined text-sm">arrow_upward</span>
                            <span>12%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 h-12 flex items-end gap-1">
                <!-- Simple Sparkline Placeholder -->
                <div class="flex-1 bg-primary/20 h-[30%] rounded-t"></div>
                <div class="flex-1 bg-primary/20 h-[45%] rounded-t"></div>
                <div class="flex-1 bg-primary/20 h-[35%] rounded-t"></div>
                <div class="flex-1 bg-primary/20 h-[60%] rounded-t"></div>
                <div class="flex-1 bg-primary/20 h-[55%] rounded-t"></div>
                <div class="flex-1 bg-primary/20 h-[80%] rounded-t"></div>
                <div class="flex-1 bg-primary h-[100%] rounded-t"></div>
            </div>
        </div>
        <!-- Stat 5: Active Loans -->
        <div
            class="md:col-span-3 lg:col-span-6 bg-primary p-6 rounded-xl border border-primary/20 relative overflow-hidden group">
            <!-- Abstract Pattern -->
            <div
                class="absolute -right-8 -bottom-8 text-white/10 scale-[4] group-hover:scale-[4.5] transition-transform duration-700">
                <span class="material-symbols-outlined">schedule</span>
            </div>
            <div class="relative z-10 flex flex-col h-full justify-between">
                <div>
                    <p class="text-primary-100/80 text-sm font-medium uppercase tracking-wider text-white/80">Active
                        Loans</p>
                    <h3 class="text-5xl font-black text-white mt-2">420</h3>
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <p class="text-white/70 text-sm font-medium">Membutuhkan perhatian segera: <span
                            class="text-white font-bold">12 Terlambat</span></p>
                    <button
                        class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg text-sm font-bold backdrop-blur-sm transition-colors">
                        Lihat Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Activity Section (Additional for completeness) -->
    <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 overflow-hidden">
        <div class="px-6 py-4 border-b border-primary/10 flex items-center justify-between">
            <h4 class="font-bold text-slate-900 dark:text-white">Aktivitas Terbaru</h4>
            <a class="text-primary text-sm font-semibold hover:underline" href="#">Lihat Semua</a>
        </div>
        <div class="divide-y divide-primary/5">
            <div class="px-6 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center">
                    <img alt="Budi" class="rounded-full" data-alt="Avatar of a male library member"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCA8Tenlg6GG8egsCJJxPMfDU8VUSUjuXzEFS3N-KvmvEQ5HWhfO8kwZomJx_U1pNN4n5tqt-lAQyLib3v_YxZBafaf2GdPU7fzqlnmi4jHfmooiVTaXlgYyWKYXjRLskXcziSiWiUD7rfqzdmKZLTULVfrdeOckvRP5VvdSrHivdG_OTNwJ7MPRbqleAxNrf99Bv0e1XM38Ag0Zop6nppceGR8njq8Cdud3RN82nP_9mW-52IKh6dUlaSJ4c-kWvb69Y5deNa91bRN" />
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">Budi Santoso <span
                            class="font-normal text-slate-500">meminjam</span> "Atomic Habits"</p>
                    <p class="text-xs text-slate-400">Baru saja</p>
                </div>
                <span class="text-xs font-bold text-slate-400">TX-9021</span>
            </div>
            <div class="px-6 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center">
                    <img alt="Sari" class="rounded-full" data-alt="Avatar of a female library member"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuATHZZR7DcWPfTXhnZiEVNS01VXH_HlkxE8RbOPM0o_bQi0C3k-RPdJxZB5LcAr2-Ni9BFJdEi1hJqOvpC0VEEaNlLbD0xYpIAKRM-Sniaj4A1GJEcHMBelapnxw2Z4hT36oXS26iPZgzDbVfiZANT-_2zSXjgpXgv1j0K2LQ4Y8V6ZkK_SF0Ak7eZbviL_275mdABAoxhSrvIJUGIRShlioYKXyInVmLxyFvNhCzuqEvAtlFVdbnLJ59KBT97B9OQJifmuuXIN0rAg" />
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">Sari Indah <span
                            class="font-normal text-slate-500">mengembalikan</span> "The Psychology of Money"</p>
                    <p class="text-xs text-slate-400">15 menit yang lalu</p>
                </div>
                <span class="text-xs font-bold text-slate-400">TX-9018</span>
            </div>
            <div class="px-6 py-4 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm">warning</span>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-rose-600">Terlambat: <span
                            class="font-normal text-slate-500">Doni Ramadhan - "Clean Code"</span></p>
                    <p class="text-xs text-slate-400">2 jam yang lalu</p>
                </div>
                <span class="text-xs font-bold text-slate-400">TX-8992</span>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/layouts/footer.php'; ?>