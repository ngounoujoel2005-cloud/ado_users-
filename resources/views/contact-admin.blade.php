<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Association Excellence & Développement</title>
    <link rel="stylesheet" href="contact-admin.css">
    <link rel="stylesheet" href="dashbord-admin.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">M - NGOUNOU</div>
        <nav class="sidebar-nav">
            <a href="index-admin.html" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="annonce-admin.html"><i class="fa fa-bullhorn"></i> Annonces</a>
            <a href="publication-admin.html"><i class="fa fa-file"></i> Publications</a>
            <a href="historique-admin.html"><i class="fa fa-clock"></i> Historique</a>
            <a href="media-admin.html"><i class="fa fa-image"></i> Médias</a>
            <a href="commentaire-admin.html"><i class="fa fa-comments"></i> Commentaires</a>
            <a href="notification-admin.html"><i class="fa fa-bell"></i> Notifications</a>
            <a href="femmes-admin.html"><i class="fa fa-bell"></i> femme adolescence</a>
            <a href="activites-admin.html"><i class="fa fa-bell"></i> activites</a>
            <a href="bourse-admin.html"><i class="fa fa-bell"></i> bourse</a>
            <a href="contact-admin.html"><i class="fa fa-bell"></i> contact</a>
            <a href="deconnection-admin.html"><i class="fa fa-sign-out"></i> Quitter</a>
        </nav>
        <div class="sidebar-footer">
           <a href="administration.html" style="text-decoration: none;"><div class="support-img">
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

                <!-- TOP ACTIONS -->
        <div class="top-actions">
            <div class="page-header">
            <h2>Gestion des contacts</h2>
            <div class="stats">200 contacts deja enregistrer</div>
            </div>
        </div>

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
    <script src="dashbord-admin.js"></script>
    <script src="contact-admin.js"></script>
</body>
</html>