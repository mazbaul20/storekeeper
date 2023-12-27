<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <h4 class="logo-text">PROJECT</h4>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
        <a href="{{ route('dashboard.page') }}">
          <div class="parent-icon">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="parent-icon">
            <ion-icon name="person-circle-outline"></ion-icon>
          </div>
          <div class="menu-title">User Profile</div>
        </a>
      </li>
      <li class="menu-label">Pages</li>
      <li>
        <a class="has-arrow" href="{{ route('product.page') }}">
          <div class="parent-icon">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <div class="menu-title">Products</div>
        </a>
      </li>
      <li>
        <a class="has-arrow" href="{{ route('sale.page') }}">
          <div class="parent-icon">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <div class="menu-title">Sale</div>
        </a>
      </li>
      <li>
        <a class="has-arrow" href="{{ route('transactions.page') }}">
          <div class="parent-icon">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <div class="menu-title">Transaction</div>
        </a>
      </li>
      
    </ul>
    <!--end navigation-->
  </aside>