<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Library Management System - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#5048e5",
                    "background-light": "#f6f6f8",
                    "background-dark": "#121121",
                },
                fontFamily: {
                    "display": ["Inter", "sans-serif"]
                },
                borderRadius: {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
            },
        },
    }
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .bg-mesh {
        background-color: #f6f6f8;
        background-image: radial-gradient(at 0% 0%, rgba(80, 72, 229, 0.05) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(80, 72, 229, 0.05) 0px, transparent 50%);
    }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col">
    <div class="relative flex min-h-screen w-full flex-col items-center justify-center bg-mesh px-4">
        <!-- Header / Logo Area -->
        <div class="mb-8 flex flex-col items-center gap-2">
            <div
                class="flex items-center justify-center w-12 h-12 rounded-xl bg-primary text-white shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined text-3xl">auto_stories</span>
            </div>
            <h1 class="text-slate-900 dark:text-slate-100 text-2xl font-bold tracking-tight mt-4">Library Admin</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Welcome back! Please enter your details.</p>
        </div>
        <!-- Login Card -->
        <div
            class="w-full max-w-[440px] bg-white dark:bg-slate-900/50 backdrop-blur-sm rounded-xl border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden">
            <div class="p-8">
                <form action="#" class="space-y-5" method="POST">
                    <!-- username Input -->
                    <div class="space-y-2">
                        <label
                            class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="username">
                            username Address
                        </label>
                        <div class="relative">
                            <input
                                class="flex h-12 w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-all"
                                id="username" name="username" placeholder="admin@library.com" type="text" />
                        </div>
                    </div>
                    <!-- Password Input -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-none"
                                for="password">
                                Password
                            </label>
                        </div>
                        <div class="relative">
                            <input
                                class="flex h-12 w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 transition-all"
                                id="password" name="password" placeholder="••••••••" type="password" />
                            <button
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Validation State Example (Hidden by default, shown for failure) -->
                    <!-- To show error state: add 'border-red-500 focus-visible:ring-red-500' to input above and unhide this div -->
                    <div class="hidden flex items-center gap-2 text-red-500 text-xs font-medium">
                        <span class="material-symbols-outlined text-sm">error</span>
                        Invalid username or password. Please try again.
                    </div>
                    <!-- Sign In Button -->
                    <button
                        class="inline-flex items-center justify-center rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-white hover:bg-primary/90 h-12 px-4 py-2 w-full shadow-md shadow-primary/10"
                        type="submit">
                        Sign In
                    </button>
                </form>
                <div class="mt-6 flex flex-col items-center gap-4">
                    <a class="text-sm font-medium text-primary hover:underline underline-offset-4" href="#">
                        Forgot password?
                    </a>
                </div>
            </div>
            <!-- Card Footer Decor -->
            <div class="border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/20 px-8 py-4">
                <p class="text-center text-xs text-slate-500 dark:text-slate-500">
                    Protected by Library System Security.
                    <a class="underline hover:text-slate-700 dark:hover:text-slate-300" href="#">Terms of Service</a>
                </p>
            </div>
        </div>
        <!-- System Version Info -->
        <div class="mt-8 text-center">
            <p class="text-slate-400 text-[11px] uppercase tracking-widest font-semibold">
                LMS Enterprise v2.4.0
            </p>
        </div>
    </div>
    <!-- Background Pattern Image (Abstract Gradient) -->
    <div class="fixed inset-0 -z-10 h-full w-full pointer-events-none overflow-hidden">
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] rounded-full bg-primary/5 blur-3xl"
            data-alt="Subtle purple gradient orb in background"></div>
        <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[600px] h-[600px] rounded-full bg-primary/5 blur-3xl"
            data-alt="Subtle indigo gradient orb in background"></div>
    </div>
</body>

</html>