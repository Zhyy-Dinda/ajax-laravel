<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="bagian_id">

                <div class="form-group">
                    <label for="name" class="control-label">Nama</label>
                    <input type="text" class="form-control" id="nama-edit">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama-edit"></div>
                </div>


                <div class="form-group">
                    <label class="control-label">Bagian</label>
                    <textarea class="form-control" id="bagian-edit" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-bagian-edit"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="update">UPDATE</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-edit-bagian', function () {

        let bagian_id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/bagian/${bagian_id}`,
            type: "GET",
            cache: false,
            success:function(response){

                //fill data to form
                $('#bagian_id').val(response.data.id);
                $('#nama-edit').val(response.data.nama);
                $('#bagian-edit').val(response.data.bagian);

                //open modal
                $('#modal-edit').modal('show');
            }
        });
    });

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();

        //define variable
        let bagian_id = $('#bagian_id').val();
        let nama   = $('#nama-edit').val();
        let bagian = $('#bagian-edit').val();
        let token   = $("meta[name='csrf-token']").attr("bagian");

        //ajax
        $.ajax({

            url: `/bagian/${bagian_id}`,
            type: "PUT",
            cache: false,
            data: {
                "title": nama,
                "content": bagian,
                "_token": token
            },
            success:function(response){

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let bagian = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.nama}</td>
                        <td>${response.data.bagian}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-bagian" data-id="${response.data.id}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="javascript:void(0)" id="btn-delete-bagian" data-id="${response.data.id}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                `;

                //append to post data
                $(`#index_${response.data.id}`).replaceWith(bagian);

                //close modal
                $('#modal-edit').modal('hide');


            },
            error:function(error){

                if(error.responseJSON.nama[0]) {

                    //show alert
                    $('#alert-nama-edit').removeClass('d-none');
                    $('#alert-nama-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-nama-edit').html(error.responseJSON.nama[0]);
                }

                if(error.responseJSON.bagian[0]) {

                    //show alert
                    $('#alert-bagian-edit').removeClass('d-none');
                    $('#alert-bagian-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-bagian-edit').html(error.responseJSON.bagian[0]);
                }

            }

        });

    });

</script>
