<script>
    //button create post event
    $('body').on('click', '#btn-delete-bagian', function () {

        let bagian_id = $(this).data('id');
        let token   = $("meta[name='csrf-token']").attr("bagian");

        Swal.fire({
            bagian: 'Apakah Kamu Yakin?',
            text: "ingin menghapus data ini!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'TIDAK',
            confirmButtonText: 'YA, HAPUS!'
        }).then((result) => {
            if (result.isConfirmed) {

                console.log('test');

                //fetch to delete data
                $.ajax({

                    url: `/bagian/${bagian_id}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success:function(response){

                        //show success message
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            nama: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });

                        //remove post on table
                        $(`#index_${bagian_id}`).remove();
                    }
                });


            }
        })

    });
</script>
