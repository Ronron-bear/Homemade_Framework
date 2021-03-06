<body class="animsition">
    <div class="page-wrapper">
     <?php require_once($sidebar);?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
                    <div class="section__content section__content--p50">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>AJOUTER UN FILM </strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal text-center">
                                                <!-- Titre -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Titre</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="text-input" name="titre" placeholder="Titre du film ..." value="<?= $getDetailFilm[0]->titre;?>" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Durée  -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Durée (minutes)</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="text-input" name="duree" placeholder="Durée en minutes ..." value="<?= $getDetailFilm[0]->duree_min;?>"  min="0" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Année   -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Année de production</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="text-input" name="annee_prod" placeholder="Année de productions ..." value="<?= $getDetailFilm[0]->annee_prod;?>" min="0" class="form-control">
                                                    </div>
                                                </div>


                                                <!-- Genre -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="genre" class=" form-control-label">Genre</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="genre" id="genre" class="form-control-sm form-control">
                                                            <option value="<?= $getDetailFilm[0]->id_genre;?>" class="selected"><?= $getDetailFilm[0]->nom;?></option>
                                                            <?php foreach ($getGenre as $genre): ?>
                                                              <option value="<?= $genre->id_genre; ?>"> <?= $genre->nom ?> </option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Note -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="note" class=" form-control-label">Note</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="note" id="note" class="form-control-sm form-control">
                                                            <option value="<?= $getNoteFilm[0]->note ?>" class="selected"><?= $getNoteFilm[0]->note ?></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div  id="images" style="padding:20px;">
                                                      <label class=" form-control-label"><i class='fa fa-images' id='btn-modif' style="font-size:50px"></i></label>
                                                </div>


                                                <div class="d-none" id="modif-images">
                                                    <i class="fas fa-angle-up" id="btn-reduire" style="font-size:50px"></i>
                                                    <!-- Image minifier  -->
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="image_min" class=" form-control-label">Image minifier</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" id="image_min" name="image_min" class="form-control-file">
                                                        </div>
                                                    </div>

                                                    <!-- Image moyenne  -->
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="image_moy" class=" form-control-label">Image moyenne</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" id="image_moy" name="image_moy" class="form-control-file">
                                                        </div>
                                                    </div>

                                                    <!-- Image grande taille -->
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="image_gran" class=" form-control-label">Image grande taille</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" id="image_moy" name="image_gran" class="form-control-file">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Résumé du film -->
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="resume" class=" form-control-label">Resume</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="resume" id="resume" rows="9" placeholder="Resume du film ..." class="form-control"><?= $getDetailFilm[0]->resum; ?></textarea>
                                                    </div>
                                                </div>
                                                <input type="submit" class="btn btn-primary" value="Mettre à jour">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</body>
