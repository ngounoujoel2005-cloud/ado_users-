<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Association Excellence & Développement</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylev1-admin.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">M - NGOUNOU</div>
        <nav class="sidebar-nav">
            <a href="index-admin" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="annonce-admin"><i class="fa fa-bullhorn"></i> Annonces</a>
            <a href="publication-admin"><i class="fa fa-file"></i> Publications</a>
            <a href="historique-admin"><i class="fa fa-clock"></i> Historique</a>
            <a href="media-admin"><i class="fa fa-image"></i> Médias</a>
            <a href="commentaire-admin"><i class="fa fa-comments"></i> Commentaires</a>
            <a href="notification-admin"><i class="fa fa-bell"></i> Notifications</a>
            <a href="femmes-admin"><i class="fa fa-bell"></i> femme adolescence</a>
            <a href="activites-admin"><i class="fa fa-bell"></i> activites</a>
            <a href="bourse-admin"><i class="fa fa-bell"></i> bourse</a>
            <a href="contact-admin"><i class="fa fa-bell"></i> contact</a>
            <a href="deconnection-admin"><i class="fa fa-sign-out"></i> Quitter</a>
        </nav>
        <div class="sidebar-footer">
            <a href="administration" style="text-decoration: none;"><div class="support-img">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Support" style="width:40px;">
                <span style="margin-left:8px; color: black;">Administration</span>
            </div></a>
        </div>
    </aside>
    <!-- Main Dashboard -->
    <main class="main-dashboard">
        <div class="dashboard-header fade-in">
            <div>
                <div class="dashboard-title">Dashboard Administrateur</div>
                <div style="color:#6b7280;font-size:15px;">Bienvenue sur l'espace de gestion de l'association adolescence banka</div>
            </div>
            <div class="dashboard-user">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
                <span>ngounou joel Admin</span>
            </div>
        </div>
        <section class="dashboard-cards fade-in">
            <div class="dashboard-card" onclick="navigateTo('accueil')">
                <div class="card-title">Accueil</div>
                <div class="card-value"><span class="glyphicon glyphicon-home"></span></div>
                <div class="card-desc">Gérer la présentation, actualités, accès rapides</div>
            </div>
            <div class="dashboard-card" onclick="navigateTo('historique')">
                <div class="card-title">Historique</div>
                <div class="card-value"><span class="glyphicon glyphicon-time"></span></div>
                <div class="card-desc">Évolution, événements clés, bureau, vision</div>
            </div>
            <div class="dashboard-card" onclick="navigateTo('activites')">
                <div class="card-title">Activités / Actualités</div>
                <div class="card-value"><span class="glyphicon glyphicon-calendar"></span></div>
                <div class="card-desc">Gestion des activités, galerie, calendrier</div>
            </div>
            <div class="dashboard-card" onclick="navigateTo('bourse')">
                <div class="card-title">Bourse Adolescence Banka</div>
                <div class="card-value"><span class="glyphicon glyphicon-education"></span></div>
                <div class="card-desc">Gestion des boursiers, inscriptions, partenaires</div>
            </div>
            <div class="dashboard-card" onclick="navigateTo('femmes')">
                <div class="card-title">Section Femmes</div>
                <div class="card-value"><span class="glyphicon glyphicon-user"></span></div>
                <div class="card-desc">Initiatives féminines, témoignages, projets</div>
            </div>
            <div class="dashboard-card" onclick="navigateTo('contact')">
                <div class="card-title">Contact / Inscription</div>
                <div class="card-value"><span class="glyphicon glyphicon-envelope"></span></div>
                <div class="card-desc">Formulaires de contact et de candidature</div>
            </div>
        </section>
        <section class="dashboard-overview fade-in">
            <div class="overview-card">
                <div style="font-weight:600;margin-bottom:8px;">Overview</div>
                <ul class="overview-list">
                    <li>Member Profit <span>+1345</span></li>
                    <li>Member Profit <span>-1241</span></li>
                    <li>Member Profit <span>+2341</span></li>
                    <li>Member Profit <span>-2341</span></li>
                </ul>
            </div>
            <div class="overview-card total-sale">
                <div style="font-weight:600;margin-bottom:8px;">Total Sale</div>
                <div class="circle-progress">70%</div>
                <span class="view-all-btn" onclick="alert('Voir tous les détails')">View All</span>
            </div>
            <div class="activity-card">
                <div style="font-weight:600;margin-bottom:8px;">Activity</div>
                <ul class="activity-list">
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                </ul>
                <span class="view-all-btn" onclick="alert('Voir toutes les activités')">View All</span>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/dashbord-admin.js') }}"></script>
</body>
</html>
