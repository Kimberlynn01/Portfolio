function logout() {
    Swal.fire({
        title: "Keluar dari Sistem?",
        text: "Anda akan logout dari sistem ini.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#ea1c18",
        confirmButtonText: "Ya",
        cancelButtonText: "Batal",
        closeOnConfirm: false,
        closeOnCancel: true,
    }).then((result) => {
        if (result.value) {
            window.location.href = "/logout";
        }
    });
}
