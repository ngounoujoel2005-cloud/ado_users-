const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('openModal');
    const closeBtns = [document.getElementById('closeX'), document.getElementById('cancel'), document.getElementById('backdrop')];

    function openModal(){ modal.classList.add('open'); }
    function closeModal(){ modal.classList.remove('open'); }

    openModalBtn.addEventListener('click', openModal);
    closeBtns.forEach(el=> el.addEventListener('click', closeModal));

    document.getElementById('create').addEventListener('click', ()=>{
      alert("Annonce créée !");
      closeModal();
    });