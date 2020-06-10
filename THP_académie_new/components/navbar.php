<!-- Pré-Navbar -->

<nav class="navbar is-fixed-top prenav is-hidden-mobile" role="navigation" aria-label="main navigation">
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="Contact.php">contact</a>
            <a class="navbar-item"><img src="assets/img/francefav.png"></a>
            <a class="navbar-item" href="QuiSommesNous.php">Qui sommes nous ?</a>
        </div>

        <div class="navbar-end">
        <div class="navbar-item">
                <a class="button is-primary is-rounded" href="https://www.facebook.com/thpacademie/?modal=admin_todo_tour">
                    <span class="icon">
                        <i class="fab fa-facebook"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item">
                <a class="button is-primary is-rounded" href="https://www.instagram.com/thpacademie/">
                    <span class="icon">
                        <i class="fab fa-instagram"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item">
                <a class="button is-primary is-rounded" href="https://twitter.com/search?q=thp%20academie&src=typed_query">
                    <span class="icon">
                        <i class="fab fa-twitter"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item">
                <a class="button is-primary is-rounded" href="https://www.flickr.com/photos/traildehauteprovence/">
                    <span class="icon">
                        <i class="fab fa-flickr"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item">
                <a class="button is-primary is-rounded" href="https://www.youtube.com/channel/UCTan_ztQqHsh34A8KeTz0Hg">
                    <span class="icon">
                        <i class="fab fa-youtube"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>






<!-- Principal Navbar -->

<nav id="principal-nav" class="navbar is-fixed-top is-mobile mt-6" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="assets/img/logo_thpacademie.png"  width="90" height="90">
        </a>

    <a role="button" class="navbar-burger burger is-mobile" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Programme</a>
            <div class="navbar-dropdown">
                <a class="navbar-item" href="Session-Summer.php">Session Eté 2020</a>
                <a class="navbar-item" href="Session-Automn.php">Session Automne 2020</a>
                <a class="navbar-item" href="Session-Spring.php">Session Printemps 2021</a>
            </div>
        </div>
        <a class="navbar-item" href="Niveaux.php">Niveaux</a>
        <a class="navbar-item">Coaching</a>
        <a class="navbar-item" href="Photos.php">Photos/Vidéo</a>
        <a class="navbar-item" href="Actualite.php">Actualités</a>      
    </div>

    <!--<div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>-->
  </div>
</nav>



<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }
    });
</script>