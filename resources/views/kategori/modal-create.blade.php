<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-content" id="exampleModalLabel">TAMBAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="control-label">kategori</label>
                    <input type="text" class="form-control" id="kategori">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kategori"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create kategori event
    $('body').on('click', '#btn-create-kategori', function () {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let kategori = $('#kategori').val();
        let token   = $("meta[name='csrf-token']").attr("kategori");

        //ajax
        $.ajax({

            url: `/kategori`,
            type: "POST",
            cache: false,
            data: {
                "kategori": kategori,
                "_token": token
            },
            success:function(response){

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    kategori: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let kategori = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.kategori}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-kategori" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-kategori" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                //append to table
                $('#table-kategoris').prepend(kategori);

                //clear form
                $('#kategori').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error:function(error){

                if(error.responseJSON.kategory[0]) {

                    //show alert
                    $('#alert-kategory').removeClass('d-none');
                    $('#alert-kategory').addClass('d-block');

                    //add message to alert
                    $('#alert-kategory').html(error.responseJSON.kategory[0]);
                }

                if(error.responseJSON.kategori[0]) {

                    //show alert
                    $('#alert-kategori').removeClass('d-none');
                    $('#alert-kategori').addClass('d-block');

                    //add message to alert
                    $('#alert-kategori').html(error.responseJSON.kategori[0]);
                }

            }

        });

    });

</script>
