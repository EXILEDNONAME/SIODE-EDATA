<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <div class="d-flex align-items-center flex-wrap mr-1">
      @if ( !empty($page) && $page == 'profile' )
      <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
        <span></span>
      </button>
      @endif
      <div class="d-flex align-items-baseline flex-wrap mr-5">
        <h5 class="text-dark font-weight-bold my-1"> @stack('title') </h5>
      </div>
    </div>
    <div class="d-flex align-items-center">

      <!-- SUBHEADER RIGHT -->
      <div class="input-group input-group-sm input-group-solid max-w-175px">
      </div>
    </div>
  </div>
</div>
