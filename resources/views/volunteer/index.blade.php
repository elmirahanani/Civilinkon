
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer | Civilinkon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --orange: #ff7045;
            --orange-light: #ff9873;
            --peach: #ffddca;
            --black: #080808;
            --gray: #858585;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #fff;
            color: #111;
        }

        button {
            font-family: inherit;
            cursor: pointer;
        }

        /* PAGE */

        .container {
            width: calc(100% - 96px);
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 47px;
            padding-bottom: 80px;
        }

        /* HEADER */

        .eyebrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 22px;
            padding: 0 15px;
            margin-bottom: 13px;
            background: linear-gradient(100deg, #85310c, #a84313);
            color: white;
            border-radius: 30px;
            font-size: 8px;
            font-weight: 700;
        }

        .page-title {
            font-size: 28px;
            line-height: 1.35;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 12px;
        }

        .page-title span {
            color: #ff4d1d;
        }

        .page-description {
            max-width: 550px;
            color: var(--gray);
            font-size: 12px;
            line-height: 1.65;
        }

        /* FILTER */

        .filter-wrapper {
            margin-top: 33px;
            margin-bottom: 33px;
        }

        .filter-bar {
            display: flex;
            width: 430px;
            max-width: 100%;
            height: 40px;
            padding: 5px;
            background: var(--black);
            border-radius: 50px;
        }

        .filter-button {
            flex: 1;
            height: 30px;
            border: none;
            border-radius: 30px;
            background: transparent;
            color: #ddd;
            font-size: 9px;
            font-weight: 500;
            transition: .25s;
        }

        .filter-button.active {
            color: white;
            background: linear-gradient(110deg, #ff693e, #ff9673);
            box-shadow: 0 2px 8px rgba(255, 103, 65, .35);
        }

        .filter-button:hover:not(.active) {
            color: var(--orange-light);
        }

        /* GRID */

        .activity-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 19px 12px;
            align-items: start;
        }

        /* CARD */

        .activity-card {
            min-width: 0;
            overflow: hidden;
            background: white;
            border: 1px solid var(--peach);
            border-radius: 11px;
            transition: transform .2s, box-shadow .2s;
        }

        .activity-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(255, 112, 69, .10);
        }

        .activity-card.hidden {
            display: none;
        }

        .image-wrapper {
            width: 100%;
            height: 138px;
            position: relative;
            overflow: hidden;
            background: #f7e8df;
        }

        .activity-image {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .3s;
        }

        .activity-card:hover .activity-image {
            transform: scale(1.04);
        }

        .category-label {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 11px;
            background: #050505;
            color: white;
            border-radius: 20px;
            font-size: 9px;
        }

        .card-content {
            padding: 14px 13px;
        }

        .card-title {
            font-size: 14px;
            font-weight: 800;
            line-height: 1.5;
            margin-bottom: 4px;
            letter-spacing: -.3px;
        }

        .card-description {
            color: #888;
            font-size: 10px;
            line-height: 1.55;
            min-height: 31px;
            margin-bottom: 13px;
        }

        /* INFO */

        .activity-info {
            display: flex;
            flex-direction: column;
            gap: 11px;
            margin-bottom: 17px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #181818;
            font-size: 9px;
            font-weight: 500;
        }

        .info-icon {
            width: 13px;
            height: 13px;
            display: inline-flex;
            flex-shrink: 0;
            color: #ff542c;
        }

        .info-icon svg {
            width: 13px;
            height: 13px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* PROGRESS */

        .progress-info {
            display: flex;
            align-items: center;
            gap: 3px;
            color: #858585;
            font-size: 9px;
            margin-bottom: 7px;
            white-space: normal;
        }

        .progress-info strong {
            color: #181818;
        }

        .progress-track {
            height: 6px;
            width: 100%;
            background: #fff0e8;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 14px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ff693f, #ff9874);
            border-radius: 20px;
        }

        /* BUTTONS */

        .card-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 9px;
        }

        .card-button {
            min-width: 0;
            height: 32px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 600;
            white-space: nowrap;
            transition: .2s;
        }

        .detail-button {
            border: 1px solid #ffd2bd;
            background: white;
            color: #ff7045;
        }

        .join-button {
            border: none;
            background: linear-gradient(110deg, #ff7045, #ff9873);
            color: white;
        }

        .card-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(255, 112, 69, .15);
        }

        /* EMPTY STATE */

        .empty-state {
            display: none;
            text-align: center;
            padding: 40px 20px;
            color: var(--gray);
            font-size: 12px;
        }

        /* MODAL */

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 1000;
            background: rgba(0, 0, 0, .5);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            position: relative;
            width: 100%;
            max-width: 430px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 28px;
            border-radius: 17px;
            background: white;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 17px;
            width: 30px;
            height: 30px;
            border: none;
            border-radius: 50%;
            background: #fff0e8;
            color: #ff7045;
            font-size: 19px;
        }

        .modal-tag {
            margin-bottom: 12px;
            color: #ff7045;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .modal h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .modal-description {
            color: #858585;
            font-size: 11px;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .modal-details {
            padding: 14px;
            margin-bottom: 18px;
            border-radius: 10px;
            background: #fff7f2;
        }

        .modal-details div {
            margin: 7px 0;
            font-size: 10px;
        }

        .form-group {
            margin-bottom: 13px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 10px;
            font-weight: 700;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #f0d8cc;
            border-radius: 8px;
            outline: none;
            font-family: inherit;
            font-size: 11px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--orange);
        }

        .submit-button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(110deg, #ff7045, #ff9873);
            color: white;
            font-size: 11px;
            font-weight: 700;
        }

        .success-message {
            display: none;
            padding: 14px;
            border-radius: 9px;
            background: #fff0e8;
            color: #b64b2d;
            font-size: 11px;
            line-height: 1.7;
        }

        /* RESPONSIVE TABLET */

        @media (max-width: 900px) {
            .container {
                width: calc(100% - 60px);
            }

            .activity-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px;
            }

            .image-wrapper {
                height: 160px;
            }

            .card-content {
                padding: 15px;
            }

            .card-title {
                font-size: 14px;
            }

            .card-description {
                font-size: 10px;
            }
        }

        /* RESPONSIVE MOBILE */

        @media (max-width: 560px) {
            .container {
                width: calc(100% - 36px);
                padding-top: 30px;
            }

            .page-title {
                font-size: 23px;
                letter-spacing: -.8px;
            }

            .page-description {
                font-size: 11px;
            }

            .filter-wrapper {
                margin-top: 25px;
                margin-bottom: 25px;
            }

            .filter-bar {
                width: 100%;
                height: 42px;
            }

            .filter-button {
                font-size: 8px;
            }

            .activity-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .image-wrapper {
                height: 205px;
            }

            .card-content {
                padding: 15px;
            }

            .card-title {
                font-size: 15px;
            }

            .card-description {
                font-size: 11px;
                min-height: auto;
            }

            .info-row {
                font-size: 10px;
            }

            .progress-info {
                font-size: 10px;
            }

            .card-button {
                height: 38px;
                font-size: 11px;
            }

            .modal {
                padding: 23px 19px;
            }
        }

        @media (max-width: 360px) {
            .page-title {
                font-size: 21px;
            }

            .card-buttons {
                gap: 6px;
            }

            .card-button {
                font-size: 9px;
            }
        }
    </style>
</head>

<body>

<main class="container">

    <!-- HEADER -->

    <header>
        <div class="eyebrow">LET'S VOLUNTEER</div>

        <h1 class="page-title">
            Lend a Hand, <span>Together We On!</span>
        </h1>

        <p class="page-description">
            Pick a mission, show up, and watch your neighborhood glow up.
            No superpowers needed, just good vibes and a free morning.
        </p>
    </header>


    <!-- FILTER -->

    <section class="filter-wrapper">

        <div class="filter-bar">

            <button class="filter-button" data-filter="all">
                All
            </button>

            <button class="filter-button active" data-filter="clean-up">
                Clean-Up
            </button>

            <button class="filter-button" data-filter="reuse">
                Reuse
            </button>

            <button class="filter-button" data-filter="sorting">
                Sorting
            </button>

        </div>

    </section>


    <!-- ACTIVITY CARDS -->

    <section class="activity-grid" id="activityGrid">

        <!-- CARD 1 -->

        <article class="activity-card" data-category="clean-up">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=700&h=400&fit=crop"
                    alt="Neighborhood trash pickup">

                <span class="category-label">Clean-Up</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Neighborhood Trash Pickup</h2>

                <p class="card-description">
                    Pick up the trash around your neighborhood
                    for a sparkling park.
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Sat, Oct 31
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        08:00 – 11:00
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        Asteriapple Park
                    </div>

                </div>

                <div class="progress-info">
                    <strong>12</strong> of 20 neighbors joined · 8 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:60%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(0)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(0)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>


        <!-- CARD 2 -->

        <article class="activity-card" data-category="clean-up">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&h=400&fit=crop"
                    alt="Restore our green space">

                <span class="category-label">Clean-Up</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Restore Our Green Space</h2>

                <p class="card-description">
                    Help remove scattered waste and restore a
                    cleaner, greener public space.
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Sun, Nov 01
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        07:30 – 10:30
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        Sagara Beach
                    </div>

                </div>

                <div class="progress-info">
                    <strong>9</strong> of 15 volunteers joined · 6 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:60%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(1)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(1)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>


        <!-- CARD 3 -->

        <article class="activity-card" data-category="sorting">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1605600659873-d808a13e4d9a?w=700&h=400&fit=crop"
                    alt="Sort it save it">

                <span class="category-label">Sorting</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Sort It, Save It!</h2>

                <p class="card-description">
                    Help sort collected waste into recyclables,
                    organic waste, and other materials.
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Mon, Nov 2
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        08:00 – 11:00
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        EcoHub Center
                    </div>

                </div>

                <div class="progress-info">
                    <strong>8</strong> of 12 volunteers joined · 4 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:66.7%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(2)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(2)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>


        <!-- CARD 4 -->

        <article class="activity-card" data-category="clean-up">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1472396961693-142e6e269027?w=700&h=400&fit=crop"
                    alt="Clean together shine together">

                <span class="category-label">Clean-Up</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Clean Together, Shine Together</h2>

                <p class="card-description">
                    Team up with neighbors to clean shared spaces
                    and make our community shine!
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Sat, Nov 7
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        07:00 – 10:00
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        Land of Spirit Cluster
                    </div>

                </div>

                <div class="progress-info">
                    <strong>18</strong> of 30 neighbors joined · 12 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:60%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(3)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(3)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>


        <!-- CARD 5 -->

        <article class="activity-card" data-category="reuse">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?w=700&h=400&fit=crop"
                    alt="Trash to treasure workshop">

                <span class="category-label">Reuse</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Trash to Treasure Workshop</h2>

                <p class="card-description">
                    Turn everyday waste into creative crafts,
                    planters, and useful home organizers!
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Sat, Nov 14
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        10:00 – 13:00
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        Silly Forest Park
                    </div>

                </div>

                <div class="progress-info">
                    <strong>14</strong> of 20 volunteers joined · 6 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:70%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(4)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(4)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>


        <!-- CARD 6 -->

        <article class="activity-card" data-category="reuse">

            <div class="image-wrapper">
                <img class="activity-image"
                    src="https://images.unsplash.com/photo-1452860606245-08befc0ff44b?w=700&h=400&fit=crop"
                    alt="Give plastic a second life">

                <span class="category-label">Reuse</span>
            </div>

            <div class="card-content">

                <h2 class="card-title">Give Plastic a Second Life</h2>

                <p class="card-description">
                    Transform used plastic bottles into colorful
                    decorations and eco-friendly creations!
                </p>

                <div class="activity-info">

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4M8 3v4M3 10h18"/>
                            </svg>
                        </span>
                        Sun, Nov 15
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="13" r="8"/>
                                <path d="M12 9v4l3 2M9 2h6"/>
                            </svg>
                        </span>
                        09:00 – 12:00
                    </div>

                    <div class="info-row">
                        <span class="info-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </span>
                        Greenovate Center
                    </div>

                </div>

                <div class="progress-info">
                    <strong>8</strong> of 15 volunteers joined · 7 spots left
                </div>

                <div class="progress-track">
                    <div class="progress-fill" style="width:53.3%"></div>
                </div>

                <div class="card-buttons">
                    <button class="card-button detail-button"
                        onclick="showDetails(5)">
                        Peek at plan
                    </button>

                    <button class="card-button join-button"
                        onclick="joinActivity(5)">
                        I'm in! Join
                    </button>
                </div>

            </div>
        </article>

    </section>


    <div class="empty-state" id="emptyState">
        No activities found in this category.
    </div>

</main>


<!-- MODAL -->

<div class="modal-overlay" id="activityModal">

    <div class="modal">

        <button class="modal-close" onclick="closeModal()">×</button>

        <div class="modal-tag" id="modalTag">LET'S VOLUNTEER</div>

        <h2 id="modalTitle"></h2>

        <p class="modal-description" id="modalDescription"></p>

        <div class="modal-details" id="modalDetails">
            <div id="modalDate"></div>
            <div id="modalTime"></div>
            <div id="modalLocation"></div>
            <div id="modalParticipants"></div>
        </div>

        <form id="joinForm">

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" required
                    placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" required
                    placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" required
                    placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="reason">Your Motivation</label>
                <textarea id="reason" rows="3"
                    placeholder="Why do you want to join?"></textarea>
            </div>

            <button type="submit" class="submit-button">
                Submit Registration →
            </button>

        </form>

        <div class="success-message" id="successMessage"></div>

    </div>

</div>


<script>

    // ACTIVITY DATA

    const activities = [
        {
            title: "Neighborhood Trash Pickup",
            category: "Clean-Up",
            description: "Pick up the trash around your neighborhood for a sparkling park.",
            date: "Sat, Oct 31",
            time: "08:00 – 11:00",
            location: "Asteriapple Park",
            participants: "12 of 20 neighbors joined"
        },
        {
            title: "Restore Our Green Space",
            category: "Clean-Up",
            description: "Help remove scattered waste and restore a cleaner, greener public space.",
            date: "Sun, Nov 01",
            time: "07:30 – 10:30",
            location: "Sagara Beach",
            participants: "9 of 15 volunteers joined"
        },
        {
            title: "Sort It, Save It!",
            category: "Sorting",
            description: "Help sort collected waste into recyclables, organic waste, and other materials.",
            date: "Mon, Nov 2",
            time: "08:00 – 11:00",
            location: "EcoHub Center",
            participants: "8 of 12 volunteers joined"
        },
        {
            title: "Clean Together, Shine Together",
            category: "Clean-Up",
            description: "Team up with neighbors to clean shared spaces and make our community shine!",
            date: "Sat, Nov 7",
            time: "07:00 – 10:00",
            location: "Land of Spirit Cluster",
            participants: "18 of 30 neighbors joined"
        },
        {
            title: "Trash to Treasure Workshop",
            category: "Reuse",
            description: "Turn everyday waste into creative crafts, planters, and useful home organizers!",
            date: "Sat, Nov 14",
            time: "10:00 – 13:00",
            location: "Silly Forest Park",
            participants: "14 of 20 volunteers joined"
        },
        {
            title: "Give Plastic a Second Life",
            category: "Reuse",
            description: "Transform used plastic bottles into colorful decorations and eco-friendly creations!",
            date: "Sun, Nov 15",
            time: "09:00 – 12:00",
            location: "Greenovate Center",
            participants: "8 of 15 volunteers joined"
        }
    ];


    // FILTER

    const filterButtons =
        document.querySelectorAll(".filter-button");

    const cards =
        document.querySelectorAll(".activity-card");

    const emptyState =
        document.getElementById("emptyState");

    function filterActivities(category) {

        let visible = 0;

        cards.forEach(card => {

            const match =
                category === "all" ||
                card.dataset.category === category;

            card.classList.toggle("hidden", !match);

            if (match) visible++;

        });

        emptyState.style.display =
            visible === 0 ? "block" : "none";

    }

    filterButtons.forEach(button => {

        button.addEventListener("click", function() {

            filterButtons.forEach(item => {
                item.classList.remove("active");
            });

            this.classList.add("active");

            filterActivities(this.dataset.filter);

        });

    });

    // DEFAULT: CLEAN-UP FILTER
    filterActivities("clean-up");


    // MODAL

    const modal =
        document.getElementById("activityModal");

    const joinForm =
        document.getElementById("joinForm");

    const successMessage =
        document.getElementById("successMessage");

    function showDetails(index) {

        const activity = activities[index];

        document.getElementById("modalTag").textContent =
            activity.category;

        document.getElementById("modalTitle").textContent =
            activity.title;

        document.getElementById("modalDescription").textContent =
            activity.description;

        document.getElementById("modalDate").textContent =
            "📅 " + activity.date;

        document.getElementById("modalTime").textContent =
            "◷ " + activity.time;

        document.getElementById("modalLocation").textContent =
            "⌖ " + activity.location;

        document.getElementById("modalParticipants").textContent =
            "👥 " + activity.participants;

        document.getElementById("modalDetails").style.display =
            "block";

        joinForm.style.display = "none";
        successMessage.style.display = "none";

        modal.classList.add("show");

    }


    function joinActivity(index) {

        const activity = activities[index];

        document.getElementById("modalTag").textContent =
            "VOLUNTEER REGISTRATION";

        document.getElementById("modalTitle").textContent =
            "Join " + activity.title;

        document.getElementById("modalDescription").textContent =
            "Complete the form below to express your interest in joining this activity.";

        document.getElementById("modalDate").textContent =
            "📅 " + activity.date;

        document.getElementById("modalTime").textContent =
            "◷ " + activity.time;

        document.getElementById("modalLocation").textContent =
            "⌖ " + activity.location;

        document.getElementById("modalParticipants").textContent =
            "👥 " + activity.participants;

        document.getElementById("modalDetails").style.display =
            "block";

        joinForm.reset();
        joinForm.style.display = "block";
        successMessage.style.display = "none";

        modal.classList.add("show");

    }


    function closeModal() {
        modal.classList.remove("show");
    }

    modal.addEventListener("click", function(event) {
        if (event.target === modal) closeModal();
    });

    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") closeModal();
    });


    // FRONTEND DEMO FORM

    joinForm.addEventListener("submit", function(event) {

        event.preventDefault();

        const name =
            document.getElementById("fullName").value;

        joinForm.style.display = "none";

        successMessage.textContent =
            "Thank you, " + name +
            "! Your interest has been recorded in this frontend demo.";

        successMessage.style.display = "block";

    });

</script>

</body>
</html>
