<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayas/JBN-JBL</title>
    <link href="css/bootstrap.css" rel="stylesheet" >
    <script src="js/jquery-3.7.1.min.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: white;
            color: #FFD700;
            margin: 0;
            margin: right 0;
            padding: 0;
        }
    
        .main-content {
            display: flex;
            flex-grow: 1;
            padding: 0;
        }
    
        /* .nav-link {
            color: #FFD700;
        } */
    
        .btn-primary {
            background-color: #FFD700;
            color: black;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }
    
        .btn-primary:hover {
            background-color: #d4af37;
        }
    
        .btn-icon {
            color: #FFD700;
        }
    
        .sidebar {
            width: 250px;
            flex-shrink: 0;
            padding: 20px;
            position: sticky;
            top: 0;
            height: 100vh;
            border-right: none;
        }
    
        .sidebar h5 {
            color: #FFD700;
        }
    
        .sidebar a {
            color: #FFD700;
            display: block;
            margin: 10px 0;
        }
    
        .sidebar a:hover {
            color: #4d4316;
        }
    
        .product-card {
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #FFD700;
            border-radius: 5px;
            overflow: hidden;
        }
    
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    
        footer {
            padding: 40px 20px;
            text-align: center;
            color: #0c0c0b;
            border-top: 1px solid #FFD700;
        }
    
        /* .nav-link:hover, .sidebar a:hover, footer a:hover {
            color: #FFD700;
        } */
    
        .carousel-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    
        .carousel-inner {
            width: 100%;
            overflow: hidden;
        }
    
        .carousel-inner img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }
    
        .search-form input, .search-form button {
            background-color: #000000;
            color: #FFD700;
            border: 1px solid #FFD700;
            padding: 10px;
            font-size: 1rem;
        }
    
        .search-form button:hover {
            background-color: #4d4316;
            color: #000000;
        }
    
        @media (max-width: 1200px) {
            .sidebar {
                width: 200px;
            }
    
            .btn-primary {
                font-size: 0.9rem;
                padding: 8px 16px;
            }
    
            .product-card img {
                height: 180px;
            }
        }
    
        @media (max-width: 992px) {
            .sidebar {
                width: 180px;
            }
    
            .main-content {
                flex-direction: column;
                padding: 10px;
            }
    
            .navbar .search-form {
                width: 100%;
                margin-bottom: 10px;
            }
    
            .navbar .search-form input {
                width: 70%;
                margin-right: 10px;
            }
    
            .navbar .search-form button {
                width: 30%;
            }
    
            .btn-primary {
                width: 100%;
            }
    
            .product-card img {
                height: 150px;
            }
        }
    
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
                padding: 10px;
            }
    
            .navbar .search-form {
                width: 100%;
                margin-bottom: 10px;
            }
    
            .navbar .search-form input {
                width: 70%;
                margin-right: 10px;
            }
    
            .navbar .search-form button {
                width: 30%;
            }
    
            .product-card {
                margin-bottom: 15px;
            }
    
            .product-card img {
                height: 140px;
            }
    
            footer {
                padding: 20px 10px;
            }
        }
    
        @media (max-width: 480px) {
            .sidebar {
                display: none; /* Masquer la sidebar sur les petits écrans */
            }
    
            .product-card {
                margin-bottom: 10px;
            }
    
            .btn-primary {
                font-size: 0.8rem;
                padding: 8px 16px;
            }
    
            .navbar .search-form input, .navbar .search-form button {
                width: 100%;
            }
    
            .carousel-inner img {
                height: 400px;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-light py-1 ">
        
            <a class="navbar-brand" href="index.php">
                <img src="http://localhost/siteweb/Files/logo.jpg" alt="Logo" style="height: 60px; width: 70px; margin-left: 5rem;">
            </a>
    
            <!-- <div class="d-flex flex-grow-1 justify-content-center">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button style="color: #FFD700" type="submit">Recherche</button>
                </form>
            </div> -->
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="color: #FFD700;">
                    <li class="nav-item"><a class="nav-link " style="margin-right: 5rem;"   href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="Panier.php" style="margin-right: 5rem;">Panier</a></li>
                </ul>
            </div>
        
    </nav>    
<div class="main-content">
                      <div class="">
                
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://localhost/siteweb/Files/gettyimages-522967072-612x612.jpg" class="d-block w-100"
                                    alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/siteweb/Files/téléchargement (15).jpeg" class="d-block w-100"
                                    alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/siteweb/Files/gettyimages-2175614675-612x612.jpg"
                                    class="d-block w-100" alt="Image 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 order-md-1 order-2">
                            <div class="sidebar p-4 bg-light rounded">
                                <h5 class="mb-4" style=" color: #FFD700";>NOS PRODUITS</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-4"><a href="#" class="text-decoration-none text-dark">Ordinateurs</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Téléphones</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Télevision</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Chargeurs</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Screens</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Radio JBL</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-dark">Casquettes</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 order-md-2 order-1">
                            <div class="row">
                            <!-- <div class="row" id="products"></div> -->
                                <div class="col-md-4 mb-4">
                                    <div class="card product-card">
                                        <img src="http://localhost/siteweb/Files/images (11).jpeg" alt="Produit 1"
                                            class="card-img-top img-fluid">
                                        <div class="card-body">
                                            <h5 class="card-title">Produit 1</h5>
                                            <p class="card-text">Description du produit 1.</p>
                                            <a href="Prodetails.php" class="btn btn-primary">Voir le produit</a>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="http://localhost/siteweb/Files/images (12).jpeg" class="card-img-top img-fluid"
                                            alt="Produit 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Produit 2</h5>
                                            <p class="card-text">Description du produit 2.</p>
                                            <a href="Prodetails.php" class="btn btn-primary">Voir le produit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="http://localhost/siteweb/Files/images (13).jpeg" class="card-img-top img-fluid"
                                            alt="Produit 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Produit 3</h5>
                                            <p class="card-text">Description du produit 3.</p>
                                            <a href="#" class="btn btn-primary">Voir le produit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                
      <!--Landing pages start-->
      <section class="my-xl-7 py-">
        <div class="container mb-xl-7" data-cue="fadeIn">
           <div class="row row-cols-1 row-cols-md-3 gy-4">
              <div class="col" data-cue="zoomIn">
                 <div class="card card-lift">
                    <div class="card-body d-flex flex-column gap-4">
                       <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                             <path
                                opacity="0.2"
                                d="M28 7V21C28 21.2652 27.8946 21.5196 27.7071 21.7071C27.5196 21.8946 27.2652 22 27 22H24V11C24 10.7348 23.8946 10.4804 23.7071 10.2929C23.5196 10.1054 23.2652 10 23 10H8V7C8 6.73478 8.10536 6.48043 8.29289 6.29289C8.48043 6.10536 8.73478 6 9 6H27C27.2652 6 27.5196 6.10536 27.7071 6.29289C27.8946 6.48043 28 6.73478 28 7Z"
                                fill="#8B3DFF" />
                             <path
                                d="M27 5H9C8.46957 5 7.96086 5.21071 7.58579 5.58579C7.21071 5.96086 7 6.46957 7 7V9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V25C3 25.5304 3.21071 26.0391 3.58579 26.4142C3.96086 26.7893 4.46957 27 5 27H23C23.5304 27 24.0391 26.7893 24.4142 26.4142C24.7893 26.0391 25 25.5304 25 25V23H27C27.5304 23 28.0391 22.7893 28.4142 22.4142C28.7893 22.0391 29 21.5304 29 21V7C29 6.46957 28.7893 5.96086 28.4142 5.58579C28.0391 5.21071 27.5304 5 27 5ZM5 11H23V13H5V11ZM23 25H5V15H23V25ZM27 21H25V11C25 10.4696 24.7893 9.96086 24.4142 9.58579C24.0391 9.21071 23.5304 9 23 9H9V7H27V21Z"
                                fill="#8B3DFF" />
                          </svg>
                       </div>
                       <div class="d-flex flex-column gap-2">
                          <h3 class="mb-0 fs-4">11+ Nouveaux arrivages </h3>
                     
                          <p class="mb-0">Consulte notre boutique pour decouvrir les nouvelles marques fascinantes</p>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col" data-cue="zoomIn">
                 <div class="card card-lift">
                    <div class="card-body d-flex flex-column gap-4">
                       <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                             <path opacity="0.2" d="M28 10L16 17L4 10L16 3L28 10Z" fill="#8B3DFF" />
                             <path
                                d="M28.8638 21.5C28.9958 21.7292 29.0317 22.0014 28.9635 22.257C28.8954 22.5126 28.7287 22.7308 28.5 22.8638L16.5 29.8638C16.3471 29.9529 16.1733 29.9999 15.9963 29.9999C15.8192 29.9999 15.6454 29.9529 15.4925 29.8638L3.4925 22.8638C3.26712 22.7283 3.10415 22.5096 3.03888 22.2549C2.9736 22.0001 3.01128 21.73 3.14375 21.5028C3.27622 21.2757 3.49282 21.1099 3.74666 21.0413C4.0005 20.9727 4.27114 21.0068 4.5 21.1363L16 27.8425L27.5 21.1363C27.7292 21.0042 28.0014 20.9683 28.257 21.0365C28.5126 21.1047 28.7308 21.2713 28.8638 21.5ZM27.5 15.1363L16 21.8425L4.5 15.1363C4.27231 15.0229 4.00997 15.0006 3.76638 15.0738C3.5228 15.147 3.31627 15.3103 3.18884 15.5305C3.06141 15.7506 3.02266 16.011 3.08046 16.2587C3.13827 16.5064 3.28829 16.7228 3.5 16.8638L15.5 23.8638C15.6529 23.9529 15.8267 23.9999 16.0037 23.9999C16.1808 23.9999 16.3546 23.9529 16.5075 23.8638L28.5075 16.8638C28.6228 16.7986 28.7239 16.7111 28.8051 16.6065C28.8863 16.5019 28.9459 16.3822 28.9804 16.2543C29.015 16.1265 29.0238 15.9931 29.0064 15.8618C28.9889 15.7305 28.9456 15.604 28.8789 15.4896C28.8122 15.3752 28.7234 15.2752 28.6177 15.1954C28.5121 15.1156 28.3916 15.0576 28.2633 15.0247C28.135 14.9918 28.0015 14.9848 27.8705 15.0039C27.7394 15.0231 27.6135 15.0681 27.5 15.1363ZM3 10C3.0004 9.82487 3.04679 9.6529 3.13454 9.50131C3.22229 9.34973 3.34831 9.22385 3.5 9.13627L15.5 2.13627C15.6529 2.04711 15.8267 2.00012 16.0037 2.00012C16.1808 2.00012 16.3546 2.04711 16.5075 2.13627L28.5075 9.13627C28.6585 9.22434 28.7837 9.35044 28.8707 9.50199C28.9578 9.65354 29.0036 9.82525 29.0036 10C29.0036 10.1748 28.9578 10.3465 28.8707 10.4981C28.7837 10.6496 28.6585 10.7757 28.5075 10.8638L16.5075 17.8638C16.3546 17.9529 16.1808 17.9999 16.0037 17.9999C15.8267 17.9999 15.6529 17.9529 15.5 17.8638L3.5 10.8638C3.34831 10.7762 3.22229 10.6503 3.13454 10.4987C3.04679 10.3471 3.0004 10.1752 3 10ZM5.985 10L16 15.8425L26.015 10L16 4.15752L5.985 10Z"
                                fill="#8B3DFF" />
                          </svg>
                       </div>
                       <div class="d-flex flex-column gap-2">
                          <h3 class="mb-0 fs-4">80+ Nouveau habits</h3>
                          <p class="mb-0">Ne rate pas cet opportunités et consulte nos jornaux d'arrivages </p>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col" data-cue="zoomIn">
                 <div class="card card-lift">
                    <div class="card-body d-flex flex-column gap-4">
                       <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="32" viewBox="0 0 22 32" fill="none">
                             <mask id="mask0_1700_169" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="32">
                                <path d="M21.3333 0H0V32H21.3333V0Z" fill="white" />
                             </mask>
                             <g mask="url(#mask0_1700_169)">
                                <mask id="mask1_1700_169" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="32">
                                   <path d="M20.9633 0.121216H0V31.5598H20.9633V0.121216Z" fill="white" />
                                </mask>
                                <g mask="url(#mask1_1700_169)">
                                   <path
                                      d="M5.24186 31.5599C8.13422 31.5599 10.4816 29.2125 10.4816 26.3201V21.0803H5.24186C2.34949 21.0803 0.0020752 23.4277 0.0020752 26.3201C0.0020752 29.2125 2.34949 31.5599 5.24186 31.5599Z"
                                      fill="#0ACF83" />
                                   <path
                                      d="M0.0020752 15.8405C0.0020752 12.9482 2.34949 10.6008 5.24186 10.6008H10.4816V21.0803H5.24186C2.34949 21.0803 0.0020752 18.7329 0.0020752 15.8405Z"
                                      fill="#A259FF" />
                                   <path
                                      d="M0.0022583 5.36099C0.0022583 2.46863 2.34968 0.121216 5.24204 0.121216H10.4818V10.6008H5.24204C2.34968 10.6008 0.0022583 8.25335 0.0022583 5.36099Z"
                                      fill="#F24E1E" />
                                   <path
                                      d="M10.4816 0.121216H15.7213C18.6137 0.121216 20.9612 2.46863 20.9612 5.36099C20.9612 8.25335 18.6137 10.6008 15.7213 10.6008H10.4816V0.121216Z"
                                      fill="#FF7262" />
                                   <path
                                      d="M20.9612 15.8405C20.9612 18.7329 18.6137 21.0803 15.7213 21.0803C12.829 21.0803 10.4816 18.7329 10.4816 15.8405C10.4816 12.9482 12.829 10.6008 15.7213 10.6008C18.6137 10.6008 20.9612 12.9482 20.9612 15.8405Z"
                                      fill="#1ABCFE" />
                                </g>
                             </g>
                          </svg>
                       </div>
                       <div class="d-flex flex-column gap-2">
                          <h3 class="mb-0 fs-4">Airmax</h3>
                          <p class="mb-0">Des nouvelles chausssures incroyables et exceptionnelles</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Landing pages end-->
     <div class="row mt-4">
        <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="http://localhost/siteweb/Files/images (16).jpeg" class="card-img-top img-fluid" alt="Produit 4">
                        <div class="card-body">
                            <h5 class="card-title">Produit 4</h5>
                            <p class="card-text">Description du produit 4.</p>
                            <a href="#" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="http://localhost/siteweb/Files/images (17).jpeg" class="card-img-top img-fluid" alt="Produit 5">
                        <div class="card-body">
                            <h5 class="card-title">Produit 5</h5>
                            <p class="card-text">Description du produit 5.</p>
                            <a href="#" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="http://localhost/siteweb/Files/images (18).jpeg" class="card-img-top img-fluid" alt="Produit 6">
                        <div class="card-body">
                            <h5 class="card-title">Produit 6</h5>
                            <p class="card-text">Description du produit 6.</p>
                            <a href="#" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card product-card">
                      <img src="http://localhost/siteweb/Files/images (14).jpeg" class="card-img-top img-fluid" alt="Produit 4">
                      <div class="card-body">
                          <h5 class="card-title">Produit 4</h5>
                          <p class="card-text">Description du produit 4.</p>
                          <a href="#" class="btn btn-primary">Voir le produit</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card product-card">
                      <img src="http://localhost/siteweb/Files/images (15).jpeg" class="card-img-top img-fluid" alt="Produit 5">
                      <div class="card-body">
                          <h5 class="card-title">Produit 5</h5>
                          <p class="card-text">Description du produit 5.</p>
                          <a href="#" class="btn btn-primary">Voir le produit</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="card product-card">
                      <img src="http://localhost/siteweb/Files/images.jpeg" class="card-img-top img-fluid" alt="Produit 6">
                      <div class="card-body">
                          <h5 class="card-title">Produit 6</h5>
                          <p class="card-text">Description du produit 6.</p>
                          <a href="#" class="btn btn-primary">Voir le produit</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 mb-4">
               <div class="card product-card">
                   <img src="http://localhost/siteweb/Files/images (21).jpeg" class="card-img-top img-fluid" alt="Produit 4">
                   <div class="card-body">
                       <h5 class="card-title">Produit 4</h5>
                       <p class="card-text">Description du produit 4.</p>
                       <a href="#" class="btn btn-primary">Voir le produit</a>
                   </div>
               </div>
           </div>
           <div class="col-md-4 mb-4">
               <div class="card product-card">
                   <img src="http://localhost/siteweb/Files/images (22).jpeg" class="card-img-top img-fluid" alt="Produit 5">
                   <div class="card-body">
                       <h5 class="card-title">Produit 5</h5>
                       <p class="card-text">Description du produit 5.</p>
                       <a href="#" class="btn btn-primary">Voir le produit</a>
                   </div>
               </div>
           </div>
           <div class="col-md-4 mb-4">
               <div class="card product-card">
                   <img src="http://localhost/siteweb/Files/images (23).jpeg" class="card-img-top img-fluid" alt="Produit 6">
                   <div class="card-body">
                       <h5 class="card-title">Produit 6</h5>
                       <p class="card-text">Description du produit 6.</p>
                       <a href="#" class="btn btn-primary">Voir le produit</a>
                   </div>
               </div>
           </div>
            </div>
        </div>

    </div>


    <!-- Début du pied de page -->
 <!-- Footer -->
 <footer class="pt-7 bg-white py-4 >
   <div class="container">
      <!-- Footer 4 column -->
      <div class="row">
         <!-- Nos Services
         <div class="col-lg-3 col-12">
             <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                 <h4 class="">Nos Services</h4>
                 <a class="d-block d-lg-none stretched-link text-body"
                    data-bs-toggle="collapse"
                    href="#collapseAccounts"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseAccounts">
                     <i class="bi bi-chevron-down"></i>
                 </a>
             </div>
             <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                 <ul class="list-unstyled mb-0 py-3 py-lg-0">
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Appareils électroniques</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Accessoires</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Livraison</a>
                     </li>
                 </ul>
             </div>
         </div>
     
         <!-- Nos Produits 
         <div class="col-lg-3 col-12">
             <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                 <h4 class="">Nos Produits</h4>
                 <a class="d-block d-lg-none stretched-link text-body"
                    data-bs-toggle="collapse"
                    href="#collapseResources"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseResources">
                     <i class="bi bi-chevron-down"></i>
                 </a>
             </div>
             <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                 <ul class="list-unstyled mb-0 py-3 py-lg-0">
                     <li class="mb-2">
                         <a href="docs/index.html" class="text-decoration-none text-reset">Téléphones</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Ordinateurs</a>
                     </li>
                     <li class="mb-2">
                         <a href="changelog.html" class="text-decoration-none text-reset">Casquettes</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Screens</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Radios</a>
                     </li>
                 </ul>
             </div>
         </div>
     
         <!-- A Propos 
         <div class="col-lg-3 col-12">
             <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                 <h4 class="">A Propos</h4>
                 <a class="d-block d-lg-none stretched-link text-body"
                    data-bs-toggle="collapse"
                    href="#collapseLocations"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseLocations">
                     <i class="bi bi-chevron-down"></i>
                 </a>
             </div>
             <div class="collapse d-lg-block" id="collapseLocations" data-bs-parent="#ft-links">
                 <ul class="list-unstyled mb-0 py-3 py-lg-0">
                     <li class="mb-2">
                         <a href="docs/index.html" class="text-decoration-none text-reset">MAYAS/JBN-JBL</a>
                     </li>
                     <li class="mb-2">
                         <a href="#!" class="text-decoration-none text-reset">Conditions d'utilisation</a>
                     </li>
                     <li class="mb-2">
                         <a href="changelog.html" class="text-decoration-none text-reset">Politique de confidentialité</a>
                     </li>
                 </ul>
             </div>
         </div> -->
     
         <!-- Adresse -->
         <!-- <div class="col-lg-3 col-12">
             <div class="me-7">
                 <h4 class="mb-4">Adresse</h4>
                 <p>DRC, Nord-Kivu, GOMA Ville, Commune de GOMA; Quartier HIMBI, Avenue de la MISSION n°12</p>
             </div>
         </div>
     </div>
      -->
     <!-- Pied de page -->
     <div class="container mt-7 pt-lg-7 pb-4">
         <div class="row align-items-center">
             <div class="col-md-3">
                 <a class="mb-4 mb-lg-0 d-block text-inverse" href="index.html"><img src="assets/images/logo/logo.svg" alt="" /></a>
             </div>
             <div class="col-md-9 col-lg-6">
                 <div class="small mb-3 mb-lg-0 text-lg-center">
                     Copyright © 2025
                     <span class="text-primary"><a href="#">MAYAS/JBN-JBL</a></span>
                     | Designed by
                     <span class="text-primary"><a href="#">Kadid BHZ</a></span>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="text-md-end d-flex align-items-center justify-content-md-end">
                     <div class="dropdown">
                         <!-- <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                             <i class="bi theme-icon-active"></i>
                             <span class="visually-hidden bs-theme-text">Toggle theme</span>
                         </button> -->
                         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                             <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                     <i class="bi theme-icon bi-sun-fill"></i>
                                     <span class="ms-2">Light</span>
                                 </button>
                             </li>
                             <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                     <i class="bi theme-icon bi-moon-stars-fill"></i>
                                     <span class="ms-2">Dark</span>
                                 </button>
                             </li>
                             <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                                     <i class="bi theme-icon bi-circle-half"></i>
                                     <span class="ms-2">Auto</span>
                                 </button>
                             </li>
                         </ul>
                     </div>
                     <div class="ms-3 d-flex gap-2">
                        <a href="#!" class="btn btn-instagram btn-light btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path
                                 d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                           </svg>
                        </a>
                        <a href="#!" class="btn btn-facebook btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path
                                 d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                           </svg>
                        </a>
                        <a href="#!" class="btn btn-twitter btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path
                                 d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                           </svg>
                        </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</footer>
<!-- Fin du pied de page -->
  
  
<script src="js/bootstrap.js" ></script>
<script>
    // Carrousel défilant toutes les 2 secondes
    var myCarousel = document.querySelector('#carouselExampleControls');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000, // 2 secondes
        wrap: true // Boucle infinie
    });
//     function saveProductInfo(name, description, image) {
//     // Enregistrer les informations dans localStorage
//     localStorage.setItem('productName', name);
//     localStorage.setItem('productDescription', description);
//     localStorage.setItem('productImage', image);

//     // Rediriger vers la page du produit
//     window.location.href = 'Prodetails.html';
// }
</script>

<script>
fetch("getData.php")
  .then(response => response.json())
  .then(data => {
    console.log(data); // test

    data.forEach(item => {
      // Exemple : afficher une carte Bootstrap pour chaque élément
      document.getElementById("products").innerHTML += `
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="${item.image}" class="card-img-top" alt="${item.nom}">
            <div class="card-body">
              <h5 class="card-title">${item.nom}</h5>
              <p class="card-text">${item.description}</p>
            </div>
          </div>
        </div>
      `;
    });
  });
</script>
</body>
</html>  