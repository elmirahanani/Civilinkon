
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Submitted Successfully | Civilinkon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #fff;
            color: #111;
            font-family: "Poppins", sans-serif;
        }

        .success-page {
            width: 100%;
            min-height: 100vh;
            padding: 90px 24px 100px;
            overflow: hidden;
        }

        .success-container {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
            text-align: center;
        }

        /* Celebration illustration */
        .celebration {
            position: relative;
            width: 240px;
            height: 240px;
            margin: 0 auto 30px;
            display: grid;
            place-items: center;
            background: radial-gradient(circle, #fff3df 0%, #fff9f1 48%, transparent 72%);
        }

        .check-circle {
            width: 130px;
            height: 130px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffad6c, #ff4d17);
            box-shadow: 0 15px 35px rgba(255, 93, 38, .12);
            z-index: 2;
        }

        .check-circle svg {
            width: 72px;
            height: 72px;
        }

        .confetti {
            position: absolute;
            display: block;
            border-radius: 20px;
        }

        .c1 { width: 33px; height: 12px; background: #ffa09a; top: 25px; left: 15px; transform: rotate(38deg); }
        .c2 { width: 13px; height: 13px; background: #ffad6b; top: 40px; right: 20px; border-radius: 50%; }
        .c3 { width: 34px; height: 12px; background: #ff5b19; top: 52px; right: -5px; transform: rotate(-48deg); }
        .c4 { width: 12px; height: 32px; background: #ffad6b; top: 100px; left: 0; transform: rotate(-40deg); }
        .c5 { width: 12px; height: 12px; background: #ffaaa1; bottom: 75px; left: 20px; border-radius: 50%; }
        .c6 { width: 34px; height: 12px; background: #ff9c65; bottom: 32px; left: 38px; transform: rotate(-38deg); }
        .c7 { width: 12px; height: 30px; background: #ffaaa1; bottom: 20px; right: 25px; transform: rotate(-38deg); }
        .c8 { width: 33px; height: 12px; background: #ffad6b; bottom: 75px; right: 0; transform: rotate(55deg); }
        .c9 { width: 11px; height: 11px; background: #ff9f94; top: 115px; right: -8px; border-radius: 50%; }
        .c10 { width: 11px; height: 11px; background: #ffad6b; bottom: 5px; left: 115px; border-radius: 50%; }

        .success-title {
            margin: 0;
            font-size: clamp(27px, 4vw, 39px);
            line-height: 1.15;
            letter-spacing: -1px;
            font-weight: 700;
        }

        .success-title span {
            display: block;
            color: #ff4e19;
        }

        .success-description {
            margin: 13px 0 35px;
            color: #888;
            font-size: 15px;
            line-height: 1.55;
        }

        /* Tracking card */
        .tracking-card {
            width: 100%;
            max-width: 520px;
            margin: 0 auto;
            padding: 18px 14px 15px;
            border: 1px solid #ffeadf;
            border-radius: 11px;
            background: #fff;
        }

        .tracking-heading {
            margin-bottom: 11px;
            font-size: 14px;
            font-weight: 700;
        }

        .tracking-code {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 8px 12px;
            border: 1px solid #ff9b75;
            border-radius: 11px;
            background: #fff0e8;
        }

        .tracking-code strong {
            font-size: clamp(15px, 2.5vw, 20px);
            letter-spacing: .3px;
            overflow-wrap: anywhere;
        }

        .copy-icon {
            display: inline-flex;
            align-items: center;
            border: 0;
            background: transparent;
            color: #ff4e19;
            cursor: pointer;
        }

        .copy-button {
            margin-left: auto;
            padding: 8px 17px;
            border: none;
            border-radius: 30px;
            color: white;
            background: linear-gradient(110deg, #ff9b69, #ff7044);
            font-family: inherit;
            font-size: 12px;
            cursor: pointer;
        }

        .save-notice {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-top: 18px;
            padding: 15px;
            border-radius: 11px;
            background: #fff8f4;
            text-align: left;
        }

        .notice-icon {
            width: 48px;
            height: 48px;
            flex: 0 0 48px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #ffead9;
            color: #ff4e19;
        }

        .save-notice h3 {
            margin: 0 0 4px;
            color: #ff4e19;
            font-size: 14px;
        }

        .save-notice p {
            margin: 0;
            color: #858585;
            font-size: 12px;
            line-height: 1.55;
        }

        .tracking-actions {
            display: flex;
            gap: 10px;
            margin-top: 19px;
        }

        .action-button {
            flex: 1;
            min-height: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 9px 12px;
            border: 1px solid #ffad88;
            border-radius: 30px;
            background: white;
            color: #ff4e19;
            text-decoration: none;
            font-family: inherit;
            font-size: 13px;
            cursor: pointer;
        }

        .action-button.primary {
            border: none;
            color: white;
            background: linear-gradient(100deg, #ff5728, #ff985b);
            box-shadow: 0 4px 12px rgba(255, 100, 50, .18);
        }

        /* Next steps */
        .next-section {
            margin: 105px auto 0;
            max-width: 650px;
        }

        .next-section h2 {
            margin: 0 0 34px;
            font-size: 23px;
            font-weight: 700;
        }

        .timeline {
            position: relative;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 12%;
            right: 12%;
            border-top: 2px dashed #ffe3d2;
        }

        .timeline-item {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .timeline-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            margin: 0 auto 13px;
            border-radius: 11px;
            color: #ff4e19;
            background: #fff0e2;
        }

        .timeline-item h3 {
            margin: 0 0 4px;
            font-size: 13px;
            font-weight: 700;
        }

        .timeline-item p {
            max-width: 130px;
            margin: 0 auto;
            color: #929292;
            font-size: 10px;
            line-height: 1.5;
        }

        @media (max-width: 600px) {
            .success-page {
                padding: 45px 18px 55px;
            }

            .success-container {
                max-width: 420px;
            }

            .celebration {
                width: 165px;
                height: 165px;
                margin-bottom: 22px;
            }

            .check-circle {
                width: 88px;
                height: 88px;
            }

            .check-circle svg {
                width: 51px;
                height: 51px;
            }

            .c1 { top: 15px; left: 5px; width: 23px; height: 8px; }
            .c2 { top: 24px; right: 10px; width: 8px; height: 8px; }
            .c3 { top: 35px; right: 0; width: 23px; height: 8px; }
            .c4 { top: 70px; left: 0; width: 8px; height: 21px; }
            .c5 { bottom: 50px; left: 10px; width: 8px; height: 8px; }
            .c6 { bottom: 22px; left: 25px; width: 23px; height: 8px; }
            .c7 { bottom: 15px; right: 20px; width: 8px; height: 20px; }
            .c8 { bottom: 50px; right: 0; width: 23px; height: 8px; }
            .c9 { top: 80px; right: 0; width: 8px; height: 8px; }
            .c10 { bottom: 0; left: 80px; width: 8px; height: 8px; }

            .success-title {
                font-size: clamp(21px, 6vw, 27px);
                letter-spacing: -.5px;
            }

            .success-description {
                margin: 10px 0 23px;
                font-size: 11px;
            }

            .tracking-card {
                padding: 14px 10px 12px;
            }

            .tracking-heading {
                font-size: 12px;
            }

            .tracking-code {
                min-height: 39px;
                gap: 5px;
                padding: 6px 8px;
            }

            .tracking-code strong {
                font-size: 12px;
            }

            .copy-button {
                padding: 6px 11px;
                font-size: 10px;
            }

            .save-notice {
                gap: 9px;
                margin-top: 12px;
                padding: 11px;
            }

            .notice-icon {
                width: 34px;
                height: 34px;
                flex-basis: 34px;
            }

            .notice-icon svg {
                width: 20px;
            }

            .save-notice h3 {
                font-size: 10px;
            }

            .save-notice p {
                font-size: 9px;
            }

            .tracking-actions {
                gap: 7px;
                margin-top: 13px;
            }

            .action-button {
                min-height: 31px;
                padding: 7px 5px;
                font-size: 9px;
            }

            .next-section {
                margin-top: 70px;
                max-width: 340px;
            }

            .next-section h2 {
                margin-bottom: 25px;
                font-size: 17px;
            }

            .timeline {
                display: flex;
                flex-direction: column;
                gap: 19px;
            }

            .timeline::before {
                top: 22px;
                bottom: 22px;
                left: 21px;
                right: auto;
                border-top: 0;
                border-left: 2px dashed #ffe3d2;
            }

            .timeline-item {
                display: grid;
                grid-template-columns: 44px 1fr;
                column-gap: 13px;
                text-align: left;
            }

            .timeline-icon {
                grid-row: 1 / 3;
                width: 44px;
                height: 44px;
                margin: 0;
            }

            .timeline-item h3 {
                align-self: end;
                margin: 2px 0 3px;
                font-size: 11px;
            }

            .timeline-item p {
                max-width: none;
                margin: 0;
                font-size: 9px;
                line-height: 1.45;
            }
        }

        @media (max-width: 350px) {
            .success-page {
                padding-right: 12px;
                padding-left: 12px;
            }

            .tracking-code strong {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
<main class="success-page">
    <div class="success-container">

        <div class="celebration">
            <span class="confetti c1"></span>
            <span class="confetti c2"></span>
            <span class="confetti c3"></span>
            <span class="confetti c4"></span>
            <span class="confetti c5"></span>
            <span class="confetti c6"></span>
            <span class="confetti c7"></span>
            <span class="confetti c8"></span>
            <span class="confetti c9"></span>
            <span class="confetti c10"></span>

            <div class="check-circle">
                <svg viewBox="0 0 64 64" fill="none">
                    <path d="M13 33L26 46L52 18"
                          stroke="white" stroke-width="8"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <h1 class="success-title">
            REPORT SUBMITTED
            <span>SUCCESSFULLY!</span>
        </h1>

        <p class="success-description">
            Thank you for helping make our community better.<br>
            Your report has been received and will be reviewed by our team.
        </p>

        <section class="tracking-card">
            <div class="tracking-heading">Your Tracking Code</div>

            <div class="tracking-code">
                <strong id="trackingCode">{{ $trackingCode }}</strong>

                <button type="button" class="copy-icon"
                        onclick="copyTrackingCode()" aria-label="Copy tracking code">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <rect x="8" y="3" width="13" height="15" rx="2"
                              stroke="currentColor" stroke-width="1.8"/>
                        <path d="M16 19H5a2 2 0 0 1-2-2V6"
                              stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round"/>
                    </svg>
                </button>

                <button type="button" class="copy-button"
                        onclick="copyTrackingCode()" id="copyButton">
                    Copy
                </button>
            </div>

            <div class="save-notice">
                <div class="notice-icon">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none">
                        <path d="M9 3H15L21 9V15L15 21H9L3 15V9L9 3Z"
                              stroke="currentColor" stroke-width="2"/>
                        <path d="M12 8V13M12 16V16.1"
                              stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"/>
                    </svg>
                </div>

                <div>
                    <h3>Save this tracking code</h3>
                    <p>
                        Use it to check the progress of your report later.<br>
                        We will also send this code to your email<br>
                        (if you provided one).
                    </p>
                </div>
            </div>

            <div class="tracking-actions">
                <a
                href="{{ route('track.index', ['tracking_code' => $trackingCode]) }}"
                class="action-button primary">
        Track My Report
    </a>

                <a href="{{ route('reports.create') }}" class="action-button">
                    Submit Another Report
                </a>
            </div>
        </section>
    </div>

    <section class="next-section">
        <h2>What Happens Next?</h2>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3L20 6V11C20 16 16.5 19.5 12 21C7.5 19.5 4 16 4 11V6L12 3Z"
                              stroke="currentColor" stroke-width="1.8"/>
                        <path d="M8.5 12L11 14.5L15.5 9.5"
                              stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Report Submitted</h3>
                <p>We've received your report.</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none">
                        <path d="M13 3H6A2 2 0 0 0 4 5V19A2 2 0 0 0 6 21H18A2 2 0 0 0 20 19V10L13 3Z"
                              stroke="currentColor" stroke-width="1.8"/>
                        <path d="M13 3V10H20M14 14L17 17M17 14L14 17"
                              stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round"/>
                    </svg>
                </div>
                <h3>Under Review</h3>
                <p>We will verify the information you provided.</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3L20 7V17L12 21L4 17V7L12 3Z"
                              stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="12" cy="12" r="3"
                                stroke="currentColor" stroke-width="1.8"/>
                    </svg>
                </div>
                <h3>Take Action</h3>
                <p>The issue will be handled by the relevant team or opened for volunteer activities.</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg width="23" height="23" viewBox="0 0 24 24" fill="none">
                        <path d="M18 9A6 6 0 0 0 6 9C6 16 3 16 3 18H21C21 16 18 16 18 9Z"
                              stroke="currentColor" stroke-width="1.8"/>
                        <path d="M10 21H14M12 3V1"
                              stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round"/>
                    </svg>
                </div>
                <h3>You'll See Updates</h3>
                <p>Check the progress using your tracking code.</p>
            </div>
        </div>
    </section>
</main>

<script>
    async function copyTrackingCode() {
        const code = document.getElementById('trackingCode').textContent.trim();
        const button = document.getElementById('copyButton');

        try {
            await navigator.clipboard.writeText(code);
            button.textContent = 'Copied!';
            setTimeout(() => button.textContent = 'Copy', 1800);
        } catch (error) {
            const input = document.createElement('textarea');
            input.value = code;
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            input.remove();

            button.textContent = 'Copied!';
            setTimeout(() => button.textContent = 'Copy', 1800);
        }
    }
</script>
</body>
</html>
