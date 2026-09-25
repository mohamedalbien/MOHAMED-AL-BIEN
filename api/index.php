<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio | Développeur FullStack</title>
    <style>
        /* Variables globales */
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-color: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --radius: 8px;
        }

        /* Reinitialisation de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        a {
            color: var(--primary-color);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* En-tête / Navigation */
        header {
            background-color: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        .nav-links a {
            color: var(--text-muted);
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--primary-color);
            text-decoration: none;
        }

        /* Sections principales */
        section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 5rem 2rem;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: var(--primary-hover);
            text-decoration: none;
        }

        /* Titres de section */
        .section-title {
            font-size: 1.75rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
            margin: 0.5rem auto 0;
            border-radius: 2px;
        }

        /* Grille de projets */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .project-img {
            width: 100%;
            height: 180px;
            background-color: #cbd5e1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-weight: 600;
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-info h3 {
            margin-bottom: 0.5rem;
        }

        .project-info p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }

        .tag {
            background-color: #eff6ff;
            color: var(--primary-color);
            font-size: 0.8rem;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-weight: 500;
        }

        /* Compétences */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .skill-badge {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
        }

        /* Contact & Pied de page */
        .contact {
            text-align: center;
        }

        footer {
            background-color: var(--card-bg);
            border-top: 1px solid var(--border-color);
            text-align: center;
            padding: 2rem;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    <!-- En-tête -->
    <header>
        <nav>
            <div class="logo">MonPortfolio</div>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section Accueil -->
    <section id="accueil" class="hero">
        <h1>Bonjour, je suis [Mohamed Albien]</h1>
        <p>Développeur Web FullStack passionné par la création d'applications modernes et intuitives.</p>
        <a href="#contact" class="btn">Me contacter</a>
    </section>

    <!-- Section Projets -->
    <section id="projets">
        <h2 class="section-title">Mes Projets</h2>
        <div class="projects-grid">
            
            <!-- Projet 1 -->
            <div class="project-card">
                <div class="project-img">Aperçu Projet 1</div>
                <div class="project-info">
                    <h3>Application Web Immobilier</h3>
                    <p>Gestion d'agence immobilière avec modélisation UML et architecture MVC.</p>
                    <div class="tags">
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                    </div>
                    <a href="#">Voir le projet &rarr;</a>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="project-card">
                <div class="project-img">Aperçu Projet 2</div>
                <div class="project-info">
                    <h3>Générateur de Badge</h3>
                    <p>Application interactive React permettant de générer des badges personnalisés.</p>
                    <div class="tags">
                        <span class="tag">React</span>
                        <span class="tag">Tailwind</span>
                    </div>
                    <a href="#">Voir le projet &rarr;</a>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="project-card">
                <div class="project-img">Aperçu Projet 3</div>
                <div class="project-info">
                    <h3>Gestionnaire de Tâches</h3>
                    <p>Outil d'organisation Agile Scrum avec tableau de type Kanban.</p>
                    <div class="tags">
                        <span class="tag">Node.js</span>
                        <span class="tag">MongoDB</span>
                    </div>
                    <a href="#">Voir le projet &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Compétences -->
    <section id="competences">
        <h2 class="section-title">Compétences</h2>
        <div class="skills-container">
            <div class="skill-badge">HTML5 & CSS3</div>
            <div class="skill-badge">JavaScript</div>
            <div class="skill-badge">React</div>
            <div class="skill-badge">UML</div>
            <div class="skill-badge">Git & GitHub</div>
            <div class="skill-badge">Agile / Scrum</div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <h2 class="section-title">Contact</h2>
        <p>N'hésitez pas à me contacter pour toute collaboration ou opportunité.</p>
        <p style="margin-top: 1rem; font-weight: 600;">
            Email : <a href="mailto:mohamedalbien2005@gmail.com">mohamedalbien2005@gmail.com</a>
        </p>
    </section>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2026 MonPortfolio. Tous droits réservés.</p>
        <p>&copy; Made By Laaziz Oussama & Zekout Wadie</p>
    </footer>
</body>
</html>