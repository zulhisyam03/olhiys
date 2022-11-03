<!-- Modal -->
<div class="modal fade" id="show{{ $guest->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 bg-white" id="exampleModalLabel">Detil Buku Tamu </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row mb-2">
                        <label for="" class="col-sm-3 col-form-label ">Nama Tamu: </label>
                        <div class="col-sm pt-2"><span class="label">{{ $guest->nama }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-3 col-form-label ">Email: </label>
                        <div class="col-sm pt-2"><span class="label">{{ $guest->email }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-3 col-form-label ">Tanggal: </label>
                        <div class="col-sm pt-2"><span class="label">{{ $guest->created_at->format('d M Y H:i:s') }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-3 col-form-label ">Pesan: </label>
                        <div class="col-sm pt-2 text-wrap border rounded ">
                            <p style="text-align:justify !important;">{{ $guest->message }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="guestMessage/{{ $guest->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
