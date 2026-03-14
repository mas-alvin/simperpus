<?php
include __DIR__ . '/../../layouts/layout.php';
include __DIR__ . '../../../koneksi.php';

if (isset($_POST['create'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];

    $query = mysqli_query($conn, "INSERT INTO kategori (nama_kategori, deskripsi, status) VALUES ('$nama_kategori', '$deskripsi', '$status')");
    if ($query) {
        $pesan = "Data Berhasil Ditambahkan!";
        $tipe  = "success";
        $redirect = 'index.php';
    }else{
        $pesan = "Data Gagal Ditambahkan!";
        $tipe  = "error";
        $redirect = '/manajemen-perpustakaan/menu/management-category/add.php';
    }
}
?>
<div class="p-2 max-w-2xl">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">
        <a href="/manajemen-perpustakaan/menu/management-category/" class="hover:text-blue-700 transition-colors">Categories</a>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-slate-900 dark:text-white font-medium">Add New Category</span>
    </div>

    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Add New Category</h2>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Create a new book category to organize your library collection.</p>
    </div>

    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm p-6 space-y-6">
        <form action="" method="POST" class="space-y-6">

            <!-- Category Name -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="name">
                    Category Name <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="name" name="nama_kategori" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                    placeholder="e.g. Science, Fiction, History" />
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="description">
                    Description <span class="text-rose-500">*</span>
                </label>
                <textarea id="description" name="deskripsi" rows="4" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors resize-none"
                    placeholder="Brief description of this category..."></textarea>
            </div>

            <!-- Category Icon (Optional) -->
            <!-- <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="icon">
                    Category Icon <span class="text-slate-400 text-xs">(Optional)</span>
                </label>
                <input type="text" id="icon" name="icon"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                    placeholder="e.g. book, science, history, layers" />
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Use Material Symbols icon names</p>
            </div> -->

            <!-- Color Code (Optional) -->
            <!-- <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="color">
                    Color Code <span class="text-slate-400 text-xs">(Optional)</span>
                </label>
                <div class="flex items-center gap-3">
                    <input type="color" id="color" name="color" value="#5048e5"
                        class="h-10 w-14 px-2 py-2 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg cursor-pointer" />
                    <input type="text" name="color_hex" value="#5048e5"
                        class="flex-1 px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                        placeholder="#5048e5" />
                </div>
            </div> -->

            <!-- Status -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2.5" for="status">
                    Status <span class="text-rose-500">*</span>
                </label>
                <div class="flex items-center gap-4">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="status" value="active" checked
                            class="w-4 h-4 text-blue-700 rounded focus:ring-blue-700" />
                        <span class="text-sm text-slate-700 dark:text-slate-300">Active</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="status" value="nonactive"
                            class="w-4 h-4 text-blue-700 rounded focus:ring-blue-700" />
                        <span class="text-sm text-slate-700 dark:text-slate-300">Inactive</span>
                    </label>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-3 pt-2 border-t border-slate-100 dark:border-slate-800">
                <a href="/manajemen-perpustakaan/menu/management-category/"
                    class="px-6 py-2.5 rounded-lg text-sm font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    Cancel
                </a>
                <button type="submit" name="create"
                    class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-blue-700/20 transition-all">
                    <span class="material-symbols-outlined text-[20px]">save</span>
                    Save Category
                </button>
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>