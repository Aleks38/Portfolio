<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="images/Logo_Alexy_bleu_transparent.png" sizes="192x192">
    </head>
    <!-- <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

            <div class="row ">
                
                <div class="col-8 align-self-center">
                <div id="recipeCarousel" class="carousel slide row" data-bs-ride="carousel">

                    <div class="col-1">

                        <a class="carousel-control-prev bg-transparent" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                        </a>

                    </div>

                    <div class="carousel-inner col" role="listbox">

                        <div class="row">
                        
                            <div class="col">

                                <div class="carousel-item active row">
                                    <div class="card col align-self-center p-0 mx-5" style="width: 18rem;">
                                        <img src="images/Projet_Gestion-Immobiliere_miniature.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                

                                <div class="carousel-item row">
                                    <div class="card col align-self-center p-0 mx-5" style="width: 18rem;">
                                        <img src="images/Projet_Laravel_miniature.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="carousel-item row">
                                    <div class="card col align-self-center p-0 mx-5" style="width: 18rem;">
                                        <img src="images/Projet_Overwatch_miniature.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="carousel-item row">
                                    <div class="card col align-self-center p-0 mx-5" style="width: 18rem;">
                                        <img src="images/Projet_Pygame_miniature.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-1">

                        <a class="carousel-control-next bg-transparent" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                        </a>

                    </div>
                </div>
                </div>
            </div>
    </body>
</html>

<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 3
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>

<div class="col-7 mx-auto mt-5 row bg-veille p-4 rounded-5 position-relative mb-5">
    
    <img src="images/Blockchain.jpg" class="rounded-5 blockChainImg" alt="BlockChain">

    <div class="col my-auto">
        <p class="fs-1 text-white">
            <a href="" class="text-white">Ma veille informatique</a>
        </p>

        <p class="fs-3 text-white">
            La <a href="" class="text-white">Blockchain</a> qu'est ce que c'est ?
        </p>

        <p class="fs-5 text-white">
            C'est une technologie de stockage et de transmission d'informations, prenant la forme d'une base de données 
            qui a la particularité d'être partagée simultanément avec tous ses utilisateurs et qui ne dépend d'aucun 
            organe central et a pour avantage d'êtrerapide et sécurisée.
        </p>
    </div>

    <a href="" class="">
        <div>
            <p class="fs-5 rounded-5 d-inline position-absolute top-100 start-50 translate-middle px-3 py-1 btnMore">
                En savoir plus
            </p>
        </div>
    </a>
</div>

<div class="row">
    <div class="col-md-3 px-5">
        <p class="fs-2 fw-bold text-purple">
            Contact :
        </p>
    </div>
    <div class="col-md-9 px-5">
        <form method="post" class="row">
            <div class="col-md-6">
                <input type="text" class="form-control col-6 my-2 rounded-5" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control col-6 my-2 rounded-5" name="prenom" placeholder="Nom" required>
            </div>
            <div class="col-md-12">
                <input type="email" class="form-control my-2 rounded-5" name="email" placeholder="Adresse mail" required>
            </div>
            <div class="col-md-12">
                <textarea class="form-control my-2 rounded-4" name="message" rows="5" placeholder="Texte" required></textarea>
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-purple rounded-5">
                    <p class="d-inline fw-bold">
                        Envoyer
                    </p>
                </button>
            </div>
        </form>
    </div>
</div>

    <?php
    if (isset($_POST['message'])) {
        $retour = mail('portfolio2022bts@gmail.com', 'Envoi depuis la page Contact', $_POST['message'],'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

<p class="lh-sm text-center text-white">
    Le <span class="badge rounded-pill text-bg-purple">BTS SIO</span> (Brevet de Technicien Supérieur en Services Informatiques aux Organisations) est un diplôme de niveau bac+2 qui forme les étudiants aux métiers de l'informatique 
    et du développement d'applications. Il est proposé dans les lycées et les centres de formation en France. Le BTS SIO est divisé en deux spécialisations: 
    <span class="badge rounded-pill text-bg-purple">SISR</span> (Solutions d'Infrastructure, de Systèmes et de Réseaux) et <span class="badge rounded-pill text-bg-purple">SLAM</span> (Solutions Logicielles et Applications Métiers). <br>
    
    Le BTS SIO est accessible après <span class="badge rounded-pill text-bg-purple"> un bac général </span> ou <span class="badge rounded-pill text-bg-purple"> technologique </span> ou <span class="badge rounded-pill text-bg-purple"> un bac professionnel </span>. Les étudiants suivent des cours théoriques et pratiques et réalisent des stages en entreprise. 
    Le BTS SIO permet aux étudiants de se spécialiser dans les métiers de l'informatique et de développer des compétences en matière de <span class="badge rounded-pill text-bg-purple"> gestion de projets </span> informatiques, de <span class="badge rounded-pill text-bg-purple"> développement 
    d'applications métier </span> et de <span class="badge rounded-pill text-bg-purple"> conseil en systèmes d'information </span>. En résumé, le BTS SIO est une formation professionnelle qui <span class="badge rounded-pill text-bg-purple"> prépare </span> aux métiers de l'informatique et du développement d'applications.
</p> -->

<header>
    <nav id="navbar-example2" class="navbar sticky-top ">
    <div class="vertical-nav mt-0 test2" id="sidebar">
        <div class="my-5 box">
            <svg class="centerSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65" height="65" zoomAndPan="magnify" viewBox="0 0 375 374.999991" preserveAspectRatio="xMidYMid meet" version="1.0">
                <defs>
                    <clipPath id="c9d709cdee">
                        <path d="M 20.339844 20.339844 L 354.839844 20.339844 L 354.839844 354.839844 L 20.339844 354.839844 Z M 20.339844 20.339844 " clip-rule="nonzero"/>
                    </clipPath>
                </defs>
                <g clip-path="url(#c9d709cdee)">
                    <path fill="#ffffff" d="M 352.207031 349.675781 C 352.449219 349.351562 352.683594 349.027344 352.894531 348.683594 C 353.117188 348.332031 353.304688 347.972656 353.484375 347.597656 C 353.664062 
                    347.222656 353.84375 346.851562 353.988281 346.453125 C 354.136719 346.066406 354.253906 345.667969 354.355469 345.265625 C 354.457031 344.867188 354.5625 344.480469 354.628906 344.078125 C 354.707031 
                    343.621094 354.738281 343.160156 354.765625 342.691406 C 354.78125 342.433594 354.839844 342.199219 354.839844 341.933594 C 354.839844 341.800781 354.804688 341.683594 354.804688 341.558594 C 354.789062 
                    341.097656 354.730469 340.636719 354.664062 340.171875 C 354.605469 339.769531 354.5625 339.375 354.464844 338.984375 C 354.378906 338.601562 354.238281 338.230469 354.113281 337.855469 C 353.960938 337.40625 
                    353.8125 336.960938 353.613281 336.535156 C 353.5625 336.417969 353.542969 336.300781 353.484375 336.179688 L 295.585938 220.386719 C 292.414062 214.039062 284.683594 211.464844 278.320312 214.632812 C 271.96875 
                    217.8125 269.390625 225.539062 272.570312 231.898438 L 321.15625 329.070312 L 277.257812 329.070312 L 252.613281 278.417969 C 252.496094 278.167969 252.316406 277.960938 252.1875 277.726562 C 251.953125 277.316406 
                    251.722656 276.914062 251.445312 276.53125 C 251.203125 276.191406 250.9375 275.890625 250.667969 275.585938 C 250.386719 275.269531 250.117188 274.960938 249.808594 274.675781 C 249.5 274.386719 249.179688 274.140625 
                    248.847656 273.882812 C 248.515625 273.625 248.1875 273.375 247.828125 273.15625 C 247.492188 272.941406 247.136719 272.765625 246.785156 272.589844 C 246.398438 272.390625 246.007812 272.210938 245.597656 272.046875 
                    C 245.222656 271.910156 244.839844 271.796875 244.460938 271.695312 C 244.050781 271.578125 243.636719 271.46875 243.210938 271.394531 C 242.765625 271.320312 242.316406 271.292969 241.871094 271.261719 C 241.582031 
                    271.242188 241.320312 271.175781 241.035156 271.175781 L 134.277344 271.175781 C 133.976562 271.175781 133.699219 271.242188 133.40625 271.261719 C 132.964844 271.292969 132.53125 271.320312 132.097656 271.394531 C 
                    131.667969 271.46875 131.25 271.585938 130.835938 271.703125 C 130.457031 271.804688 130.082031 271.910156 129.714844 272.054688 C 129.304688 272.210938 128.914062 272.398438 128.527344 272.597656 C 128.167969 
                    272.773438 127.8125 272.957031 127.476562 273.171875 C 127.125 273.390625 126.800781 273.640625 126.472656 273.890625 C 126.132812 274.144531 125.8125 274.402344 125.496094 274.6875 C 125.195312 274.96875 124.921875 
                    275.277344 124.652344 275.589844 C 124.378906 275.898438 124.109375 276.207031 123.867188 276.546875 C 123.59375 276.917969 123.367188 277.324219 123.132812 277.734375 C 123 277.96875 122.824219 278.175781 122.707031 
                    278.421875 L 98.0625 329.078125 L 54.023438 329.078125 L 99.050781 239.015625 L 223.035156 239.015625 C 230.136719 239.015625 235.90625 233.257812 235.90625 226.148438 C 235.90625 219.035156 230.144531 213.277344 
                    223.035156 213.277344 L 111.921875 213.277344 L 187.597656 61.917969 L 237.660156 162.050781 L 187.597656 162.050781 C 180.496094 162.050781 174.726562 167.808594 174.726562 174.917969 C 174.726562 182.019531 180.488281 
                    187.789062 187.597656 187.789062 L 258.460938 187.789062 C 258.464844 187.789062 258.480469 187.789062 258.488281 187.789062 C 258.5625 187.789062 258.636719 187.765625 258.707031 187.765625 C 259.574219 187.75 260.425781 
                    187.65625 261.238281 187.472656 C 261.480469 187.421875 261.71875 187.320312 261.960938 187.246094 C 262.632812 187.054688 263.289062 186.835938 263.910156 186.539062 C 264.011719 186.488281 264.125 186.476562 264.226562 
                    186.421875 C 264.453125 186.304688 264.644531 186.144531 264.863281 186.019531 C 265.269531 185.785156 265.664062 185.550781 266.039062 185.277344 C 266.375 185.035156 266.683594 184.765625 266.992188 184.492188 C 267.300781 
                    184.222656 267.601562 183.945312 267.878906 183.640625 C 268.171875 183.328125 268.4375 182.996094 268.695312 182.660156 C 268.9375 182.335938 269.171875 182.015625 269.390625 181.667969 C 269.613281 181.316406 269.796875 180.957031 
                    269.980469 180.582031 C 270.160156 180.207031 270.339844 179.835938 270.484375 179.4375 C 270.632812 179.050781 270.75 178.652344 270.851562 178.25 C 270.953125 177.855469 271.058594 177.464844 271.125 177.0625 C 271.203125 176.605469 
                    271.234375 176.144531 271.261719 175.683594 C 271.277344 175.425781 271.335938 175.183594 271.335938 174.925781 C 271.335938 174.792969 271.300781 174.675781 271.300781 174.550781 C 271.285156 174.089844 271.226562 173.628906 271.160156 
                    173.15625 C 271.101562 172.761719 271.058594 172.367188 270.96875 171.976562 C 270.882812 171.59375 270.742188 171.214844 270.617188 170.839844 C 270.460938 170.390625 270.316406 169.953125 270.117188 169.527344 C 270.066406 169.410156 
                    270.042969 169.292969 269.984375 169.171875 L 199.101562 27.398438 C 199.058594 27.304688 198.984375 27.238281 198.941406 27.140625 C 198.71875 26.714844 198.449219 26.328125 198.175781 25.929688 C 197.964844 25.617188 197.765625 25.292969 
                    197.53125 25.007812 C 197.269531 24.683594 196.960938 24.398438 196.664062 24.105469 C 196.359375 23.796875 196.0625 23.480469 195.734375 23.207031 C 195.457031 22.980469 195.140625 22.78125 194.832031 22.578125 C 194.429688 22.304688 
                    194.03125 22.027344 193.605469 21.800781 C 193.519531 21.75 193.445312 21.683594 193.347656 21.636719 C 193.101562 21.515625 192.835938 21.457031 192.578125 21.34375 C 192.144531 21.160156 191.722656 20.984375 191.28125 20.855469 
                    C 190.875 20.734375 190.480469 20.65625 190.070312 20.574219 C 189.667969 20.492188 189.261719 20.414062 188.851562 20.375 C 188.425781 20.339844 188 20.339844 187.566406 20.339844 C 187.164062 20.339844 186.769531 20.339844 186.363281 20.375 
                    C 185.925781 20.421875 185.5 20.5 185.074219 20.589844 C 184.683594 20.671875 184.304688 20.734375 183.921875 20.855469 C 183.464844 20.992188 183.035156 21.167969 182.59375 21.351562 C 182.34375 21.457031 182.078125 21.515625 181.835938 21.636719 
                    C 181.742188 21.683594 181.667969 21.757812 181.582031 21.800781 C 181.15625 22.019531 180.765625 22.292969 180.371094 22.5625 C 180.0625 22.777344 179.738281 22.972656 179.453125 23.207031 C 179.128906 23.472656 178.84375 23.78125 178.542969 24.082031 
                    C 178.242188 24.382812 177.925781 24.675781 177.65625 25.007812 C 177.429688 25.285156 177.230469 25.609375 177.023438 25.910156 C 176.753906 26.3125 176.472656 26.707031 176.246094 27.132812 C 176.195312 27.222656 176.128906 27.296875 176.085938 27.390625 L 21.699219 336.179688 
                    C 21.636719 336.300781 21.617188 336.417969 21.566406 336.535156 C 21.367188 336.960938 21.214844 337.40625 21.066406 337.855469 C 20.941406 338.230469 20.808594 338.601562 20.714844 338.984375 C 20.625 339.375 20.574219 339.769531 20.515625 340.171875 
                    C 20.449219 340.636719 20.390625 341.097656 20.375 341.558594 C 20.375 341.683594 20.339844 341.808594 20.339844 341.933594 C 20.339844 342.191406 20.398438 342.433594 20.414062 342.691406 C 20.441406 343.152344 20.472656 343.613281 20.550781 344.078125 
                    C 20.617188 344.480469 20.722656 344.875 20.824219 345.265625 C 20.933594 345.667969 21.042969 346.066406 21.191406 346.453125 C 21.335938 346.851562 21.515625 347.222656 21.699219 347.597656 C 21.878906 347.972656 22.070312 348.332031 22.285156 348.683594 
                    C 22.496094 349.027344 22.730469 349.351562 22.972656 349.675781 C 23.230469 350.011719 23.496094 350.34375 23.789062 350.65625 C 24.066406 350.957031 24.359375 351.230469 24.667969 351.5 C 24.976562 351.78125 25.292969 352.042969 25.628906 352.292969 
                    C 25.996094 352.566406 26.386719 352.792969 26.78125 353.019531 C 27.007812 353.152344 27.199219 353.3125 27.433594 353.4375 C 27.539062 353.488281 27.65625 353.503906 27.757812 353.554688 C 28.375 353.84375 29.011719 354.0625 29.671875 354.246094 C 29.921875 
                    354.320312 30.171875 354.421875 30.421875 354.480469 C 31.191406 354.648438 31.992188 354.730469 32.8125 354.757812 C 32.929688 354.757812 33.054688 354.804688 33.171875 354.804688 C 33.195312 354.804688 33.214844 354.796875 33.230469 354.796875 L 106.046875 354.796875 
                    C 106.058594 354.796875 106.066406 354.804688 106.082031 354.804688 C 106.859375 354.804688 107.628906 354.707031 108.394531 354.570312 C 108.597656 354.53125 108.796875 354.488281 108.996094 354.445312 C 109.617188 354.296875 110.226562 354.113281 110.8125 353.878906 C 110.929688 
                    353.835938 111.050781 353.804688 111.160156 353.753906 C 111.835938 353.46875 112.472656 353.109375 113.097656 352.703125 C 113.25 352.601562 113.398438 352.492188 113.542969 352.382812 C 114.027344 352.039062 114.484375 351.664062 114.914062 351.246094 C 115.039062 351.128906 115.171875 
                    351.011719 115.296875 350.886719 C 115.816406 350.351562 116.300781 349.785156 116.726562 349.144531 C 116.765625 349.09375 116.785156 349.042969 116.816406 348.992188 C 117.117188 348.539062 117.394531 348.066406 117.644531 347.5625 L 142.289062 296.90625 L 232.976562 296.90625 L 256.960938 
                    346.21875 C 258.328125 350.070312 261.453125 353.042969 265.394531 354.207031 C 265.539062 354.253906 265.6875 354.304688 265.832031 354.347656 C 266.222656 354.449219 266.609375 354.53125 267.015625 354.597656 C 267.617188 354.699219 268.226562 354.765625 268.835938 354.78125 C 268.90625 
                    354.78125 268.964844 354.804688 269.039062 354.804688 L 269.136719 354.804688 C 269.15625 354.804688 269.171875 354.8125 269.195312 354.8125 C 269.207031 354.8125 269.214844 354.804688 269.230469 354.804688 L 341.898438 354.804688 C 341.917969 354.804688 341.941406 354.8125 341.957031 354.8125 
                    C 342.074219 354.8125 342.199219 354.773438 342.316406 354.765625 C 343.128906 354.746094 343.9375 354.65625 344.707031 354.488281 C 344.964844 354.429688 345.207031 354.328125 345.457031 354.253906 C 346.117188 354.0625 346.761719 353.847656 347.371094 353.5625 C 347.480469 353.511719 
                    347.589844 353.496094 347.695312 353.445312 C 347.929688 353.328125 348.125 353.160156 348.347656 353.027344 C 348.742188 352.800781 349.132812 352.566406 349.5 352.300781 C 349.835938 352.050781 350.152344 351.789062 350.460938 351.507812 C 350.769531 351.238281 351.0625 350.964844 
                    351.339844 350.664062 C 351.683594 350.34375 351.941406 350.011719 352.207031 349.675781 Z M 352.207031 349.675781 " fill-opacity="1" fill-rule="nonzero"/>
                </g>
            </svg>
        </div>

        <ul class="nav flex-column mb-0">
            <!-- Icone accueil -->
            <li class="nav-item my-3 ">
                <a href="#accueuil" class="nav-link">
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                </a>
            </li>
            <!-- Icone pour mon CV -->
            <li class="nav-item my-3">
                <a href="#cv">
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                    </svg>
                </a>
                
            </li>
            <!-- Icone pour mes études --> 
            <li class="nav-item my-3">
                <a href="#monProjet">
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" version="1.1" width="1.5em" height="1.5em" viewBox="0 0 512.004 512.004" xml:space="preserve">
                        <path d="M496.798,152.612l-230.4-102.4c-3.302-1.468-6.844-2.21-10.394-2.21c-3.541,0-7.091,0.734-10.394,2.21l-230.4,102.4    c-9.242,4.113-15.206,13.278-15.206,23.39s5.956,19.285,15.206,23.39L38.404,209.7v45.457c-14.865,5.299-25.6,19.379-25.6,36.045    
                        c0,11.87,5.53,22.366,14.02,29.423L1.719,364.119c-3.541,6.127-1.434,13.952,4.685,17.485c2.014,1.161,4.215,1.715,6.391,1.715    c4.429,0,8.721-2.304,11.102-6.4l14.515-25.139v29.022c0,7.074,5.726,12.8,12.8,12.8c7.074,0,12.8-5.726,12.8-12.8V351.78    
                        l14.515,25.139c2.372,4.113,6.673,6.4,11.102,6.4c2.176,0,4.378-0.546,6.391-1.715c6.127-3.541,8.226-11.366,4.685-17.485    l-25.105-43.494c8.491-7.049,14.02-17.544,14.02-29.423c0-16.666-10.735-30.737-25.6-36.045v-34.074l38.4,17.067v14.652    
                        c0,8.03,3.772,15.599,10.18,20.437c0.845,0.64,1.852,0.93,2.756,1.451c-0.026,1.246-0.145,2.458-0.145,3.712    c0,102.502,63.036,185.6,140.8,185.6s140.8-83.098,140.8-185.6c0-1.254-0.119-2.466-0.145-3.712    c0.904-0.521,1.911-0.811,2.756-1.451c6.408-4.838,10.18-12.407,10.18-20.437V238.15l87.194-38.75    
                        c9.25-4.113,15.206-13.278,15.206-23.398S506.048,156.717,496.798,152.612z M51.213,304.002c-7.066,0-12.8-5.734-12.8-12.8    s5.734-12.8,12.8-12.8c7.066,0,12.8,5.734,12.8,12.8S58.278,304.002,51.213,304.002z M256.004,438.402   
                        c-63.522,0-115.2-71.774-115.2-160c0-0.93,0.094-1.835,0.102-2.765c2.236-0.683,4.412-1.323,6.75-2.048    c22.323-6.98,50.099-15.659,108.348-15.659s86.025,8.687,108.348,15.659c2.338,0.734,4.514,1.365,6.75,2.048    
                        c0.009,0.93,0.102,1.835,0.102,2.765C371.204,366.628,319.526,438.402,256.004,438.402z M384.004,252.802    c-26.103-7.458-54.929-20.48-128-20.48s-101.897,13.022-128,20.48c0-22.545,0-43.989,0-50.859c0-21.205,57.31-38.4,128-38.4    
                        s128,17.195,128,38.4C384.004,210.579,384.004,231.298,384.004,252.802z M409.604,210.135v-8.192c0-60.911-127.949-64-153.6-64    c-25.651,0-153.6,3.089-153.6,64v8.201l-76.8-34.133l230.4-102.4l230.4,102.4L409.604,210.135z"/>
                    </svg>
                </a>
            </li>
            <!-- Icone pour mes compétences -->
            <li class="nav-item my-3">
                <a href="#mesCompetences">
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
            </li>
            <!-- Icone pour ma veille -->
            <li class="nav-item my-3">
                <a href="#veille">  
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
                        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                    </svg>
                </a>
            </li>
            <!-- Icone pour mes projets -->
            <li class="nav-item my-3">
                <a href="#">  
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                    </svg>
                </a>
            </li>
            <!-- Icone contact -->
            <li class="nav-item my-3">
                <a href="#contact">
                    <svg class="centerSVG colorSVGIcon" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <p>
        a
    </p>
    </nav>
</header>


