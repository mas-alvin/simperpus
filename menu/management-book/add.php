<?php include __DIR__ . '/../../layouts/layout.php'; 
include __DIR__ . '/../../koneksi.php';

if(isset($_POST['tambah'])){
    $nama_buku = $_POST['nama_buku'];

    $foto_buku = $_FILES['foto_buku']['name'];
    $batas = explode('.', $foto_buku);
    $extensi = strtolower(end($batas));
    $ukuran = $_FILES['foto_buku']['size'];
    $error = $_FILES['foto_buku']['error'];
    $tmp = $_FILES['foto_buku']['tmp_name'];

    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori_id = $_POST['kategori_id'];
    $stok = $_POST['stok'];

    if($error === 4){
        $gambar = "default.png";
    }else{
        $format = ['png', 'jpg', 'jpeg'];
        if(!in_array($extensi, $format)){
            $pesan = "Format Gambar Tidak Diizinkan!";
            $tipe  = "error";
            $redirect = 'add.php';
            exit;
        }

        if($ukuran > 2000000){
            $pesan = "Ukuran Gambar Terlalu Besar!";
            $tipe  = "error";
            $redirect = 'add.php';
            exit;
        }

        $nama_gambar_baru = uniqid() . '.' . $extensi;
        move_uploaded_file($tmp, '../../assets/img/book/' . $nama_gambar_baru);
    }
    $tambah_data = mysqli_query($conn, "INSERT INTO buku (nama_buku, foto_buku, pengarang, tahun_terbit, kategori_id, stok)
    VALUES ('$nama_buku', '$nama_gambar_baru', '$pengarang', '$tahun_terbit', '$kategori_id', '$stok')");

    if ($tambah_data) {
        $pesan = "Data Buku Ditambahkan!";
        $tipe  = "success";
        $redirect = 'index.php';
    }else{
        $pesan = "Data Gagal Ditambahkan!";
        $tipe  = "error";
        $redirect = 'add.php';
    }
}

$ambil_kategori = mysqli_query($conn, "SELECT id, nama_kategori FROM kategori WHERE status = 'active'")


?>
<div class="p-2 max-w-2xl">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">
        <a href="/simperpus/menu/management-book/" class="hover:text-blue-700 transition-colors">Books</a>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-slate-900 dark:text-white font-medium">Add New Book</span>
    </div>

    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Add New Book</h2>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Fill in the details to add a new book to the catalog.</p>
    </div>

    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm p-6 space-y-6">
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">

            <!-- Title -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="title">
                    Nama Buku <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="title" name="nama_buku" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                    placeholder="e.g. Atomic Habits" />
            </div>

            <div class="mb-4">
                <label>Cover Buku</label>
                <input type="file" name="foto_buku" class="w-full border p-2" accept="image/*">
                <p class="text-xs text-slate-500 mt-1">Format: JPG, PNG, JPEG (Max 2MB)</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="author">
                    Pengarang <span class="text-rose-500">*</span>
                </label>
                <input type="text" id="author" name="pengarang" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                    placeholder="e.g. James Clear" />
            </div>

            <!-- Category & Year (2 cols) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="category">
                        Kategori <span class="text-rose-500">*</span>
                    </label>
                    <select id="category" name="kategori_id" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 transition-colors">
                        <option value="">Select category...</option>
                        <?php while($kat = mysqli_fetch_assoc($ambil_kategori)) { ?>
                        <option value="<?= $kat['id'] ?>"><?= $kat['nama_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="year">
                        Tahun Terbit <span class="text-rose-500">*</span>
                    </label>
                    <input type="number" id="year" name="tahun_terbit" required min="1000" max="2099"
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                        placeholder="e.g. 2018" />
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="stock">
                    Stok <span class="text-rose-500">*</span>
                </label>
                <input type="number" id="stock" name="stok" required min="0"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors"
                    placeholder="e.g. 10" />
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-3 pt-2 border-t border-slate-100 dark:border-slate-800">
                <a href="/simperpus/menu/management-book/"
                    class="px-6 py-2.5 rounded-lg text-sm font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    Cancel
                </a>
                <button type="submit" name="tambah"
                    class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-blue-700/20 transition-all">
                    <span class="material-symbols-outlined text-[20px]">save</span>
                    Save Book
                </button>
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>