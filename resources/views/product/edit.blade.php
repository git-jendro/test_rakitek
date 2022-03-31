<!-- Modal -->
<div class="modal fade" id="product-edit-{{ $prod->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal edit</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('update_product', [$prod->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error ('nama-'.$prod->id) is-invalid @enderror" name="nama-{{ $prod->id }}" value="{{ $prod->nama }}">
                    @error('nama-'.$prod->id)
                        <div id="edit-error" class="mt-2 error invalid-feedback d-block w-100">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id-{{ $prod->id }}" class="form-control @error ('category_id-'.$prod->id) is-invalid @enderror">
                        <option value="">Pilih Category</option>
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $prod->category_id ? 'selected':'' }}>{{ $cat->nama }}</option>
                        @endforeach
                    </select>
                    @error('category_id-'.$prod->id)
                        <div id="edit-error" class="mt-2 error invalid-feedback d-block w-100">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control @error ('harga-'.$prod->id) is-invalid @enderror" name="harga-{{ $prod->id }}"  value="{{ number_format($prod->harga, 0) }}">
                    @error('harga-'.$prod->id)
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