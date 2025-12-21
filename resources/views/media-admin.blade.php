<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Médias </title>
    <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-admin.css') }}">
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
      
        <section>
            <div class="section-header">
                <div class="section-title">
                    <h3>Gestion des Médias</h3>
                    <p>6 médias en galerie</p>
                </div>
                <button class="add-media-btn" onclick="toggleForm()">
                    <span class="glyphicon glyphicon-plus"></span> Ajouter un Média
                </button>
            </div>

            <div class="filters">
                <span class="filter-label">Filtrer par type :</span>
                <button class="filter-btn active">Tous (6)</button>
                <button class="filter-btn">
                    <span class="glyphicon glyphicon-picture"></span> Images (4)
                </button>
                <button class="filter-btn">
                    <span class="glyphicon glyphicon-facetime-video"></span> Vidéos (2)
                </button>
            </div>

            <div class="media-grid">
                <div class="media-item">
                    <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=400&h=225&fit=crop" alt="Media 1">
                    <div class="media-type-badge image">
                        <span class="glyphicon glyphicon-picture"></span> Image
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Formulaire Flottant -->
    <div id="floatingForm">
        <div class="form-container">
            <button class="close-btn" onclick="toggleForm()">
                <span class="glyphicon glyphicon-remove"></span>
            </button>
            <form>
                <div class="form-group">
                    <label class="form-label">Titre</label>
                    <input type="text" class="form-input" placeholder="Titre du média">
                </div>
                <div class="form-group">
                    <label class="form-label">Type de média</label>
                    <select class="form-select">
                        <option>Image</option>
                        <option>Vidéo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">URL du média</label>
                    <input type="url" class="form-input" placeholder="https://...">
                </div>
                <div class="form-group">
                    <label class="form-label">Description (optionnel)</label>
                    <textarea class="form-textarea" placeholder="Description du média..."></textarea>
                </div>
                <div style="text-align:right;">
                    <button type="button" class="btn-secondary" onclick="toggleForm()">Annuler</button>
                    <button type="submit" class="btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/media-admin.js') }}"></script> 

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
