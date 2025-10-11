(() => {
    "use strict";
    $((function(e) {
        $("#basic-datatable").DataTable({
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
            pageLength:100,
        }),$("#user-datatable").DataTable({
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
            pageLength:100,
        }),$("#user-datatable-2").DataTable({
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
            pageLength:100,
        }), $("#responsive-datatable").DataTable({
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
            pageLength:100,
            ordering: false,
        }), (a = $("#file-datatable").DataTable({
            buttons: ["copy", "excel", "pdf", "colvis"],
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
        })).buttons().container().appendTo("#file-datatable_wrapper .col-md-6:eq(0)");
        var a = $("#delete-datatable").DataTable({
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
        });
        $("#delete-datatable tbody").on("click", "tr", (function() {
            $(this).hasClass("selected") ? $(this).removeClass("selected") : (a.$("tr.selected").removeClass("selected"), $(this).addClass("selected"))
        })), $("#button").on("click", (function() {
            a.row(".selected").remove().draw(!1)
        })), $("#example3").DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(e) {
                            var a = e.data();
                            return "Details for " + a[0] + " " + a[1]
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: "table"
                    })
                }
            }
        }), $("#example2").DataTable({
            responsive: !0,
            language: {
                url: '/assets/admin/plugins/datatable/fa.json',
            },
        }), $(".select2").select2({
            minimumResultsForSearch: 1 / 0
        })
    }))
})();
