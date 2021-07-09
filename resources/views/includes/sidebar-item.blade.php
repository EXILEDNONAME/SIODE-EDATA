<li class="menu-section">
  <h4 class="menu-text"> Main </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/dummy*')) ? 'menu-item-active menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
    <span class="menu-text"> Data </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/dummy/table*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="javascript:;" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/directory*')) ? 'menu-item-active menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
    <span class="menu-text"> Directories </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/directory/jobs*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="/dashboard/directory/jobs" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Jobs </span>
        </a>
      </li>
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/directory/table*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="javascript:;" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Regions </span>
        </a>
      </li>
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/directory/religions*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="/dashboard/directory/religions" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Religions </span>
        </a>
      </li>
    </ul>
  </div>
</li>
