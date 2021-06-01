$(document).ready(function () {
    $("#cek-hasil").hide();
    $("#btn-search").click(function () {
        alertProses();
        $.ajax({
            url: baseurl + "Data_transaksi/data/pencarian",
            type: 'POST',
            data: { katakunci: $("#katakunci").val() },
            dataType: "json",
            beforeSend: function (e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function (response) {
                $("#cek-hasil").show();
                $("#hasil").html(response.hasil);

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });
    });
});

function alertProses() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Sedang mencari data...'
    })
}

