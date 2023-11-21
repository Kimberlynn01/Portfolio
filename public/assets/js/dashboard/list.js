$(document).ready(function () {
    let table = $("#table-data").DataTable({
        language: dtLang,
        serverSide: true,
        processing: true,
        ajax: {
            url: "dashboard/data",
            type: "get",
            dataType: "json",
        },
        columnDefs: [
            {
                targets: [2, 3],
                orderable: false,
                searchable: false,
                className: "text-center align-top justify-content-center",
            },
        ],
        columns: [
            {
                data: "DT_RowIndex",
            },
            {
                data: "nama",
            },
            {
                data: "gambar",
                render: function (data, type, row) {
                    return `<img src="${
                        "/storage/dashboard/" + data
                    }" width="100" height="100">`;
                },
            },
            {
                data: "id",
                render: function (data, type, row) {
                    return `<button class="btn btn-danger button_hapus" data-id="${data}"> Delete </button>`;
                },
            },
        ],
    });
});
