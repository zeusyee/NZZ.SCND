<!-- partials/modal.blade.php -->
<div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="buyModalLabel">Pembelian Sepatu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nama Produk:</strong> <span id="modalProductName"></span></p>
        <p><strong>Harga Satuan:</strong> $<span id="modalProductPrice"></span></p>
        <div class="mb-3">
          <label for="quantity" class="form-label">Jumlah:</label>
          <input type="number" id="quantity" class="form-control" value="1" min="1">
        </div>
        <p><strong>Total Harga:</strong> $<span id="totalPrice"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Bayar</button>
      </div>
    </div>
  </div>
</div>
