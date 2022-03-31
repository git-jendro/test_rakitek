<!-- Modal -->
<div class="modal fade" id="product-create" tabindex="-1" aria-labelledby="product-createLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="product-createLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('store_product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama">
                        @error('nama')
                            <div id="create-error" class="mt-2 error invalid-feedback d-block w-100">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control @error ('category_id') is-invalid @enderror">
                            <option value="">Pilih Category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->nama }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div id="create-error" class="mt-2 error invalid-feedback d-block w-100">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control @error ('harga') is-invalid @enderror" name="harga">
                        @error('harga')
                            <div id="create-error" class="mt-2 error invalid-feedback d-block w-100">
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
