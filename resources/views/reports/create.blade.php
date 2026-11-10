<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Submit Report - Civilinkon</title>
    <style>
        :root {
            --orange: #ff4f1f;
            --orange-dark: #8b350f;
            --peach: #fff0e6;
            --text: #111111;
            --muted: #858585;
            --line: #e9e7e5;
            --soft-shadow: 0 8px 28px rgba(255, 105, 55, .11);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            color: var(--text);
            background: #fff;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            -webkit-font-smoothing: antialiased;
        }

        button, input, textarea { font: inherit; }

        .report-page {
            width: 100%;
            max-width: none;
            min-height: 100vh;
            margin: 0;
            padding: 36px clamp(22px, 2.4vw, 48px) 50px;
            background: #fff;
        }

        .intro { margin: 0 0 28px; }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            min-height: 19px;
            padding: 4px 13px;
            border-radius: 30px;
            color: #fff;
            background: var(--orange-dark);
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .45px;
        }

        .intro h1 {
            margin: 12px 0 8px;
            font-size: clamp(27px, 3vw, 35px);
            line-height: 1.18;
            letter-spacing: -1.35px;
            font-weight: 800;
        }

        .intro h1 em { color: var(--orange); font-style: normal; }

        .intro p {
            margin: 0;
            color: #858585;
            font-size: 13px;
            line-height: 1.55;
        }

        .report-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(250px, 17.5%);
            align-items: start;
            gap: 18px;
        }

        .report-form {
            min-width: 0;
            padding: 20px 17px 20px;
            border-radius: 15px;
            background: #fff;
            box-shadow: var(--soft-shadow);
        }

        .form-section { margin: 0 0 23px; }
        .form-section:last-of-type { margin-bottom: 17px; }

        .section-heading {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin-bottom: 9px;
        }

        .step-number {
            display: grid;
            width: 26px;
            height: 26px;
            flex: 0 0 26px;
            place-items: center;
            border-radius: 50%;
            color: #ff642d;
            background: #ffeadc;
            font-size: 12px;
            font-weight: 800;
        }

        .section-heading h2 {
            margin: 1px 0 3px;
            font-size: 13px;
            line-height: 1.25;
            font-weight: 800;
        }

        .required { color: var(--orange); }

        .helper {
            color: #929292;
            font-size: 9px;
            line-height: 1.45;
        }

        .section-content { margin-left: 35px; }

        .text-input, .text-area {
            display: block;
            width: 100%;
            border: 1px solid var(--line);
            border-radius: 11px;
            outline: none;
            background: #fff;
            color: #333;
            font-size: 9px;
            transition: border-color .18s, box-shadow .18s;
        }

        .text-input { height: 34px; padding: 0 12px; }
        .text-area { min-height: 82px; padding: 11px 12px; resize: vertical; }

        .text-input::placeholder, .text-area::placeholder { color: #aaa; }

        .text-input:focus, .text-area:focus {
            border-color: #ff9b76;
            box-shadow: 0 0 0 3px #fff1e9;
        }

        .counter {
            margin-top: 3px;
            color: #929292;
            text-align: right;
            font-size: 8px;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 7px;
        }

        .select-card {
            position: relative;
            display: flex;
            min-height: 42px;
            align-items: center;
            gap: 8px;
            padding: 6px 8px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: #fff;
            cursor: pointer;
            transition: border-color .18s, background .18s, box-shadow .18s;
        }

        .select-card:hover { border-color: #ffb18f; }

        .select-card:has(input:checked) {
            border-color: #ff8c61;
            background: #fffaf7;
            box-shadow: 0 0 0 2px #fff1e9;
        }

        .select-card input {
            position: absolute;
            right: 8px;
            width: 11px;
            height: 11px;
            margin: 0;
            accent-color: var(--orange);
        }

        .category-icon {
            display: grid;
            width: 24px;
            height: 24px;
            flex: 0 0 24px;
            place-items: center;
            border-radius: 7px;
            background: #fff0e5;
            font-size: 14px;
        }

        .choice-label {
            padding-right: 12px;
            font-size: 8px;
            line-height: 1.25;
            font-weight: 700;
        }

        .location-row { display: flex; gap: 8px; }
        .location-row .text-input { flex: 1; min-width: 0; }

        .map-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            min-width: 91px;
            padding: 0 10px;
            border: 1px solid #ff8158;
            border-radius: 10px;
            color: var(--orange);
            background: #fff;
            font-size: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        .urgency-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 7px;
        }

        .urgency-card { min-height: 43px; }
        .urgency-card .choice-label { display: block; padding-right: 13px; }
        .urgency-card input { top: 50%; transform: translateY(-50%); }

        .urgency-dot {
            width: 11px;
            height: 11px;
            flex: 0 0 11px;
            border-radius: 50%;
        }

        .low { background: #2fc45b; }
        .medium { background: #ffc400; }
        .high { background: #ff3d4e; }
        .unsure { background: #a8a8a8; }

        .choice-subtitle {
            display: block;
            margin-top: 2px;
            color: #999;
            font-size: 7px;
            font-weight: 400;
        }

        .upload-box {
            display: flex;
            min-height: 126px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 14px;
            border: 1px solid var(--line);
            border-radius: 11px;
            color: #929292;
            text-align: center;
            cursor: pointer;
            transition: border-color .18s, background .18s;
        }

        .upload-box:hover, .upload-box.dragging {
            border-color: #ff946e;
            background: #fffaf7;
        }

        .upload-icon { margin-bottom: 7px; color: var(--orange); }
        .upload-title { margin-bottom: 4px; color: #222; font-size: 10px; font-weight: 800; }
        .upload-help { font-size: 8px; line-height: 1.5; }
        .upload-help strong { color: #777; font-weight: 600; }

        .file-name {
            max-width: 100%;
            margin-top: 6px;
            overflow: hidden;
            color: var(--orange);
            font-size: 8px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .submit-button {
            display: block;
            width: calc(100% - 35px);
            min-height: 34px;
            margin: 3px 0 0 35px;
            border: 0;
            border-radius: 30px;
            color: #fff;
            background: linear-gradient(100deg, #ff4b22 0%, #ff9856 100%);
            box-shadow: 0 4px 10px rgba(255, 103, 55, .2);
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
        }

        .submit-button:hover { filter: brightness(1.03); }

        .privacy-note {
            margin: 8px 0 0 35px;
            color: #999;
            text-align: center;
            font-size: 8px;
        }

        .sidebar { display: flex; flex-direction: column; gap: 12px; }

        .side-card {
            padding: 15px 15px 14px;
            border-radius: 13px;
            background: #fff;
            box-shadow: 0 6px 22px rgba(255, 120, 65, .10);
        }

        .side-card h2 {
            margin: 0 0 7px;
            font-size: 11px;
            line-height: 1.35;
            font-weight: 800;
        }

        .side-card h2 .accent { color: var(--orange); }
        .side-card p { margin: 0; color: #898989; font-size: 9px; line-height: 1.55; }

        .community-art {
            display: flex;
            height: 126px;
            align-items: center;
            justify-content: center;
            margin-top: 9px;
            overflow: hidden;
            border-radius: 10px;
            background: linear-gradient(145deg, #fff0e6, #ffe0ca);
        }

        .community-art svg { width: 100%; height: 100%; }

        .side-title {
            display: flex;
            align-items: center;
            gap: 7px;
            margin-bottom: 10px !important;
        }

        .side-title-icon { color: var(--orange); font-size: 14px; }

        .tips-list, .process-list {
            display: flex;
            flex-direction: column;
            gap: 9px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .tips-list li, .process-list li {
            display: flex;
            align-items: flex-start;
            gap: 7px;
            color: #242424;
            font-size: 8px;
            line-height: 1.4;
        }

        .list-number {
            display: grid;
            width: 15px;
            height: 15px;
            flex: 0 0 15px;
            place-items: center;
            border-radius: 50%;
            color: #fff;
            background: var(--orange);
            font-size: 8px;
            font-weight: 800;
        }

        .process-list { gap: 11px; }
        .process-list strong { display: block; font-size: 8px; }
        .process-list small { display: block; margin-top: 2px; color: #999; font-size: 7px; line-height: 1.4; }

        .volunteer-cta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-top: 24px;
            padding: 18px 20px;
            border-radius: 10px;
            color: #fff;
            background: linear-gradient(100deg, #080808, #a84b1e);
        }

        .volunteer-cta strong { font-size: 11px; }
        .volunteer-cta p { margin: 5px 0 0; color: #e0e0e0; font-size: 9px; line-height: 1.5; }

        .volunteer-button {
            flex: 0 0 auto;
            padding: 9px 17px;
            border: 0;
            border-radius: 30px;
            color: #fff;
            background: linear-gradient(100deg, #ff5528, #ff9856);
            font-size: 9px;
            font-weight: 700;
            cursor: pointer;
        }

        .mobile-only { display: none; }

        @media (max-width: 900px) and (min-width: 701px) {
            .report-page { padding: 34px 30px 44px; }
            .report-layout { grid-template-columns: minmax(0, 1fr) 225px; gap: 13px; }
            .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .section-content { margin-left: 32px; }
        }

        @media (max-width: 700px) {
            body { background: #fff; }
            .report-page { padding: 19px 15px 32px; }
            .intro { margin-bottom: 19px; }
            .eyebrow { min-height: 18px; padding: 4px 11px; font-size: 8px; }
            .intro h1 {
                margin: 11px 0 7px;
                font-size: 24px;
                line-height: 1.2;
                letter-spacing: -.75px;
            }
            .intro p { font-size: 10px; line-height: 1.55; }
            .desktop-break { display: none; }
            .mobile-only { display: initial; }
            .report-layout { display: block; }
            .report-form { padding: 17px 12px 17px; border-radius: 13px; box-shadow: 0 5px 20px rgba(255, 100, 40, .10); }
            .form-section { margin-bottom: 20px; }
            .section-heading { gap: 9px; margin-bottom: 8px; }
            .step-number { width: 25px; height: 25px; flex-basis: 25px; font-size: 11px; }
            .section-heading h2 { font-size: 12px; }
            .helper { font-size: 8px; }
            .section-content { margin-left: 34px; }
            .text-input { height: 33px; }
            .text-area { min-height: 78px; }
            .text-input, .text-area { border-radius: 9px; font-size: 8px; }
            .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 6px; }
            .select-card { min-height: 39px; gap: 6px; padding: 5px 6px; border-radius: 9px; }
            .category-icon { width: 22px; height: 22px; flex-basis: 22px; font-size: 12px; }
            .choice-label { font-size: 7px; }
            .select-card input { right: 6px; width: 10px; height: 10px; }
            .location-row { gap: 6px; }
            .map-button { min-width: 80px; padding: 0 7px; font-size: 7px; }
            .urgency-grid { grid-template-columns: 1fr; gap: 6px; }
            .urgency-card { min-height: 39px; }
            .urgency-card .choice-label { font-size: 8px; }
            .choice-subtitle { font-size: 7px; }
            .upload-box { min-height: 116px; }
            .upload-title { font-size: 9px; }
            .upload-help { font-size: 7px; }
            .submit-button { width: calc(100% - 34px); min-height: 32px; margin-left: 34px; font-size: 10px; }
            .privacy-note { margin-left: 34px; font-size: 7px; }
            .sidebar { margin-top: 19px; gap: 11px; }
            .side-card { padding: 14px; border-radius: 12px; }
            .side-card h2 { font-size: 11px; }
            .side-card p { font-size: 8px; }
            .community-art { height: 155px; }
            .tips-list li { font-size: 8px; }
            .process-list strong { font-size: 8px; }
            .process-list small { font-size: 7px; }
            .volunteer-cta { display: none; }
        }

        @media (max-width: 360px) {
            .report-page { padding-right: 11px; padding-left: 11px; }
            .report-form { padding-right: 9px; padding-left: 9px; }
            .section-content { margin-left: 31px; }
            .category-grid { grid-template-columns: 1fr; }
            .select-card { min-height: 38px; }
        }
    
        /* Desktop scale refinement: larger, more readable form while keeping edge-to-edge layout */
        @media (min-width: 701px) {
            .report-page {
                padding-top: 42px;
                padding-bottom: 58px;
            }

            .intro { margin-bottom: 32px; }
            .eyebrow { min-height: 22px; padding: 5px 15px; font-size: 10px; }
            .intro h1 {
                margin-top: 15px;
                margin-bottom: 10px;
                font-size: clamp(34px, 2.65vw, 42px);
                letter-spacing: -1.5px;
            }
            .intro p { font-size: 14px; line-height: 1.6; }

            .report-layout {
                grid-template-columns: minmax(0, 1fr) minmax(270px, 19%);
                gap: 22px;
            }

            .report-form {
                padding: 27px 25px 25px;
                border-radius: 17px;
            }

            .form-section { margin-bottom: 29px; }
            .form-section:last-of-type { margin-bottom: 22px; }
            .section-heading { gap: 12px; margin-bottom: 11px; }
            .step-number {
                width: 31px;
                height: 31px;
                flex-basis: 31px;
                font-size: 14px;
            }
            .section-heading h2 { font-size: 16px; margin-top: 2px; }
            .helper { font-size: 11px; }
            .section-content { margin-left: 43px; }

            .text-input {
                height: 42px;
                padding: 0 14px;
                font-size: 11px;
                border-radius: 12px;
            }
            .text-area {
                min-height: 108px;
                padding: 13px 14px;
                font-size: 11px;
                border-radius: 12px;
            }
            .counter { font-size: 9px; margin-top: 4px; }

            .category-grid { gap: 9px; }
            .select-card {
                min-height: 51px;
                gap: 10px;
                padding: 8px 10px;
                border-radius: 11px;
            }
            .category-icon {
                width: 29px;
                height: 29px;
                flex-basis: 29px;
                font-size: 16px;
                border-radius: 8px;
            }
            .choice-label { font-size: 10px; padding-right: 14px; }
            .select-card input { width: 13px; height: 13px; right: 10px; }

            .location-row { gap: 10px; }
            .map-button {
                min-width: 110px;
                padding: 0 13px;
                border-radius: 11px;
                font-size: 10px;
            }

            .urgency-grid { gap: 9px; }
            .urgency-card { min-height: 53px; }
            .urgency-dot { width: 13px; height: 13px; flex-basis: 13px; }
            .urgency-card .choice-label { font-size: 10px; }
            .choice-subtitle { font-size: 9px; margin-top: 3px; }

            .upload-box {
                min-height: 155px;
                border-radius: 12px;
            }
            .upload-icon { width: 34px; height: 34px; margin-bottom: 9px; }
            .upload-title { font-size: 12px; }
            .upload-help { font-size: 9px; }
            .file-name { font-size: 9px; }

            .submit-button {
                width: calc(100% - 43px);
                min-height: 42px;
                margin-left: 43px;
                font-size: 13px;
            }
            .privacy-note { margin-left: 43px; font-size: 9px; }

            .sidebar { gap: 15px; }
            .side-card { padding: 19px 18px 17px; border-radius: 15px; }
            .side-card h2 { font-size: 14px; margin-bottom: 9px; }
            .side-card p { font-size: 10px; line-height: 1.6; }
            .community-art { height: 150px; margin-top: 12px; border-radius: 12px; }
            .side-title { gap: 8px; margin-bottom: 13px !important; }
            .side-title-icon { font-size: 16px; }
            .tips-list { gap: 11px; }
            .tips-list li, .process-list li { gap: 9px; font-size: 10px; }
            .list-number {
                width: 18px;
                height: 18px;
                flex-basis: 18px;
                font-size: 9px;
            }
            .process-list { gap: 14px; }
            .process-list strong { font-size: 10px; }
            .process-list small { font-size: 9px; }

            .volunteer-cta { margin-top: 30px; padding: 22px 25px; }
            .volunteer-cta strong { font-size: 13px; }
            .volunteer-cta p { font-size: 11px; }
            .volunteer-button { padding: 10px 19px; font-size: 10px; }
        }

    
        /* Larger desktop typography and controls for comfortable reading */
        @media (min-width: 701px) {
            .report-page {
                padding: 48px clamp(30px, 3vw, 56px) 64px;
            }

            .intro { margin-bottom: 38px; }
            .eyebrow { min-height: 25px; padding: 6px 17px; font-size: 12px; }
            .intro h1 {
                margin: 17px 0 12px;
                font-size: clamp(40px, 3.2vw, 50px);
                letter-spacing: -1.8px;
            }
            .intro p { font-size: 16px; line-height: 1.65; }

            .report-layout {
                grid-template-columns: minmax(0, 1fr) minmax(310px, 21%);
                gap: 26px;
            }

            .report-form {
                padding: 34px 32px 31px;
                border-radius: 19px;
            }

            .form-section { margin-bottom: 36px; }
            .form-section:last-of-type { margin-bottom: 27px; }
            .section-heading { gap: 14px; margin-bottom: 13px; }
            .step-number {
                width: 36px;
                height: 36px;
                flex-basis: 36px;
                font-size: 16px;
            }
            .section-heading h2 { font-size: 19px; margin: 2px 0 5px; }
            .helper { font-size: 13px; line-height: 1.5; }
            .section-content { margin-left: 50px; }

            .text-input {
                height: 49px;
                padding: 0 17px;
                font-size: 13px;
                border-radius: 13px;
            }
            .text-area {
                min-height: 132px;
                padding: 15px 17px;
                font-size: 13px;
                border-radius: 13px;
            }
            .counter { margin-top: 5px; font-size: 11px; }

            .category-grid { gap: 11px; }
            .select-card {
                min-height: 62px;
                gap: 12px;
                padding: 10px 13px;
                border-radius: 12px;
            }
            .category-icon {
                width: 35px;
                height: 35px;
                flex-basis: 35px;
                border-radius: 9px;
                font-size: 19px;
            }
            .choice-label { padding-right: 17px; font-size: 12px; line-height: 1.35; }
            .select-card input { right: 12px; width: 15px; height: 15px; }

            .location-row { gap: 12px; }
            .map-button {
                min-width: 132px;
                padding: 0 15px;
                border-radius: 12px;
                font-size: 12px;
            }

            .urgency-grid { gap: 11px; }
            .urgency-card { min-height: 65px; }
            .urgency-dot { width: 15px; height: 15px; flex-basis: 15px; }
            .urgency-card .choice-label { font-size: 12px; }
            .choice-subtitle { margin-top: 4px; font-size: 10px; }

            .upload-box {
                min-height: 190px;
                padding: 20px;
                border-radius: 13px;
            }
            .upload-icon { width: 42px; height: 42px; margin-bottom: 11px; }
            .upload-title { margin-bottom: 6px; font-size: 15px; }
            .upload-help { font-size: 11px; line-height: 1.6; }
            .file-name { font-size: 11px; }

            .submit-button {
                width: calc(100% - 50px);
                min-height: 50px;
                margin-left: 50px;
                font-size: 15px;
            }
            .privacy-note { margin: 11px 0 0 50px; font-size: 11px; }

            .sidebar { gap: 18px; }
            .side-card { padding: 23px 22px 21px; border-radius: 17px; }
            .side-card h2 { margin-bottom: 11px; font-size: 17px; }
            .side-card p { font-size: 12px; line-height: 1.65; }
            .community-art { height: 180px; margin-top: 15px; border-radius: 13px; }
            .side-title { gap: 9px; margin-bottom: 15px !important; }
            .side-title-icon { font-size: 19px; }
            .tips-list { gap: 13px; }
            .tips-list li, .process-list li { gap: 10px; font-size: 11px; line-height: 1.5; }
            .list-number {
                width: 21px;
                height: 21px;
                flex-basis: 21px;
                font-size: 11px;
            }
            .process-list { gap: 16px; }
            .process-list strong { font-size: 12px; }
            .process-list small { margin-top: 4px; font-size: 10px; line-height: 1.5; }

            .volunteer-cta {
                margin-top: 36px;
                padding: 26px 30px;
                border-radius: 13px;
            }
            .volunteer-cta strong { font-size: 15px; }
            .volunteer-cta p { margin-top: 7px; font-size: 13px; }
            .volunteer-button { padding: 12px 22px; font-size: 12px; }
        }

    </style>
</head>
<body>
<main class="report-page">
    <header class="intro">
        <span class="eyebrow">REPORT</span>
        <h1>Hi, <em>Nemo!</em> What Needs<br class="mobile-only"> Fixing Today?</h1>
        <p>
            Help us identify community problems so they can be addressed.<br class="desktop-break">
            Your report matters, and it could be the first step toward a positive change.
        </p>
    </header>

    <div class="report-layout">
        <form class="report-form" method="POST" action="#" enctype="multipart/form-data">
            @csrf

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">1</span>
                    <div>
                        <h2>Issue Title<span class="required">*</span></h2>
                        <div class="helper">Give a short and clear title for the issue.</div>
                    </div>
                </div>
                <div class="section-content">
                    <input class="text-input" type="text" name="title" maxlength="100"
                           placeholder="Example: Broken streetlight near school" required>
                    <div class="counter" id="titleCount">0/100</div>
                </div>
            </section>

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">2</span>
                    <div>
                        <h2>Category<span class="required">*</span></h2>
                        <div class="helper">Choose the category that best fits the issue.</div>
                    </div>
                </div>
                <div class="section-content category-grid">
                    <label class="select-card">
                        <span class="category-icon">🗑️</span><span class="choice-label">Trash Buildup</span>
                        <input type="radio" name="category" value="trash_buildup" required>
                    </label>
                    <label class="select-card">
                        <span class="category-icon">🧹</span><span class="choice-label">Dirty Public Areas</span>
                        <input type="radio" name="category" value="dirty_public_areas">
                    </label>
                    <label class="select-card">
                        <span class="category-icon">♻️</span><span class="choice-label">Improper Waste Disposal</span>
                        <input type="radio" name="category" value="improper_waste_disposal">
                    </label>
                    <label class="select-card">
                        <span class="category-icon">🌳</span><span class="choice-label">Polluted Environment</span>
                        <input type="radio" name="category" value="polluted_environment">
                    </label>
                    <label class="select-card">
                        <span class="category-icon">🏚️</span><span class="choice-label">Waste Facilities</span>
                        <input type="radio" name="category" value="waste_facilities">
                    </label>
                    <label class="select-card">
                        <span class="category-icon">🚯</span><span class="choice-label">Illegal Dumping</span>
                        <input type="radio" name="category" value="illegal_dumping">
                    </label>
                </div>
            </section>

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">3</span>
                    <div>
                        <h2>Issue Description<span class="required">*</span></h2>
                        <div class="helper">Explain what happened, what is damaged, and how it affects the community.</div>
                    </div>
                </div>
                <div class="section-content">
                    <textarea class="text-area" name="description" maxlength="500"
                              placeholder="Write a detailed description of the issue..." required></textarea>
                    <div class="counter" id="descriptionCount">0/500</div>
                </div>
            </section>

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">4</span>
                    <div>
                        <h2>Location<span class="required">*</span></h2>
                        <div class="helper">Enter the street, area, or nearby landmark.</div>
                    </div>
                </div>
                <div class="section-content location-row">
                    <input class="text-input" type="text" name="location"
                           placeholder="Street, area, or nearby landmark" required>
                    <button class="map-button" type="button">
                        <span aria-hidden="true">⌖</span> Add on Map
                    </button>
                </div>
            </section>

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">5</span>
                    <div>
                        <h2>How urgent is this issue?<span class="required">*</span></h2>
                        <div class="helper">Select the most appropriate urgency level.</div>
                    </div>
                </div>
                <div class="section-content urgency-grid">
                    <label class="select-card urgency-card">
                        <span class="urgency-dot low"></span>
                        <span class="choice-label">Low<span class="choice-subtitle">Not urgent</span></span>
                        <input type="radio" name="urgency" value="low" required>
                    </label>
                    <label class="select-card urgency-card">
                        <span class="urgency-dot medium"></span>
                        <span class="choice-label">Medium<span class="choice-subtitle">Needs attention soon</span></span>
                        <input type="radio" name="urgency" value="medium">
                    </label>
                    <label class="select-card urgency-card">
                        <span class="urgency-dot high"></span>
                        <span class="choice-label">High<span class="choice-subtitle">Potentially dangerous or has a big impact</span></span>
                        <input type="radio" name="urgency" value="high">
                    </label>
                    <label class="select-card urgency-card">
                        <span class="urgency-dot unsure"></span>
                        <span class="choice-label">Not sure<span class="choice-subtitle">I'm not sure</span></span>
                        <input type="radio" name="urgency" value="not_sure">
                    </label>
                </div>
            </section>

            <section class="form-section">
                <div class="section-heading">
                    <span class="step-number">6</span>
                    <div>
                        <h2>Upload Photo<span class="required">*</span></h2>
                        <div class="helper">Add a photo as evidence of the issue.</div>
                    </div>
                </div>
                <div class="section-content">
                    <label class="upload-box" for="photo" id="uploadBox">
                        <svg class="upload-icon" width="29" height="29" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                            <path d="M5 8.5A2.5 2.5 0 0 1 7.5 6H17" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                            <path d="M5 11v15h22V15" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="m8 22 5.2-5.4 3.7 3.5 3.1-3 3.8 4.9" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24 3v8M20 7h8" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                        </svg>
                        <span class="upload-title">Add a photo of the issue</span>
                        <span class="upload-help">Drag and drop a file here, or click to browse<br><strong>Supports JPG, PNG (Max 5MB)</strong></span>
                        <span class="file-name" id="fileName"></span>
                        <input id="photo" type="file" name="photo" accept="image/png,image/jpeg" hidden>
                    </label>
                </div>
            </section>

            <button class="submit-button" type="submit">Submit Report</button>
            <p class="privacy-note">♙ &nbsp; No account required. Anyone can submit a report.</p>
        </form>

        <aside class="sidebar">
            <section class="side-card">
                <h2>Report for a Better<br><span class="accent">Community</span></h2>
                <p>Your report helps us identify real problems in the community so they can be addressed. Together, we can create a cleaner, safer, and more comfortable environment for everyone.</p>
                <div class="community-art" aria-hidden="true">
                    <svg viewBox="0 0 260 150" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 116c-9-13-8-31 3-42 8-8 19-10 28-7M230 115c9-13 8-31-3-42-8-8-19-10-28-7" fill="none" stroke="#ff9a54" stroke-width="2" stroke-dasharray="3 4"/>
                        <path d="M39 39c7-11 19-12 26-3 8-10 21-5 21 6 0 10-21 22-21 22S39 52 39 42" fill="none" stroke="#ff6b39" stroke-width="2"/>
                        <path d="m211 27 12 12-15 3z" fill="#ff6b39"/>
                        <path d="M34 119c-7-10-4-24 7-30 8-5 18-2 23 5 3-13 19-17 28-7 7 8 4 20-4 26z" fill="#ffbd57"/>
                        <path d="M173 117c-6-10-3-23 8-29 9-5 18-1 22 7 5-12 21-14 29-4 6 8 3 20-6 26z" fill="#ff7c42"/>
                        <g transform="rotate(10 139 82)">
                            <rect x="105" y="24" width="69" height="111" rx="13" fill="#343b48"/>
                            <rect x="110" y="30" width="59" height="99" rx="8" fill="#fff"/>
                            <rect x="132" y="34" width="16" height="3" rx="1.5" fill="#343b48"/>
                            <rect x="118" y="45" width="19" height="16" rx="3" fill="#ffb04e"/>
                            <rect x="141" y="45" width="20" height="16" rx="3" fill="#ff7041"/>
                            <rect x="118" y="66" width="19" height="16" rx="3" fill="#77c9c1"/>
                            <rect x="141" y="66" width="20" height="16" rx="3" fill="#7b9de5"/>
                            <rect x="118" y="87" width="19" height="16" rx="3" fill="#f2c65d"/>
                            <rect x="141" y="87" width="20" height="16" rx="3" fill="#f28b73"/>
                            <circle cx="139" cy="119" r="3" fill="#d6d6d6"/>
                        </g>
                        <path d="M80 128c12-17 22-19 34-13 8 4 11 13 7 20H80z" fill="#ff8d4b"/>
                        <path d="M169 128c-5-15-1-24 10-27 10-3 19 5 22 17l-7 17h-25z" fill="#ff9b55"/>
                        <path d="m94 25 3-7m-7 11-7-2m111 12 7-6" stroke="#ff8a4d" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </section>

            <section class="side-card">
                <h2 class="side-title"><span class="side-title-icon">💡</span>Tips for a Good Report</h2>
                <ol class="tips-list">
                    <li><span class="list-number">1</span><span>Use a clear and specific title.</span></li>
                    <li><span class="list-number">2</span><span>Provide a detailed description.</span></li>
                    <li><span class="list-number">3</span><span>Include the exact location.</span></li>
                    <li><span class="list-number">4</span><span>Upload a recent and relevant photo.</span></li>
                    <li><span class="list-number">5</span><span>Choose the appropriate urgency level.</span></li>
                </ol>
            </section>

            <section class="side-card">
                <h2 class="side-title"><span class="side-title-icon">⚙️</span>What Happens Next?</h2>
                <ol class="process-list">
                    <li><span class="list-number">1</span><div><strong>Report Submitted</strong><small>Your report will be received by our team.</small></div></li>
                    <li><span class="list-number">2</span><div><strong>Under Review</strong><small>We will verify the information you provided.</small></div></li>
                    <li><span class="list-number">3</span><div><strong>Take Action</strong><small>The issue will be handled by the relevant team or opened for volunteer activities.</small></div></li>
                    <li><span class="list-number">4</span><div><strong>You'll See the Update</strong><small>Check the progress of your report using your tracking code.</small></div></li>
                </ol>
            </section>
        </aside>
    </div>

    <section class="volunteer-cta">
        <div>
            <strong>Want To Do More?</strong>
            <p>Join neighbors in clean-ups, repair drives and donation events happening<br>near you.</p>
        </div>
        <button class="volunteer-button" type="button">Go to Volunteer</button>
    </section>
</main>

<script>
    const titleInput = document.querySelector('[name="title"]');
    const descriptionInput = document.querySelector('[name="description"]');
    const titleCount = document.getElementById('titleCount');
    const descriptionCount = document.getElementById('descriptionCount');

    titleInput?.addEventListener('input', () => {
        titleCount.textContent = `${titleInput.value.length}/100`;
    });

    descriptionInput?.addEventListener('input', () => {
        descriptionCount.textContent = `${descriptionInput.value.length}/500`;
    });

    const photoInput = document.getElementById('photo');
    const uploadBox = document.getElementById('uploadBox');
    const fileName = document.getElementById('fileName');

    function showSelectedFile(file) {
        if (!file) return;
        if (!['image/jpeg', 'image/png'].includes(file.type)) {
            alert('Please upload a JPG or PNG image.');
            photoInput.value = '';
            fileName.textContent = '';
            return;
        }
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must not exceed 5MB.');
            photoInput.value = '';
            fileName.textContent = '';
            return;
        }
        fileName.textContent = file.name;
    }

    photoInput?.addEventListener('change', () => showSelectedFile(photoInput.files?.[0]));

    ['dragenter', 'dragover'].forEach(eventName => {
        uploadBox?.addEventListener(eventName, event => {
            event.preventDefault();
            uploadBox.classList.add('dragging');
        });
    });

    ['dragleave', 'drop'].forEach(eventName => {
        uploadBox?.addEventListener(eventName, event => {
            event.preventDefault();
            uploadBox.classList.remove('dragging');
        });
    });

    uploadBox?.addEventListener('drop', event => {
        const file = event.dataTransfer?.files?.[0];
        if (!file) return;
        const transfer = new DataTransfer();
        transfer.items.add(file);
        photoInput.files = transfer.files;
        showSelectedFile(file);
    });
</script>
</body>
</html>
