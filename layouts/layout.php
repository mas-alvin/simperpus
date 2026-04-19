<?php
// session_start();
$currentPath = $_SERVER['PHP_SELF'];

function isActive($path)
{
    global $currentPath;
    return strpos($currentPath, $path) !== false;
}

$base = '/simperpus';

if (isset($_POST['logout'])) {
    $_SESSION = [];

    session_unset();
    session_destroy();

    echo "<script>
            alert('berhasil logout');
            window.location.href='login.php';
    </script>";
    exit();
}

?>
<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Library Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- <link href="../../src/output.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- <link href="../src/output.css" rel="stylesheet"> -->
    <link href="./src/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Transisi sidebar untuk mobile */
        #sidebar {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased font-display">

    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/50 z-20 hidden lg:hidden"></div>

    <div class="flex h-screen overflow-hidden">

        <aside id="sidebar"
            class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-slate-900 border-r border-blue-700/10 flex flex-col z-30 -translate-x-full lg:translate-x-0 lg:static">
            <div class="p-6 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-700 flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">local_library</span>
                    </div>
                    <div>
                        <h1 class="text-slate-900 dark:text-white font-bold text-lg leading-tight">LibAdmin</h1>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Management System</p>
                    </div>
                </div>
                <button id="close-menu" class="lg:hidden text-slate-500">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <nav class="flex-1 px-4 space-y-1 mt-4">
                <?php
                $navItems = [
                    [
                        'label' => 'Dashboard',
                        'icon'  => 'dashboard',
                        'href'  => $base . '/index.php',
                        'match' => '/index.php',
                    ],
                    [
                        'label' => 'Books',
                        'icon'  => 'book',
                        'href'  => $base . '/menu/management-book/',
                        'match' => 'management-book',
                    ],
                    [
                        'label' => 'Categories',
                        'icon'  => 'category',
                        'href'  => $base . '/menu/management-category/',
                        'match' => 'management-category',
                    ],
                    [
                        'label' => 'Members',
                        'icon'  => 'group',
                        'href'  => $base . '/menu/management-member/',
                        'match' => 'management-member',
                    ],
                    [
                        'label' => 'Transactions',
                        'icon'  => 'swap_horiz',
                        'href'  => $base . '/menu/management-transaction/',
                        'match' => 'management-transaction',
                    ],
                    [
                        'label' => 'Reports',
                        'icon'  => 'bar_chart',
                        'href'  => $base . '/menu/management-report/',
                        'match' => 'management-report',
                    ],
                    [
                        'label' => 'Return Book',
                        'icon'  => 'swap_horiz',
                        'href'  => $base . '/menu/return-book/',
                        'match' => 'return-book',
                    ],
                ];

                foreach ($navItems as $item):
                    $active = isActive($item['match']);
                    // Special case: dashboard active only when on index.php at root
                    if ($item['match'] === '/index.php') {
                        $active = (basename($currentPath) === 'index.php' && strpos($currentPath, '/menu/') === false);
                    }
                    $activeClass   = 'bg-blue-700 text-white';
                    $inactiveClass = 'text-slate-600 dark:text-slate-400 hover:bg-blue-700/10 hover:text-blue-700 transition-colors';
                    $class = $active ? $activeClass : $inactiveClass;
                ?>
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg font-medium <?php echo $class; ?>"
                        href="<?php echo htmlspecialchars($item['href']); ?>">
                        <span class="material-symbols-outlined"><?php echo $item['icon']; ?></span>
                        <span><?php echo $item['label']; ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>

            <div class="p-4 border-t border-blue-700/10">
                <div class="flex items-center gap-3 p-2">
                    <div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                        <img alt="Admin"
                            src="https://ui-avatars.com/api/?name=Andi+Wijaya&background=5048e5&color=fff" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900 dark:text-white truncate">Andi Wijaya</p>
                        <p class="text-xs text-slate-500 truncate">Senior Librarian</p>
                    </div>
                    <div>
                        <form action="" method="POST">
                            <button type="sumbit" name="logout">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

            <header
                class="h-16 flex items-center justify-between px-4 lg:px-8 bg-white dark:bg-slate-900 border-b border-blue-700/10 sticky top-0 z-10">
                <div class="flex items-center gap-4 flex-1">
                    <button id="open-menu" class="lg:hidden p-2 text-slate-600 dark:text-slate-300">
                        <span class="material-symbols-outlined">menu</span>
                    </button>

                    <div class="relative w-full max-w-md hidden sm:block">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-blue-700 text-sm text-slate-900 dark:text-white"
                            placeholder="Cari buku..." type="text" />
                    </div>
                </div>

                <div class="flex items-center gap-2 lg:gap-4">
                    <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span
                            class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-4 lg:p-8 space-y-8">