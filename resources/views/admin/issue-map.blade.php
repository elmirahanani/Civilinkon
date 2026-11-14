<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Map | Civilinkon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    >

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        #issueMap {
            width: 100%;
            height: 100%;
            min-height: 300px;
            background: #e8e8ec;
            z-index: 1;
        }

        .leaflet-container {
            font-family: inherit;
        }

        .map-marker {
            border: 2px solid white;
            border-radius: 50%;
            box-shadow: 0 2px 8px #0003;
        }

        .tab-button {
            transition: all .2s ease;
        }

        .tab-button.active {
            background: linear-gradient(110deg, #ff7043, #ff9367);
            color: white;
            box-shadow: 0 2px 7px #ff704355;
        }

        .attention-item:hover {
            background: #fff7f2;
        }

        @media (max-width: 1023px) {
            #issueMap {
                min-height: 430px;
            }
        }
    </style>
</head>

<body class="h-dvh overflow-hidden bg-[#f7f7f7] text-[#171717]">

<div class="flex h-full w-full flex-col overflow-hidden">

    
<!-- header -->
<header class="relative z-[1000] flex h-[76px] shrink-0 items-center justify-between px-5 md:px-8 lg:px-12">

    <a href="{{ route('admin.dashboard') }}"
       class="text-[21px] font-black tracking-tight">
        CiViLiNK<span class="text-[#ff5722]">ON</span>
    </a>

    <div class="flex items-center gap-3">

        <div class="flex items-center gap-5 rounded-full bg-white px-5 py-3">

            <button
                type="button"
                id="searchToggle"
                aria-label="Search"
                aria-expanded="false"
                class="transition hover:text-[#ff5722]">
                <i data-lucide="search" class="h-4 w-4"></i>
            </button>

            <button type="button" aria-label="Notifications">
                <i data-lucide="bell" class="h-4 w-4"></i>
            </button>

        </div>

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

    <!-- Search bar -->
    <div id="searchPanel"
         class="absolute right-5 top-[65px] hidden w-[calc(100vw-40px)] max-w-[380px] rounded-2xl border border-gray-100 bg-white p-3 shadow-xl md:right-8 lg:right-12">

        <div class="flex items-center gap-2 rounded-xl border border-gray-200 px-3 py-2.5 focus-within:border-[#ff5722]">

            <i data-lucide="search" class="h-4 w-4 shrink-0 text-gray-400"></i>

            <input
                type="text"
                id="mapSearchInput"
                placeholder="Search ID, title, category, location..."
                autocomplete="off"
                class="w-full bg-transparent text-xs outline-none placeholder:text-gray-400">

            <button
                type="button"
                id="clearSearch"
                aria-label="Clear search"
                class="hidden shrink-0 text-gray-400 hover:text-[#ff5722]">
                <i data-lucide="x" class="h-4 w-4"></i>
            </button>

        </div>

        <p id="searchResultInfo" class="mt-2 px-1 text-[10px] text-gray-400">
            Search reports across Jabodetabek
        </p>

    </div>

</header>



    <!-- main layout -->
    <div class="grid min-h-0 flex-1 grid-cols-1 gap-5 px-5 pb-5 md:px-8 lg:grid-cols-[135px_minmax(0,1fr)] lg:gap-7 lg:px-12">


        <!-- sidebar -->
        <aside id="sidebar" class="flex min-h-0 flex-col">

            <button id="sidebarToggle"
                    type="button"
                    aria-label="Toggle sidebar"
                    class="mb-4 hidden h-11 w-11 shrink-0 items-center justify-center self-start rounded-full bg-white lg:flex">
                <i data-lucide="panel-left" class="h-5 w-5"></i>
            </button>

            <nav class="rounded-2xl bg-white p-3">

                <a href="{{ route('admin.dashboard') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl px-2.5 py-3 text-xs hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="house" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Home</span>
                </a>

                <a href="{{ route('admin.reports.index') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl px-2.5 py-3 text-xs hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="file-text" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Reports</span>
                </a>

                <a href="{{ route('admin.issue-map') }}"
                   class="mb-1 flex items-center gap-2.5 rounded-xl bg-[#fff0e9] px-2.5 py-3 text-xs font-semibold text-[#ff5722]">
                    <i data-lucide="map" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Issue Map</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="users" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Volunteers</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="calendar-days" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Activities</span>
                </a>

                <a href="" class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm transition hover:bg-[#fff0e9] hover:text-[#ff5722]">
                    <i data-lucide="sliders-horizontal" class="h-4 w-4 shrink-0"></i>
                    <span class="nav-label">Settings</span>
                </a>

            </nav>

            <button type="button"
                    class="mt-auto hidden h-11 w-11 shrink-0 items-center justify-center self-start rounded-full bg-white lg:flex">
                <i data-lucide="circle-help" class="h-5 w-5"></i>
            </button>

        </aside>


        <!-- page content -->
        <main class="flex min-h-0 min-w-0 flex-col overflow-y-auto lg:overflow-hidden">

            <!-- title -->
            <section class="mb-5 shrink-0">

                <h1 class="text-[26px] font-bold uppercase tracking-wide">
                    Issue Map
                </h1>

                <p class="mt-1 text-xs text-gray-400">
                    See where problems are clustering across the city.
                </p>

            </section>


            <!-- status tabs -->
            <div class="mb-5 flex w-full max-w-[530px] shrink-0 items-center gap-1 rounded-full bg-black p-1">

                <button type="button"
                        data-status="all"
                        class="tab-button active flex-1 rounded-full px-2 py-2 text-[10px] text-white">
                    All Issue
                </button>

                <button type="button"
                        data-status="submitted"
                        class="tab-button flex-1 rounded-full px-2 py-2 text-[10px] text-gray-300">
                    Needs Verification
                </button>

                <button type="button"
                        data-status="in_progress"
                        class="tab-button flex-1 rounded-full px-2 py-2 text-[10px] text-gray-300">
                    In Progress
                </button>

                <button type="button"
                        data-status="resolved"
                        class="tab-button flex-1 rounded-full px-2 py-2 text-[10px] text-gray-300">
                    Resolved
                </button>

            </div>


            <!-- map and attention panel -->
            <section class="grid min-h-[500px] flex-1 grid-cols-1 gap-3 pb-2 lg:min-h-0 lg:grid-cols-[minmax(0,1fr)_190px]">


                <!-- map -->
                <div class="relative min-h-[430px] overflow-hidden rounded-xl bg-[#e8e8ec] lg:min-h-0">

                    <div id="issueMap"></div>

                    <!-- map count -->
                    <div class="absolute bottom-3 left-3 z-[500] rounded-full bg-white px-3 py-1.5 text-[9px] shadow">
                        <span id="mapCount" class="font-bold text-[#ff5722]">0</span>
                        Issues shown
                    </div>

                    <!-- map loading -->
                    <div id="mapLoading"
                         class="absolute left-1/2 top-3 z-[500] -translate-x-1/2 rounded-full bg-white px-4 py-2 text-[10px] text-gray-500 shadow">
                        Loading reports...
                    </div>

                </div>


                <!-- meeds attention -->
                <aside class="flex min-h-[300px] flex-col rounded-xl bg-white p-4 lg:min-h-0">

                    <h2 class="text-xs font-bold">
                        Needs Attention
                    </h2>

                    <p class="mt-1 text-[9px] text-gray-400">
                        Areas with the most open reports
                    </p>

                    <div id="attentionList"
                         class="mt-4 flex-1 space-y-1 overflow-y-auto">

                        <p class="py-5 text-center text-[10px] text-gray-400">
                            Loading locations...
                        </p>

                    </div>

                    <!-- legend -->
                    <div class="mt-4 flex flex-wrap items-center gap-x-2 gap-y-2 border-t border-gray-100 pt-3 text-[9px] text-gray-400">

                        <span class="flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>
                            High
                        </span>

                        <span class="flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-yellow-400"></span>
                            Medium
                        </span>

                        <span class="flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                            Low
                        </span>

                        <span class="flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            Not sure
                        </span>

                    </div>

                    <p id="lastUpdated" class="mt-3 text-[8px] text-gray-400">
                        Waiting for data
                    </p>

                </aside>

            </section>

        </main>

    </div>
</div>


<!-- leaflet map -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>

    lucide.createIcons();

    // sidebar collpse
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainLayout = sidebar.parentElement;

    let sidebarCollapsed = false;

    sidebarToggle.addEventListener('click', () => {
        sidebarCollapsed = !sidebarCollapsed;

        mainLayout.style.gridTemplateColumns = sidebarCollapsed
            ? '60px minmax(0, 1fr)'
            : '135px minmax(0, 1fr)';

        sidebar.querySelectorAll('.nav-label').forEach(label => {
            label.classList.toggle('hidden', sidebarCollapsed);
        });

        sidebar.querySelectorAll('nav a, nav div').forEach(item => {
            item.classList.toggle('justify-center', sidebarCollapsed);
        });
    });


    // jabodetabek map
    const jabodetabekBounds = L.latLngBounds(
        [-6.95, 106.25],
        [-5.85, 107.20]
    );

    const map = L.map('issueMap', {
        center: [-6.35, 106.75],
        zoom: 9,
        minZoom: 8,
        maxZoom: 17,
        maxBounds: jabodetabekBounds,
        maxBoundsViscosity: 1
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors',
        noWrap: true
    }).addTo(map);

    const markerLayer = L.layerGroup().addTo(map);

    const bounds = jabodetabekBounds;

    let allReports = [];
    let activeStatus = 'all';

    const mapCount = document.getElementById('mapCount');
    const attentionList = document.getElementById('attentionList');
    const mapLoading = document.getElementById('mapLoading');
    const lastUpdated = document.getElementById('lastUpdated');

    const dataUrl = @json(route('admin.issue-map.data'));


    // property color
    function getPriorityColor(priority) {
        switch (priority) {
            case 'high':
                return '#ef4444';

            case 'medium':
                return '#eab308';

            case 'low':
                return '#22c55e';

            default:
                return '#9ca3af';
        }
    }

    // GEOCODING
    // mengubah teks lokasi menjadi koordinat.
    // hasil disimpan di localStorage agar tidak
    // perlu meminta koordinat berulang kali.
    const locationCacheKey = 'civilinkon_issue_map_locations';

    function getLocationCache() {
        try {
            return JSON.parse(localStorage.getItem(locationCacheKey) || '{}');
        } catch {
            return {};
        }
    }

    function saveLocationCache(cache) {
        localStorage.setItem(locationCacheKey, JSON.stringify(cache));
    }

    function isInsideJabodetabek(lat, lon) {
        return bounds.contains([lat, lon]);
    }

    const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));

    async function geocodeLocation(location) {
        const cache = getLocationCache();
        const key = location.trim().toLowerCase();

        if (Object.prototype.hasOwnProperty.call(cache, key)) {
            return cache[key];
        }

        const params = new URLSearchParams({
            format: 'jsonv2',
            q: location + ', Jabodetabek, Indonesia',
            countrycodes: 'id',
            viewbox: '106.25,-5.85,107.20,-6.95',
            bounded: '1',
            limit: '1'
        });

        try {
            const response = await fetch(
                'https://nominatim.openstreetmap.org/search?' + params
            );

            if (!response.ok) {
                return null;
            }

            const results = await response.json();

            if (!results.length) {
                cache[key] = null;
                saveLocationCache(cache);
                return null;
            }

            const lat = Number(results[0].lat);
            const lon = Number(results[0].lon);

            const coordinates = isInsideJabodetabek(lat, lon)
                ? { lat, lon }
                : null;

            cache[key] = coordinates;
            saveLocationCache(cache);

            return coordinates;

        } catch (error) {
            console.error('Geocoding error:', error);
            return null;
        }
    }


    
// SEARCH ELEMENTS
const searchToggle = document.getElementById('searchToggle');
const searchPanel = document.getElementById('searchPanel');
const mapSearchInput = document.getElementById('mapSearchInput');
const clearSearch = document.getElementById('clearSearch');
const searchResultInfo = document.getElementById('searchResultInfo');

let searchQuery = '';
let searchTimeout = null;

// Membuka dan menutup search bar
searchToggle.addEventListener('click', () => {
    const isHidden = searchPanel.classList.contains('hidden');

    searchPanel.classList.toggle('hidden');

    searchToggle.setAttribute('aria-expanded', String(isHidden));

    if (isHidden) {
        setTimeout(() => mapSearchInput.focus(), 100);
    }
});

// Menutup search dengan Escape
mapSearchInput.addEventListener('keydown', event => {
    if (event.key === 'Escape') {
        searchPanel.classList.add('hidden');
        searchToggle.setAttribute('aria-expanded', 'false');
        searchToggle.focus();
    }
});

// menghapus pencarian
clearSearch.addEventListener('click', () => {
    mapSearchInput.value = '';
    searchQuery = '';

    clearSearch.classList.add('hidden');

    updateSearchResults();
});

// memproses input pencarian
mapSearchInput.addEventListener('input', () => {
    searchQuery = mapSearchInput.value.trim().toLowerCase();

    clearSearch.classList.toggle('hidden', !searchQuery);

    clearTimeout(searchTimeout);

    searchTimeout = setTimeout(() => {
        updateSearchResults();
    }, 300);
});

// filter berdasarkan status dan kata kunci
function getFilteredReports() {

    let reports = allReports;

    // filter status
    if (activeStatus !== 'all') {
        reports = reports.filter(report =>
            report.status === activeStatus
        );
    }

    // filter search
    if (searchQuery) {
        reports = reports.filter(report => {

            const searchableText = [
                report.id,
                report.title,
                report.category,
                report.location,
                report.tracking_code,
                report.description
            ]
                .filter(value => value !== null && value !== undefined)
                .join(' ')
                .toLowerCase();

            return searchableText.includes(searchQuery);
        });
    }

    return reports;
}

// memperbarui peta dan daftar lokasi
async function updateSearchResults() {

    mapLoading.textContent = 'Searching reports...';
    mapLoading.classList.remove('hidden');

    await renderMap();

    const total = getFilteredReports().length;

    searchResultInfo.textContent = searchQuery
        ? `${total} matching reports found`
        : 'Search reports across Jabodetabek';
}



    // marker group
    function createPopup(report) {
        const wrapper = document.createElement('div');

        const title = document.createElement('strong');
        title.textContent = report.title || 'Untitled report';

        const location = document.createElement('p');
        location.textContent = report.location || '-';

        const category = document.createElement('p');
        category.textContent = 'Category: ' + (report.category || '-');

        const status = document.createElement('p');
        status.textContent = 'Status: ' + (report.status || '-');

        const priority = document.createElement('p');
        priority.textContent = 'Priority: ' + (report.urgency || 'unknown');

        const link = document.createElement('a');
        link.textContent = 'View report';
        link.href = '/admin/reports/' + encodeURIComponent(report.id);
        link.style.color = '#ff5722';
        link.style.fontWeight = '600';

        wrapper.append(title, location, category, status, priority, link);

        return wrapper;
    }


    // attention list
    function renderAttention(reports) {
        const openReports = reports.filter(report =>
            !['resolved', 'rejected'].includes(report.status)
        );

        const grouped = {};

        openReports.forEach(report => {
            const location = report.location || 'Unknown location';

            if (!grouped[location]) {
                grouped[location] = 0;
            }

            grouped[location]++;
        });

        const sortedLocations = Object.entries(grouped)
            .sort((a, b) => b[1] - a[1])
            .slice(0, 5);

        attentionList.innerHTML = '';

        if (sortedLocations.length === 0) {
            const empty = document.createElement('p');
            empty.className = 'py-5 text-center text-[10px] text-gray-400';
            empty.textContent = 'No open reports found';

            attentionList.appendChild(empty);
            return;
        }

        sortedLocations.forEach(([location, total]) => {
            const item = document.createElement('div');

            item.className =
                'attention-item flex items-center justify-between gap-2 rounded-lg px-1.5 py-2 text-[10px] transition';

            const name = document.createElement('span');
            name.className = 'min-w-0 truncate';
            name.textContent = location;

            const count = document.createElement('span');
            count.className = 'shrink-0 font-bold text-[#ff5722]';
            count.textContent = total;

            item.append(name, count);
            attentionList.appendChild(item);
        });
    }


    async function renderMap() {
    markerLayer.clearLayers();

    const reports = getFilteredReports();

    mapCount.textContent = reports.length;

    renderAttention(reports);

    // Update informasi hasil pencarian
    if (searchResultInfo) {
        searchResultInfo.textContent = searchQuery
            ? `${reports.length} matching reports found`
            : 'Search reports across Jabodetabek';
    }

        const coordinatesByLocation = {};

        // geocode one location at a time to respect
        // the public geocoder's request limit.
        for (const location of uniqueLocations) {
            coordinatesByLocation[location] =
                await geocodeLocation(location);

            await sleep(1100);
        }

        const visiblePoints = [];

        reports.forEach(report => {
            const coordinates = coordinatesByLocation[
                report.location?.trim()
            ];

            if (!coordinates) {
                return;
            }

            visiblePoints.push(coordinates);

            const color = getPriorityColor(report.urgency);

            const marker = L.circleMarker(
                [coordinates.lat, coordinates.lon],
                {
                    radius: 7,
                    color: '#ffffff',
                    weight: 2,
                    fillColor: color,
                    fillOpacity: 1
                }
            );

            marker.bindPopup(createPopup(report));
            marker.addTo(markerLayer);
        });

        if (visiblePoints.length > 0) {
            const markerBounds = L.latLngBounds(
                visiblePoints.map(point => [point.lat, point.lon])
            );

            map.fitBounds(markerBounds.pad(0.15), {
                maxZoom: 13
            });
        } else {
            map.fitBounds(jabodetabekBounds);
        }

        mapLoading.classList.add('hidden');
    }



    // tab btn
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', async () => {
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('active');
            });

            button.classList.add('active');

            activeStatus = button.dataset.status;

            mapLoading.textContent = 'Updating map...';
            mapLoading.classList.remove('hidden');

            await renderMap();
        });
    });


    
    // fetch report data
    async function loadReports() {
        try {
            const response = await fetch(dataUrl, {
                headers: {
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('Unable to load report data');
            }

            const data = await response.json();

            allReports = data.reports || [];

            lastUpdated.textContent =
                'Updated: ' + (data.last_updated || '-');

            await renderMap();

        } catch (error) {
            console.error(error);

            mapLoading.textContent = 'Failed to load reports';

            attentionList.textContent =
                'Unable to retrieve report data.';
        }
    }


    // initial load and auto refresh
    loadReports();

    setInterval(() => {
        loadReports();
    }, 30000);

    // fix map sizing after layout is ready
    setTimeout(() => {
        map.invalidateSize();
    }, 300);

</script>

</body>
</html>
