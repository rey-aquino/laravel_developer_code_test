    <script src="{{ asset('../../assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('../../assets/plugins/popper/popper.min.js') }}"></script>

    <script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('../../material/js/jquery.slimscroll.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('../../material/js/waves.js') }}"></script>

    <!--Menu sidebar -->
    <script src="{{ asset('../../material/js/sidebarmenu.js') }}"></script>

    <!--stickey kit -->
    <script src="{{ asset('../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>

    <script src="{{ asset('../assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('../../material/js/custom.min.js') }}"></script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <!-- This is data table -->
    <script src="{{ asset('../assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{ asset('../../datatables/js/dataTables.button.min.js') }}"></script>
    <script src="{{ asset('../../datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('../../datatables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('../../datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../../datatables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../../datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../../datatables/js/buttons.print.min.js') }}"></script>

    <script>
        $('#customersTable').DataTable({
        order: [[ 0, 'desc']],
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel'
        ]
        });

        $('#suppliersTable').DataTable({
        order: [[ 0, 'desc']],
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel'
        ]
        });

        $('#usersTable').DataTable({
        order: [[ 0, 'desc']],
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel'
        ]
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#country_id').change(function () {
                var $state = $('#state_id');
                $.ajax({
                    url: "{{ route('states.index') }}",
                    data: {
                        country_id: $(this).val()
                    },
                    success: function (data) {
                        $state.html('<option value="" selected>Choose state</option>');
                        $.each(data, function (id, value) {
                            $state.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });

                $('#state_id, #city_id').val("");
                $('#state').removeClass('d-none');

            });

            $('#state_id').change(function () {
                var $city = $('#city_id');
                $.ajax({
                    url: "{{ route('cities.index') }}",
                    data: {
                        state_id: $(this).val()
                    },
                    success: function (data) {
                        $city.html('<option value="" selected>Choose city</option>');
                        $.each(data, function (id, value) {
                            $city.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#city').removeClass('d-none');
            });
        });
    </script>