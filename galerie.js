 const images = [
        "/soiree.JPG",
        "/activiter.JPG",
        "/bourse1.JPG",
        "/collecte.JPG"
    ];

    let index = 0;

    const trigger = document.getElementById("triggerImage");
    const menu = document.getElementById("floatingMenu");
    const overlay = document.getElementById("overlay");
    const menuImage = document.getElementById("menuImage");

    // OUVERTURE
    trigger.onclick = () => {
        overlay.style.display = "block";
        menu.style.display = "block";
        menuImage.src = images[index];
    };

    // FERMETURE
    function closeMenu() {
        menu.style.display = "none";
        overlay.style.display = "none";
    }

    // NAVIGATION
    function nextImage() {
        index = (index + 1) % images.length;
        menuImage.src = images[index];
    }
    function prevImage() {
        index = (index - 1 + images.length) % images.length;
        menuImage.src = images[index];
    }

    // CLIQUER HORS DU MENU = FERMETURE
    overlay.onclick = () => closeMenu();
