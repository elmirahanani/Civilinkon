
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Detail | Civilinkon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#f5f5f5] text-[#171717]">

<div class="min-h-screen px-5 py-5 md:px-10">

    <header class="mb-8 flex items-center justify-between">

        <a href="{{ route('admin.dashboard') }}"
           class="text-2xl font-black">
            <span class="text-[#ff5722]">◈</span>
            CiViLiNK<span class="text-[#ff5722]">ON</span>
        </a>

        <a href="{{ route('admin.reports.index') }}"
           class="flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm hover:bg-gray-50">
            <i data-lucide="arrow-left" class="h-4 w-4"></i>
            Back to Reports
        </a>

    </header>


    <main class="mx-auto max-w-5xl">

        <div class="mb-6">
            <p class="text-xs text-gray-400">
                Home / Reports / Report Detail
            </p>

            <h1 class="mt-2 text-3xl font-bold">Report Details</h1>

            <p class="mt-1 text-sm text-gray-500">
                Report #{{ $report->id }}
            </p>
        </div>


        <section class="rounded-2xl bg-white p-6 md:p-8">

            <div class="mb-7 flex flex-wrap items-start justify-between gap-4">

                <div>
                    <p class="text-xs font-semibold uppercase text-gray-400">
                        Report Title
                    </p>

                    <h2 class="mt-2 text-2xl font-bold">
                        {{ $report->title }}
                    </h2>

                    <p class="mt-2 text-sm text-gray-400">
                        Tracking Code: {{ $report->tracking_code }}
                    </p>
                </div>

                <span class="rounded-full bg-[#fff0e9] px-4 py-2 text-sm font-semibold text-[#ff5722]">
                    {{ ucfirst(str_replace('_', ' ', $report->status)) }}
                </span>

            </div>


            <div class="grid gap-6 md:grid-cols-2">

                <div>
                    <p class="text-xs text-gray-400">Category</p>
                    <p class="mt-1 font-semibold">{{ $report->category }}</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Location</p>
                    <p class="mt-1 font-semibold">{{ $report->location }}</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Priority</p>
                    <p class="mt-1 font-semibold">{{ ucfirst($report->urgency) }}</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Date Submitted</p>
                    <p class="mt-1 font-semibold">
                        {{ $report->created_at?->format('d F Y, H:i') }}
                    </p>
                </div>

            </div>


            <div class="my-7 border-t border-gray-100"></div>


            <div>
                <h3 class="font-bold">Description</h3>

                <p class="mt-3 whitespace-pre-line text-sm leading-7 text-gray-600">
                    {{ $report->description }}
                </p>
            </div>


            @if($report->photo)
                <div class="mt-7">

                    <h3 class="mb-3 font-bold">Supporting Photo</h3>

                    <img
                        src="{{ asset('storage/' . $report->photo) }}"
                        alt="Report supporting photo"
                        class="max-h-80 rounded-xl object-cover"
                    >

                </div>
            @endif


            @if($report->admin_notes)
                <div class="mt-7 rounded-xl bg-[#fff8f4] p-5">

                    <h3 class="font-bold">Admin Notes</h3>

                    <p class="mt-2 whitespace-pre-line text-sm text-gray-600">
                        {{ $report->admin_notes }}
                    </p>

                </div>
            @endif


            <div class="my-7 border-t border-gray-100"></div>


            <h3 class="mb-5 font-bold">Report Progress History</h3>

            @forelse($report->statusHistories->sortBy('created_at') as $history)

                <div class="relative mb-5 flex gap-4">

                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#fff0e9] text-[#ff5722]">
                        <i data-lucide="check" class="h-4 w-4"></i>
                    </div>

                    <div>
                        <p class="font-semibold">
                            {{ ucfirst(str_replace('_', ' ', $history->status)) }}
                        </p>

                        @if($history->description)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $history->description }}
                            </p>
                        @endif

                        <p class="mt-1 text-xs text-gray-400">
                            {{ $history->created_at?->format('d M Y, H:i') }}
                        </p>
                    </div>

                </div>

            @empty

                <p class="text-sm text-gray-400">
                    No progress history has been recorded yet.
                </p>

            @endforelse

        </section>

    </main>

</div>

<script>
    lucide.createIcons();
</script>

</body>
</html>
