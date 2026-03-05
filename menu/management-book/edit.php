<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="p-2 max-w-2xl">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">
        <a href="/manajemen-perpustakaan/menu/management-book/" class="hover:text-primary transition-colors">Books</a>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-slate-900 dark:text-white font-medium">Edit Book</span>
    </div>

    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Edit Book</h2>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Update book information in the catalog.</p>
    </div>

    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm p-6 space-y-6">
        <form action="#" method="POST" class="space-y-6">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id'] ?? ''); ?>" />

            <!-- Title -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="title">
                    Book Title <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="title" name="title" required value="Atomic Habits"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors" />
            </div>

            <!-- Author & ISBN (2 cols) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="author">
                        Author <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" id="author" name="author" required value="James Clear"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="isbn">
                        ISBN <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" id="isbn" name="isbn" required value="978-0735211292"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors" />
                </div>
            </div>

            <!-- Category & Year (2 cols) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="category">
                        Category <span class="text-rose-500">*</span>
                    </label>
                    <select id="category" name="category" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 transition-colors">
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction" selected>Non-Fiction</option>
                        <option value="science">Science</option>
                        <option value="sci-fi">Sci-Fi</option>
                        <option value="thriller">Thriller</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="classic">Classic</option>
                        <option value="biography">Biography</option>
                        <option value="philosophy">Philosophy</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="year">
                        Publication Year <span class="text-rose-500">*</span>
                    </label>
                    <input type="number" id="year" name="year" required min="1000" max="2099" value="2018"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 transition-colors" />
                </div>
            </div>

            <!-- Publisher & Stock (2 cols) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5"
                        for="publisher">
                        Publisher
                    </label>
                    <input type="text" id="publisher" name="publisher" value="Avery"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="stock">
                        Stock <span class="text-rose-500">*</span>
                    </label>
                    <input type="number" id="stock" name="stock" required min="0" value="45"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 transition-colors" />
                </div>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="description">
                    Description
                </label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors resize-none"
                    placeholder="Brief description of the book...">No matter your goals, Atomic Habits offers a proven framework for improving every day.</textarea>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-between pt-2 border-t border-slate-100 dark:border-slate-800">
                <button type="button"
                    class="px-4 py-2.5 rounded-lg text-sm font-bold text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">delete</span>
                    Delete Book
                </button>
                <div class="flex items-center gap-3">
                    <a href="/manajemen-perpustakaan/menu/management-book/"
                        class="px-6 py-2.5 rounded-lg text-sm font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-primary/20 transition-all">
                        <span class="material-symbols-outlined text-[20px]">save</span>
                        Update Book
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>