<script src="dist/js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- semua konfirmasi ada disini --}}
<script>
    $("#logout").on("click", function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Apakah anda ingin logout?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Tidak",
            confirmButtonText: "Ya"
        }).then((result) => {
            if (result.isConfirmed) {
                $('#logoutform').submit() // this submits the form 
            }
        });
    })

    $("button#user-delete").on("click", function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Apakah anda ingin menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Tidak",
            confirmButtonText: "Ya"
        }).then((result) => {
            if (result.isConfirmed) {
                $('#user-delete-form').submit() // this submits the form 
            }
        });
    })

    // console.log($('#login_sukses').length)
    if ($('#login_sukses').length) {
        var text = "{{ session('login_sukses') }}"
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: text
        });
    }

    if ($('#password_salah').length) {
        Swal.fire({
            title: "Password Salah!!",
            icon: "error",
            showCancelButton: false,
            confirmButtonColor: "#3085d6",
            // cancelButtonColor: "#d33",
            // cancelButtonText: "Tidak",
            confirmButtonText: "Ya"
        });
    }
</script>
