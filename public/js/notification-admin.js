// Ouverture/fermeture du modal
    const modal = document.getElementById('modal');
    const openBtn = document.getElementById('openModal');
    const closeBtn = document.getElementById('closeX');
    const cancelBtn = document.getElementById('cancel');
    const backdrop = document.getElementById('backdrop');

    const open = () => { modal.classList.add('open'); modal.setAttribute('aria-hidden','false'); };
    const close = () => { modal.classList.remove('open'); modal.setAttribute('aria-hidden','true'); };

    openBtn.addEventListener('click', open);
    [closeBtn, cancelBtn, backdrop].forEach(el => el.addEventListener('click', close));
    window.addEventListener('keydown', e => { if(e.key === 'Escape' && modal.classList.contains('open')) close(); });

    // Démo d’envoi
    document.getElementById('send').addEventListener('click', () => {
      const title = document.getElementById('title').value.trim();
      const msg = document.getElementById('message').value.trim();
      if(!title || !msg){ alert('Merci de remplir Titre et Message.'); return; }
      alert('Notification envoyée !');
      close();
    });