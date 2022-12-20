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
    <body>
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

<div class="col-7 mx-auto mt-5 row bg-danger p-4 rounded-5 position-relative mb-5">
    
    <img src="images/Blockchain.jpg" class="rounded-5 blockChainImg" alt="BlockChain">

    <div class="col my-auto">
        <p class="fs-1">
            Ma veille informatique
        </p>

        <p class="fs-3">
            La Blockchain qu'est ce que c'est ?
        </p>

        <p class="fs-5">
            C'est une technologie de stockage et de transmission d'informations, prenant la forme d'une base de données 
            qui a la particularité d'être partagée simultanément avec tous ses utilisateurs et qui ne dépend d'aucun 
            organe central et a pour avantage d'êtrerapide et sécurisée.
        </p>
    </div>

    <a href="" class="">
        <div>
            <p class="fs-4 rounded-5 d-inline position-absolute top-100 start-50 translate-middle px-2 py-1 btnMore">
                En savoir plus
            </p>
        </div>
    </a>
</div>

    <h1>Contact</h1>
    <form method="post">
        <label>Votre email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $retour = mail('portfolio2022bts@gmail.com', 'Envoi depuis la page Contact', $_POST['message'],'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

