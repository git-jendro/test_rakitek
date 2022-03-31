<!-- Modal -->
<div class="modal fade" id="category-edit-{{ $cat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('update_category', [$cat->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error ('nama-'.$cat->id) is-invalid @enderror" name="nama-{{ $cat->id }}" value="{{ $cat->nama }}">
                    @error('nama-'.$cat->id)
                        <div id="edit-error" class="mt-2 error invalid-feedback d-block w-100">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
</div>