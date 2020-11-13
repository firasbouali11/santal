<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="flexbox mb-5">
                    <h5 class="font-strong">TESTIMONIALS</h5>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                        </div>
                        <!-- <a class="btn btn-rounded btn-primary btn-air" href="ecommerce_add_testimonial.html">Add Testimonial</a> -->
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="customers-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>ID</th>
                                <th>Clients</th>
                                <th>Email</th>
                                <th>Temoignages</th>
                                <th>Approuver</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($testimonies as $i => $testimony) { ?>
                                <tr>
                                    <td><?= $testimony["id"] ?></td>
                                    <td>
                                        <img class="img-circle mr-3" src="<?= base_url() ?>dashboard_assets/img/users/u6.jpg" alt="image" width="40" /><?= $testimony["username"] ?></td>
                                    <td><?= $testimony["email"] ?></td>
                                    <td><?= $testimony["content"] ?></td>

                                    <td>
                                        <a class=" <?= $testimony["approval"] == 1 ? "text-success" : "text-light" ?> mr-3 font-16" id="<?= 'a'.$i ?>"><i class="ti-thumb-up"></i></a>
                                        <a class="text-danger font-16" id="<?= "b$i" ?>"><i class="ti-trash"></i></a>
                                        <script>
                                            $(<?= "a$i" ?>).click(()=>{
                                                $.ajax({
                                                    method:"post",
                                                    url:"<?= base_url() ?>contact/approveTestimony",
                                                    data:{
                                                        id:"<?= $testimony["content"] ?>"
                                                    },
                                                    success:(data)=>{
                                                        $("<?= "#a$i" ?>").load(" <?= "#a$i" ?>")
                                                    }

                                                })
                                            })
                                            $(<?= "b$i" ?>).click(()=>{
                                                $.ajax({
                                                    method:"post",
                                                    url:"<?= base_url() ?>contact/deleteTestimony",
                                                    data:{
                                                        id:"<?= $testimony["content"] ?>"
                                                    },
                                                    success:(data)=>{
                                                       location.reload()                                                    }

                                                })
                                            })
                                        </script>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->