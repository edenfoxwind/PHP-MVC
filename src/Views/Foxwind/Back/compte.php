<?php

ob_start();
?>
    <!-- Titre de la section -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mon compte</h1>
    </div>

    <!-- Infos de l'user -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class=" d-flex justify-content-center">
                    <img class="user-img-card" src="/resources/image/user.jpg" alt="Image de l'utilisateur">
                </div>

                <div class="card-body">
                    <h5 class="card-title text-center">NOM D'UTILISATEUR</h5>
                    <hr class="sidebar-divider my-0" style="padding-bottom: 15px;">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Mes commandes</a>
                        <a href="#" class="btn btn-primary btn-lg btn-block">Mes articles</a>
                </div>
            </div>
        </div>

        <!-- Vue des infos du l'user -->
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations de votre compte</h6>
                </div>
                <div class="card-body">
                    <!-- Input : Nom d'utilisateur -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nom d'utilisateur</span>
                        </div>
                        <input type="text" value="NOM D'UTILISATEUR" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
                    </div>

                    <!-- Input : Email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="email" value="EMAIL@DOMAINE.CH" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
                    </div>
                </div>
            </div>

            <div class="card shadow" style="margin-top: 15px">
                <div class="card-body">
                    <div class="row">
                        <!-- Carte de commandes -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Commandes</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">00 Commandes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"> <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte nombre d'articles écrits -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Articles rédigés</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">00 Articles</div>
                                        </div>
                                        <div class="col-auto"> <i class="fas fa-pen-nib fa-2x text-gray-300"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


<?php
$content = ob_get_clean();

require VIEWS . ROAD . '/Back/layout.php';