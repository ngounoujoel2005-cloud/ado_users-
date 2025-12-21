<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Association Excellence & Développement</title>
    
    <link rel="stylesheet" href="dashbord-admin.css">
    <link rel="stylesheet" href="activites-admin.css">
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
            <h2>Gestion des activiter</h2>
            <div class="stats">plus de 50 activiters deja realiser </div>
            </div>
        </div>

            <div class="activity-event">
                <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&w=80&h=60" alt="Rencontre">
                <div class="activity-info">
                    <div class="activity-title">Rencontre annuelle</div>
                    <div class="activity-date">12/02/2025</div>
                    <div class="activity-desc">Réunion des membres pour échanger sur les projets à venir.</div>
                    <div class="activity-actions">
                        <button class="btn-edit">Modifier</button>
                        <button class="btn-delete">Supprimer</button>
                    </div>
                </div>
            </div>
            <!-- ...autres activités... -->
        </section>
        <section class="gallery fade-in">
            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&w=400&h=225" alt="Galerie 1">
            <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&w=400&h=225" alt="Galerie 2">
            <img src="https://images.pexels.com/photos/159844/cellular-education-classroom-159844.jpeg?auto=compress&w=400&h=225" alt="Galerie 3">
        </section>
    </main>

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
</body>
</html>