 function openNewForm() {
            document.getElementById('newForm').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        function closeNewForm() {
            document.getElementById('newForm').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function openEditForm(btn) {
            const card = btn.closest('.publication-card');
            document.getElementById('editTitle').value = card.dataset.title;
            document.getElementById('editType').value = card.dataset.type;
            document.getElementById('editDescription').value = card.dataset.description;
            document.getElementById('editForm').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        function closeEditForm() {
            document.getElementById('editForm').style.display = 'none';
            document.body.style.overflow = 'auto';
        }