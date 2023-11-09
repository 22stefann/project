<?php require_once 'query/navigation.php'; ?>
<style>
/*navigation start*/

header nav {
    width: 100%;
    height: var(--navHeight);
    background-color: aliceblue;
    position: fixed;
    transition: height 0.3s; /* Dodajte tranziciju za glatko animirano menjanje visine */
    top: 0;
}

.scrolled {
    height: calc(var(--navHeight) - 30px);  /* Visina navigacije kada se skroluje naniže */
}

header nav .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header nav .container img {
    width: var(--logoWidth);
    transition: width 0.3s; /* Dodajte tranziciju za glatko animirano menjanje visine */
}

header nav.scrolled .container img {
    transition: width 0.3s; /* Dodajte tranziciju za glatko animirano menjanje visine */
    width: calc(var(--logoWidth) - 30px);  /* Sirina logo-a kada se skroluje naniže */
}

header nav .container ul {
    list-style-type: none;
    display: flex;
}

header nav .container ul li {
    padding: 10px;
}

header nav .container ul li p {
    margin: 0;
}
/*navigation end*/
</style>
<header>
<nav>
    <div class="container">
        <img src="custom/logo.png.png" alt="logo">
        <ul>
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li><p><a href='#'> ".$row["naziv"]."</a></p></li>";
                    }
                } else {
                    echo "Nema rezultata.";
                }
            ?>
        </ul>
    </div>
</nav>
</header>


<script>

  $(document).ready(function() {
    // Pratimo skrolovanje stranice
    window.addEventListener("scroll", function() {
        var navigation = document.querySelector("nav");
        // Dodajemo ili uklanjamo klasu 'scrolled' u zavisnosti od položaja skrolovanja
        if (window.scrollY > 50) {
        navigation.classList.add("scrolled");
        } else {
        navigation.classList.remove("scrolled");
        }
    });
  });
</script>