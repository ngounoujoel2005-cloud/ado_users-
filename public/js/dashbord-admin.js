// Animation fade-in au scroll
        function revealOnScroll() {
            document.querySelectorAll('.fade-in').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 40) {
                    el.classList.add('visible');
                }
            });
        }
        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('DOMContentLoaded', revealOnScroll);

        // Effet de clone sur cards (exemple)
        document.querySelectorAll('.dashboard-card').forEach(card => {
            card.addEventListener('dblclick', function() {
                const clone = card.cloneNode(true);
                clone.style.boxShadow = '0 0 24px #10b98155';
                clone.style.transform = 'scale(1.05)';
                clone.classList.add('fade-in');
                document.querySelector('.dashboard-cards').appendChild(clone);
                setTimeout(() => clone.classList.add('visible'), 100);
            });
        });

        // Changement de pages (sidebar navigation)
        document.querySelectorAll('.sidebar-nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (link.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    alert('Changement de page : ' + link.textContent.trim());
                }
            });
        });

        // Effet défilement smooth sur "View All"
        document.querySelectorAll('.view-all-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
            });
        });

        function navigateTo(section) {
            switch(section) {
<<<<<<< HEAD
                case 'accueil': window.location.href = 'index'; break;
                case 'historique': window.location.href = 'A propos-user'; break;
                case 'activites': window.location.href = 'activiter-user'; break;
                case 'bourse': window.location.href = 'bource-user'; break;
                case 'femmes': window.location.href = 'femmeadolescence-user'; break;
                case 'contact': window.location.href = 'contact-user'; break;
=======
                case 'accueil': window.location.href = 'accuille-user.html'; break;
                case 'historique': window.location.href = 'A propos-user.html'; break;
                case 'activites': window.location.href = 'activiter-user.html'; break;
                case 'bourse': window.location.href = 'bource-user.html'; break;
                case 'femmes': window.location.href = 'femmeadolescence-user.html'; break;
                case 'contact': window.location.href = 'contact-user.html'; break;
>>>>>>> feature-collegue
                default: alert('Section non disponible');
            }
        }

        // Met à jour la classe active sur la sidebar selon la page courante
        function setActiveSidebarNav() {
            const path = window.location.pathname.toLowerCase();
            document.querySelectorAll('.sidebar-nav a').forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                // Si le href correspond à la page courante, on met active
                if (href && path.indexOf(href.toLowerCase()) !== -1) {
                    link.classList.add('active');
                }
            });
        }
<<<<<<< HEAD
        setActiveSidebarNav();
=======
        setActiveSidebarNav();
>>>>>>> feature-collegue
