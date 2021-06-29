$(document).ready(function () {
    setTimeout(function () {
        create.iniciar();
    }, 100);
});

create = {
    formulario: null,

    iniciarCampos: function () {
        var myself = this;

        myself.preco = $('#preco');
        //Campos da DataTable
        //myself.$dataTable = $("#datatable_lista");

        //Campos de Busca
    },
    iniciarMasks: function () {
        setTimeout(function () {
            var myself = this;
            $('#preco').maskMoney({
                prefix: "R$ ",
                decimal: ",",
                thousands: "."
            });
        }, 10);
    },
    iniciar: function () {
        this.iniciarCampos();
        this.iniciarMasks();
    },
}
