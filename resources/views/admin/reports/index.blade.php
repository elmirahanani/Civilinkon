
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | Civilinkon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-dvh bg-[#f7f7f7] text-[#171717] lg:h-dvh lg:overflow-hidden">

<div class="flex min-h-dvh w-full flex-col lg:h-full lg:min-h-0">

    <!-- HEADER -->
    <header class="flex h-[82px] shrink-0 items-center justify-between px-5 md:px-8 lg:px-12">

        <a href="{{ route('admin.dashboard') }}"
           class="text-[22px] font-black tracking-tight">
            CiViLiNK<span class="text-[#ff5722]">ON</span>
        </a>

        <div class="flex items-center gap-3">

            <!-- Header icons -->
            <div class="flex items-center gap-5 rounded-full bg-white px-5 py-3">
                <button type="button" aria-label="Search">
                    <i data-lucide="search" class="h-4 w-4"></i>
                </button>

                <button type="button" aria-label="Notifications">
                    <i data-lucide="bell" class="h-4 w-4"></i>
                </button>

                <button type="button" aria-label="Information">
                    <i data-lucide="info" class="h-4 w-4"></i>
                </button>
            </div>

            <!-- Admin profile -->
            <div class="flex items-center gap-2 rounded-full bg-black py-1.5 pl-2 pr-4 text-white">
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#ff7043] font-bold">
                    K
                </div>

                <div class="hidden sm:block">
                    <p class="text-xs font-semibold">Admin Kavya</p>
                    <p class="text-[10px] text-gray-400">Administrator</p>
                </div>
            </div>

        </div>
    </header>


    <!-- MAIN LAYOUT -->
    <div class="grid flex-1 grid-cols-1 gap-5 px-5 pb-5 md:px-8 lg:min-h-0 lg:grid-cols-[155px_minmax(0,1fr)] lg:gap-7 lg:px-12 lg:pb-6">


        <!-- SIDEBAR -->
        <aside class="flex flex-col lg:min-h-0">

            <!-- Collapse icon -->
            <div class="mb-4 hidden lg:block">
                <button type="button"
                        class="flex h-11 w-11 items-center justify-center rounded-full bg-white">
                    <i data-lucide="panel-left" class="h-5 w-5"></i>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="rounded-2xl bg-white p-3">

                <a href="{{ route('admin.dashboard') }}"
                   class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="house" class="h-[17px] w-[17px]"></i>
                    Home
                </a>

                <a href="{{ route('admin.reports.index') }}"
                   class="mb-2 flex items-center gap-3 rounded-xl bg-[#fff0e9] px-3 py-3 text-sm font-semibold text-[#ff5722]">
                    <i data-lucide="file-text" class="h-[17px] w-[17px]"></i>
                    Reports
                </a>

                <a href="{{ route('admin.issue-map') }}"
                   class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="map" class="h-[17px] w-[17px]"></i>
                    Issue Map
                </a>

                <div class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="users" class="h-[17px] w-[17px]"></i>
                    Volunteers
                </div>

                <div class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="calendar-days" class="h-[17px] w-[17px]"></i>
                    Activities
                </div>

                <div class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="sliders-horizontal" class="h-[17px] w-[17px]"></i>
                    Settings
                </div>

            </nav>

            <!-- Help -->
            <div class="mt-auto hidden pt-5 lg:block">
                <button type="button"
                        class="flex h-11 w-11 items-center justify-center rounded-full bg-white">
                    <i data-lucide="circle-help" class="h-5 w-5"></i>
                </button>
            </div>

        </aside>


        <!-- REPORT CONTENT -->
        <main class="flex min-w-0 flex-col lg:min-h-0">


            <!-- PAGE TITLE -->
            <section class="mb-5 shrink-0">

                <h1 class="text-[27px] font-bold uppercase tracking-[0.04em]">
                    Reports
                </h1>

                <p class="mt-1 text-sm text-gray-400">
                    Verify, route, and track every incoming report.
                </p>

            </section>


            <!-- SEARCH AND FILTER -->
            <form action="{{ route('admin.reports.index') }}"
                  method="GET"
                  id="filterForm"
                  class="mb-4 flex shrink-0 flex-col gap-2 rounded-full bg-white p-1.5 md:flex-row">

                <!-- Search -->
                <div class="relative min-w-0 flex-1">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search reports..."
                        class="h-10 w-full rounded-full bg-[#f4f4f4] px-5 pr-10 text-xs outline-none transition focus:ring-1 focus:ring-[#ff5722]">

                    <button type="submit"
                            aria-label="Search reports"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500">
                        <i data-lucide="search" class="h-4 w-4"></i>
                    </button>

                </div>


                <!-- Category -->
                <select name="category"
                        class="h-10 min-w-0 flex-1 rounded-full bg-[#f4f4f4] px-4 text-xs outline-none focus:ring-1 focus:ring-[#ff5722]"
                        onchange="this.form.submit()">

                    <option value="">All Categories</option>

                    @foreach($categories as $category)
                        <option value="{{ $category }}"
                            @selected(request('category') == $category)>
                            {{ $category }}
                        </option>
                    @endforeach

                </select>


                <!-- Status -->
                <select name="status"
                        class="h-10 min-w-0 flex-1 rounded-full bg-[#f4f4f4] px-4 text-xs outline-none focus:ring-1 focus:ring-[#ff5722]"
                        onchange="this.form.submit()">

                    <option value="">All Statuses</option>
                    <option value="submitted" @selected(request('status') == 'submitted')>
                        Pending
                    </option>
                    <option value="verified" @selected(request('status') == 'verified')>
                        Under Review
                    </option>
                    <option value="in_progress" @selected(request('status') == 'in_progress')>
                        In Progress
                    </option>
                    <option value="resolved" @selected(request('status') == 'resolved')>
                        Resolved
                    </option>
                    <option value="rejected" @selected(request('status') == 'rejected')>
                        Rejected
                    </option>

                </select>


                <!-- Priority -->
                <select name="priority"
                        class="h-10 min-w-0 flex-1 rounded-full bg-[#f4f4f4] px-4 text-xs outline-none focus:ring-1 focus:ring-[#ff5722]"
                        onchange="this.form.submit()">

                    <option value="">All Priorities</option>
                    <option value="high" @selected(request('priority') == 'high')>
                        High
                    </option>
                    <option value="medium" @selected(request('priority') == 'medium')>
                        Medium
                    </option>
                    <option value="low" @selected(request('priority') == 'low')>
                        Low
                    </option>

                </select>

            </form>


            <!-- REPORT TABLE CARD -->
            <section class="flex flex-col overflow-hidden rounded-2xl bg-white lg:min-h-0 lg:flex-1">


                <!-- TABLE TOP INFO -->
                <div class="flex shrink-0 items-center justify-between border-b border-gray-100 px-5 py-3.5">

                    <p class="text-xs font-medium">
                        Showing
                        <span class="font-bold">{{ $reports->count() }}</span>
                        of
                        <span class="font-bold text-[#ff5722]">{{ $reports->total() }}</span>
                        recent reports
                    </p>

                    <button type="button"
                            onclick="window.location.reload()"
                            class="flex items-center gap-1.5 text-xs text-gray-500 transition hover:text-[#ff5722]">
                        <i data-lucide="refresh-cw" class="h-3.5 w-3.5"></i>
                        Refresh
                    </button>

                </div>


                <!-- SELECT ALL -->
                <div class="flex shrink-0 items-center justify-between px-5 py-2.5">

                    <label class="flex cursor-pointer items-center gap-2 text-[11px] text-gray-400">
                        <input type="checkbox"
                               id="selectAll"
                               class="h-3.5 w-3.5 rounded accent-[#ff5722]">
                        Select all reports
                    </label>

                    <span id="selectedCount" class="text-[11px] text-gray-400">
                        0 selected
                    </span>

                </div>


                <!-- TABLE SCROLL AREA -->
                <div class="min-h-[300px] overflow-auto lg:min-h-0 lg:flex-1">

                    <table class="w-full min-w-[850px] table-fixed text-left">

                        <thead class="sticky top-0 z-10 bg-[#fafafa] text-[10px] font-semibold uppercase tracking-wide text-gray-400">

                            <tr>
                                <th class="w-[4%] px-4 py-3"></th>
                                <th class="w-[10%] px-2 py-3">Report ID</th>
                                <th class="w-[16%] px-2 py-3">Issue</th>
                                <th class="w-[17%] px-2 py-3">Category</th>
                                <th class="w-[17%] px-2 py-3">Location & Date</th>
                                <th class="w-[11%] px-2 py-3">Priority</th>
                                <th class="w-[15%] px-2 py-3">Status</th>
                                <th class="w-[10%] px-2 py-3">Action</th>
                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100 text-[11px]">

                            @forelse($reports as $report)

                                @php
                                    $statusLabels = [
                                        'submitted' => 'PENDING',
                                        'verified' => 'UNDER REVIEW',
                                        'in_progress' => 'IN PROGRESS',
                                        'resolved' => 'RESOLVED',
                                        'rejected' => 'REJECTED',
                                    ];

                                    $statusStyles = [
                                        'submitted' => 'bg-[#9a7900] text-white',
                                        'verified' => 'bg-[#07518b] text-white',
                                        'in_progress' => 'bg-[#8c3100] text-white',
                                        'resolved' => 'bg-[#08743b] text-white',
                                        'rejected' => 'bg-[#b91c1c] text-white',
                                    ];

                                    $priorityStyles = [
                                        'high' => 'bg-[#ffe9e9] text-[#f04444]',
                                        'medium' => 'bg-[#fff6d9] text-[#d99b00]',
                                        'low' => 'bg-[#e8f8ed] text-[#42ad65]',
                                    ];
                                @endphp

                                <tr class="transition hover:bg-[#fffaf7]">

                                    <!-- Checkbox -->
                                    <td class="px-4 py-4">
                                        <input type="checkbox"
                                               class="report-checkbox h-3.5 w-3.5 rounded accent-[#ff5722]">
                                    </td>

                                    <!-- Report ID -->
                                    <td class="px-2 py-4 font-bold text-[#ff5722]">
                                        {{ $report->tracking_code ?: 'CL-' . $report->id }}
                                    </td>

                                    <!-- Issue -->
                                    <td class="px-2 py-4">
                                        <p class="max-w-[150px] leading-[1.5]">
                                            {{ $report->title }}
                                        </p>
                                    </td>

                                    <!-- Category -->
                                    <td class="px-2 py-4 leading-[1.5]">
                                        {{ $report->category }}
                                    </td>

                                    <!-- Location and date -->
                                    <td class="px-2 py-4">
                                        <p class="leading-[1.5]">
                                            {{ $report->location }}
                                        </p>

                                        <p class="mt-0.5 text-[#ff5722]">
                                            {{ $report->created_at?->format('M d') }}
                                        </p>
                                    </td>

                                    <!-- Priority -->
                                    <td class="px-2 py-4">
                                        <span class="inline-flex min-w-[65px] justify-center rounded-full px-3 py-1 text-[10px] font-medium {{ $priorityStyles[$report->urgency] ?? 'bg-gray-100 text-gray-600' }}">
                                            {{ ucfirst($report->urgency) }}
                                        </span>
                                    </td>

                                    <!-- Status -->
                                    <td class="px-2 py-4">
                                        <span class="inline-flex min-w-[90px] justify-center whitespace-nowrap rounded-full px-2.5 py-1.5 text-[9px] font-semibold {{ $statusStyles[$report->status] ?? 'bg-gray-100 text-gray-600' }}">
                                            {{ $statusLabels[$report->status] ?? strtoupper($report->status) }}
                                        </span>
                                    </td>

                                    <!-- Action -->
                                    <td class="px-2 py-4">
                                        <a href="{{ route('admin.reports.show', $report) }}"
                                           class="inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-1.5 text-[10px] font-medium transition hover:border-[#ff5722] hover:bg-[#ff5722] hover:text-white">
                                            View
                                        </a>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="8" class="px-5 py-20 text-center">

                                        <div class="flex flex-col items-center gap-3">

                                            <i data-lucide="file-search"
                                               class="h-10 w-10 text-gray-300"></i>

                                            <p class="text-sm font-semibold text-gray-600">
                                                No reports found
                                            </p>

                                            <p class="text-xs text-gray-400">
                                                Try changing your search or filters.
                                            </p>

                                            <a href="{{ route('admin.reports.index') }}"
                                               class="mt-1 text-xs font-semibold text-[#ff5722] hover:underline">
                                                Clear filters
                                            </a>

                                        </div>

                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="flex shrink-0 flex-wrap items-center justify-between gap-3 border-t border-gray-100 px-5 py-3">

                    <p class="text-[11px] text-gray-400">
                        Showing
                        {{ $reports->firstItem() ?? 0 }}
                        to
                        {{ $reports->lastItem() ?? 0 }}
                        of
                        {{ $reports->total() }} reports
                    </p>

                    <div class="text-xs">
                        {{ $reports->links() }}
                    </div>

                </div>

            </section>


            <!-- FOOTER -->
            <footer class="shrink-0 py-4 text-center text-[10px] text-gray-400">
                © {{ date('Y') }} Civilinkon. All rights reserved.
            </footer>

        </main>

    </div>
</div>


<!-- JAVASCRIPT -->
<script>
    lucide.createIcons();

    // Select all reports
    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('.report-checkbox');
    const selectedCount = document.getElementById('selectedCount');

    function updateSelectedCount() {
        const checked = document.querySelectorAll('.report-checkbox:checked').length;

        selectedCount.textContent = checked + ' selected';

        selectAll.checked =
            checkboxes.length > 0 && checked === checkboxes.length;

        selectAll.indeterminate =
            checked > 0 && checked < checkboxes.length;
    }

    selectAll.addEventListener('change', function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });

        updateSelectedCount();
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectedCount);
    });


    // Auto refresh setiap 15 detik
    // Tidak refresh saat pengguna sedang mengetik atau memilih filter.
    setInterval(() => {
        const activeElement = document.activeElement;

        if (
            activeElement?.tagName === 'INPUT' ||
            activeElement?.tagName === 'SELECT'
        ) {
            return;
        }

        window.location.reload();
    }, 15000);
</script>

</body>
</html>
