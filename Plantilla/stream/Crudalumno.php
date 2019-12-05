<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head -->
	<head>
		<title>Agregar Alumno</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
		<meta name="description" content="Stream - Dashboard UI Kit">
		<meta name="author" content="htmlstream.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">


		<!--Sweet Alert 2 --
    <link rel="stylesheet" href="sinegiaApp/Plantilla/stream/assets/Plugin/sweetalert2/sweetalert2.min.css">

		<!-- Web Fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

		<!-- Components Vendor Styles -->
	  <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
		<link rel="stylesheet" href="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

		<!-- Theme Styles -->
		<link rel="stylesheet" href="./assets/css/theme.css">

		<!-- Custom Charts -->

   

		<style>
			.js-doughnut-chart {
				width: 70px !important;
				height: 70px !important;
			}
		</style>


	</head>
	<!-- End Head -->

	<body>

		<!-- Header (Topbar) -->
		<header class="u-header">

			<div class="u-header-left">
				<a class="u-header-logo" href="index.php">
					<img class="u-logo-desktop" src="./assets/img/logo.png" width="160" alt="Stream Dashboard">
					<img class="img-fluid u-logo-mobile" src="./assets/img/logo-mobile.png" width="50" alt="Stream Dashboard">
				</a>
			</div>

			<div class="u-header-middle">
				<a class="js-sidebar-invoker u-sidebar-invoker" href="#!"
				   data-is-close-all-except-this="true"
				   data-target="#sidebar">
					<i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
					<i class="fa fa-times u-sidebar-invoker__icon--close"></i>
				</a>

				<div class="u-header-search"
				     data-search-mobile-invoker="#headerSearchMobileInvoker"
				     data-search-target="#headerSearch">
					<a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
						<i class="fa fa-search"></i>
					</a>

					<div id="headerSearch" class="u-header-search-form">
						<form>
							<div class="input-group">
								<button class="btn-link input-group-prepend u-header-search__btn" type="submit">
									<i class="fa fa-search"></i>
								</button>
								<input class="form-control u-header-search__field" type="search" placeholder="Type to search…">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="u-header-right">

		  	<!-- Activities -->
				<div class="dropdown mr-4">
				  <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-envelope"></i>
				    </span>
				    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-secondary"></span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				  	<div class="card">
							<div class="card-header d-flex align-items-center py-3">
								<h2 class="h4 card-header-title">Activities</h2>
								<a class="ml-auto" href="#">Clear all</a>
							</div>

							<div class="card-body p-0">
								<div class="list-group list-group-flush">
									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Chad Cannon</h4>
													<small class="text-muted ml-auto">23 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													We've just done the project.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->
                                    
									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Jane Ortega</h4>
													<small class="text-muted ml-auto">18 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													<span class="text-primary">@Bruce</span> advertising your project is not good idea.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->

									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Stella Hoffman</h4>
													<small class="text-muted ml-auto">15 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													When the release date is expexted for the advacned settings?
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->

									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Htmlstream</h4>
													<small class="text-muted ml-auto">05 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													Adwords Keyword research for beginners
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->
								</div>
							</div>

							<div class="card-footer py-3">
								<a class="btn btn-block btn-outline-primary" href="#">View all activities</a>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End Activities -->

		  	<!-- Notifications -->
				<div class="dropdown mr-4">
				  <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-bell"></i>
				    </span>
				    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				  	<div class="card">
							<div class="card-header d-flex align-items-center py-3">
								<h2 class="h4 card-header-title">Notifications</h2>
								<a class="ml-auto" href="#">Clear all</a>
							</div>

							<div class="card-body p-0">
								<div class="list-group list-group-flush">
									<!-- Notification -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
												<i class="fab fa-dribbble"></i>
											</div>

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Dribbble</h4>
													<small class="text-muted ml-auto">23 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													<span class="text-primary">@htmlstream</span> just liked your post!
												</p>
											</div>
										</div>
								  </a>
									<!-- End Notification -->

									<!-- Notification -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
												<i class="fab fa-twitter"></i>
											</div>

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Twitter</h4>
													<small class="text-muted ml-auto">18 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													Someone mentioned you on the tweet.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Notification -->

									<!-- Notification -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
												<i class="fab fa-spotify"></i>
											</div>

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Spotify</h4>
													<small class="text-muted ml-auto">18 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													You've just recived $25 free gift card.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Notification -->

									<!-- Notification -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
												<i class="fab fa-facebook-f"></i>
											</div>

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Facebook</h4>
													<small class="text-muted ml-auto">18 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													<span class="text-primary">@htmlstream</span> commented in your post.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Notification -->
								</div>
							</div>

							<div class="card-footer py-3">
								<a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End Notifications -->

		  	<!-- Apps -->
				<div class="dropdown mr-4">
				  <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-circle"></i>
				    </span>
				    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-warning"></span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				  	<div class="card">
							<div class="card-header d-flex align-items-center py-3">
								<h2 class="h4 card-header-title">Apps</h2>
								<a class="ml-auto" href="#">Learn more</a>
							</div>

							<div class="card-body py-3">
								<div class="row">
									<!-- App -->
									<div class="col-4 px-2 mb-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img1.png" alt="">
											<span class="text-center">Assana</span>
										</a>
									</div>
									<!-- End App -->

									<!-- App -->
									<div class="col-4 px-2 mb-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img2.png" alt="">
											<span class="text-center">Slack</span>
										</a>
									</div>
									<!-- End App -->

									<!-- App -->
									<div class="col-4 px-2 mb-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img3.png" alt="">
											<span class="text-center">Cloud</span>
										</a>
									</div>
									<!-- End App -->

									<!-- App -->
									<div class="col-4 px-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img5.png" alt="">
											<span class="text-center">Facebook</span>
										</a>
									</div>
									<!-- End App -->

									<!-- App -->
									<div class="col-4 px-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img4.png" alt="">
											<span class="text-center">Spotify</span>
										</a>
									</div>
									<!-- End App -->

									<!-- App -->
									<div class="col-4 px-2">
										<a class="u-apps d-flex flex-column rounded" href="#!">
											<img class="img-fluid u-avatar--xs mx-auto mb-2" src="./assets/img/brands-sm/img6.png" alt="">
											<span class="text-center">Twitter</span>
										</a>
									</div>
									<!-- End App -->
								</div>
							</div>

							<div class="card-footer py-3">
								<a class="btn btn-block btn-outline-primary" href="#">View all apps</a>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End Apps -->

		  	<!-- User Profile -->
				<div class="dropdown ml-2">
				  <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="./assets/img/avatars/img1.jpg" alt="User Profile">
						<span class="text-dark d-none d-sm-inline-block">
							Bruce Goodman <small class="fa fa-angle-down text-muted ml-1"></small>
						</span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
				  	<div class="card">
							<div class="card-header py-3">
								<!-- Storage -->
								<div class="d-flex align-items-center mb-3">
									<span class="h6 text-muted text-uppercase mb-0">Storage</span>

									<div class="ml-auto text-muted">
										<strong class="text-dark">60gb</strong> / 100gb
									</div>
								</div>

								<div class="progress" style="height: 4px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<!-- End Storage -->
							</div>

							<div class="card-body">
								<ul class="list-unstyled mb-0">
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" href="#!">
											<span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> View Profile
										</a>
									</li>
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" href="#!">
											<span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Settings
										</a>
									</li>
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" href="#!">
											<span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-3"></i></span> Invite your friends
										</a>
									</li>



									 <!-- CERRAR SESION  -->

                                        <li>
                                        <a class="d-flex align-items-center link-dark" href="/SinergiaApp/usuario/cerrarsesion.php">
                                            <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span>Cerrar Sesion
                                        </a>
                                    </li>
								</ul>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End User Profile -->
			</div>
		</header>

		<!-- End Header (Topbar) -->

		<main class="u-main" role="main">
			<!-- Sidebar -->
			<aside id="sidebar" class="u-sidebar">
				<div class="u-sidebar-inner">
					<header class="u-sidebar-header">
						<a class="u-sidebar-logo" href="index.php">
							<img class="img-fluid" src="./assets/img/logo.png" width="124" alt="Stream Dashboard">
						</a>
					</header>

					<nav class="u-sidebar-nav">
						<ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
							<!-- Dashboard -->
							<li class="u-sidebar-nav-menu__item">
								<a class="u-sidebar-nav-menu__link active" href="./index.php">
									<i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
									<span class="u-sidebar-nav-menu__item-title">Dashboard</span>
								</a>
							</li>
							<!-- End Dashboard -->

							<!-- Base UI -->
							<li class="u-sidebar-nav-menu__item">
								<a class="u-sidebar-nav-menu__link" href="#!"
								   data-target="#baseUI">
									<i class="fas fa-user-graduate"></i>
									<span class="u-sidebar-nav-menu__item-title">Alumno</span>
									<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
									<span class="u-sidebar-nav-menu__indicator"></span>
								</a>	

								<ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
									<li class="u-sidebar-nav-menu__item">
										<a class="u-sidebar-nav-menu__link" href="./Crudalumno.php">
							
											<span class="u-sidebar-nav-menu__item-title">Crear Alumno</span>
										</a>
								 
								</ul>
							</li>
							<!-- End Base UI -->
					</nav>
				</div>

			</aside>
			<!-- End Sidebar -->

			
           <!-- End Sidebar -->





			<div class="u-content">
				<div class="u-body">
					<!-- End Breadcrumb -->
					<div class="mb-4">
						<nav aria-label="breadcrumb">
							<h1 class="h3">Gestion Alumnos</h1>
						  <ol class="breadcrumb bg-transparent small p-0">
						    <li class="breadcrumb-item"><a href="./crudalumno.php">Agregar Alumno</a></li>
						     <li class="breadcrumb-item"><a href="./index.php">Buscar Alumno</a></li>
						   
						  </ol>
						</nav>
					</div>

					<!-- End Breadcrumb -->












                    <!-- CREACION DE FORMULARIOS -->

                      
			<div id="appAlumnos">               
        <div class="container">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>
                 
            </div>                
            <div class="row mt-5">
                <div class="col-lg-12">                    
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>ID</th>                                    
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha_nac</th>    
                                <th>Acciones</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(alumno,indice) of alumnos">                                
                                <td>{{alumno.id}}</td>                                
                                <td>{{alumno.nombre}}</td>
                                <td>{{alumno.apellidos}}</td>
                                <td>{{alumno.fecha_nac}}</td>
                              
                                    
                                </td>
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(alumno.id, alumno.nombre, alumno.apellidos, alumno.fecha_nac)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(alumno.id)"><i class="fas fa-trash-alt"></i></button>      
								</div>
                                </td>
                            </tr>    
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>        
    </div>        
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>         
    <!--Vue.JS -->    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>              
    <!--Axios -->      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
    <!--Código custom -->          
    <script src="main.js"></script>     
				













		<!-- Global Vendor -->
		<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="./assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
		<script src="./assets/vendor/popper.js/dist/umd/popper.min.js"></script>
		<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Plugins -->
		<script src="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Initialization  -->
		<script src="./assets/js/sidebar-nav.js"></script>
		<script src="./assets/js/main.js"></script>

	</body>
</html>