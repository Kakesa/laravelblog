<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post" id="deleteForm">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          Voulez-vous vraiment effectuer cette action?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<x-slot name="scripts">
<script>
function supprimer(event) {
  var route = event.target.getAttribute('href')
  deleteForm.setAttribute('action', route);
 
}
</script>