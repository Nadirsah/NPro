</div>
</div>
<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pos_Market {{date("Y")}}</span>
        </div>
    </div>
</footer> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('admin.logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('back/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('back/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('back/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('back/')}}/js/sb-admin-2.min.js"></script>

<!-- data table -->
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>




<style>
    html, body {
  height: 100%;
}

#wrapper {
  min-height: 100%;
  position: relative;
}

#content-wrapper {
  flex: 1 0 auto;
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; /* Set the height of your footer */
}



</style>

<script>
let table = new DataTable('#dataTable');
</script>
<script>
$(document).ready(function() {
    var table = $("#dataTable").DataTable({
        'processing': true,
        'serverSide': true,
        columns: [{
                data: "techizatci"
            },
            {
                data: "sənəd No"
            },
            {
                data: "barcode"
            },
            {
                data: "mal adı"
            },
            {
                data: "tip"
            },
            {
                data: "tip"
            }
        ],
    });
    
    $('.filter-input').keyup(function() {
        table.column($(this).data('column'))
            .search($(this).val())
            .draw();
           
    });


    $('.filter-select').change(function() {
        table.column($(this).data('column'))
            .search($(this).val())
            .draw();
    });
});
</script>
</body>

</html>








