<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Administration – Déconnexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Icônes -->
  <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
  <style>
    :root{
      --bg: #f6fbf8;
      --white: #ffffff;
      --text: #0f172a;
      --muted: #64748b;
      --green: #059669;
      --green-100:#ecfdf5;
      --green-300:#6ee7b7;
      --green-600:#059669;
      --red: #e11d48;
      --red-600:#dc2626;
      --red-100:#fee2e2;
      --shadow: 0 10px 30px rgba(2, 6, 23, .06);
      --border:#e5e7eb;
      --radius: 14px;
    }
    /* Main */
    main{ max-width: 1160px; margin: 26px auto; padding: 0 24px; }
    .center{
      margin: 90px auto; max-width: 560px; text-align:center;
      background: linear-gradient(180deg, rgba(255,255,255,.6), rgba(255,255,255,.4));
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      border-radius: var(--radius);
      padding: 36px 26px 28px;
    }
    .logout-icon{
      width:64px; height:64px; border-radius:16px; display:grid; place-items:center; margin: 0 auto 14px;
      background: var(--red-100); color: var(--red); font-size:28px;
      border:1px solid #fecaca;
    }
    h2{margin: 6px 0 8px; font-size:20px}
    .sub{color: var(--muted); margin-bottom:22px}

    .actions{display:flex; gap:16px; justify-content:center}
    .btn{
      border-radius:10px; padding:10px 14px; font-weight:700; font-size:14px; cursor:pointer;
      transition: transform .05s ease, background .2s ease, color .2s ease, border-color .2s ease;
      display:inline-flex; align-items:center; gap:10px;
    }
    .btn:active{ transform: translateY(1px) }
    .btn-outline{
      background:#fff; color:#111827; border:1px solid var(--border);
    }
    .btn-danger{
      background: var(--red); color:#fff; border:1px solid var(--red-600);
    }
    .btn-danger:hover{ background: var(--red-600) }

    /* Petits helpers */
    .spacer{flex:1}
    @media (max-width: 760px){
      .nav-list{gap:22px; flex-wrap:wrap}
      .center{margin: 40px auto}
    }
  </style>
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
        
  <!-- CONTENT -->
  
    <section class="center" id="logoutSection">
      <div class="logout-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
      <h2>Déconnexion</h2>
      <div class="sub">Êtes-vous sûr de vouloir vous déconnecter&nbsp;?</div>

      <div class="actions">
        <button class="btn btn-outline" id="btnCancel">Annuler</button>
        <a href="/logoutadmin"><button class="btn btn-danger" id="btnConfirm" >
          <i class="fa-solid fa-right-from-bracket"></i> Confirmer la déconnexion
        </button></a>
      </div>
    </section>
  


  <script>
    document.getElementById('btnConfirm').addEventListener('click', ()=>{
      // Ici tu placerais ta vraie logique (ex: redirection / clear session)
      alert('Vous êtes déconnecté(e).');
       return window.location.replace("connexion");
    });
  </script>
  
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
                <span class="view-all-btn" onclick="alert('Voir tous les détails')">Voir Tout </span>
            </div>
            <div class="activity-card">
                <div style="font-weight:600;margin-bottom:8px;">Activity</div>
                <ul class="activity-list">
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                </ul>
                <span class="view-all-btn" onclick="alert('Voir toutes les activités')">Voir tous</span>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/dashbord-admin.js') }}"></script>
</body>
</html>
