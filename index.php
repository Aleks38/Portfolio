<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
        <div class="header-full"> 
            <div class="center-div mx-auto">
                <img class="pp img-fluid" src="images/photo_de_profile.png">
                <p class="text-center fs-1 fw-bold mb-0">Da Silva Alexy</p>
                <p class="text-center fs-5">Je suis élève de BTS SIO</p>
                <div class="text-center my-0">
                    <!-- GitHub -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github mx-2" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    <!-- Linkedin -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin mx-2" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                    <!-- Twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter mx-2" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    <!-- Mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-paper-fill mx-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.5 9.5 3 7.5v-6A1.5 1.5 0 0 1 4.5 0h7A1.5 1.5 0 0 1 13 1.5v6l-3.5 2L8 8.75l-1.5.75ZM1.059 3.635 2 3.133v3.753L0 5.713V5.4a2 2 0 0 1 1.059-1.765ZM16 5.713l-2 1.173V3.133l.941.502A2 2 0 0 1 16 5.4v.313Zm0 1.16-5.693 3.337L16 13.372v-6.5Zm-8 3.199 7.941 4.412A2 2 0 0 1 14 16H2a2 2 0 0 1-1.941-1.516L8 10.072Zm-8 3.3 5.693-3.162L0 6.873v6.5Z"/>
                    </svg> 
                </div>
                
            </div>
        </div>

        <hr class="line lighThemeBack">
        <div class="d-grid col-1 mx-auto my-5">
            <button type="button" class="btn btn-lg btn-primary rounded-pill theme border-0 lighThemeBack" onclick="location.href='https://1drv.ms/b/s!AoKxhS8d_LSZgbFNVYYgdIJuIOamkg?e=VwYpBF';">
                Voir CV
            </button>
        </div>

        <div class="container text-center">
            <div class="row col-10 mx-auto ">

                <div class="col theme mb-0 rounded-4 mx-2 test2">
                    <p class="fs-2 mb-0 textLight fw-bold">PASSE / PRESENT</p>
                    <div class="mb-0 row">
                        <div class=" mb-2 mt-0 fw-bold textLight">
                            <p class="text-start">2021 - Ajourd'hui</p>
                        </div>
                        <div class="offset-md-1 my-2 col-md-11 textLight">
                            <p class="text-start">BTS SIO option SLAM** à l’institut supérieur Saint-Denis 07100 Annonay </p>
                        </div>
                        <div class="my-2 fw-bold textLight">
                            <p class="text-start">2019 - 2021</p>
                        </div>
                        <div class="offset-md-1 my-2 col-md-11 textLight">
                            <p class="text-start">Bac Général option Mathématques, Physique Chimie et Numérique et Science Informatique</p>
                        </div>  
                    </div>
                </div>

                <div class="col theme mb-0 rounded-4 mx-2 test2">
                    <p class="fs-2 mb-0 textLight fw-bold">PASSE / PRESENT</p>
                    <div class="mb-0 row">
                        <div class="mb-2 mt-0 fw-bold textLight">
                            <p class="text-start">2021 - Ajourd'hui</p>
                        </div>
                        <div class="offset-md-1 my-2 col-md-11 textLight">
                            <p class="text-start">BTS SIO option SLAM** à l’institut supérieur Saint-Denis 07100 Annonay </p>
                        </div>
                        <div class="my-2 fw-bold textLight">
                            <p class="text-start">2019 - 2021</p>
                        </div>
                        <div class="offset-md-1 my-2 col-md-11 textLight">
                            <p class="text-start">Bac Général option Mathématques, Physique Chimi</p>
                        </div>  
                    </div>
                </div>
                <p class="text-start fs-6">**Solution logiciel et application métier </p>
            </div>
        </div>

        <!-- Icone accueil -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg> -->

        <!-- Icone pour mon CV -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
        </svg> -->

        <!-- Icone pour mes études -->       
        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16" viewBox="0 0 512.004 512.004" style="enable-background:new 0 0 512.004 512.004;" xml:space="preserve">
            <path d="M496.798,152.612l-230.4-102.4c-3.302-1.468-6.844-2.21-10.394-2.21c-3.541,0-7.091,0.734-10.394,2.21l-230.4,102.4    c-9.242,4.113-15.206,13.278-15.206,23.39s5.956,19.285,15.206,23.39L38.404,209.7v45.457c-14.865,5.299-25.6,19.379-25.6,36.045    
            c0,11.87,5.53,22.366,14.02,29.423L1.719,364.119c-3.541,6.127-1.434,13.952,4.685,17.485c2.014,1.161,4.215,1.715,6.391,1.715    c4.429,0,8.721-2.304,11.102-6.4l14.515-25.139v29.022c0,7.074,5.726,12.8,12.8,12.8c7.074,0,12.8-5.726,12.8-12.8V351.78    
            l14.515,25.139c2.372,4.113,6.673,6.4,11.102,6.4c2.176,0,4.378-0.546,6.391-1.715c6.127-3.541,8.226-11.366,4.685-17.485    l-25.105-43.494c8.491-7.049,14.02-17.544,14.02-29.423c0-16.666-10.735-30.737-25.6-36.045v-34.074l38.4,17.067v14.652    
            c0,8.03,3.772,15.599,10.18,20.437c0.845,0.64,1.852,0.93,2.756,1.451c-0.026,1.246-0.145,2.458-0.145,3.712    c0,102.502,63.036,185.6,140.8,185.6s140.8-83.098,140.8-185.6c0-1.254-0.119-2.466-0.145-3.712    c0.904-0.521,1.911-0.811,2.756-1.451c6.408-4.838,10.18-12.407,10.18-20.437V238.15l87.194-38.75    
            c9.25-4.113,15.206-13.278,15.206-23.398S506.048,156.717,496.798,152.612z M51.213,304.002c-7.066,0-12.8-5.734-12.8-12.8    s5.734-12.8,12.8-12.8c7.066,0,12.8,5.734,12.8,12.8S58.278,304.002,51.213,304.002z M256.004,438.402   
            c-63.522,0-115.2-71.774-115.2-160c0-0.93,0.094-1.835,0.102-2.765c2.236-0.683,4.412-1.323,6.75-2.048    c22.323-6.98,50.099-15.659,108.348-15.659s86.025,8.687,108.348,15.659c2.338,0.734,4.514,1.365,6.75,2.048    
            c0.009,0.93,0.102,1.835,0.102,2.765C371.204,366.628,319.526,438.402,256.004,438.402z M384.004,252.802    c-26.103-7.458-54.929-20.48-128-20.48s-101.897,13.022-128,20.48c0-22.545,0-43.989,0-50.859c0-21.205,57.31-38.4,128-38.4    
            s128,17.195,128,38.4C384.004,210.579,384.004,231.298,384.004,252.802z M409.604,210.135v-8.192c0-60.911-127.949-64-153.6-64    c-25.651,0-153.6,3.089-153.6,64v8.201l-76.8-34.133l230.4-102.4l230.4,102.4L409.604,210.135z"/>
        </svg> -->
        
        <!-- Icone pour mes compétences -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
        </svg> -->

        <!-- Icone pour mon projet -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
            <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
        </svg> -->

        <!-- Icone contact -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg> -->
    </body>
</html>





