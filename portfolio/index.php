<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Portfolio</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <nav class="navbar">
        <h2 class="logo">MyPortfolio</h2>

        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <button class="menu-btn" id="menuBtn">☰</button>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <p class="intro">HELLO, I'M</p>
        <h1>Chris Alvey B. Pantaleon</h1>
        <h2>I'm an IT Student</h2>
        <p>
            Welcome to my personal portfolio!
            I enjoy learning programming, designing websites,
            and developing useful systems.
        </p>

        <a href="#projects" class="btn">View My Projects</a>
    </div>
    <img class="hero-image" src="images/profile-photo.png" alt="Portrait of the portfolio owner">
</section>

<section id="about" class="section">
    <h2>About Me</h2>
    <p>
        I am an Information Technology student who is passionate
        about technology, web development, and programming.
        I am continuously improving my skills and learning
        new things to become a better developer.
    </p>
</section>

<section id="skills" class="section">
    <h2>My Skills</h2>

    <div class="skills-container">
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">PHP</div>
        <div class="skill">MySQL</div>
        <div class="skill">Java</div>
    </div>
</section>

<section id="projects" class="section">
    <h2>My Projects</h2>

    <div class="projects-container">

        <div class="project-card">
            <h3>LPG Delivery System</h3>
            <p>
                A system designed to manage LPG customers,
                orders, deliveries, and payments.
            </p>
        </div>

        <div class="project-card">
            <h3>Basketball League Management</h3>
            <p>
                A system for managing basketball teams,
                players, schedules, and game scores.
            </p>
        </div>

        <div class="project-card">
            <h3>Inventory Management System</h3>
            <p>
                A system for tracking products, stocks,
                and inventory records.
            </p>
        </div>

    </div>
</section>

<section id="contact" class="section">
    <h2>Contact Me</h2>
    <p>Have a question or want to connect? Send me a message.</p>
    <p><a class="facebook-link" href="https://web.facebook.com/alvey26" target="_blank" rel="noopener noreferrer">Connect with me on Facebook</a></p>
    <p><a class="facebook-link" href="mailto:chrisalveypantaleon@gmail.com">chrisalveypantaleon@gmail.com</a></p>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Chris Alvey B. Pantaleon. All Rights Reserved.</p>
</footer>

<script src="assets/script.js"></script>

</body>
</html>