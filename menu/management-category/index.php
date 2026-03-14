<?php
include __DIR__ . '/../../koneksi.php';

// pesan & tipe bisa datang dari query string
$pesan = isset($_GET['pesan']) ? $_GET['pesan'] : "";
$tipe  = isset($_GET['tipe']) ? $_GET['tipe'] : "";

// Logika Hapus — jika id ditemukan, lakukan delete dan segera redirect
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $delete = mysqli_query($conn, "DELETE FROM kategori WHERE id = $id");
    if ($delete) {
        header('Location: index.php?pesan=' . urlencode('Kategori Berhasil Dihapus!') . '&tipe=success');
        exit;
    } else {
        header('Location: index.php?pesan=' . urlencode('Gagal Menghapus Kategori!') . '&tipe=error');
        exit;
    }
}

$daftar_kategori = [];
$query = mysqli_query($conn, "SELECT * FROM kategori");
// $result = mysqli_fetch_assoc($query);
while ($data = mysqli_fetch_assoc($query)) {
    $daftar_kategori[] = $data;
}
include __DIR__ . '/../../layouts/layout.php';
?>
<div class="p-2 pb-0">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Category Management</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-1">Manage book categories and organize your library collection.</p>
        </div>
        <a href="/manajemen-perpustakaan/menu/management-category/add.php"
            class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-blue-700/20 transition-all">
            <span class="material-symbols-outlined text-[20px]">add</span>
            Add New Category
        </a>
    </div>
    <!-- Filters -->
    <div
        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col lg:flex-row gap-4">
        <div class="flex-1 relative">
            <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input
                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-blue-700/50 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400"
                placeholder="Search by category name..." type="text" />
        </div>
        <button
            class="px-4 py-2.5 text-slate-500 hover:text-blue-700 dark:hover:text-blue-700 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors flex items-center gap-2 text-sm font-medium">
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
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Category Name</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Total Books</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <!-- Row 1 -->
                    <?php
                    foreach ($daftar_kategori as $kategori) :
                    ?>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-[20px]">book</span>
                                    </div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white"><?= $kategori['nama_kategori'] ?></p>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm text-slate-700 dark:text-slate-300"><?= $kategori['deskripsi'] ?></p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm font-semibold text-slate-900 dark:text-white">45 books</p>
                            </td>
                            <td class="px-6 py-4">
                                <?php if ($kategori['status'] === 'active'): ?>
                                    <span class="bg-green-500 text-white dark:bg-green-900/30 dark:text-green-400 px-3 py-1 rounded-full text-sm font-semibold inline-flex items-center gap-1">
                                        <!-- <span class="w-2 h-2 bg-green-500 rounded-full"></span> -->
                                        Active
                                    </span>
                                <?php else: ?>
                                    <span class="bg-red-500 text-white dark:bg-slate-800 dark:text-slate-400 px-3 py-1 rounded-full text-sm font-semibold inline-flex items-center gap-1">
                                        <!-- <span class="w-2 h-2 bg-slate-400 rounded-full"></span> -->
                                        Inactive
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="/manajemen-perpustakaan/menu/management-category/edit.php?id=<?php echo $kategori['id']; ?>"
                                        class="p-2 text-slate-400 hover:text-blue-700 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </a>
                                    <button type="button" onClick="return konfirmasiHapus(<?php echo $kategori['id']; ?>);" 
                                        class="p-2 text-slate-400 hover:text-rose-500 hover:bg-rose-50 dark:hover:bg-rose-900/20 rounded-lg transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>