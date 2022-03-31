<!-- Modal -->
<div class="modal fade" id="product-show-{{ $prod->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal show</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ID = {{ $prod->id }} <br>
            Nama = {{ $prod->nama }} <br>
            Category = {{ $prod->category->nama }} <br>
            Harga = Rp. {{ number_format($prod->harga, 0) }}<br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>