<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Administration – Historique</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/historique-admin.css') }}">
</head>
<body>
 <!-- Sidebar -->
    <aside class="sidebar">
<<<<<<< HEAD
        <div class="sidebar-header">M - NGOUNOU</div>
=======
        <div class="sidebar-header">
</div>
>>>>>>> feature-collegue
        <nav class="sidebar-nav">
            <a href="index-admin" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="annonce-admin"><i class="fa fa-bullhorn"></i> Annonces</a>
            <a href="publication-admin"><i class="fa fa-file"></i> Publications</a>
            <a href="historique-admin"><i class="fa fa-clock"></i> Historique</a>
            <a href="media-admin"><i class="fa fa-image"></i> Médias</a>
            <a href="commentaire-admin"><i class="fa fa-comments"></i> Commentaires</a>
            <a href="notification-admin"><i class="fa fa-bell"></i> Notifications</a>
<<<<<<< HEAD
            <a href="femmes-admin"><i class="fa fa-bell"></i> femme adolescence</a>
            <a href="activites-admin"><i class="fa fa-bell"></i> activites</a>
            <a href="bourse-admin"><i class="fa fa-bell"></i> bourse</a>
            <a href="contact-admin"><i class="fa fa-bell"></i> contact</a>
            <a href="deconnection-admin"><i class="fa fa-sign-out"></i> Quitter</a>
=======
            <!-- <a href="femmes-admin"><i class="fa fa-bell"></i> femme adolescence</a> -->
            <a href="activites-admin"><i class="fa fa-bell"></i> activites</a>
            <!-- <a href="bourse-admin"><i class="fa fa-bell"></i> bourse</a> -->
            <a href="contact-admin"><i class="fa fa-bell"></i> contact</a>
            <a href="{{ route('logout.view') }}"><i class="fa fa-sign-out"></i> Quitter</a>
>>>>>>> feature-collegue
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
<<<<<<< HEAD
                <span>ngounou joel Admin</span>
=======
                <span><span style="font-weight:600;">{{$admin->nom}} </span> &nbsp; Admin </span>
>>>>>>> feature-collegue
            </div>
        </div>
        
  <!-- TOP ACTIONS -->
  <div class="top-actions">
    <div class="page-header">
      <h2>Gestion de l'Historique</h2>
<<<<<<< HEAD
      <div class="stats">9 événements dans la timeline</div>
=======
      <div class="stats">{{ $totalEvents }} événements dans la timeline</div>
>>>>>>> feature-collegue
    </div>
    <div class="actions-right">
      <button class="btn-new" id="openModal"><i class="fa-solid fa-plus"></i> Nouvel Événement</button>
    </div>
  </div>

  <!-- TIMELINE -->
  <div class="timeline">
<<<<<<< HEAD
    <!-- Event 1 -->
    <div class="event">
      <div class="event-icon fondation"><i class="fa-solid fa-building"></i></div>
      <div class="event-content">
        <div class="event-header">
          <div style="flex:1">
            <div class="event-year">1985</div>
            <div class="event-title-row">
              <h3 class="event-title">Fondation de l'Association</h3>
              <span class="badge fondation">Fondation</span>
            </div>
          </div>
          <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Fondation" class="event-image">
        </div>
        <p class="event-desc">Création officielle de l'association par un groupe de visionnaires déterminés à faire la différence dans leur communauté.</p>
        <div class="event-actions">
          <button class="btn-edit" onclick="openEditModal(1)"><i class="fa-solid fa-pen"></i> Modifier</button>
          <button class="btn-delete"><i class="fa-solid fa-trash"></i> Supprimer</button>
        </div>
      </div>
    </div>

    <!-- Event 2 -->
    <div class="event">
      <div class="event-icon etape"><i class="fa-solid fa-award"></i></div>
      <div class="event-content">
        <div class="event-header">
          <div style="flex:1">
            <div class="event-year">1990</div>
            <div class="event-title-row">
              <h3 class="event-title">Premier Programme de Bourses</h3>
              <span class="badge etape">Étape clé</span>
            </div>
          </div>
          <img src="https://images.pexels.com/photos/159844/cellular-education-classroom-159844.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Bourses" class="event-image">
        </div>
        <p class="event-desc">Lancement du premier programme de bourses d'études pour soutenir les étudiants méritants de la communauté.</p>
        <div class="event-actions">
          <button class="btn-edit" onclick="openEditModal(2)"><i class="fa-solid fa-pen"></i> Modifier</button>
          <button class="btn-delete"><i class="fa-solid fa-trash"></i> Supprimer</button>
        </div>
      </div>
    </div>

    <!-- Event 3 -->
    <div class="event">
      <div class="event-icon expansion"><i class="fa-solid fa-building-flag"></i></div>
      <div class="event-content">
        <div class="event-header">
          <div style="flex:1">
            <div class="event-year">1995</div>
            <div class="event-title-row">
              <h3 class="event-title">Expansion Régionale</h3>
              <span class="badge expansion">Expansion</span>
            </div>
          </div>
          <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Expansion" class="event-image">
        </div>
        <p class="event-desc">Ouverture de trois nouveaux bureaux régionaux pour étendre notre impact à l'échelle nationale.</p>
        <div class="event-actions">
          <button class="btn-edit" onclick="openEditModal(3)"><i class="fa-solid fa-pen"></i> Modifier</button>
          <button class="btn-delete"><i class="fa-solid fa-trash"></i> Supprimer</button>
        </div>
      </div>
    </div>
  </div>

=======

    <!-- Event 1 -->
    @foreach ($events as $event)
<div class="event">
    <div class="event-icon {{ $event->type }}">
        @if($event->type == 'fondation')
            <i class="fa-solid fa-building"></i>
        @elseif($event->type == 'etape')
            <i class="fa-solid fa-flag-checkered"></i>
        @elseif($event->type == 'expansion')
            <i class="fa-solid fa-chart-line"></i>
        @endif
    </div>

    <div class="event-content">
        <div class="event-header">
            <div style="flex:1">
                <div class="event-year">{{ $event->year }}</div>

                <div class="event-title-row">
                    <h3 class="event-title">
                        {{ ucfirst($event->type) }}
                    </h3>

                    <span class="badge {{ $event->type }}">
                        {{ ucfirst($event->type) }}
                    </span>
                </div>
            </div>

            @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}"
                     alt="{{ $event->type }}"
                     class="event-image">
            @endif
        </div>

        <p class="event-desc">{{ $event->message }}</p>

        <div class="event-actions">
            <button class="btn-edit" onclick="openEditModal({{ $event->id }})">
                <i class="fa-solid fa-pen"></i> Modifier
            </button>

            <form action="{{ route('events.destroy', $event->id) }}" 
                  method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn-delete" onclick="return confirm('Supprimer ?')">
                    <i class="fa-solid fa-trash"></i> Supprimer
                </button>
            </form>
        </div>

    </div>
</div>
@endforeach

   
>>>>>>> feature-collegue
  <!-- MODAL NOUVEAU -->
  <div class="modal" id="modalNew">
    <div class="backdrop" onclick="closeNewModal()"></div>
    <div class="dialog">
      <header>
        <h3>Nouvel Événement</h3>
        <button class="x" onclick="closeNewModal()"><i class="fa-solid fa-xmark"></i></button>
      </header>

<<<<<<< HEAD
      <form id="formNew">
        <div class="form-group">
          <label for="newImage">Image URL</label>
          <div class="input-icon">
            <i class="fa-solid fa-image"></i>
            <input type="url" id="newImage" placeholder="https://exemple.com/image.jpg">
          </div>
        </div>

        <div class="form-group">
          <label for="newMessage">Message</label>
          <div class="input-icon">
            <i class="fa-solid fa-message"></i>
            <textarea id="newMessage" placeholder="Description de l'événement…"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="newType">Type d'événement</label>
          <div class="input-icon">
            <i class="fa-solid fa-tag"></i>
            <select id="newType">
              <option value="fondation">Fondation</option>
              <option value="etape">Étape clé</option>
              <option value="expansion">Expansion</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="newYear">Année</label>
          <div class="input-icon">
            <i class="fa-solid fa-calendar"></i>
            <input type="number" id="newYear" placeholder="2024" min="1900" max="2100">
          </div>
        </div>

        <div class="form-actions">
          <button type="button" class="btn-cancel" onclick="closeNewModal()">Annuler</button>
          <button type="submit" class="btn-submit">Créer</button>
        </div>
      </form>
=======
          <form id="formNew" method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
              <label for="newImage">Image</label>
              <div class="input-icon">
                  <i class="fa-solid fa-image"></i>
                  <input type="file" id="newImage" name="image">
              </div>
          </div>

          <div class="form-group">
              <label for="newMessage">Message</label>
              <div class="input-icon">
                  <i class="fa-solid fa-message"></i>
                  <textarea id="newMessage" name="message" placeholder="Description de l'événement…"></textarea>
              </div>
          </div>

          <div class="form-group">
              <label for="newType">Type d'événement</label>
              <div class="input-icon">
                  <i class="fa-solid fa-tag"></i>
                  <select id="newType" name="type">
                      <option value="fondation">Fondation</option>
                      <option value="etape">Étape clé</option>
                      <option value="expansion">Expansion</option>
                  </select>
              </div>
          </div>

          <div class="form-group">
              <label for="newYear">Année</label>
              <div class="input-icon">
                  <i class="fa-solid fa-calendar"></i>
                  <input type="number" id="newYear" name="year" placeholder="2024" min="1900" max="2100">
              </div>
          </div>

          <div class="form-actions">
              <button type="button" class="btn-cancel" onclick="closeNewModal()">Annuler</button>
              <button type="submit" class="btn-submit">Créer</button>
          </div>
      </form>

>>>>>>> feature-collegue
    </div>
  </div>

  <!-- MODAL EDIT -->
  <div class="modal" id="modalEdit">
    <div class="backdrop" onclick="closeEditModal()"></div>
    <div class="dialog">
      <header>
        <h3>Modifier l'Événement</h3>
        <button class="x" onclick="closeEditModal()"><i class="fa-solid fa-xmark"></i></button>
      </header>
<<<<<<< HEAD

      <form id="formEdit">
        <div class="form-group">
          <label for="editImage">Image URL</label>
          <div class="input-icon">
            <i class="fa-solid fa-image"></i>
            <input type="url" id="editImage" placeholder="https://exemple.com/image.jpg">
          </div>
        </div>

        <div class="form-group">
          <label for="editMessage">Message</label>
          <div class="input-icon">
            <i class="fa-solid fa-message"></i>
            <textarea id="editMessage" placeholder="Description de l'événement…"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="editType">Type d'événement</label>
          <div class="input-icon">
            <i class="fa-solid fa-tag"></i>
            <select id="editType">
              <option value="fondation">Fondation</option>
              <option value="etape">Étape clé</option>
              <option value="expansion">Expansion</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="editYear">Année</label>
          <div class="input-icon">
            <i class="fa-solid fa-calendar"></i>
            <input type="number" id="editYear" placeholder="2024" min="1900" max="2100">
          </div>
        </div>

        <div class="form-actions">
          <button type="button" class="btn-cancel" onclick="closeEditModal()">Annuler</button>
          <button type="submit" class="btn-submit">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>

=======
            <form id="formEdit"
      method="POST"
      action="{{ route('events.update', $event->id) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="editImage">Image</label>
        <div class="input-icon">
            <i class="fa-solid fa-image"></i>
            <input type="file" id="editImage" name="image" accept="image/*">
        </div>
    </div>

    <div class="form-group">
        <label for="editMessage">Description</label>
        <div class="input-icon">
            <i class="fa-solid fa-message"></i>
            <textarea id="editMessage" name="message"
                placeholder="Description de l'événement…">{{ old('message', $event->message) }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="editType">Type d'événement</label>
        <div class="input-icon">
            <i class="fa-solid fa-tag"></i>
            <select id="editType" name="type">
                <option value="fondation" {{ $event->type == 'fondation' ? 'selected' : '' }}>Fondation</option>
                <option value="etape" {{ $event->type == 'etape' ? 'selected' : '' }}>Étape clé</option>
                <option value="expansion" {{ $event->type == 'expansion' ? 'selected' : '' }}>Expansion</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="editYear">Année</label>
        <div class="input-icon">
            <i class="fa-solid fa-calendar"></i>
            <input type="number" id="editYear" name="year"
                   value="{{ old('year', $event->year) }}"
                   min="1900" max="2100">
        </div>
    </div>

    <button type="submit" class="btn-submit">Modifier</button>
</form>


    </div>
  </div>

            

>>>>>>> feature-collegue
  <script src="{{ asset('js/historique-admin.js') }}"></script>
 
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
<<<<<<< HEAD
=======
    
>>>>>>> feature-collegue
</body>
</html>
