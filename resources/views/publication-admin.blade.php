<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Publications</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/publication-admin.css') }}">
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
        <!-- Publications Section -->
        <section>
            <div class="section-header">
                <div class="section-title">
                    <h3>Gestion des Publications</h3>
                    <p>4 publications au total</p>
                </div>
                <button class="add-btn" onclick="openNewForm()">
                    <span class="glyphicon glyphicon-plus"></span> Nouvelle Publication
                </button>
            </div>

            <div class="publications-list">
                <!-- Publication 1 -->
                <!-- <article class="publication-card" data-title="Lancement du Programme de Mentorat 2025" data-type="Annonce" data-description="Nous sommes fiers d'annoncer le lancement de notre nouveau programme de mentorat qui connectera nos anciens bénéficiaires avec les nouveaux candidats. Ce programme vise à créer un réseau de soutien durable.">
                    <div class="publication-content">
                        <div class="publication-header">
                            <h4 class="publication-title">Lancement du Programme de Mentorat 2025</h4>
                            <span class="status-badge annonce">Annonce</span>
                        </div>
                        <div class="publication-meta">
                            <div class="meta-item"><span class="glyphicon glyphicon-calendar"></span> <span>15/01/2025</span></div>
                            <div class="meta-item"><span class="glyphicon glyphicon-user"></span> <span>Direction Générale</span></div>
                            <div class="meta-item"><span class="glyphicon glyphicon-tag"></span> 
                                <div class="tags"><span class="tag">#mentorat</span><span class="tag">#programme</span></div>
                            </div>
                        </div>
                        <p class="publication-description">Nous sommes fiers d'annoncer le lancement de notre nouveau programme de mentorat qui connectera nos anciens bénéficiaires avec les nouveaux candidats. Ce programme vise à créer un réseau de soutien durable.</p>
                        <div class="publication-actions">
                            <button class="action-btn" onclick="openEditForm(this)"> <span class="glyphicon glyphicon-edit"></span> Modifier </button>
                            <button class="action-btn delete"> <span class="glyphicon glyphicon-trash"></span> Supprimer </button>
                            <button class="action-btn"> <span class="glyphicon glyphicon-eye-open"></span> Prévisualiser </button>
                        </div>
                    </div>
                    <div class="publication-image">
                        <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=150&h=100&fit=crop" alt="Programme de Mentorat">
                    </div>
                </article> -->
                    @foreach($publications as $publication)
    <article class="publication-card" 
             data-title="{{ $publication->titre }}" 
             data-type="{{ $publication->type }}" 
             data-description="{{ $publication->message }}">
        
        <div class="publication-content">
            <div class="publication-header">
                <h4 class="publication-title">{{ $publication->titre }}</h4>
                <span class="status-badge {{ strtolower($publication->type) }}">{{ $publication->type }}</span>
            </div>

            <div class="publication-meta">
                <div class="meta-item">
                    <span class="glyphicon glyphicon-calendar"></span>
                    <span>{{ $publication->created_at->format('d/m/Y') }}</span>
                </div>

                @if($publication->author)
                <div class="meta-item">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>{{ $publication->author }}</span>
                </div>
                @endif

                @if($publication->tags)
                <div class="meta-item">
                    <span class="glyphicon glyphicon-tag"></span>
                    <div class="tags">
                        @foreach(explode(',', $publication->tags) as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <p class="publication-description">{{ $publication->message }}</p>

            <div class="publication-actions">
                <button class="action-btn edit">
                    <span class="glyphicon glyphicon-edit"></span> Modifier
                </button>
                <button class="action-btn delete">
                    <span class="glyphicon glyphicon-trash"></span> Supprimer
                </button>
                <button class="action-btn preview">
                    <span class="glyphicon glyphicon-eye-open"></span> Prévisualiser
                </button>
            </div>
        </div>

        <div class="publication-image">
            <img src="{{ $publication->image_path ?? 'https://via.placeholder.com/150x100' }}" 
                 alt="{{ $publication->titre }}">
        </div>

    </article>
    @endforeach
            </div>
        </section>
    </main>

    <!-- Formulaire Nouvelle Publication -->
 <div id="newForm" class="floating-form-container">
    <div class="floating-form">
        <button class="close-btn" onclick="closeNewForm()"><span class="glyphicon glyphicon-remove"></span></button>
        <h3>Nouvelle Publication</h3>

        <form method="POST" action="{{ route('publications.store') }}">
            @csrf
            <div class="form-group">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-input" placeholder="Titre de la publication" required>
            </div>

            <div class="form-group">
                <label class="form-label">Type</label>
                <select name="type" class="form-select" required>
                    <option value="Annonce">Annonce</option>
                    <option value="Événement">Événement</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea name="message" class="form-textarea" placeholder="Description de la publication..." required></textarea>
            </div>

            <div style="text-align:right;">
                <button type="button" class="btn-secondary" onclick="closeNewForm()">Annuler</button>
                <button type="submit" class="btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>


    <!-- Formulaire Modifier Publication -->
    <div id="editForm" class="floating-form-container">
        <div class="floating-form">
            <button class="close-btn" onclick="closeEditForm()"><span class="glyphicon glyphicon-remove"></span></button>
            <h3>Modifier Publication</h3>
            <form id="editPublicationForm">
                <div class="form-group">
                    <label class="form-label">Titre</label>
                    <input type="text" id="editTitle" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Type</label>
                    <select id="editType" class="form-select">
                        <option>Annonce</option>
                        <option>Événement</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea id="editDescription" class="form-textarea"></textarea>
                </div>
                <div style="text-align:right;">
                    <button type="button" class="btn-secondary" onclick="closeEditForm()">Annuler</button>
                    <button type="submit" class="btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
     <script src="{{ asset('js/publication-admin.js') }}"></script> 
 
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
