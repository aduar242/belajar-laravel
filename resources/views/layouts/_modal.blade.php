@foreach($products as $product)
<div class="modal fade" id="delete" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Peringatan!!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
          </div>
      <div class="modal-body">
      <p>Apakah ingin menghapus data "{{$product->judul}}"</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger">
            Yes
        </button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        
    </form>
      </div>
    </div>
    
  </div>
</div> 
@endforeach