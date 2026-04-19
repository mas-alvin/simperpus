<?php include __DIR__ . '/../../layouts/layout.php'; ?>
<div class="p-2 max-w-2xl">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">
        <a href="/simperpus/menu/management-transaction/"
            class="hover:text-blue-700 transition-colors">Transactions</a>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-slate-900 dark:text-white font-medium">New Transaction</span>
    </div>

    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">New Transaction</h2>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Record a new book borrowing transaction.</p>
    </div>

    <div
        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm p-6 space-y-6">
        <form action="#" method="POST" class="space-y-6">

            <!-- Member -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="member_id">
                    Member <span class="text-rose-500">*</span>
                </label>
                <select id="member_id" name="member_id" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 transition-colors">
                    <option value="">Select member...</option>
                    <option value="1">MBR-2024-001 — Budi Santoso</option>
                    <option value="2">MBR-2024-002 — Sari Indah</option>
                    <option value="3">MBR-2024-003 — Doni Ramadhan</option>
                    <option value="4">MBR-2024-004 — Rina Kartika</option>
                </select>
            </div>

            <!-- Book -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="book_id">
                    Book <span class="text-rose-500">*</span>
                </label>
                <select id="book_id" name="book_id" required
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 transition-colors">
                    <option value="">Select book...</option>
                    <option value="1">The Silent Patient — Alex Michaelides (12 available)</option>
                    <option value="2">Great Expectations — Charles Dickens (3 available)</option>
                    <option value="4">Atomic Habits — James Clear (45 available)</option>
                    <option value="5">Circe — Madeline Miller (8 available)</option>
                </select>
            </div>

            <!-- Borrow Date & Due Date -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5"
                        for="borrow_date">
                        Borrow Date <span class="text-rose-500">*</span>
                    </label>
                    <input type="date" id="borrow_date" name="borrow_date" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 transition-colors" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="due_date">
                        Due Date <span class="text-rose-500">*</span>
                    </label>
                    <input type="date" id="due_date" name="due_date" required
                        class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 transition-colors" />
                </div>
            </div>

            <!-- Notes -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1.5" for="notes">
                    Notes
                </label>
                <textarea id="notes" name="notes" rows="3"
                    class="w-full px-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-blue-700/50 focus:border-blue-700 text-sm text-slate-900 dark:text-slate-100 placeholder:text-slate-400 transition-colors resize-none"
                    placeholder="Additional notes..."></textarea>
            </div>

            <!-- Info Box -->
            <div class="flex items-start gap-3 p-4 bg-blue-700/5 rounded-lg border border-blue-700/15">
                <span class="material-symbols-outlined text-blue-700 text-[20px] mt-0.5">info</span>
                <p class="text-sm text-slate-600 dark:text-slate-400">Standard loan period is <strong>14 days</strong>.
                    Late returns will incur a fine of <strong>Rp 1,000/day</strong>.</p>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-3 pt-2 border-t border-slate-100 dark:border-slate-800">
                <a href="/simperpus/menu/management-transaction/"
                    class="px-6 py-2.5 rounded-lg text-sm font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm inline-flex items-center gap-2 shadow-lg shadow-blue-700/20 transition-all">
                    <span class="material-symbols-outlined text-[20px]">save</span>
                    Create Transaction
                </button>
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../../layouts/footer.php'; ?>