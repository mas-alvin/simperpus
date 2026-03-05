<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="p-2 pb-0">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Book Management</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Manage library catalog, inventory stock, and
                availability.</p>
        </div>
        <a href="/manajemen-perpustakaan/menu/management-book/add.php"
            class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-primary/20 transition-all">
            <span class="material-symbols-outlined text-[20px]">add</span>
            Add New Book
        </a>
    </div>
    <!-- Filters -->
    <div
        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col lg:flex-row gap-4">
        <div class="flex-1 relative">
            <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input
                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-primary/50 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400"
                placeholder="Search by Title, Author or ISBN..." type="text" />
        </div>
        <div class="w-full lg:w-48">
            <select
                class="w-full py-2.5 px-3 bg-slate-50 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-primary/50 text-sm text-slate-900 dark:text-slate-100">
                <option>All Categories</option>
                <option>Fiction</option>
                <option>Science</option>
                <option>Philosophy</option>
                <option>Biography</option>
            </select>
        </div>
        <div class="w-full lg:w-48">
            <select
                class="w-full py-2.5 px-3 bg-slate-50 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-primary/50 text-sm text-slate-900 dark:text-slate-100">
                <option>Stock Status</option>
                <option>In Stock</option>
                <option>Low Stock</option>
                <option>Out of Stock</option>
            </select>
        </div>
        <button
            class="px-4 py-2.5 text-slate-500 hover:text-primary dark:hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors flex items-center gap-2 text-sm font-medium">
            <span class="material-symbols-outlined text-[20px]">tune</span>
            More Filters
        </button>
    </div>
</div>
<!-- Table Section -->
<div class="p-2">
    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/50 border-bottom border-slate-200 dark:border-slate-800">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Book Detail</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Author</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Stock Status
                        </th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <!-- Row 1 - High Stock -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-16 bg-slate-100 rounded shadow-sm flex-shrink-0 overflow-hidden">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="Cover of a minimal book title The Silent Patient"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6a_s9FF6pSsPxtl3SFmX4h1vP-V1p11TtatsW0YaIPExHiUtAEB7cTA55VN4bCdqhtdwbhqO2EsKVi3uLFhEeBXPTKF5uF9nLnareGClFP04KPFKjT8kMJyzZGEn69mGWPHeHRy-aVQ_iAh3BnDCYLU1YsNc8ZbN18qWir29bnfK9zEPWO-qzG6sYudi4H8jXq0hRR2nq-h99hVw1Axr5p-NTnfQVdyQktlc4hikBOs-Vpo5EVmSD9sNJv27h5Fa0-CGV2EUCKVw-" />
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">The Silent Patient</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ISBN: 978-1250301697</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-700 dark:text-slate-300">Alex Michaelides</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">THRILLER</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                <p class="text-sm font-semibold text-emerald-600">12 Available</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button
                                    class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 - Low Stock -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-16 bg-slate-100 rounded shadow-sm flex-shrink-0 overflow-hidden">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="Cover of a classic book Great Expectations"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_GiX12XxlNVw4sA30LBG_sHwlQMMDQdI3lMwzsPx4StjLtabZPOti2Yu88rPvHAYgmAxTPO6qpSV6Tjd7bYk84XJCXEwz4vbfZn_WfvDpaxXJCSPDiVx1vCUYjgjuj1VUsEgT3j3jROgHaYTyigL4PL6QvAIjOOKZtb6Xtg0Sa_J5blE_BLSY8o5taoftGW9XtJB2v1g7c1oOtwKkeJmdW0x_chXWzhTBA9Lt1dNufhL-nxjhs75Wshdd-K3JceP2BrFmZYZe70t5" />
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Great Expectations</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ISBN: 978-0141439518</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-700 dark:text-slate-300">Charles Dickens</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">CLASSIC</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-orange-500"></div>
                                <p class="text-sm font-semibold text-orange-600">3 Available</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button
                                    class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 - Out of Stock -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-16 bg-slate-100 rounded shadow-sm flex-shrink-0 overflow-hidden">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="Cover of a science book Project Hail Mary"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTjN-pgPydeNUVrhq5-GRRBJtLB8ENIZKqnlE-tmirdYifaO9D0-wGZPUBfV6CUJnggoRPeSUF7FhOplZ-gkQ5C5uO5BaKwbMq_Fz_fgKkHeW3CZbwiGyewHuWCwvuVQxqA4srePEECaeeJwIHWWGR8t_JhAmWc-HSqmunSTz713sysRyq-DTeq43DGhvEZbwrVQyYhVGmVazAxrtdIEC6qSzV7jisb7fTxM2iOPbu4Zqhcaw9d6zJalsgJC5vB_tjhNWvND4JtUu7" />
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Project Hail Mary</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ISBN: 978-0593135204</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-700 dark:text-slate-300">Andy Weir</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">SCI-FI</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-rose-500"></div>
                                <p class="text-sm font-semibold text-rose-600">0 Available</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button
                                    class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 - High Stock -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-16 bg-slate-100 rounded shadow-sm flex-shrink-0 overflow-hidden">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="Cover of Atomic Habits by James Clear"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRnh_AkS-ZqCVc_z4fpc7xl3ffGlRs-wA-iXjQmavaT-GF5SWIKUyhV1ikGA6ekAyn9yJQfnAnnBkDabESDLlCMzfKDWhas3WkDH5NyfNwh44Kk-2eEhM2IqH7AufH4uvCPezv1jV5eY-td6PG7gEQJygMH6eB7uBICW5nFqmVIYPXYGdDg2wceHHJSjhXYwQq_zBMlicXNgEX30fRV7A5m5SUjY6FPyT2sHcUd-XcWxoG4q-76-hOCgkNc2Xp2U2jKUSLvLWIEHq4" />
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Atomic Habits</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ISBN: 978-0735211292</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-700 dark:text-slate-300">James Clear</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">NON-FICTION</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                <p class="text-sm font-semibold text-emerald-600">45 Available</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button
                                    class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 5 - High Stock -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-16 bg-slate-100 rounded shadow-sm flex-shrink-0 overflow-hidden">
                                    <img alt="Book Cover" class="w-full h-full object-cover"
                                        data-alt="Cover of Circe by Madeline Miller"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7vu30zjTnG2xkQd34IHgSDJwwactQ8OgdzCE85NC9XgClvXA0NhOFwuZIbx5FpcmFAREauNda1OHJ_N_E95naN9273fJx996cAPN0q5S7WPkO5DyQaYgn0naijP55zEZWZND38ZW6voshR0qx5XOOW9ACuz4oayROjrJCaWNLmwaR5gfAvOT2UxlFYkh6Qjy2aahoVzDJY0fUkJC4d-UMvkDI31dybOKI6QLvnR4obLsB1p5EmR8sDNUH3xnYOCuI7DAeknVh1Jhx" />
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Circe</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ISBN: 978-0316556347</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-700 dark:text-slate-300">Madeline Miller</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">FANTASY</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                <p class="text-sm font-semibold text-emerald-600">8 Available</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button
                                    class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button
                                    class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div
            class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                    class="font-bold text-slate-900 dark:text-white">1</span> to <span
                    class="font-bold text-slate-900 dark:text-white">5</span> of <span
                    class="font-bold text-slate-900 dark:text-white">128</span> entries</p>
            <div class="flex items-center gap-1">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-400 hover:bg-white dark:hover:bg-slate-700 transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-sm">1</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-700 transition-colors text-sm font-medium">2</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-700 transition-colors text-sm font-medium">3</button>
                <span class="px-2 text-slate-400">...</span>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-700 transition-colors text-sm font-medium">26</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-400 hover:bg-white dark:hover:bg-slate-700 transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Stats Preview -->
<div class="px-2 pb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div
        class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4 shadow-sm">
        <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
            <span class="material-symbols-outlined">book_2</span>
        </div>
        <div>
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Total Catalog</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">2,482</p>
        </div>
    </div>
    <div
        class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4 shadow-sm">
        <div class="w-12 h-12 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
            <span class="material-symbols-outlined">inventory_2</span>
        </div>
        <div>
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Total Stock</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">18,290</p>
        </div>
    </div>
    <div
        class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4 shadow-sm">
        <div class="w-12 h-12 rounded-lg bg-orange-50 text-orange-600 flex items-center justify-center">
            <span class="material-symbols-outlined">warning</span>
        </div>
        <div>
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Low Stock</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">12</p>
        </div>
    </div>
    <div
        class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4 shadow-sm">
        <div class="w-12 h-12 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center">
            <span class="material-symbols-outlined">block</span>
        </div>
        <div>
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Unavailable</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">04</p>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>