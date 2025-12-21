 function toggleForm() {
            const form = document.getElementById('floatingForm');
            if (form.style.display === 'flex') {
                form.style.display = 'none';
                document.body.style.overflow = 'auto';
            } else {
                form.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        }

        function toggleUserMode() {
            const toggle = document.querySelector('.toggle-switch');
            toggle.classList.toggle('active');
        }