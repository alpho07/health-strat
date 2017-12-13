<!-- Page Footer-->
<footer class="main-footer">
    <div class="container-fluid">

    </div>
</footer>
</div>
</div>
</div>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/popper.js/umd/popper.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>js/charts-home.js"></script>
<script src="<?php echo base_url(); ?>js/front.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</body>

<script>
    $(document).ready(function () {
     
        var base_url = "<?php echo base_url(); ?>";
        var gender = $('#GENDER')
        var service = $('#SERVICES');
        var patient = $('#PATIENT');
        $.getJSON(base_url + 'api/gender', function (resp) {
            gender.empty();
            $.each(resp, function (id, name) {
                gender.append("<option value=" + name.id + ">" + name.name + "</option>");
            });
        });



        $.getJSON(base_url + 'api/service', function (resp) {
            service.empty();
            $.each(resp, function (id, name) {
                service.append("<option value=" + name.id + ">" + name.name + "</option>");
            });
        });
        
          $.getJSON(base_url + 'api/patients', function (resp) {
            service.empty();
            $.each(resp, function (id, name) {
                service.append("<option value=" + name.id + ">" + name.name + "</option>");
            });
        });
        
         $.getJSON(base_url + 'api/patients', function (resp) {
            patient.empty();
            $.each(resp, function (id, name) {
                patient.append("<option value=" + name.id + ">" + name.name + "</option>");
            });
        });
   

        $('#SAVE_PATIENT').click(function () {

            $.post(base_url + 'api/post', {name: $('#pname').val(), dob: $('#pdob').val(), gender: $('#GENDER').val(), service_type: $('#SERVICES').val(), go: $('#go').val()}, function () {
             alert('Patient Added');

            });
        })
        
        $('#SAVE_PATIENT').click(function () {

            $.post(base_url + 'api/remarks', {name: $('#patient_id').val(), dob: $('#remarks').val()}, function () {
             alert('Patient Added');

            });
        })

      
            $('#PATIENTSTABLE').DataTable({
              
            });
     

    })
</script>
</html>