<li class="menu-section">
  <h4 class="menu-text"> Main </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/dummy*')) ? 'menu-item-active menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
    <span class="menu-text"> Dummies </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/dummy/table*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="javascript:;" class="menu-link menu-toggle">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Tables </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
          <i class="menu-arrow"></i>
          <ul class="menu-subnav">
            <li class="menu-item {{ (request()->is('dashboard/dummy/table/generals*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/dummy/table/generals" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Generals </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/dummy/table/single-relations*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/dummy/table/single-relations" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Single Relations </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/dummy/table/multi-relations*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/dummy/table/multi-relations" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Multi Relations </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/dummy/table/filters*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/dummy/table/filters" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Filters </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>
