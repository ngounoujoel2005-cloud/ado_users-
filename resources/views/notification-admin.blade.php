<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Administration – Notifications</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Glyphicons modernes -->
  <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/notification-admin.css') }}">
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
      
  <!-- PAGE -->
  <div class="wrap">
    <div class="top-row">
      <div>
        <h2 class="title">Gestion des Notifications</h2>
        <div class="subtitle">Envoyez des notifications push aux utilisateurs de l'association</div>
      </div>
      <button class="btn-new" id="openModal"><i class="fa-regular fa-bell"></i> Nouvelle Notification</button>
    </div>

    <!-- LISTE DES NOTIFICATIONS -->
    <section class="list">

      <!-- Carte 1 -->
      <article class="card">
        <div class="icon i-alert"><i class="fa-solid fa-triangle-exclamation"></i></div>
        <div>
          <div class="badges">
            <span class="card-title">Alerte urgente</span>
            <span class="badge b-urgent"><i class="fa-solid fa-bolt"></i> Urgent</span>
            <span class="badge b-audience"><i class="fa-solid fa-users"></i> Tous les utilisateurs</span>
          </div>
          <p>Prolongation exceptionnelle des candidatures de bourses jusqu'au 15 février. Profitez-en !</p>
          <div class="meta">Envoyée le 18 janvier 2025 à 17:45 par Direction Générale</div>
        </div>
      </article>

      <!-- Carte 2 -->
      <article class="card">
        <div class="icon i-pub"><i class="fa-solid fa-bullhorn"></i></div>
        <div>
          <div class="badges">
            <span class="card-title">Nouvelle publication</span>
            <span class="badge b-update"><i class="fa-solid fa-arrow-rotate-right"></i> Mise à jour</span>
            <span class="badge b-audience"><i class="fa-solid fa-user-lock"></i> Membres seulement</span>
          </div>
          <p>Découvrez notre nouveau partenariat avec l'Université Centrale et les opportunités qu'il offre.</p>
          <div class="meta">Envoyée le 19 janvier 2025 à 16:30 par Équipe Communication</div>
        </div>
      </article>

      <!-- Carte 3 -->
      <article class="card">
        <div class="icon i-remind"><i class="fa-regular fa-clock"></i></div>
        <div>
          <div class="badges">
            <span class="card-title">Rappel important</span>
            <span class="badge b-remind"><i class="fa-solid fa-bell"></i> Rappel</span>
            <span class="badge b-audience"><i class="fa-solid fa-users"></i> Tous les utilisateurs</span>
          </div>
          <p>N'oubliez pas : la date limite pour les candidatures de bourses est dans 5 jours !</p>
          <div class="meta">Envoyée le 20 janvier 2025 à 10:00 par Système automatique</div>
        </div>
      </article>

    </section>
  </div>

  <!-- MODAL : NOUVELLE NOTIFICATION -->
  <div class="modal" id="modal" aria-hidden="true" role="dialog" aria-labelledby="titre-modal">
    <div class="backdrop" id="backdrop"></div>
    <div class="dialog">
      <header>
        <h3 id="titre-modal">Envoyer une Notification Push</h3>
        <button class="x" id="closeX" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
      </header>
<form action="" method="post">
      <div class="form">
        <div class="row2">
          <div>
            <label for="title">Titre</label>
            <div class="input-icon">
              <i class="fa-solid fa-heading"></i>
              <input id="title" type="text" placeholder="Titre de la notification">
            </div>
          </div>
          <div>
            <label for="type">Type</label>
            <div class="input-icon">
              <i class="fa-solid fa-circle-info"></i>
              <select id="type">
                <option>Information</option>
                <option>Urgent</option>
                <option>Mise à jour</option>
              </select>
            </div>
          </div>
        </div>

        <div>
          <label for="audience">Audience cible</label>
          <div class="input-icon">
            <i class="fa-solid fa-users"></i>
            <select id="audience">
              <option>Tous les utilisateurs</option>
              <option>Membres seulement</option>
            </select>
          </div>
        </div>

        <div>
          <label for="message">Message</label>
          <div class="input-icon">
            <i class="fa-regular fa-message"></i>
            <textarea id="message" placeholder="Contenu de la notification…"></textarea>
          </div>
        </div>
      </div>

      <div class="actions">
        <button class="btn" id="cancel">Annuler</button>
        <button class="btn btn-green" id="send"><i class="fa-regular fa-paper-plane"></i> Envoyer</button>
      </div>
    </div>
  </div>
</form>

  <script src="{{ asset('js/notification-admin.js') }}"></script>

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
