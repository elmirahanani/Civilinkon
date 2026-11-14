
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Progress | Civilinkon</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #fff;
            color: #171717;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page {
            max-width: 1100px;
            margin: auto;
            padding: 42px 40px 90px;
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 35px;
        }

        .hero-content {
            width: 65%;
        }

        .tag {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 30px;
            color: white;
            background: #87320d;
            font-size: 9px;
            font-weight: bold;
        }

        h1 {
            margin: 17px 0 10px;
            font-size: 35px;
            letter-spacing: -1px;
        }

        h1 span {
            color: #ff4b19;
        }

        .subtitle {
            max-width: 480px;
            color: #888;
            font-size: 14px;
            line-height: 1.6;
        }

        .illustration {
            width: 190px;
            height: 165px;
            object-fit: contain;
        }

        .search-form {
            margin-top: 27px;
        }

        .search-form label {
            display: block;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: bold;
        }

        .search-form input {
            width: 100%;
            height: 47px;
            padding: 0 18px;
            border: 1px solid #eee;
            border-radius: 30px;
            outline: none;
            font-size: 13px;
        }

        .search-form button {
            width: 100%;
            height: 44px;
            margin-top: 14px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(90deg, #ff4b20, #ff925c);
            color: white;
            cursor: pointer;
            font-size: 13px;
        }

        .lost-link {
            display: block;
            margin-top: 12px;
            text-align: center;
            color: #888;
            font-size: 10px;
        }

        .recent {
            margin-top: 24px;
            color: #888;
            font-size: 11px;
        }

        .recent strong {
            display: inline-block;
            margin: 0 7px;
            padding: 6px 12px;
            border-radius: 20px;
            background: #fff0e7;
            color: #222;
        }

        .recent a {
            color: #888;
        }

        .error {
            margin-top: 14px;
            padding: 12px;
            border-radius: 10px;
            background: #fff0ed;
            color: #d93816;
            font-size: 12px;
        }

        .result-card {
            max-width: 650px;
            margin-top: 42px;
            padding: 20px;
            border: 1px solid #ff9874;
            border-radius: 12px;
            background: #fffaf7;
        }

        .result-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .muted-label {
            color: #999;
            font-size: 10px;
        }

        .code-row {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-top: 5px;
        }

        .code-row strong {
            font-size: 19px;
            overflow-wrap: anywhere;
        }

        .copy-btn {
            border: none;
            border-radius: 20px;
            padding: 5px 11px;
            background: #ffe4d3;
            color: #222;
            cursor: pointer;
            font-size: 10px;
        }

        .status-badge {
            padding: 7px 13px;
            border-radius: 30px;
            background: #ff5a0a;
            color: white;
            font-size: 10px;
            font-weight: bold;
            white-space: nowrap;
        }

        .status-badge.resolved {
            background: #199b63;
        }

        .status-badge.rejected {
            background: #d94343;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 9px;
            margin-top: 23px;
        }

        .info-box {
            min-width: 0;
            padding: 12px;
            border-radius: 9px;
            background: #fff0df;
        }

        .info-box small {
            display: block;
            margin-bottom: 6px;
            color: #999;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .info-box strong {
            display: block;
            font-size: 11px;
            font-weight: 500;
            overflow-wrap: anywhere;
        }

        .latest-update {
            margin-top: 20px;
            padding: 14px;
            border-radius: 9px;
            background: #080808;
            color: white;
        }

        .latest-update strong {
            display: block;
            margin-bottom: 5px;
            color: #ff8a27;
            font-size: 11px;
        }

        .latest-update p {
            margin: 0;
            font-size: 10px;
            line-height: 1.5;
        }

        .timeline {
            position: relative;
            margin-top: 23px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 15px;
            bottom: 28px;
            left: 11px;
            width: 2px;
            background: #ffd3bd;
        }

        .timeline-item {
            position: relative;
            display: grid;
            grid-template-columns: 24px 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }

        .timeline-dot {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 23px;
            height: 23px;
            border: 1px solid #ffcfb5;
            border-radius: 50%;
            background: white;
            color: #aaa;
            font-size: 10px;
        }

        .timeline-item.done .timeline-dot,
        .timeline-item.current .timeline-dot {
            border-color: #ff570e;
            background: #ff570e;
            color: white;
        }

        .timeline-item.current .timeline-dot {
            outline: 4px solid #ffdfd0;
        }

        .timeline-content h3 {
            margin: 2px 0 4px;
            font-size: 12px;
        }

        .timeline-content p {
            margin: 0;
            color: #999;
            font-size: 10px;
            line-height: 1.5;
        }

        .timeline-content time {
            display: block;
            margin-top: 4px;
            color: #aaa;
            font-size: 9px;
        }

        .timeline-item.pending .timeline-content {
            opacity: .55;
        }

        .result-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 30px;
        }

        .outline-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 38px;
            padding: 8px 18px;
            border: 1px solid #ffb18e;
            border-radius: 30px;
            background: white;
            color: #ff4b19;
            text-decoration: none;
            font-size: 12px;
        }

        .volunteer-link {
            color: #222;
            font-size: 12px;
            text-decoration: none;
        }

        .code-section {
            max-width: 650px;
            margin-top: 40px;
        }

        .code-section h3 {
            font-size: 14px;
        }

        .code-box {
            padding: 13px;
            border: 1px solid #ff9874;
            border-radius: 9px;
            background: #fff0e8;
            text-align: center;
            font-size: 17px;
            font-weight: bold;
            overflow-wrap: anywhere;
        }

        .small-note {
            color: #999;
            font-size: 10px;
            line-height: 1.5;
        }

        .support {
            display: flex;
            gap: 15px;
            max-width: 650px;
            margin-top: 40px;
            padding: 20px;
            border-radius: 12px;
            background: #fff8f4;
        }

        .support-icon {
            flex: 0 0 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ff4b19;
            color: white;
            font-size: 20px;
        }

        .support h3 {
            margin: 0 0 7px;
            font-size: 13px;
        }

        .support p {
            margin: 0;
            color: #888;
            font-size: 11px;
            line-height: 1.6;
        }

        .support a {
            display: inline-block;
            margin-top: 12px;
            padding: 8px 17px;
            border: 1px solid #ffd0bd;
            border-radius: 25px;
            background: white;
            color: #ff4b19;
            text-decoration: none;
            font-size: 11px;
        }

        @media (max-width: 650px) {
            .page {
                padding: 25px 20px 60px;
            }

            .hero {
                gap: 5px;
            }

            .hero-content {
                width: 100%;
            }

            .illustration {
                width: 90px;
                height: 90px;
            }

            h1 {
                margin-top: 14px;
                font-size: 25px;
            }

            .subtitle {
                max-width: 290px;
                font-size: 11px;
            }

            .search-form {
                margin-top: 30px;
            }

            .search-form input {
                height: 43px;
                font-size: 11px;
            }

            .search-form button {
                height: 41px;
                font-size: 11px;
            }

            .result-card {
                margin-top: 38px;
                padding: 13px;
            }

            .code-row strong {
                font-size: 13px;
            }

            .status-badge {
                padding: 6px 9px;
                font-size: 9px;
            }

            .info-grid {
                gap: 7px;
            }

            .info-box {
                padding: 9px 7px;
            }

            .info-box small {
                font-size: 8px;
            }

            .info-box strong {
                font-size: 9px;
                line-height: 1.4;
            }

            .latest-update {
                padding: 12px;
            }

            .timeline-content h3 {
                font-size: 11px;
            }

            .timeline-content p {
                font-size: 9px;
            }

            .result-actions {
                gap: 8px;
            }

            .outline-btn {
                padding: 8px 12px;
                font-size: 10px;
            }

            .volunteer-link {
                font-size: 10px;
            }

            .code-section {
                margin-top: 40px;
            }

            .code-box {
                font-size: 14px;
            }

            .support {
                margin-top: 35px;
                padding: 14px 12px;
            }

            .support p {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>

@php
    $statusLabels = [
        'submitted' => 'Reported',
        'verified' => 'Verified',
        'in_progress' => 'In Progress',
        'resolved' => 'Resolved',
        'rejected' => 'Rejected',
    ];

    $statusOrder = [
        'submitted',
        'verified',
        'in_progress',
        'resolved',
    ];

    $currentStatus = $report->status;
    $currentIndex = array_search($currentStatus, $statusOrder);

    $histories = $report->statusHistories;

    $latestHistory = $histories->sortByDesc('created_at')->first();

    $categoryLabels = [
        'trash_buildup' => 'Trash Buildup',
        'dirty_public_areas' => 'Dirty Public Areas',
        'improper_waste_disposal' => 'Improper Waste Disposal',
        'polluted_environment' => 'Polluted Environment',
        'waste_facilities' => 'Waste Facilities',
        'illegal_dumping' => 'Illegal Dumping',
    ];

    $statusDescriptions = [
        'submitted' => 'Report received. Your report has been submitted.',
        'verified' => 'Your report has been verified by the moderator.',
        'in_progress' => 'The team has started working on your report.',
        'resolved' => 'The reported issue has been resolved.',
    ];

    $statusClass = in_array($currentStatus, ['resolved', 'rejected'])
        ? $currentStatus
        : '';
@endphp

<div class="page">

    <section class="hero">
        <div class="hero-content">

            <span class="tag">TRACK YOUR REPORT</span>

            <h1>Your <span>Report</span>, Live</h1>

            <p class="subtitle">
                Pop in your code and watch your report travel from
                “received” to “fixed”, one step at a time.
            </p>

            <form
                action="{{ route('track.search') }}"
                method="POST"
                class="search-form"
            >
                @csrf

                <label for="tracking_code">
                    Tracking Code<span style="color:#ff4b19">*</span>
                </label>

                <input
                    type="text"
                    name="tracking_code"
                    id="tracking_code"
                    value="{{ $report->tracking_code }}"
                    placeholder="Example: CVK-7F3K-9Q2M"
                    required
                >

                <button type="submit">Show Me the Progress</button>
            </form>

            <a href="{{ route('track.index') }}#support" class="lost-link">
                Lost your code? Here's where to find it
            </a>

            @if(session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif

            @if($errors->any())
                <div class="error">{{ $errors->first() }}</div>
            @endif

            <div class="recent">
                Recently tracked:
                <strong>{{ $report->tracking_code }}</strong>
                <a href="{{ route('track.index') }}">Clear</a>
            </div>

        </div>

        <img
            class="illustration"
            src="{{ asset('images/track-illustration.png') }}"
            alt="Report tracking illustration"
        >
    </section>

    <section class="result-card">

        <div class="result-top">
            <div>
                <div class="muted-label">Tracking code</div>

                <div class="code-row">
                    <strong id="resultTrackingCode">
                        {{ $report->tracking_code }}
                    </strong>

                    <button
                        type="button"
                        class="copy-btn"
                        onclick="copyReportCode()"
                    >
                        Copy
                    </button>
                </div>
            </div>

            <span class="status-badge {{ $statusClass }}">
                {{ $statusLabels[$currentStatus] ?? ucfirst(str_replace('_', ' ', $currentStatus)) }}
            </span>
        </div>

        <div class="info-grid">

            <div class="info-box">
                <small>Category</small>
                <strong>
                    {{ $categoryLabels[$report->category] ?? ucfirst(str_replace('_', ' ', $report->category)) }}
                </strong>
            </div>

            <div class="info-box">
                <small>Location</small>
                <strong>{{ $report->location }}</strong>
            </div>

            <div class="info-box">
                <small>Submitted</small>
                <strong>{{ $report->created_at->format('M d, Y') }}</strong>
            </div>

        </div>

        <div class="latest-update">
            <strong>
                Latest update
                @if($latestHistory)
                    · {{ $latestHistory->created_at->format('M d · H:i') }}
                @else
                    · {{ $report->updated_at->format('M d · H:i') }}
                @endif
            </strong>

            <p>
                @if($latestHistory && $latestHistory->description)
                    {{ $latestHistory->description }}
                @elseif(isset($statusDescriptions[$currentStatus]))
                    {{ $statusDescriptions[$currentStatus] }}
                @else
                    Your report status has been updated.
                @endif
            </p>
        </div>

        <div class="timeline">

            @foreach($statusOrder as $index => $step)

                @php
                    $history = $histories->firstWhere('status', $step);

                    $isDone = $currentIndex !== false && $index < $currentIndex;
                    $isCurrent = $currentStatus === $step;
                    $isPending = !$isDone && !$isCurrent;

                    if ($currentStatus === 'rejected') {
                        $isPending = true;
                    }
                @endphp

                <div class="timeline-item
                    {{ $isDone ? 'done' : '' }}
                    {{ $isCurrent ? 'current' : '' }}
                    {{ $isPending ? 'pending' : '' }}">

                    <div class="timeline-dot">
                        @if($isDone || $isCurrent)
                            ✓
                        @else
                            {{ $index + 1 }}
                        @endif
                    </div>

                    <div class="timeline-content">
                        <h3>{{ $statusLabels[$step] }}</h3>

                        <p>
                            @if($history && $history->description)
                                {{ $history->description }}
                            @elseif(isset($statusDescriptions[$step]))
                                {{ $statusDescriptions[$step] }}
                            @else
                                Waiting for the next update.
                            @endif
                        </p>

                        @if($history)
                            <time>
                                {{ $history->created_at->format('M d · H:i') }}
                            </time>
                        @elseif($isPending)
                            <time>Pending</time>
                        @endif
                    </div>

                </div>

            @endforeach

            <div class="timeline-item pending">
                <div class="timeline-dot">5</div>

                <div class="timeline-content">
                    <h3>Feedback</h3>
                    <p>Share your feedback after the report is resolved.</p>
                    <time>Pending</time>
                </div>
            </div>

        </div>

        <div class="result-actions">
            <a href="{{ route('track.index') }}" class="outline-btn">
                Track another report
            </a>

            <a href="{{ route('track.index') }}#support" class="volunteer-link">
                Help to volunteer
            </a>
        </div>

    </section>

    <section class="code-section">
        <h3>Your Tracking Code</h3>

        <div class="code-box">
            {{ $report->tracking_code }}
        </div>

        <p class="small-note">
            Every report gets its own code like this one. You'll see it right after
            you submit, and we'll email it to you if you share your address.
        </p>
    </section>

    <section class="support" id="support">

        <div class="support-icon">?</div>

        <div>
            <h3>Stuck? We've got your back.</h3>

            <p>
                Can't find your code? Check your email first.
                Still nothing? Our support team will help you track it down.
            </p>

            <a href="{{ route('track.index') }}">
                Talk to Support
            </a>
        </div>

    </section>

</div>

<script>
    function copyReportCode() {
        const code = document.getElementById('resultTrackingCode').textContent.trim();

        navigator.clipboard.writeText(code)
            .then(() => alert('Tracking code copied!'))
            .catch(() => {
                const input = document.createElement('textarea');
                input.value = code;
                document.body.appendChild(input);
                input.select();
                document.execCommand('copy');
                input.remove();
                alert('Tracking code copied!');
            });
    }
</script>

</body>
</html>
