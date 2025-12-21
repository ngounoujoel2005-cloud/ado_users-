<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Administration - Annonces</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('css/annonce-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
</head>
<style>
  .annonces-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
}

.annonces-table th, .annonces-table td {
    padding: 12px 15px;
    text-align: left;
    border: 1px solid #ddd;
}

.annonces-table th {
    background-color: #4CAF50;
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.annonces-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.annonces-table tr:hover {
    background-color: #f1f1f1;
}

.annonces-table .btn-sm {
    padding: 4px 8px;
    font-size: 0.85rem;
}
#btn-spp {
    background-color: #e3342f;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.pagination-simple {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.pagination-simple a {
    text-decoration: none;
    color: blue;
    font-weight: bold;
}

.pagination-simple span {
    color: gray;
    font-weight: bold;
}
</style>
<body>
   <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
</div>
         <nav class="sidebar-nav">
            <a href="index-admin" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="annonce-admin"><i class="fa fa-bullhorn"></i> Annonces</a>
            <a href="publication-admin"><i class="fa fa-file"></i> Publications</a>
            <a href="historique-admin"><i class="fa fa-clock"></i> Historique</a>
            <a href="media-admin"><i class="fa fa-image"></i> Médias</a>
            <a href="commentaire-admin"><i class="fa fa-comments"></i> Commentaires</a>
            <a href="notification-admin"><i class="fa fa-bell"></i> Notifications</a>
            <!-- <a href="femmes-admin"><i class="fa fa-bell"></i> femme adolescence</a> -->
            <a href="activites-admin"><i class="fa fa-bell"></i> activites</a>
            <!-- <a href="bourse-admin"><i class="fa fa-bell"></i> bourse</a> -->
            <a href="contact-admin"><i class="fa fa-bell"></i> contact</a>
            <a href="{{ route('logout.view') }}"><i class="fa fa-sign-out"></i> Quitter</a>
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
                <span> <span style="font-weight:600;font-size:32px;">{{$admin->nom}} </span> &nbsp; Admin </span>
            </div>
        </div>
        
  <!-- PAGE -->
  <div class="wrap">
    <div class="header-row">
      <div>
        <h2 class="page-title">Gestion des Annonces Urgentes</h2>
        <div class="sub">{{ $totalAnnonces }} annonces au total • <span style="color:#16a34a;font-weight:700">{{ $totalActives }} actives</span></div>
      </div>
      <button class="btn-new" id="openModal"><i class="fa-solid fa-plus"></i> Nouvelle Annonce</button>
    </div>
  </div>



   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

  <!-- MODAL -->
 <form action="{{ route('annonce.store') }}" method="POST">
    @csrf
    <div class="modal" id="modal">
        <div class="backdrop" id="backdrop"></div>
        <div class="dialog">
            <header>
                <h3>Nouvelle Annonce Urgente</h3>
                <button type="button" class="x" id="closeX"><i class="fa-solid fa-xmark"></i></button>
            </header>

            <div class="form-group">
                <label for="message">Message</label>
                <div class="input-icon">
                    <i class="fa-regular fa-message"></i>
                    <textarea name="message" id="message" placeholder="Saisissez le message de l’annonce…" required></textarea>
                </div>
            </div>

            <div class="row2">
                <div class="form-group">
                    <label for="type">Type d’annonce</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-flag"></i>
                        <select name="type" id="type" required>
                            <option value="Information">Information</option>
                            <option value="Urgent">Urgent</option>
                            <option value="Succès">Succès</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date_expiration">Date d’expiration</label>
                    <div class="input-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                        <input type="date" name="date_expiration" id="date_expiration">
                    </div>
                </div>
            </div>

            <div class="form-group switch">
                <input type="checkbox" id="actif" name="actif" value="1" checked>
                <label for="actif"></label>
                <i class="fa-solid fa-power-off"></i> Activer immédiatement
            </div>

            <div class="actions">
                <button type="button" class="btn" id="cancel">Annuler</button>
                <button type="submit" class="btn btn-green">Créer</button>
            </div>
        </div>
    </div>
</form>


          <div class="container mt-5">
    <table class="table table-bordered table-striped annonces-table">
        <thead>
            <tr>
                <th>Message</th>
                <th>Type</th>
                <th>Date d'expiration</th>
                <th>Actif</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
            <tr>
                <td>{{ $annonce->message }}</td>
                <td>{{ $annonce->type }}</td>
                <td>{{ $annonce->date_expiration ?? '-' }}</td>
                <td>
                    @if($annonce->actif)
                        <span class="badge bg-success">Actif</span>
                    @else
                        <span class="badge bg-secondary">Inactif</span>
                    @endif
                </td>
                <td>
                    <!-- Activer/Désactiver -->
                    <form action="{{ route('annonce.toggle', $annonce->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm {{ $annonce->actif ? 'btn-warning' : 'btn-success' }}">
                            {{ $annonce->actif ? 'Désactiver' : 'Activer' }}
                        </button>
                    </form>

                    <!-- Supprimer -->
                    <form action="{{ route('annonce.destroy', $annonce->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cette annonce ?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" id="btn-spp">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination-simple">
    @if ($annonces->onFirstPage())
        <span>Précédent</span>
    @else
        <a href="{{ $annonces->previousPageUrl() }}">Précédent</a>
    @endif

    @if ($annonces->hasMorePages())
        <a href="{{ $annonces->nextPageUrl() }}">Suivant</a>
    @else
        <span>Suivant</span>
    @endif
  </div>


</div>

<br><br>

 <script src="{{ asset('js/annonce-admin.js') }}"></script> 
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
