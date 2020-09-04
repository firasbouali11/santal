<footer class="page-footer">
    <div class="font-13">2020 © <b>Ensi Junior Entreprise</b> - Save your time, choose the best</div>
    
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
</div>
</div>
<!-- START SEARCH PANEL-->
<form class="search-top-bar" action="http://admincast.com/adminca/preview/admin_1/html/search.html">
    <input class="form-control search-input" type="text" placeholder="Search...">
    <button class="reset input-search-icon"><i class="ti-search"></i></button>
    <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
</form>
<!-- END SEARCH PANEL-->

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->


<!-- CORE PLUGINS-->


<script>
    $(function() {
        $('#products-table').DataTable({
            pageLength: 10,
            fixedHeader: true,
            responsive: true,
            "sDom": 'rtip',
        });
        var table = $('#products-table').DataTable();
        $('#key-search').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#type-filter').on('change', function() {
            table.column(2).search($(this).val()).draw();
        });
    });
</script>
<script>
    $(function() {
        $('#orders-table').DataTable({
            pageLength: 10,
            fixedHeader: true,
            responsive: true,
            "sDom": 'rtip',
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });

        var table = $('#orders-table').DataTable();
        $('#key-search').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#type-filter').on('change', function() {
            table.column(4).search($(this).val()).draw();
        });
    });
</script>
<script>
    $(function() {
        $('#customers-table').DataTable({
            pageLength: 10,
            fixedHeader: true,
            responsive: true,
            "sDom": 'rtip',
            columnDefs: [{
                targets: 'no-sort',
                orderable: false
            }]
        });

        var table = $('#customers-table').DataTable();
        $('#key-search').on('keyup', function() {
            table.search(this.value).draw();
        });
        $('#type-filter').on('change', function() {
            table.column(2).search($(this).val()).draw();
        });
    });
</script>
<script>
     $("#userfile").change((e)=>{
        $("#principalImage").attr("src",URL.createObjectURL(e.target.files[0]))
        for(var i =1;i<e.target.files.length;i++)
            $(".aa").append("<div class='file-input-plus file-input'><img src='"+URL.createObjectURL(e.target.files[i])+"' /></div>")
    })
 
</script>
<script>

</script>

</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/dashboard_ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 May 2020 18:59:38 GMT -->

</html>