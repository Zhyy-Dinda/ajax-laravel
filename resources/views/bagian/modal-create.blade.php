<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="control-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama"></div>
                </div>


                <div class="form-group">
                    <label class="control-label">Bagian</label>
                    <textarea class="form-control" id="bagian" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-bagian"></div>
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
    //button create post event
    $('body').on('click', '#btn-create-bagian', function () {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let nama  = $('#nama').val();
        let bagian = $('#bagian').val();
        let token   = $("meta[name='csrf-token']").attr("bagian");

        //ajax
        $.ajax({

            url: `/bagians`,
            type: "POST",
            cache: false,
            data: {
                "nama": nama,
                "bagian": bagian,
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

                //data post
                let bagian = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.nama}</td>
                        <td>${response.data.bagian}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-bagian" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-bagian" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                //append to table
                $('#table-bagians').prepend(bagian);

                //clear form
                $('#nama').val('');
                $('#bagian').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error:function(error){

                if(error.responseJSON.nama[0]) {

                    //show alert
                    $('#alert-nama').removeClass('d-none');
                    $('#alert-nama').addClass('d-block');

                    //add message to alert
                    $('#alert-nama').html(error.responseJSON.nama[0]);
                }

                if(error.responseJSON.content[0]) {

                    //show alert
                    $('#alert-bagian').removeClass('d-none');
                    $('#alert-bagian').addClass('d-block');

                    //add message to alert
                    $('#alert-bagian').html(error.responseJSON.bagian[0]);
                }

            }

        });

    });

</script>
