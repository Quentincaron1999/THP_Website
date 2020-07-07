<nav class="navbar is-transparent is-fixed-top" style="background-color: rgba(0, 0, 0, 0);">
			<div class="navbar-brand">
			  <a class="navbar-item" href="" >
				<img src="logo.jpg" alt="" width="" height="28">
			  </a>
			  <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
				<span></span>
				<span></span>
				<span></span>
			  </div>
			</div>
		  
			<div id="navbarExampleTransparentExample" class="navbar-menu">
			  <div class="navbar-start" style="flex-grow: 1; justify-content: center;">
			  <a class="navbar-item titlenav" href="http://www.traildehauteprovence.com/#">
				  Trail de Haute Provence
				</a>
				<a class="navbar-item titlenav" href="https://thprunning.com">
					THP running
				  </a>
				  <a class="navbar-item titlenav" href="https://www.thpwinter.com">
					THP winter
				  </a>
				  <a class="navbar-item titlenav" href="https://www.thpacademie.com">
					THP académie
				  </a>
			  </div>
			  <div class="navbar-end">
				<div class="navbar-item">
				  <div class="field is-grouped">
					<p class="control">
					  <a class="button is-primary is-rounded is-dark" style="background-color: #77777" href="https://github.com/jgthms/bulma/releases/download/0.9.0/bulma-0.9.0.zip">
						<span>S'inscrire</span>
					  </a>
					</p>
				  </div>
                </div>
                <div class="navbar-item">
				  <div class="field is-grouped">
					<p class="control">
					  <a class="button is-primary is-rounded is-black" href="https://github.com/jgthms/bulma/releases/download/0.9.0/bulma-0.9.0.zip">
						<span>Boutique</span>
					  </a>
					</p>
				  </div>
				</div>
			  </div>
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
<style>
	.titlenav:hover {
		color: black;
	}
</style>