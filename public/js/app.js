$(document).ready(function () {
    $(".remove").click(function () {
        var id = $(this).parents("tr").attr("id");

        if (confirm('Está seguro de eliminar este paciente?')) {

            $.ajax({
                url: '/caniapp/Admin/DeletePaciente/' + id,
                type: 'POST',
                error: function () {
                    alert('Something is wrong');
                },

                success: function (data) {
                    $("#" + id).remove();
                    alert("Paciente Eliminado con Éxito");

                }

            });

        }

    });
});

