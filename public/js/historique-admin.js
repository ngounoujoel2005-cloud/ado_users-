 const modalNew = document.getElementById('modalNew');
    const modalEdit = document.getElementById('modalEdit');
    const openModalBtn = document.getElementById('openModal');
    const toggleRole = document.getElementById('toggleRole');

    function openNewModal(){
      modalNew.classList.add('open');
    }

    function closeNewModal(){
      modalNew.classList.remove('open');
    }

    function openEditModal(eventId){
      modalEdit.classList.add('open');
    }

    function closeEditModal(){
      modalEdit.classList.remove('open');
    }

    openModalBtn.addEventListener('click', openNewModal);

    toggleRole.addEventListener('click', function(){
      this.classList.toggle('active');
    });

    document.getElementById('formNew').addEventListener('submit', function(e){
      e.preventDefault();
      alert('Événement créé !');
      closeNewModal();
    });

    document.getElementById('formEdit').addEventListener('submit', function(e){
      e.preventDefault();
      alert('Événement modifié !');
      closeEditModal();
    });