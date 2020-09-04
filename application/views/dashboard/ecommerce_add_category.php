<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AJOUTER UNE CATÉGORIE</h5>
                <div class="row">

                    <div class="col-lg-8">
                        <form action="<?= base_url() ?>category/addCategory" method="post">

                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Nom de catégorie</label>
                                    <input name="category" class="form-control form-control-solid" type="text" placeholder="Nom de catégorie">
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Type</label>
                                    <div>
                                        <select name="type" class="selectpicker show-tick form-control" title="Sélectionner" data-style="btn-solid">
                                            <option value="homme">Hommes</option>
                                            <option value="femme">Femmes</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="text-right">
                                <button class="btn btn-primary btn-air mr-2">Valider</button>
                                <button class="btn btn-secondary">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->