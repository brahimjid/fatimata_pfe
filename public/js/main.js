/*global $*/
// DATA TABLE
$(document).ready(function () {
    $('#example').DataTable();

}); // DATA TABLE


// STUDENTS FUNCTIONS
$(document).ready(function () {
    $('#example').DataTable();


    //   Update Student Modal
    $('.update_etudiant').on('click', function () {

        $('#update_etudiant').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#u_id_etudiant').val(data[0]);
        $('#u_matricule').val(data[1]);
        $('#u_nom').val(data[2]);
        $('#u_prenom').val(data[3]);
        $('#u_filiere').val(data[4]);
        $('#u_date_naiss').val(data[5]);
    });
    //   delete Student Modal
    $('.delete_etudiant').on('click', function () {

        $('#delete_etudiant').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#d_id_etudiant').val(data[0]);

    });

}); // STUDENTS FUNCTIONS


// MODULE FUNCTIONS

$(document).ready(function () {
    // Update module Modal
    $('.update_module').on('click', function () {

        $('#update_module').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#u_id_module').val(data[0]);
        $('#u_mo_code').val(data[1]);
        $('#u_mo_nom').val(data[2]);
    });
    //   delete Student Modal
    $('.delete_module').on('click', function () {

        $('#delete_module').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#d_id_module').val(data[0]);

    });

}); // MODULE FUNCTIONS


// MATIERE FUNCTIONS

$(document).ready(function () {
    // Update module Modal
    $('.update_matiere').on('click', function () {

        $('#update_matiere').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#u_id_matiere').val(data[0]);
        $('#u_ma_code').val(data[1]);
        $('#u_ma_nom').val(data[2]);
        $('#u_ma_code_modul').val(data[3]);
        $('#u_ma_credit').val(data[4]);
    });
    //   delete Student Modal
    $('.delete_matiere').on('click', function () {

        $('#delete_matiere').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#d_id_matiere').val(data[0]);

    });

}); // MATIERE FUNCTIONS
