
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Your Report - Civilinkon</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #ffffff;
            color: #171717;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* =========================
           MAIN PAGE
        ========================= */

        .track-page {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 55px 70px 100px;
        }

        /* =========================
           HERO SECTION
        ========================= */

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 760px) minmax(300px, 420px);
            justify-content: space-between;
            align-items: start;
            gap: 45px;
        }

        .hero-content {
            width: 100%;
            max-width: 760px;
        }

        .tag {
            display: inline-block;
            padding: 7px 16px;
            border-radius: 30px;
            color: white;
            background: #8c3108;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: .4px;
        }

        h1 {
            margin: 20px 0 12px;
            font-size: 46px;
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        h1 span {
            color: #ff4c19;
        }

        .subtitle {
            max-width: 560px;
            color: #888;
            font-size: 16px;
            line-height: 1.7;
        }

        /* =========================
           TRACKING ILLUSTRATION
        ========================= */

        .illustration {
            display: block;
            width: 100%;
            max-width: 420px;
            height: auto;
            margin: 0 auto;
            overflow: visible;
        }

        /* =========================
           TRACKING FORM
        ========================= */

        .tracking-form {
            max-width: 720px;
            margin-top: 38px;
        }

        .tracking-form label {
            display: block;
            margin-bottom: 13px;
            font-size: 16px;
            font-weight: bold;
        }

        .required {
            color: #ff4c19;
        }

        .tracking-form input {
            width: 100%;
            height: 58px;
            padding: 0 23px;
            border: 1px solid #eeeeee;
            border-radius: 30px;
            outline: none;
            font-size: 15px;
            transition: border-color .2s;
        }

        .tracking-form input:focus {
            border-color: #ff7548;
        }

        .tracking-form input::placeholder {
            color: #aaaaaa;
        }

        .primary-btn {
            width: 100%;
            height: 53px;
            margin-top: 16px;
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            background: linear-gradient(90deg, #ff4b20, #ff925c);
            box-shadow: 0 4px 12px #ff4b2025;
            transition: transform .2s, box-shadow .2s;
        }

        .primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px #ff4b2035;
        }

        .lost-link {
            display: block;
            margin-top: 14px;
            text-align: center;
            color: #888;
            font-size: 12px;
            text-decoration: underline;
        }

        /* =========================
           ERROR MESSAGE
        ========================= */

        .error {
            margin-top: 16px;
            padding: 14px 18px;
            border-radius: 10px;
            background: #fff0ed;
            color: #d93816;
            font-size: 13px;
            line-height: 1.5;
        }

        /* =========================
           RECENTLY TRACKED
        ========================= */

        .recent {
            margin-top: 30px;
            color: #888;
            font-size: 13px;
        }

        .recent strong {
            display: inline-block;
            margin: 0 8px;
            padding: 7px 13px;
            border-radius: 20px;
            background: #fff1e8;
            color: #222;
        }

        .recent a {
            color: #888;
            text-decoration: underline;
        }

        /* =========================
           TRACKING CODE SECTION
        ========================= */

        .code-section {
            max-width: 850px;
            margin-top: 75px;
        }

        .code-section h3 {
            margin-bottom: 14px;
            font-size: 17px;
        }

        .code-box {
            padding: 17px;
            text-align: center;
            border: 1px solid #ff9a76;
            border-radius: 10px;
            background: #fff0e8;
            font-weight: bold;
            letter-spacing: .5px;
            font-size: 21px;
        }

        .small-note {
            margin-top: 11px;
            color: #999;
            font-size: 12px;
            line-height: 1.6;
        }

        /* =========================
           SUPPORT SECTION
        ========================= */

        .support {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            max-width: 850px;
            margin-top: 48px;
            padding: 26px;
            border-radius: 12px;
            background: #fff8f4;
        }

        .support-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 46px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #ff4b19;
            color: white;
            font-size: 23px;
            font-weight: bold;
        }

        .support h3 {
            margin: 0 0 8px;
            font-size: 16px;
        }

        .support p {
            margin: 0;
            color: #888;
            font-size: 13px;
            line-height: 1.7;
        }

        .support a {
            display: inline-block;
            margin-top: 14px;
            padding: 9px 19px;
            border: 1px solid #ffd0bd;
            border-radius: 25px;
            color: #ff4b19;
            text-decoration: none;
            font-size: 13px;
            background: white;
            transition: background .2s;
        }

        .support a:hover {
            background: #fff0e8;
        }

        /* =========================
           MEDIUM SCREEN
        ========================= */

        @media (max-width: 1099px) {
            .track-page {
                padding: 45px 40px 80px;
            }

            .hero {
                grid-template-columns: minmax(0, 1fr) 260px;
                gap: 25px;
            }

            .illustration {
                max-width: 260px;
            }

            h1 {
                font-size: 38px;
            }
        }

        /* =========================
           MOBILE RESPONSIVE
        ========================= */

        @media (max-width: 650px) {
            .track-page {
                padding: 25px 20px 60px;
            }

            .hero {
                display: flex;
                align-items: flex-start;
                gap: 5px;
            }

            .hero-content {
                width: 100%;
                min-width: 0;
            }

            .tag {
                padding: 6px 12px;
                font-size: 8px;
            }

            h1 {
                margin: 14px 0 9px;
                font-size: 25px;
                letter-spacing: -.7px;
            }

            .subtitle {
                max-width: 290px;
                font-size: 11px;
                line-height: 1.6;
            }

            .illustration {
                width: 105px;
                max-width: 105px;
                height: auto;
                flex-shrink: 0;
                margin-top: 0;
            }

            .tracking-form {
                margin-top: 32px;
            }

            .tracking-form label {
                margin-bottom: 10px;
                font-size: 12px;
            }

            .tracking-form input {
                height: 43px;
                padding: 0 15px;
                font-size: 11px;
            }

            .primary-btn {
                height: 42px;
                margin-top: 12px;
                font-size: 11px;
            }

            .lost-link {
                margin-top: 11px;
                font-size: 9px;
            }

            .recent {
                margin-top: 23px;
                font-size: 10px;
            }

            .recent strong {
                margin: 0 4px;
                padding: 6px 9px;
            }

            .code-section {
                max-width: 100%;
                margin-top: 75px;
            }

            .code-section h3 {
                font-size: 13px;
            }

            .code-box {
                padding: 12px;
                font-size: 14px;
            }

            .small-note {
                font-size: 9px;
            }

            .support {
                max-width: 100%;
                margin-top: 38px;
                padding: 16px 14px;
                gap: 12px;
            }

            .support-icon {
                flex-basis: 38px;
                width: 38px;
                height: 38px;
                font-size: 19px;
            }

            .support h3 {
                font-size: 12px;
            }

            .support p {
                font-size: 10px;
            }

            .support a {
                margin-top: 10px;
                padding: 7px 14px;
                font-size: 10px;
            }
        }

        /* =========================
           VERY SMALL MOBILE
        ========================= */

        @media (max-width: 360px) {
            .track-page {
                padding-right: 15px;
                padding-left: 15px;
            }

            h1 {
                font-size: 22px;
            }

            .illustration {
                width: 85px;
            }
        }
    </style>
</head>

<body>

<div class="track-page">

    <!-- HERO SECTION -->
    <section class="hero">

        <div class="hero-content">

            <span class="tag">TRACK YOUR REPORT</span>

            <h1>
                Your <span>Report</span>, Live
            </h1>

            <p class="subtitle">
                Pop in your code and watch your report travel from
                “received” to “fixed”, one step at a time.
            </p>

            <!-- TRACKING FORM -->
            <form
                action="{{ route('track.search') }}"
                method="POST"
                class="tracking-form"
            >
                @csrf

                <label for="tracking_code">
                    Tracking Code<span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="tracking_code"
                    name="tracking_code"
                    value="{{ old('tracking_code', request('tracking_code')) }}"
                    placeholder="Example: CVK-7F3K-9Q2M"
                    required
                >

                <button class="primary-btn" type="submit">
                    Show Me the Progress
                </button>
            </form>

            <a href="#support" class="lost-link">
                Lost your code? Here's where to find it
            </a>

            <!-- ERROR -->
            @if(session('error'))
                <div class="error">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- RECENTLY TRACKED -->
            @if(session('recent_tracking_code'))
                <div class="recent">
                    Recently tracked:

                    <strong>
                        {{ session('recent_tracking_code') }}
                    </strong>

                    <a href="{{ route('track.index') }}">
                        Clear
                    </a>
                </div>
            @endif

        </div>

        <!-- EMBEDDED TRACKING ILLUSTRATION -->
        <svg
            class="illustration"
            viewBox="0 0 420 320"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Civilinkon report tracking illustration"
        >

            <!-- Peach background -->
            <ellipse
                cx="207"
                cy="163"
                rx="157"
                ry="125"
                fill="#FFE2CF"
            />

            <!-- Map -->
            <path
                d="M43 191 L91 165 L137 181 L137 251 L91 234 L43 258 Z"
                fill="#FF8A3D"
            />

            <path
                d="M91 165 V234 M137 181 V251"
                stroke="#FFF5EC"
                stroke-width="4"
            />

            <path
                d="M55 207 L83 191 L119 209"
                fill="none"
                stroke="#FFF5EC"
                stroke-width="4"
                stroke-linecap="round"
            />

            <!-- Report document -->
            <g transform="rotate(-7 218 151)">

                <rect
                    x="112"
                    y="48"
                    width="190"
                    height="211"
                    rx="18"
                    fill="#FF6B2B"
                />

                <rect
                    x="124"
                    y="39"
                    width="184"
                    height="211"
                    rx="17"
                    fill="#FFFFFF"
                    stroke="#FF7B3B"
                    stroke-width="5"
                />

                <!-- Warning icon -->
                <rect
                    x="145"
                    y="66"
                    width="57"
                    height="29"
                    rx="8"
                    fill="#FF6B22"
                />

                <path
                    d="M173 72 L182 88 H164 Z"
                    fill="#FFFFFF"
                />

                <path
                    d="M173 77 V82 M173 85 V85.5"
                    stroke="#FF6B22"
                    stroke-width="2"
                    stroke-linecap="round"
                />

                <!-- Document lines -->
                <rect x="145" y="111" width="111" height="10" rx="5" fill="#FFC19F"/>
                <rect x="145" y="135" width="94" height="10" rx="5" fill="#FFC19F"/>
                <rect x="145" y="159" width="83" height="10" rx="5" fill="#FFC19F"/>

            </g>

            <!-- Main location pin -->
            <path
                d="M318 40 C318 20 333 7 351 7
                   C369 7 384 21 384 40
                   C384 64 351 98 351 98
                   C351 98 318 64 318 40 Z"
                fill="#FF5A16"
            />

            <circle
                cx="351"
                cy="39"
                r="11"
                fill="#FFFFFF"
            />

            <!-- Small location pin -->
            <path
                d="M64 169 C64 156 74 147 86 147
                   C98 147 108 156 108 169
                   C108 185 86 208 86 208
                   C86 208 64 185 64 169 Z"
                fill="#FF5A16"
            />

            <circle
                cx="86"
                cy="168"
                r="7"
                fill="#FFFFFF"
            />

            <!-- Magnifying glass -->
            <circle
                cx="278"
                cy="205"
                r="48"
                fill="#FFFFFF"
                stroke="#202020"
                stroke-width="12"
            />

            <path
                d="M312 241 L359 287"
                stroke="#202020"
                stroke-width="18"
                stroke-linecap="round"
            />

            <circle
                cx="278"
                cy="205"
                r="29"
                fill="#FFF0E6"
            />

            <path
                d="M266 209 L277 219 L295 193"
                fill="none"
                stroke="#FF6B22"
                stroke-width="6"
                stroke-linecap="round"
                stroke-linejoin="round"
            />

            <!-- Decorative rays -->
            <path
                d="M395 70 L409 63 M400 89 L414 91 M389 53 L396 40"
                stroke="#FF6B22"
                stroke-width="6"
                stroke-linecap="round"
            />

            <circle cx="110" cy="82" r="7" fill="#FFB17E"/>
            <circle cx="344" cy="269" r="6" fill="#FFB17E"/>

        </svg>

    </section>


    <!-- TRACKING CODE INFORMATION -->
    <section class="code-section">

        <h3>Your Tracking Code</h3>

        <div class="code-box">
            CVK-7F3K-9Q2M
        </div>

        <p class="small-note">
            Every report gets its own code like this one. You'll see it right after
            you submit, and we'll email it to you if you share your address.
        </p>

    </section>


    <!-- SUPPORT SECTION -->
    <section class="support" id="support">

        <div class="support-icon">
            ?
        </div>

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

</body>
</html>
