
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilinkon | Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>


<body class="min-h-screen bg-[#f5f5f5] text-[#111111]">
    <div class="min-h-screen w-full bg-[#f5f5f5] px-5 py-5 md:px-10 lg:px-14">

        <!-- header -->
        <header class="mb-9 flex flex-wrap items-center justify-between gap-4">

            <a href="{{ route('admin.dashboard') }}"
               class="text-2xl font-black tracking-tight">
                <span class="text-[#ff5722]"></span>
                CiViLiNK<span class="text-[#ff5722]">ON</span>
            </a>

            <div class="flex items-center gap-3">

                <span id="last-updated" class="hidden text-xs text-gray-500 md:block">
                    Connecting...
                </span>

                
<div class="flex items-center gap-3">

    <!-- Search bar -->
    <form
        id="dashboardSearchForm"
        action="{{ route('admin.reports.index') }}"
        method="GET"
        class="hidden items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2.5 transition-all duration-300"
    >
        <input
            type="text"
            name="search"
            id="dashboardSearchInput"
            placeholder="Search reports..."
            autocomplete="off"
            class="w-40 bg-transparent text-xs outline-none placeholder:text-gray-400 sm:w-52"
        >

        <button
            type="submit"
            aria-label="Submit search"
            class="text-[#ff5722] hover:text-[#e64a19]"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="17"
                 height="17"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m21 21-4.34-4.34"/>
                <circle cx="11" cy="11" r="8"/>
            </svg>
        </button>
    </form>

    <!-- Search and notification buttons -->
    <div class="flex items-center gap-5 rounded-full bg-white px-5 py-3">

        <button
            type="button"
            id="dashboardSearchToggle"
            aria-label="Open search"
            aria-expanded="false"
            class="transition hover:text-[#ff5722]"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="20"
                 height="20"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m21 21-4.34-4.34"/>
                <circle cx="11" cy="11" r="8"/>
            </svg>
        </button>

        <button type="button" aria-label="Notifications">
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="20"
                 height="20"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M10.268 21a2 2 0 0 0 3.464 0"/>
                <path d="M11.68 2.009A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673c-.824-.85-1.678-1.731-2.21-3.348"/>
                <circle cx="18" cy="5" r="3"/>
            </svg>
        </button>

    </div>

</div>


                <div class="flex items-center gap-2 rounded-full border border-[#ff5722] bg-black px-4 py-2 text-sm text-white">
                   

                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ff7043] font-bold">
                        K
                    </div>

                    <span class="font-semibold">Admin Kavya</span>
                    <span class="hidden text-gray-400 sm:inline">Testing</span>
                </div>

            </div>
        </header>

        <!-- main layout -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-[140px_minmax(0,1fr)] lg:gap-6">

            <!-- sidebar -->
        <aside id="sidebarToggle" class="flex min-h-0 flex-col">

            <button id="sidebarToggle"
                    type="button"
                    aria-label="Toggle sidebar"
                    class="mb-4 hidden h-11 w-11 shrink-0 items-center justify-center self-start rounded-full bg-white lg:flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panel-left preview-icon"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/></svg>
            </button>

            <nav class="rounded-2xl bg-white p-3">

                <a href="{{ route('admin.dashboard') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl px-2.5 py-3 text-xs font-semibold bg-[#fff0e9] text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house preview-icon"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    <span class="nav-label">Home</span>
                </a>

                <a href="{{ route('admin.reports.index') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl px-2.5 py-3 text-xs hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text preview-icon"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                    <span class="nav-label">Reports</span>
                </a>

                <a href="{{ route('admin.issue-map') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl hover:bg-[#fff0e9] px-2.5 py-3 text-xs hover:text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map preview-icon"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"/><path d="M15 5.764v15"/><path d="M9 3.236v15"/></svg>
                    <span class="nav-label">Issue Map</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-group preview-icon"><path d="M17 21a5 5 0 00-10 0"/><path d="M22 10.5a3.5 3.5 0 00-5.507-2.868"/><path d="M7.507 7.632A3.5 3.5 0 002 10.5"/><circle cx="12" cy="13" r="3"/><circle cx="18.5" cy="4.5" r="2.5"/><circle cx="5.5" cy="4.5" r="2.5"/></svg>
                    <span class="nav-label">Volunteers</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar preview-icon"><path d="M8 2v3"/><path d="M16 2v3"/><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg>
                    <span class="nav-label">Activities</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sliders-horizontal preview-icon"><path d="M10 5H3"/><path d="M12 19H3"/><path d="M14 3v4"/><path d="M16 17v4"/><path d="M21 12h-9"/><path d="M21 19h-5"/><path d="M21 5h-7"/><path d="M8 10v4"/><path d="M8 12H3"/></svg>
                    <span class="nav-label">Settings</span>
                </a>

            </nav>

            <button type="button"
                    class="mt-auto hidden h-11 w-11 shrink-0 items-center justify-center self-start rounded-full bg-white lg:flex">
                <i data-lucide="circle-help" class="h-5 w-5"></i>
            </button>

        </aside>

            <!-- dashboard content -->
            <main class="min-w-0">

                <!-- greeting -->
                <section class="mb-7">

                    <h2 class="text-3xl font-black tracking-wide md:text-4xl">
                        GOOD MORNING,
                        <span class="text-[#ff5722]">KAVYA</span>
                    </h2>

                    <p class="mt-1 text-sm text-gray-500 md:text-base">
                        Review new reports, coordinate volunteers,
                        and keep every issue moving.
                    </p>

                </section>

                <!-- statictics -->
                <section id="reports" class="mb-4 rounded-2xl bg-white p-3">

                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-3">

                        <!-- total -->
                        <div class="flex min-h-[160px] flex-col justify-between rounded-xl bg-linear-to-br from-[#ff5722] to-[#ffad78] p-5 text-white">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">Total Reports</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white/30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text preview-icon"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></span>
                            </div>

                            <div>
                                <h3 id="total-reports" class="text-3xl font-bold">0</h3>
                                <p class="mt-2 text-sm">All submitted reports</p>
                            </div>

                        </div>

                        <!-- pending -->
                        <div class="flex min-h-[160px] flex-col justify-between rounded-xl bg-[#f6f6f6] p-5">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">Pending Verification</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ffe0d2] text-[#ff5722]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-timer preview-icon"><line x1="10" x2="14" y1="2" y2="2"/><line x1="12" x2="15" y1="14" y2="11"/><circle cx="12" cy="14" r="8"/></svg></span>
                            </div>

                            <div>
                                <h3 id="pending-reports" class="text-3xl font-bold">0</h3>
                                <p class="mt-2 text-sm text-gray-400">
                                    Awaiting verification
                                </p>
                            </div>

                        </div>

                        <!-- in progress -->
                        <div class="flex min-h-[160px] flex-col justify-between rounded-xl bg-[#f6f6f6] p-5">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">In Progress</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ffe0d2] text-[#ff5722]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up preview-icon"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg></span>
                            </div>

                            <div>
                                <h3 id="progress-reports" class="text-3xl font-bold">0</h3>
                                <p class="mt-2 text-sm text-gray-400">
                                    Currently being handled
                                </p>
                            </div>

                        </div>

                        <!-- resolved -->
                        <div class="flex min-h-[160px] flex-col justify-between rounded-xl bg-[#f6f6f6] p-5">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">Resolved</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ffe0d2] text-[#ff5722]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check-corner preview-icon"><path d="M10.5 22H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v6"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="m14 20 2 2 4-4"/></svg></span>
                            </div>

                            <div>
                                <h3 id="resolved-reports" class="text-3xl font-bold">0</h3>
                                <p class="mt-2 text-sm text-gray-400">
                                    Successfully resolved
                                </p>
                            </div>

                        </div>

                        <!-- volunteers -->
                        <div id="volunteers"
                             class="flex min-h-[160px] flex-col justify-between rounded-xl bg-[#f6f6f6] p-5">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">Active Volunteers</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ffe0d2] text-[#ff5722]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-group preview-icon"><path d="M17 21a5 5 0 00-10 0"/><path d="M22 10.5a3.5 3.5 0 00-5.507-2.868"/><path d="M7.507 7.632A3.5 3.5 0 002 10.5"/><circle cx="12" cy="13" r="3"/><circle cx="18.5" cy="4.5" r="2.5"/><circle cx="5.5" cy="4.5" r="2.5"/></svg></span>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-400">
                                    Coming soon
                                </h3>
                                <p class="mt-2 text-sm text-gray-400">
                                    Volunteer database needed
                                </p>
                            </div>

                        </div>

                        <!-- activities -->
                        <div id="activities"
                             class="flex min-h-[160px] flex-col justify-between rounded-xl bg-[#f6f6f6] p-5">

                            <div class="flex items-center justify-between">
                                <p class="font-medium">Ongoing Activities</p>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#ffe0d2] text-[#ff5722]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar preview-icon"><path d="M8 2v3"/><path d="M16 2v3"/><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></span>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-400">
                                    Coming soon
                                </h3>
                                <p class="mt-2 text-sm text-gray-400">
                                    Activity database needed
                                </p>
                            </div>

                        </div>

                    </div>
                </section>

                <!-- report activity -->
                <section class="mb-4 rounded-2xl bg-white p-5 md:p-6">

                    <div class="mb-6 flex items-center justify-between">

                        <div>
                            <h3 class="text-lg font-bold">Report Activity</h3>
                            <p class="mt-1 text-xs text-gray-400">
                                Reports received and resolved throughout the year
                            </p>
                        </div>

                        <span class="rounded-full bg-[#f7f7f7] px-4 py-2 text-xs text-gray-500">
                             Monthly
                        </span>

                    </div>

                    <div class="h-[260px] md:h-[300px]">
                        <canvas id="activityChart"></canvas>
                    </div>

                    <div class="mt-4 flex justify-end gap-5 text-xs text-gray-500">
                        <span>Reports received</span>
                        <span class="text-[#ff5722]">Reports resolved</span>
                    </div>

                </section>

                <!-- categories and dashboard -->
                <section class="grid grid-cols-1 gap-4 xl:grid-cols-2">

                    <!-- issues categories -->
                    <div class="rounded-2xl bg-white p-5 md:p-6">

                        <h3 class="text-lg font-bold">Issue Categories</h3>

                        <p class="mb-7 mt-1 text-xs text-gray-400">
                            Most reported this month
                        </p>

                        <div id="category-list" class="space-y-5">
                            <p class="text-sm text-gray-400">
                                Loading categories...
                            </p>
                        </div>

                    </div>

                    <!-- hotspots -->
                    <div id="hotspots" class="rounded-2xl bg-white p-5 md:p-6">

                        <div class="mb-6 flex items-center justify-between">

                            <div>
                                <h3 class="text-lg font-bold">Hotspot Areas</h3>
                                <p class="mt-1 text-xs text-gray-400">
                                    Locations with the most reports
                                </p>
                            </div>

                            <span class="rounded-full border border-[#ffcfb8] px-4 py-2 text-xs text-[#ff5722]">
                                View map
                            </span>

                        </div>

                        <div id="hotspot-list" class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                            <p class="text-sm text-gray-400">
                                Loading locations...
                            </p>

                        </div>

                    </div>

                </section>

                <!-- foote -->
                <footer class="py-6 text-center text-xs text-gray-400">
                    © {{ date('Y') }} Civilinkon. All rights reserved.
                </footer>

            </main>

        </div>
    </div>
</div>

<script>
    lucide.createIcons();


    // Dashboard search
    const searchToggle = document.getElementById('dashboardSearchToggle');
    const searchForm = document.getElementById('dashboardSearchForm');
    const searchInput = document.getElementById('dashboardSearchInput');

    searchToggle.addEventListener('click', () => {
        const isHidden = searchForm.classList.contains('hidden');

        if (isHidden) {
            searchForm.classList.remove('hidden');
            searchForm.classList.add('flex');

            searchToggle.setAttribute('aria-expanded', 'true');
            searchInput.focus();
        } else {
            searchForm.classList.add('hidden');
            searchForm.classList.remove('flex');

            searchToggle.setAttribute('aria-expanded', 'false');
            searchInput.value = '';
        }
    });

    // sidebar collapse
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainLayout = sidebar.parentElement;
    const sidebarNav = sidebar.querySelector('nav');

    let sidebarCollapsed = false;

    sidebarToggle.addEventListener('click', () => {
        sidebarCollapsed = !sidebarCollapsed;

        // Ubah lebar kolom sidebar
        mainLayout.style.gridTemplateColumns = sidebarCollapsed
            ? '60px minmax(0, 1fr)'
            : '140px minmax(0, 1fr)';

        // Sembunyikan atau tampilkan label menu
        sidebar.querySelectorAll('.nav-label').forEach(label => {
            label.classList.toggle('hidden', sidebarCollapsed);
        });

        // Atur posisi ikon menu
        sidebarNav.querySelectorAll('a').forEach(item => {
            item.classList.toggle('justify-center', sidebarCollapsed);
            item.classList.toggle('px-2.5', !sidebarCollapsed);
            item.classList.toggle('px-0', sidebarCollapsed);
        });

        // atur ukuran tombol collapse
        sidebarToggle.innerHTML = sidebarCollapsed
            ? `<svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                    <path d="M15 3v18"/>
               </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2"/>
                    <path d="M9 3v18"/>
               </svg>`;
    });

    const dataUrl = @json(route('admin.dashboard.data'));

    // chart config
    const ctx = document.getElementById('activityChart');

    const activityChart = new Chart(ctx, {
        type: 'line',

        data: {
            labels: [],
            datasets: [
                {
                    label: 'Reports received',
                    data: [],
                    borderColor: '#bdbdbd',
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    pointRadius: 0,
                    pointHoverRadius: 5,
                    tension: 0.3
                },
                {
                    label: 'Reports resolved',
                    data: [],
                    borderColor: '#ff5722',
                    backgroundColor: 'rgba(255,87,34,0.08)',
                    fill: true,
                    borderWidth: 2.5,
                    pointRadius: 0,
                    pointHoverRadius: 5,
                    tension: 0.3
                }
            ]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: 'index'
            },

            plugins: {
                legend: {
                    display: false
                },

                tooltip: {
                    backgroundColor: '#ffffff',
                    titleColor: '#111111',
                    bodyColor: '#777777',
                    borderColor: '#eeeeee',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: true
                }
            },

            scales: {
                y: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0,
                        color: '#888888'
                    },

                    grid: {
                        color: '#e9e9e9',
                        borderDash: [5, 5]
                    }
                },

                x: {
                    ticks: {
                        color: '#888888'
                    },

                    grid: {
                        display: false
                    }
                }
            }
        }
    });


    // format numbers
    function formatNumber(number) {
        return new Intl.NumberFormat('id-ID').format(number);
    }


    // element
    function createElement(tag, className, text = '') {
        const element = document.createElement(tag);

        element.className = className;
        element.textContent = text;

        return element;
    }


    // update dashboard
    async function updateDashboard() {

        try {
            const response = await fetch(dataUrl, {
                headers: {
                    'Accept': 'application/json'
                },
                cache: 'no-store'
            });

            if (!response.ok) {
                throw new Error('Failed to fetch dashboard data');
            }

            const data = await response.json();


            // update statistics
            document.getElementById('total-reports').textContent =
                formatNumber(data.stats.total);

            document.getElementById('pending-reports').textContent =
                formatNumber(data.stats.pending);

            document.getElementById('progress-reports').textContent =
                formatNumber(data.stats.in_progress);

            document.getElementById('resolved-reports').textContent =
                formatNumber(data.stats.resolved);


            // update chart
            activityChart.data.labels = data.chart.labels;

            activityChart.data.datasets[0].data =
                data.chart.received;

            activityChart.data.datasets[1].data =
                data.chart.resolved;

            activityChart.update('none');


            // update categories
            const categoryList =
                document.getElementById('category-list');

            categoryList.innerHTML = '';

            const maxCategory = Math.max(
                ...data.categories.map(item => Number(item.total)),
                1
            );

            if (data.categories.length === 0) {
                categoryList.appendChild(
                    createElement(
                        'p',
                        'text-sm text-gray-400',
                        'No report data yet.'
                    )
                );
            }

            data.categories.forEach(item => {

                const row = createElement('div', '');

                const name = createElement(
                    'div',
                    'mb-2 flex justify-between text-xs'
                );

                name.append(
                    createElement('span', '', item.category),
                    createElement(
                        'strong',
                        '',
                        formatNumber(item.total)
                    )
                );

                const track = createElement(
                    'div',
                    'h-2 w-full overflow-hidden rounded-full bg-gray-100'
                );

                const bar = createElement(
                    'div',
                    'h-full rounded-full bg-gradient-to-r from-[#ff5722] to-[#ffad72]'
                );

                const percentage =
                    Number(item.total) / maxCategory * 100;

                bar.style.width = percentage + '%';

                track.appendChild(bar);
                row.append(name, track);

                categoryList.appendChild(row);
            });


            // update hostpots
            const hotspotList =
                document.getElementById('hotspot-list');

            hotspotList.innerHTML = '';

            if (data.hotspots.length === 0) {
                hotspotList.appendChild(
                    createElement(
                        'p',
                        'text-sm text-gray-400',
                        'No location data yet.'
                    )
                );
            }

            const hotspotStyles = [
                'bg-[#f5f5f5] text-black',
                'bg-gradient-to-br from-[#ff5722] to-[#ffad78] text-white',
                'bg-gradient-to-br from-[#222222] to-[#555555] text-white',
                'bg-[#f5f5f5] text-black'
            ];

            data.hotspots.forEach((item, index) => {

                const card = createElement(
                    'div',
                    `flex min-h-[145px] flex-col justify-between rounded-xl p-5 ${
                        hotspotStyles[index % hotspotStyles.length]
                    }`
                );

                const label = createElement(
                    'p',
                    'text-xs opacity-70',
                    'Total reports'
                );

                const location = createElement(
                    'p',
                    'mt-1 text-sm font-medium',
                    item.location
                );

                const count = createElement(
                    'h4',
                    'mt-2 text-3xl font-bold',
                    formatNumber(item.total)
                );

                const urgent = createElement(
                    'p',
                    'mt-3 text-xs opacity-80',
                    `${formatNumber(item.high_urgency)} high urgency reports`
                );

                card.append(label, location, count, urgent);

                hotspotList.appendChild(card);
            });


            // update timestamp
            document.getElementById('last-updated').textContent =
                'Updated: ' + data.last_updated;

        } catch (error) {

            console.error('Dashboard error:', error);

            document.getElementById('last-updated').textContent =
                'Connection error';
        }
    }


    // initial load
    updateDashboard();

    // auto refresh
    setInterval(updateDashboard, 5000);

    lucide.createIcons();

</script>
<script src="https://unpkg.com/lucide@latest"></script>

</body>
</html>
