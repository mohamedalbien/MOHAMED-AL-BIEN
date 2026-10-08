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

        /* Galerie photos */
        .gallery-filters {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .filter-btn {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-muted);
            padding: 0.4rem 1rem;
            border-radius: 999px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: #ffffff;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
        }

        .photo-item {
            position: relative;
            aspect-ratio: 4 / 3;
            border-radius: var(--radius);
            overflow: hidden;
            background: #cbd5e1;
            border: 1px solid var(--border-color);
            cursor: pointer;
            padding: 0;
        }

        .photo-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s;
        }

        .photo-item:hover img {
            transform: scale(1.06);
        }

        .photo-item .caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.5rem 0.75rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: #ffffff;
            font-size: 0.85rem;
            text-align: left;
        }

        .photo-item.hidden {
            display: none;
        }

        /* Sous-sections Atelier */
        .atelier-block {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .atelier-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .atelier-title {
            font-size: 1.35rem;
            color: var(--primary-color);
            font-weight: 700;
        }

        .empty-atelier-msg {
            text-align: center;
            padding: 3rem 1rem;
            color: var(--text-muted);
            background: var(--bg-color);
            border: 2px dashed var(--border-color);
            border-radius: var(--radius);
            font-style: italic;
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1000;
            padding: 2rem;
        }

        .lightbox.open {
            display: flex;
        }

        .lightbox img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: var(--radius);
        }

        .lightbox-caption {
            color: #ffffff;
            margin-top: 1rem;
            text-align: center;
        }

        .lb-btn {
            position: absolute;
            background: rgba(255, 255, 255, 0.15);
            border: none;
            color: #ffffff;
            font-size: 1.8rem;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            cursor: pointer;
        }

        .lb-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .lb-close { top: 1rem; right: 1rem; }
        .lb-prev { left: 1rem; top: 50%; }
        .lb-next { right: 1rem; top: 50%; }

        /* Modules de formation */
        .year-block {
            margin-bottom: 2.5rem;
        }

        .year-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .modules-sub {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-muted);
            margin: 1rem 0 0.5rem;
        }

        .modules-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 0.75rem;
        }

        .module-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 0.6rem 0.9rem;
        }

        .module-code {
            background: #eff6ff;
            color: var(--primary-color);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            white-space: nowrap;
        }

        .module-name {
            flex: 1;
            font-size: 0.95rem;
        }

        .module-hours {
            color: var(--text-muted);
            font-size: 0.8rem;
            white-space: nowrap;
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

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
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
                <li><a href="#photos">Exercices</a></li>
                <li><a href="#m202">M202 (Ateliers)</a></li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section Accueil -->
    <section id="accueil" class="hero">
        <h1>Bonjour, je suis Mohamed Albien</h1>
        <p>Développeur Web FullStack passionné par la création d'applications modernes et intuitives.</p>
        <p style="font-size: 1rem;">Étudiant en 2ème année Développement Digital à l'OFPPT</p>
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

    <!-- Section Photos Exercices Générales -->
    <section id="photos">
        <h2 class="section-title">Mes Exercices &amp; Travaux Pratiques</h2>
        <div class="gallery-filters" id="filters"></div>
        <div class="gallery-grid" id="gallery"></div>
    </section>

    <!-- Section M202 : Approche agile & Ateliers -->
    <section id="m202">
        <h2 class="section-title">M202 · Approche Agile</h2>
        <p style="text-align:center; color: var(--text-muted); margin-bottom: 2.5rem;">
            Travaux pratiques et exercices organisés par atelier
        </p>

        <!-- Atelier 1 -->
        <div class="atelier-block">
            <div class="atelier-header">
                <h3 class="atelier-title">Atelier 1 : Diagrammes &amp; Planification</h3>
            </div>
            <div class="gallery-filters" id="filtersAtelier1"></div>
            <div class="gallery-grid" id="galleryAtelier1"></div>
        </div>

        <!-- Atelier 2 -->
        <div class="atelier-block">
            <div class="atelier-header">
                <h3 class="atelier-title">Atelier 2</h3>
            </div>
            <div class="gallery-filters" id="filtersAtelier2"></div>
            <div class="gallery-grid" id="galleryAtelier2"></div>
        </div>

        <!-- Atelier 3 -->
        <div class="atelier-block">
            <div class="atelier-header">
                <h3 class="atelier-title">Atelier 3</h3>
            </div>
            <div class="gallery-filters" id="filtersAtelier3"></div>
            <div class="gallery-grid" id="galleryAtelier3"></div>
        </div>

        <!-- Atelier 4 -->
        <div class="atelier-block">
            <div class="atelier-header">
                <h3 class="atelier-title">Atelier 4</h3>
            </div>
            <div class="gallery-filters" id="filtersAtelier4"></div>
            <div class="gallery-grid" id="galleryAtelier4"></div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" aria-modal="true" role="dialog">
        <button class="lb-btn lb-close" id="lbClose" aria-label="Fermer">&times;</button>
        <button class="lb-btn lb-prev" id="lbPrev" aria-label="Précédent">&#8249;</button>
        <button class="lb-btn lb-next" id="lbNext" aria-label="Suivant">&#8250;</button>
        <img id="lbImg" src="" alt="">
        <div class="lightbox-caption" id="lbCaption"></div>
    </div>

    <!-- Section Modules -->
    <section id="modules">
        <h2 class="section-title">Modules de formation</h2>
        <p style="text-align:center; color: var(--text-muted); margin-bottom: 2rem;">Développement Digital – option Web Full Stack (OFPPT, Technicien Spécialisé)</p>

        <!-- 1ère année -->
        <div class="year-block">
            <h3 class="year-title">1ère année (tronc commun)</h3>
            <p class="modules-sub">Modules techniques</p>
            <ul class="modules-list">
                <li class="module-item"><span class="module-code">M101</span><span class="module-name">Se situer au regard du métier et de la démarche de formation</span></li>
                <li class="module-item"><span class="module-code">M102</span><span class="module-name">Acquérir les bases de l'algorithmique</span></li>
                <li class="module-item"><span class="module-code">M103</span><span class="module-name">Programmer en Orienté Objet</span></li>
                <li class="module-item"><span class="module-code">M104</span><span class="module-name">Développer des sites web statiques</span></li>
                <li class="module-item"><span class="module-code">M105</span><span class="module-name">Programmer en JavaScript</span></li>
                <li class="module-item"><span class="module-code">M106</span><span class="module-name">Manipuler des bases de données</span></li>
                <li class="module-item"><span class="module-code">M107</span><span class="module-name">Développer des sites web dynamiques</span></li>
                <li class="module-item"><span class="module-code">M108</span><span class="module-name">S'initier à la sécurité des systèmes d'information</span></li>
            </ul>
            <p class="modules-sub">Enseignement général</p>
            <ul class="modules-list">
                <li class="module-item"><span class="module-code">EGTS101</span><span class="module-name">Arabe</span></li>
                <li class="module-item"><span class="module-code">EGTS102</span><span class="module-name">Français</span></li>
                <li class="module-item"><span class="module-code">EGTS103</span><span class="module-name">Anglais technique / Espagnol</span></li>
                <li class="module-item"><span class="module-code">EGTS104</span><span class="module-name">Culture entrepreneuriale – Partie 1</span></li>
                <li class="module-item"><span class="module-code">EGTS105</span><span class="module-name">Compétences comportementales et sociales</span></li>
                <li class="module-item"><span class="module-code">EGTS108</span><span class="module-name">Entrepreneuriat – PIE 1</span></li>
                <li class="module-item"><span class="module-code">EGTSA106</span><span class="module-name">Culture et techniques avancées du numérique</span></li>
            </ul>
        </div>

        <!-- 2ème année -->
        <div class="year-block">
            <h3 class="year-title">2ème année (option Web Full Stack)</h3>
            <p class="modules-sub">Modules techniques</p>
            <ul class="modules-list">
                <li class="module-item"><span class="module-code">M201</span><span class="module-name">Préparation d'un projet web</span><span class="module-hours">60 h</span></li>
                <li class="module-item"><span class="module-code">M202</span><span class="module-name">Approche agile</span><span class="module-hours">120 h</span></li>
                <li class="module-item"><span class="module-code">M203</span><span class="module-name">Gestion des données</span><span class="module-hours">90 h</span></li>
                <li class="module-item"><span class="module-code">M204</span><span class="module-name">Développement front-end</span><span class="module-hours">90 h</span></li>
                <li class="module-item"><span class="module-code">M205</span><span class="module-name">Développement back-end</span><span class="module-hours">120 h</span></li>
                <li class="module-item"><span class="module-code">M206</span><span class="module-name">Création d'une application Cloud native</span><span class="module-hours">90 h</span></li>
                <li class="module-item"><span class="module-code">M207</span><span class="module-name">Projet de synthèse</span><span class="module-hours">60 h</span></li>
                <li class="module-item"><span class="module-code">M208</span><span class="module-name">Intégration du milieu professionnel</span><span class="module-hours">160 h</span></li>
            </ul>
            <p class="modules-sub">Enseignement général</p>
            <ul class="modules-list">
                <li class="module-item"><span class="module-code">EGTS202</span><span class="module-name">Français</span><span class="module-hours">115 h</span></li>
                <li class="module-item"><span class="module-code">EGTS203</span><span class="module-name">Anglais technique</span><span class="module-hours">50 h</span></li>
                <li class="module-item"><span class="module-code">EGTS204</span><span class="module-name">Culture entrepreneuriale</span><span class="module-hours">45 h</span></li>
                <li class="module-item"><span class="module-code">EGTS205</span><span class="module-name">Compétences comportementales</span><span class="module-hours">30 h</span></li>
                <li class="module-item"><span class="module-code">EGTS208</span><span class="module-name">Entrepreneuriat – PIE 2</span><span class="module-hours">80 h</span></li>
                <li class="module-item"><span class="module-code">EGTSA206</span><span class="module-name">Culture et techniques avancées du numérique</span><span class="module-hours">30 h</span></li>
            </ul>
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

    <script>
        // Exercices généraux
        const PHOTOS = [
            { src: "/images/ateliers/atelier1/pert-01.jpeg", title: "Page de présentation", category: "HTML/CSS" },
            { src: "/images/ateliers/atelier1/gantt-01.jpeg", title: "Mise en page Flexbox / Grid", category: "HTML/CSS" },
            { src: "/images/ateliers/atelier1/pert-02.jpeg", title: "Manipulation du DOM", category: "JavaScript" },
            { src: "/images/ateliers/atelier1/pert-03.jpeg", title: "To-do list", category: "JavaScript" },
            { src: "/images/ateliers/atelier1/qcm-01.jpeg", title: "Formulaire PHP + MySQL", category: "PHP" },
            { src: "/images/ateliers/atelier1/pert-04.jpeg", title: "Composants React", category: "React" },
            { src: "/images/ateliers/atelier1/cycle-v.jpeg", title: "Diagramme de classes", category: "UML" }
        ];

        // Photos Atelier 1
        const PHOTOS_ATELIER_1 = [
            { src: "/images/ateliers/atelier1/Diagramme%20de%20gant.png", title: "Diagramme de Gantt", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/pert-01.jpeg", title: "Diagramme PERT - Exercice 1", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/gantt-01.jpeg", title: "Diagramme de Gantt (Manuscrit)", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/pert-02.jpeg", title: "Diagramme PERT - Exercice 2", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/pert-03.jpeg", title: "Diagramme PERT - Exercice 3", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/qcm-01.jpeg", title: "QCM", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/pert-04.jpeg", title: "Diagramme PERT - Final", category: "Waterfall" },
            { src: "/images/ateliers/atelier1/cycle-v.jpeg", title: "Cycle en V", category: "Waterfall" }
        ];

        // Ateliers suivants (vides)
        const PHOTOS_ATELIER_2 = [
            {src:"/images/ateliers/atelier2/Partie 1/Partie-1-part-1.jpeg",title: "Questions de partie 1",category: "Agile"},
            {src:"/images/ateliers/atelier2/Partie 1/Partie-1-part-2.jpeg",title: "Questions de partie 1",category: "Agile"},
        ];
        const PHOTOS_ATELIER_3 = [];
        const PHOTOS_ATELIER_4 = [];

        const lightbox = document.getElementById("lightbox");
        const lbImg = document.getElementById("lbImg");
        const lbCaption = document.getElementById("lbCaption");
        let ctx = { photos: [], els: [], visible: [], current: 0 };

        // Fallback d'image absente
        const FALLBACK = "data:image/svg+xml;utf8," + encodeURIComponent(
            "<svg xmlns='http://www.w3.org/2000/svg' width='400' height='300'><rect width='100%' height='100%' fill='#cbd5e1'/><text x='50%' y='50%' fill='#64748b' font-family='sans-serif' font-size='18' text-anchor='middle'>Photo à ajouter</text></svg>"
        );

        function initGallery(photos, galleryEl, filtersEl) {
            if (!galleryEl) return;

            // Message si l'atelier est vide
            if (!photos || photos.length === 0) {
                if (filtersEl) filtersEl.style.display = "none";
                galleryEl.innerHTML = '<div class="empty-atelier-msg" style="grid-column: 1 / -1;">Aucun contenu pour le moment dans cet atelier.</div>';
                return;
            }

            const els = photos.map((p, i) => {
                const btn = document.createElement("button");
                btn.className = "photo-item";
                btn.dataset.category = p.category || "";
                btn.innerHTML = '<img loading="lazy" decoding="async" alt="">' +
                                '<span class="caption"></span>';
                const img = btn.querySelector("img");
                img.src = p.src;
                img.alt = p.title;
                img.onerror = () => { img.onerror = null; img.src = FALLBACK; };
                btn.querySelector(".caption").textContent = p.title;
                btn.addEventListener("click", () => openLightbox(photos, els, i));
                galleryEl.appendChild(btn);
                return btn;
            });

            if (filtersEl) {
                const cats = ["Tout", ...new Set(photos.map(p => p.category).filter(Boolean))];
                cats.forEach((c, idx) => {
                    const b = document.createElement("button");
                    b.className = "filter-btn" + (idx === 0 ? " active" : "");
                    b.textContent = c;
                    b.addEventListener("click", () => {
                        filtersEl.querySelectorAll(".filter-btn").forEach(x => x.classList.remove("active"));
                        b.classList.add("active");
                        els.forEach(el => {
                            el.classList.toggle("hidden", c !== "Tout" && el.dataset.category !== c);
                        });
                    });
                    filtersEl.appendChild(b);
                });
            }
        }

        function openLightbox(photos, els, index) {
            const visible = photos.map((p, i) => i).filter(i => !els[i].classList.contains("hidden"));
            ctx = { photos, els, visible, current: visible.indexOf(index) };
            showPhoto();
            lightbox.classList.add("open");
        }

        function showPhoto() {
            const i = ctx.visible[ctx.current];
            const p = ctx.photos[i];
            lbImg.src = ctx.els[i].querySelector("img").src;
            lbImg.alt = p.title;
            lbCaption.textContent = p.title + (p.category ? " · " + p.category : "");
        }

        function step(d) {
            ctx.current = (ctx.current + d + ctx.visible.length) % ctx.visible.length;
            showPhoto();
        }

        function closeLightbox() { lightbox.classList.remove("open"); }

        document.getElementById("lbClose").addEventListener("click", closeLightbox);
        document.getElementById("lbPrev").addEventListener("click", () => step(-1));
        document.getElementById("lbNext").addEventListener("click", () => step(1));
        lightbox.addEventListener("click", e => { if (e.target === lightbox) closeLightbox(); });
        document.addEventListener("keydown", e => {
            if (!lightbox.classList.contains("open")) return;
            if (e.key === "Escape") closeLightbox();
            if (e.key === "ArrowLeft") step(-1);
            if (e.key === "ArrowRight") step(1);
        });

        // Initialisation de toutes les galeries
        initGallery(PHOTOS, document.getElementById("gallery"), document.getElementById("filters"));
        initGallery(PHOTOS_ATELIER_1, document.getElementById("galleryAtelier1"), document.getElementById("filtersAtelier1"));
        initGallery(PHOTOS_ATELIER_2, document.getElementById("galleryAtelier2"), document.getElementById("filtersAtelier2"));
        initGallery(PHOTOS_ATELIER_3, document.getElementById("galleryAtelier3"), document.getElementById("filtersAtelier3"));
        initGallery(PHOTOS_ATELIER_4, document.getElementById("galleryAtelier4"), document.getElementById("filtersAtelier4"));
    </script>
</body>
</html>