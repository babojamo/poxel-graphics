<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast  bg-{{ $type }} hide alert-component" role="alert" aria-live="assertive" data-bs-autohide="true" data-bs-delay="3000" aria-atomic="true">
    <div class="toast-header">
       <strong class="me-auto">{{ $header }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body bg-{{ $type }}">
      <p class="text-white">{{ $content }}</p>
    </div>
  </div>
</div>

