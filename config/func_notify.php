<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if(isset($_SESSION['notify'])) :
?>
<div class="toast-container position-fixed top-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <?php if($_SESSION['notify']['status'] == 0) : ?>
        <strong class="me-auto btn btn-success">Berhasil</strong>
      <?php else: ?>
        <strong class="me-auto btn btn-danger">Gagal</strong>
      <?php endif; ?>
      <small>sekarang</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      <p><?= $_SESSION['notify']['message']; ?></p>
    </div>
  </div>
</div>

<script>
    const toastLiveExample = document.getElementById('liveToast');
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastBootstrap.show();
</script>

<?php 
    unset($_SESSION['notify']);
    endif; 
?>