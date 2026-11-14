
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer | Civilinkon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --orange: #ff784f;
            --orange-dark: #ed6842;
            --peach: #fff0e9;
            --peach-border: #f5cdbd;
            --cream: #fffaf7;
            --dark: #242424;
            --muted: #77716e;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--cream);
            color: var(--dark);
        }

        button, input, select, textarea {
            font: inherit;
        }

        button {
            cursor: pointer;
        }

        /* NAVBAR */

        .navbar {
            height: 82px;
            padding: 0 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--white);
            border-bottom: 1px solid #f3e8e2;
        }

        .brand {
            font-size: 23px;
            font-weight: 800;
            color: #173e35;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
        }

        .nav-links a {
            color: #555;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--orange-dark);
        }

        .nav-join {
            background: var(--orange);
            color: white !important;
            padding: 12px 23px;
            border-radius: 30px;
            font-weight: 600 !important;
        }

        /* MAIN */

        .container {
            max-width: 1240px;
            width: 84%;
            margin: auto;
        }

        .hero {
            padding: 68px 0 35px;
            text-align: center;
        }

        .hero-label {
            display: inline-block;
            background: var(--peach);
            color: var(--orange-dark);
            padding: 8px 19px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 19px;
        }

        .hero h1 {
            font-size: 43px;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -1.8px;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: var(--orange);
        }

        .hero p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
            max-width: 650px;
            margin: auto;
        }

        /* FILTER */

        .filter-wrapper {
            display: flex;
            justify-content: center;
            margin: 24px 0 36px;
        }

        .filters {
            display: flex;
            gap: 7px;
            padding: 6px;
            background: #242424;
            border-radius: 40px;
        }

        .filter-btn {
            padding: 10px 23px;
            border: none;
            border-radius: 30px;
            background: transparent;
            color: white;
            font-size: 12px;
            font-weight: 500;
            transition: .25s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--orange);
            color: white;
        }

        /* SECTION TITLE */

        .section-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .section-heading h2 {
            font-size: 21px;
            font-weight: 700;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 12px;
        }

        /* CARDS */

        .volunteer-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            padding-bottom: 80px;
        }

        .volunteer-card {
            background: white;
            border: 1px solid var(--peach-border);
            border-radius: 19px;
            overflow: hidden;
            transition: transform .25s, box-shadow .25s;
        }

        .volunteer-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(70, 44, 30, .09);
        }

        .card-image {
            height: 195px;
            position: relative;
            overflow: hidden;
            background: var(--peach);
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s;
        }

        .volunteer-card:hover .card-image img {
            transform: scale(1.05);
        }

        .category-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: white;
            color: var(--orange-dark);
            border-radius: 30px;
            padding: 7px 13px;
            font-size: 10px;
            font-weight: 700;
        }

        .card-content {
            padding: 19px;
        }

        .card-content h3 {
            font-size: 17px;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .card-description {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.8;
            min-height: 40px;
            margin-bottom: 15px;
        }

        .card-info {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
            margin-bottom: 17px;
        }

        .info-item {
            color: #77716e;
            font-size: 10px;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 10px;
            margin-bottom: 8px;
        }

        .progress-header strong {
            color: var(--orange-dark);
        }

        .progress-track {
            height: 7px;
            width: 100%;
            border-radius: 20px;
            background: #f5e9e3;
            overflow: hidden;
            margin-bottom: 19px;
        }

        .progress-fill {
            height: 100%;
            background: var(--orange);
            border-radius: 20px;
        }

        .card-actions {
            display: flex;
            gap: 9px;
        }

        .btn {
            border: none;
            padding: 11px 10px;
            border-radius: 9px;
            font-size: 11px;
            font-weight: 600;
            flex: 1;
            transition: .2s;
        }

        .btn-outline {
            background: var(--peach);
            color: var(--orange-dark);
        }

        .btn-primary {
            background: var(--orange);
            color: white;
        }

        .btn:hover {
            opacity: .85;
            transform: translateY(-2px);
        }

        .empty-state {
            display: none;
            text-align: center;
            padding: 50px 20px;
            color: var(--muted);
        }

        /* FOOTER */

        footer {
            background: #173e35;
            color: white;
            padding: 28px 8%;
            text-align: center;
            font-size: 11px;
        }

        footer span {
            color: #ffb49a;
        }

        /* MODAL */

        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(30, 25, 22, .55);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 1000;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            background: white;
            width: 100%;
            max-width: 490px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 19px;
            padding: 28px;
            position: relative;
            animation: modalIn .2s ease;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            right: 19px;
            top: 16px;
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 50%;
            background: var(--peach);
            color: var(--orange-dark);
            font-size: 19px;
        }

        .modal h2 {
            font-size: 22px;
            margin: 12px 35px 10px 0;
        }

        .modal p {
            font-size: 12px;
            line-height: 1.8;
            color: var(--muted);
            margin-bottom: 18px;
        }

        .modal-form label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .modal-form input,
        .modal-form textarea {
            width: 100%;
            border: 1px solid #eaded8;
            padding: 12px;
            border-radius: 9px;
            margin-bottom: 15px;
            outline: none;
            font-size: 12px;
        }

        .modal-form input:focus,
        .modal-form textarea:focus {
            border-color: var(--orange);
        }

        .modal-submit {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: var(--orange);
            color: white;
            font-weight: 600;
            font-size: 12px;
        }

        .modal-message {
            display: none;
            margin-top: 15px;
            background: var(--peach);
            color: var(--orange-dark);
            padding: 13px;
            border-radius: 9px;
            font-size: 11px;
            line-height: 1.7;
        }

        /* RESPONSIVE */

        @media (max-width: 1000px) {
            .container {
                width: 90%;
            }

            .volunteer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 650px) {
            .navbar {
                height: auto;
                padding: 20px 5%;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links a {
                font-size: 11px;
            }

            .hero {
                padding-top: 45px;
            }

            .hero h1 {
                font-size: 31px;
            }

            .hero p {
                font-size: 12px;
            }

            .filters {
                flex-wrap: wrap;
                justify-content: center;
                border-radius: 18px;
            }

            .filter-btn {
                padding: 9px 13px;
                font-size: 10px;
            }

            .volunteer-grid {
                grid-template-columns: 1fr;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="/" class="brand">CIVILINKON.</a>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/report">Report</a>
            <a href="/track">Track My Report</a>
            <a href="/volunteer" class="active">Volunteer</a>
            <a href="/login" class="nav-join">Get Started</a>
        </div>
    </nav>

    <!-- HERO -->
    <main class="container">

        <section class="hero">
            <div class="hero-label">LET'S VOLUNTEER</div>

            <h1>
                Lend a Hand,<br>
                <span>Together We On!</span>
            </h1>

            <p>
                Small actions can make a big difference.
                Join our community and be part of a cleaner,
                greener, and more caring environment.
            </p>
        </section>

        <!-- FILTER -->
        <div class="filter-wrapper">
            <div class="filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="clean-up">Clean-Up</button>
                <button class="filter-btn" data-filter="reuse">Reuse</button>
                <button class="filter-btn" data-filter="sorting">Sorting</button>
            </div>
        </div>

        <!-- ACTIVITIES -->
        <section>
            <div class="section-heading">
                <h2>Explore Opportunities</h2>
                <p>Find a cause you care about and get involved.</p>
            </div>

            <div class="volunteer-grid" id="volunteerGrid">

                <!-- CARD 1 -->
                <article class="volunteer-card" data-category="clean-up">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=900" alt="Community clean up">
                        <span class="category-tag">CLEAN-UP</span>
                    </div>

                    <div class="card-content">
                        <h3>Community Clean-Up Day</h3>
                        <p class="card-description">
                            Let's work together to clean our neighborhood
                            and create a healthier environment.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Saturday</span>
                            <span class="info-item">📍 Community Area</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>18 / 30</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:60%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(0)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(0)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

                <!-- CARD 2 -->
                <article class="volunteer-card" data-category="reuse">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=900" alt="Recycling activity">
                        <span class="category-tag">REUSE</span>
                    </div>

                    <div class="card-content">
                        <h3>Creative Reuse Workshop</h3>
                        <p class="card-description">
                            Turn everyday waste into something useful
                            through a fun creative workshop.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Sunday</span>
                            <span class="info-item">📍 Creative Center</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>12 / 20</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:60%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(1)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(1)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

                <!-- CARD 3 -->
                <article class="volunteer-card" data-category="sorting">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1605600659873-d808a13e4d9a?w=900" alt="Waste sorting">
                        <span class="category-tag">SORTING</span>
                    </div>

                    <div class="card-content">
                        <h3>Waste Sorting Campaign</h3>
                        <p class="card-description">
                            Learn and help others separate waste
                            for a more sustainable community.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Friday</span>
                            <span class="info-item">📍 Green Center</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>15 / 25</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:60%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(2)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(2)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

                <!-- CARD 4 -->
                <article class="volunteer-card" data-category="clean-up">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1472396961693-142e6e269027?w=900" alt="Nature clean up">
                        <span class="category-tag">CLEAN-UP</span>
                    </div>

                    <div class="card-content">
                        <h3>Green Park Clean-Up</h3>
                        <p class="card-description">
                            Help keep our public parks beautiful
                            and comfortable for everyone.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Saturday</span>
                            <span class="info-item">📍 City Park</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>20 / 35</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:57%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(3)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(3)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

                <!-- CARD 5 -->
                <article class="volunteer-card" data-category="reuse">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=900" alt="Eco friendly activity">
                        <span class="category-tag">REUSE</span>
                    </div>

                    <div class="card-content">
                        <h3>Eco-Friendly Craft Day</h3>
                        <p class="card-description">
                            Create useful crafts from reusable materials
                            and share your creativity.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Sunday</span>
                            <span class="info-item">📍 Workshop Hall</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>10 / 20</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:50%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(4)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(4)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

                <!-- CARD 6 -->
                <article class="volunteer-card" data-category="sorting">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=900" alt="Waste management">
                        <span class="category-tag">SORTING</span>
                    </div>

                    <div class="card-content">
                        <h3>Recycling Awareness Day</h3>
                        <p class="card-description">
                            Spread awareness about recycling
                            and responsible waste management.
                        </p>

                        <div class="card-info">
                            <span class="info-item">📅 Monday</span>
                            <span class="info-item">📍 Public Center</span>
                        </div>

                        <div class="progress-header">
                            <span>Volunteer spots</span>
                            <strong>16 / 25</strong>
                        </div>

                        <div class="progress-track">
                            <div class="progress-fill" style="width:64%"></div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-outline" onclick="showDetails(5)">Peek at plan</button>
                            <button class="btn btn-primary" onclick="joinActivity(5)">I'm in! Join</button>
                        </div>
                    </div>
                </article>

            </div>

            <div class="empty-state" id="emptyState">
                No activities found in this category.
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>© 2026 <span>CIVILINKON</span>. Together, we make a difference.</p>
    </footer>

    <!-- MODAL -->
    <div class="modal-overlay" id="activityModal">
        <div class="modal">
            <button class="modal-close" onclick="closeModal()">×</button>

            <div class="hero-label">VOLUNTEER OPPORTUNITY</div>

            <h2 id="modalTitle">Activity Title</h2>
            <p id="modalDescription">Activity description</p>

            <div id="registrationArea">
                <form class="modal-form" id="joinForm">
                    <label for="volunteerName">Your Name</label>
                    <input type="text" id="volunteerName" placeholder="Enter your name" required>

                    <label for="volunteerEmail">Email Address</label>
                    <input type="email" id="volunteerEmail" placeholder="Enter your email" required>

                    <label for="volunteerMessage">Why do you want to join?</label>
                    <textarea id="volunteerMessage" rows="3" placeholder="Tell us a little about yourself"></textarea>

                    <button type="submit" class="modal-submit">
                        Submit Registration
                    </button>
                </form>
            </div>

            <div class="modal-message" id="modalMessage">
                Your registration form has been submitted in this demo.
            </div>
        </div>
    </div>

    <script>
        const activities = [
            {
                title: "Community Clean-Up Day",
                description: "Let's work together to clean our neighborhood and create a healthier environment. Volunteers will help collect litter, tidy shared spaces, and encourage responsible waste disposal."
            },
            {
                title: "Creative Reuse Workshop",
                description: "Turn everyday waste into something useful through a fun creative workshop. Learn how to reuse materials and share practical ideas with the community."
            },
            {
                title: "Waste Sorting Campaign",
                description: "Learn and help others separate waste. Volunteers will support awareness activities and demonstrate how to sort waste responsibly."
            },
            {
                title: "Green Park Clean-Up",
                description: "Help keep our public parks beautiful and comfortable for everyone. Join the team in collecting litter and caring for shared green spaces."
            },
            {
                title: "Eco-Friendly Craft Day",
                description: "Create useful crafts from reusable materials and share your creativity. Help introduce sustainable habits through simple activities."
            },
            {
                title: "Recycling Awareness Day",
                description: "Spread awareness about recycling and responsible waste management. Help visitors understand how small daily habits can make a difference."
            }
        ];

        let selectedActivity = 0;
        let currentMode = "details";

        // FILTER
        const filterButtons = document.querySelectorAll(".filter-btn");
        const cards = document.querySelectorAll(".volunteer-card");
        const emptyState = document.getElementById("emptyState");

        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                filterButtons.forEach(item => item.classList.remove("active"));
                button.classList.add("active");

                const category = button.dataset.filter;
                let visibleCount = 0;

                cards.forEach(card => {
                    const match = category === "all" ||
                        card.dataset.category === category;

                    card.style.display = match ? "block" : "none";

                    if (match) visibleCount++;
                });

                emptyState.style.display = visibleCount === 0 ? "block" : "none";
            });
        });

        // OPEN DETAILS
        function showDetails(index) {
            selectedActivity = index;
            currentMode = "details";

            document.getElementById("modalTitle").textContent =
                activities[index].title;

            document.getElementById("modalDescription").textContent =
                activities[index].description;

            document.getElementById("registrationArea").style.display = "none";
            document.getElementById("modalMessage").style.display = "none";

            document.getElementById("activityModal").classList.add("show");
        }

        // JOIN ACTIVITY
        function joinActivity(index) {
            selectedActivity = index;
            currentMode = "join";

            document.getElementById("modalTitle").textContent =
                "Join " + activities[index].title;

            document.getElementById("modalDescription").textContent =
                "Fill in your details below to express your interest in joining this volunteer activity.";

            document.getElementById("registrationArea").style.display = "block";
            document.getElementById("modalMessage").style.display = "none";

            document.getElementById("joinForm").reset();

            document.getElementById("activityModal").classList.add("show");
        }

        // CLOSE MODAL
        function closeModal() {
            document.getElementById("activityModal").classList.remove("show");
        }

        document.getElementById("activityModal").addEventListener("click", function(event) {
            if (event.target === this) closeModal();
        });

        // DEMO REGISTRATION
        document.getElementById("joinForm").addEventListener("submit", function(event) {
            event.preventDefault();

            document.getElementById("registrationArea").style.display = "none";

            const message = document.getElementById("modalMessage");
            message.textContent =
                "Thank you, " +
                document.getElementById("volunteerName").value +
                "! Your interest in " +
                activities[selectedActivity].title +
                " has been recorded in this demo.";

            message.style.display = "block";
        });
    </script>

</body>
</html>
