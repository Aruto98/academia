<aside id="layout-menu" class="layout-menu menu-vertical menu" >
  
  <div class="app-brand demo ">
    <a href="{{ url('/') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
<span class="text-primary">

  <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
      <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
      <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
      <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
    </defs>
    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
        <g id="Icon" transform="translate(27.000000, 15.000000)">
          <g id="Mask" transform="translate(0.000000, 8.000000)">
            <mask id="mask-2" fill="white">
              <use xlink:href="#path-1"></use>
            </mask>
            <use fill="currentColor" xlink:href="#path-1"></use>
            <g id="Path-3" mask="url(#mask-2)">
              <use fill="currentColor" xlink:href="#path-3"></use>
              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
            </g>
            <g id="Path-4" mask="url(#mask-2)">
              <use fill="currentColor" xlink:href="#path-4"></use>
              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
            </g>
          </g>
          <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
            <use fill="currentColor" xlink:href="#path-5"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
          </g>
        </g>
      </g>
    </g>
  </svg>
</span>
</span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">sneat</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="icon-base bx bx-chevron-left"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-home-smile"></i>
          <div data-i18n="Dashboards">Dashboards</div>
          <div class="badge text-bg-danger rounded-pill ms-auto">5</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('/') }}" class="menu-link">
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('dashboards-crm.html') }}" class="menu-link">
              <div data-i18n="CRM">CRM</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-ecommerce-dashboard.html') }}" class="menu-link">
              <div data-i18n="eCommerce">eCommerce</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-logistics-dashboard.html') }}" class="menu-link">
              <div data-i18n="Logistics">Logistics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-academy-dashboard.html') }}" class="menu-link">
              <div data-i18n="Academy">Academy</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Layouts -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-layout"></i>
          <div data-i18n="Layouts">Layouts</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('layouts-collapsed-menu.html') }}" class="menu-link">
              <div data-i18n="Collapsed menu">Collapsed menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-content-navbar.html') }}" class="menu-link">
              <div data-i18n="Content navbar">Content navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-content-navbar-with-sidebar.html') }}" class="menu-link">
              <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('/') }}" class="menu-link" target="_blank">
              <div data-i18n="Horizontal">Horizontal</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-without-menu.html') }}" class="menu-link">
              <div data-i18n="Without menu">Without menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-without-navbar.html') }}" class="menu-link">
              <div data-i18n="Without navbar">Without navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-fluid.html') }}" class="menu-link">
              <div data-i18n="Fluid">Fluid</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-container.html') }}" class="menu-link">
              <div data-i18n="Container">Container</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('layouts-blank.html') }}" class="menu-link">
              <div data-i18n="Blank">Blank</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Front Pages -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-store"></i>
          <div data-i18n="Front Pages">Front Pages</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('landing-page.html') }}" class="menu-link" target="_blank">
              <div data-i18n="Landing">Landing</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('pricing-page.html') }}" class="menu-link" target="_blank">
              <div data-i18n="Pricing">Pricing</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('payment-page.html') }}" class="menu-link" target="_blank">
              <div data-i18n="Payment">Payment</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('checkout-page.html') }}" class="menu-link" target="_blank">
              <div data-i18n="Checkout">Checkout</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('help-center-landing.html') }}" class="menu-link" target="_blank">
              <div data-i18n="Help Center">Help Center</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Apps & Pages -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
      </li>
      <li class="menu-item">
        <a href="{{ url('app-email.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-envelope"></i>
          <div data-i18n="Email">Email</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('app-chat.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-chat"></i>
          <div data-i18n="Chat">Chat</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('app-calendar.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-calendar"></i>
          <div data-i18n="Calendar">Calendar</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('app-kanban.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-grid"></i>
          <div data-i18n="Kanban">Kanban</div>
        </a>
      </li>
      <!-- e-commerce-app menu start -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-cart-alt"></i>
          <div data-i18n="eCommerce">eCommerce</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-ecommerce-dashboard.html') }}" class="menu-link">
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Products">Products</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('ecommerce.products.index') }}" class="menu-link">
                  <div data-i18n="Product List">Product List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-product-add.html') }}" class="menu-link">
                  <div data-i18n="Add Product">Add Product</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-category-list.html') }}" class="menu-link">
                  <div data-i18n="Category List">Category List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Order">Order</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-order-list.html') }}" class="menu-link">
                  <div data-i18n="Order List">Order List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-order-details.html') }}" class="menu-link">
                  <div data-i18n="Order Details">Order Details</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Customer">Customer</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-customer-all.html') }}" class="menu-link">
                  <div data-i18n="All Customers">All Customers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div data-i18n="Customer Details">Customer Details</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ url('app-ecommerce-customer-details-overview.html') }}" class="menu-link">
                      <div data-i18n="Overview">Overview</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('app-ecommerce-customer-details-security.html') }}" class="menu-link">
                      <div data-i18n="Security">Security</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('app-ecommerce-customer-details-billing.html') }}" class="menu-link">
                      <div data-i18n="Address & Billing">Address & Billing</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('app-ecommerce-customer-details-notifications.html') }}" class="menu-link">
                      <div data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-ecommerce-manage-reviews.html') }}" class="menu-link">
              <div data-i18n="Manage Reviews">Manage Reviews</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-ecommerce-referral.html') }}" class="menu-link">
              <div data-i18n="Referrals">Referrals</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-detail.html') }}" class="menu-link">
                  <div data-i18n="Store Details">Store Details</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-payments.html') }}" class="menu-link">
                  <div data-i18n="Payments">Payments</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-checkout.html') }}" class="menu-link">
                  <div data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-shipping.html') }}" class="menu-link">
                  <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-locations.html') }}" class="menu-link">
                  <div data-i18n="Locations">Locations</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-ecommerce-settings-notifications.html') }}" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <!-- e-commerce-app menu end -->
      <!-- Academy menu start -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-book-open"></i>
          <div data-i18n="Academy">Academy</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-academy-dashboard.html') }}" class="menu-link">
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-academy-course.html') }}" class="menu-link">
              <div data-i18n="My Course">My Course</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-academy-course-details.html') }}" class="menu-link">
              <div data-i18n="Course Details">Course Details</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Academy menu end -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-car"></i>
          <div data-i18n="Logistics">Logistics</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-logistics-dashboard.html') }}" class="menu-link">
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-logistics-fleet.html') }}" class="menu-link">
              <div data-i18n="Fleet">Fleet</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-food-menu"></i>
          <div data-i18n="Invoice">Invoice</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-invoice-list.html') }}" class="menu-link">
              <div data-i18n="List">List</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-invoice-preview.html') }}" class="menu-link">
              <div data-i18n="Preview">Preview</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-invoice-edit.html') }}" class="menu-link">
              <div data-i18n="Edit">Edit</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-invoice-add.html') }}" class="menu-link">
              <div data-i18n="Add">Add</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-user"></i>
          <div data-i18n="Users">Users</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-user-list.html') }}" class="menu-link">
              <div data-i18n="List">List</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="View">View</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('app-user-view-account.html') }}" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-user-view-security.html') }}" class="menu-link">
                  <div data-i18n="Security">Security</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-user-view-billing.html') }}" class="menu-link">
                  <div data-i18n="Billing & Plans">Billing & Plans</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-user-view-notifications.html') }}" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('app-user-view-connections.html') }}" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-check-shield"></i>
          <div data-i18n="Roles & Permissions">Roles & Permissions</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('app-access-roles.html') }}" class="menu-link">
              <div data-i18n="Roles">Roles</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('app-access-permission.html') }}" class="menu-link">
              <div data-i18n="Permission">Permission</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-dock-top"></i>
          <div data-i18n="Pages">Pages</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="User Profile">User Profile</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('pages-profile-user.html') }}" class="menu-link">
                  <div data-i18n="Profile">Profile</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-profile-teams.html') }}" class="menu-link">
                  <div data-i18n="Teams">Teams</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-profile-projects.html') }}" class="menu-link">
                  <div data-i18n="Projects">Projects</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-profile-connections.html') }}" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('pages-account-settings-account.html') }}" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-account-settings-security.html') }}" class="menu-link">
                  <div data-i18n="Security">Security</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-account-settings-billing.html') }}" class="menu-link">
                  <div data-i18n="Billing & Plans">Billing & Plans</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-account-settings-notifications.html') }}" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-account-settings-connections.html') }}" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="{{ url('pages-faq.html') }}" class="menu-link">
              <div data-i18n="FAQ">FAQ</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('pages-pricing.html') }}" class="menu-link">
              <div data-i18n="Pricing">Pricing</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('pages-misc-error.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Error">Error</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-misc-under-maintenance.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Under Maintenance">Under Maintenance</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-misc-comingsoon.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Coming Soon">Coming Soon</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('pages-misc-not-authorized.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Not Authorized">Not Authorized</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-lock-open-alt"></i>
          <div data-i18n="Authentications">Authentications</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Login">Login</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-login-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-login-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Register">Register</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-register-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-register-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-register-multisteps.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Multi-steps">Multi-steps</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Verify Email">Verify Email</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-verify-email-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-verify-email-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Reset Password">Reset Password</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-reset-password-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-reset-password-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Forgot Password">Forgot Password</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-forgot-password-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-forgot-password-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Two Steps">Two Steps</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('auth-two-steps-basic.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('auth-two-steps-cover.html') }}" class="menu-link" target="_blank">
                  <div data-i18n="Cover">Cover</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-spreadsheet"></i>
          <div data-i18n="Wizard Examples">Wizard Examples</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('wizard-ex-checkout.html') }}" class="menu-link">
              <div data-i18n="Checkout">Checkout</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('wizard-ex-property-listing.html') }}" class="menu-link">
              <div data-i18n="Property Listing">Property Listing</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('wizard-ex-create-deal.html') }}" class="menu-link">
              <div data-i18n="Create Deal">Create Deal</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ url('modal-examples.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-window-open"></i>
          <div data-i18n="Modal Examples">Modal Examples</div>
        </a>
      </li>

      <!-- Components -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Components">Components</span>
      </li>
      <!-- Cards -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-collection"></i>
          <div data-i18n="Cards">Cards</div>
          <div class="badge text-bg-primary rounded-pill ms-auto">6</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('cards-basic.html') }}" class="menu-link">
              <div data-i18n="Basic">Basic</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('cards-advance.html') }}" class="menu-link">
              <div data-i18n="Advance">Advance</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('cards-statistics.html') }}" class="menu-link">
              <div data-i18n="Statistics">Statistics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('cards-analytics.html') }}" class="menu-link">
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('cards-gamifications.html') }}" class="menu-link">
              <div data-i18n="Gamifications">Gamifications</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('cards-actions.html') }}" class="menu-link">
              <div data-i18n="Actions">Actions</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- User interface -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-box"></i>
          <div data-i18n="User interface">User interface</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('ui-accordion.html') }}" class="menu-link">
              <div data-i18n="Accordion">Accordion</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-alerts.html') }}" class="menu-link">
              <div data-i18n="Alerts">Alerts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-badges.html') }}" class="menu-link">
              <div data-i18n="Badges">Badges</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-buttons.html') }}" class="menu-link">
              <div data-i18n="Buttons">Buttons</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-carousel.html') }}" class="menu-link">
              <div data-i18n="Carousel">Carousel</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-collapse.html') }}" class="menu-link">
              <div data-i18n="Collapse">Collapse</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-dropdowns.html') }}" class="menu-link">
              <div data-i18n="Dropdowns">Dropdowns</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-footer.html') }}" class="menu-link">
              <div data-i18n="Footer">Footer</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-list-groups.html') }}" class="menu-link">
              <div data-i18n="List Groups">List groups</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-modals.html') }}" class="menu-link">
              <div data-i18n="Modals">Modals</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-navbar.html') }}" class="menu-link">
              <div data-i18n="Navbar">Navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-offcanvas.html') }}" class="menu-link">
              <div data-i18n="Offcanvas">Offcanvas</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-pagination-breadcrumbs.html') }}" class="menu-link">
              <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-progress.html') }}" class="menu-link">
              <div data-i18n="Progress">Progress</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-spinners.html') }}" class="menu-link">
              <div data-i18n="Spinners">Spinners</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-tabs-pills.html') }}" class="menu-link">
              <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-toasts.html') }}" class="menu-link">
              <div data-i18n="Toasts">Toasts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-tooltips-popovers.html') }}" class="menu-link">
              <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('ui-typography.html') }}" class="menu-link">
              <div data-i18n="Typography">Typography</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Extended components -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-copy"></i>
          <div data-i18n="Extended UI">Extended UI</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('extended-ui-avatar.html') }}" class="menu-link">
              <div data-i18n="Avatar">Avatar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-blockui.html') }}" class="menu-link">
              <div data-i18n="BlockUI">BlockUI</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-drag-and-drop.html') }}" class="menu-link">
              <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-media-player.html') }}" class="menu-link">
              <div data-i18n="Media Player">Media Player</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-perfect-scrollbar.html') }}" class="menu-link">
              <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-star-ratings.html') }}" class="menu-link">
              <div data-i18n="Star Ratings">Star Ratings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-sweetalert2.html') }}" class="menu-link">
              <div data-i18n="SweetAlert2">SweetAlert2</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-text-divider.html') }}" class="menu-link">
              <div data-i18n="Text Divider">Text Divider</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Timeline">Timeline</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ url('extended-ui-timeline-basic.html') }}" class="menu-link">
                  <div data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ url('extended-ui-timeline-fullscreen.html') }}" class="menu-link">
                  <div data-i18n="Fullscreen">Fullscreen</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-tour.html') }}" class="menu-link">
              <div data-i18n="Tour">Tour</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-treeview.html') }}" class="menu-link">
              <div data-i18n="Treeview">Treeview</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('extended-ui-misc.html') }}" class="menu-link">
              <div data-i18n="Miscellaneous">Miscellaneous</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Icons -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-crown"></i>
          <div data-i18n="Icons">Icons</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('icons-boxicons.html') }}" class="menu-link">
              <div data-i18n="Boxicons">Boxicons</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('icons-font-awesome.html') }}" class="menu-link">
              <div data-i18n="Font Awesome">Font Awesome</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Forms & Tables -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
      </li>
      <!-- Forms -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-detail"></i>
          <div data-i18n="Form Elements">Form Elements</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('forms-basic-inputs.html') }}" class="menu-link">
              <div data-i18n="Basic Inputs">Basic Inputs</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-input-groups.html') }}" class="menu-link">
              <div data-i18n="Input groups">Input groups</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-custom-options.html') }}" class="menu-link">
              <div data-i18n="Custom Options">Custom Options</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-editors.html') }}" class="menu-link">
              <div data-i18n="Editors">Editors</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-file-upload.html') }}" class="menu-link">
              <div data-i18n="File Upload">File Upload</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-pickers.html') }}" class="menu-link">
              <div data-i18n="Pickers">Pickers</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-selects.html') }}" class="menu-link">
              <div data-i18n="Select & Tags">Select &amp; Tags</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-sliders.html') }}" class="menu-link">
              <div data-i18n="Sliders">Sliders</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-switches.html') }}" class="menu-link">
              <div data-i18n="Switches">Switches</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('forms-extras.html') }}" class="menu-link">
              <div data-i18n="Extras">Extras</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-detail"></i>
          <div data-i18n="Form Layouts">Form Layouts</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('form-layouts-vertical.html') }}" class="menu-link">
              <div data-i18n="Vertical Form">Vertical Form</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('form-layouts-horizontal.html') }}" class="menu-link">
              <div data-i18n="Horizontal Form">Horizontal Form</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('form-layouts-sticky.html') }}" class="menu-link">
              <div data-i18n="Sticky Actions">Sticky Actions</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-carousel"></i>
          <div data-i18n="Form Wizard">Form Wizard</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('form-wizard-numbered.html') }}" class="menu-link">
              <div data-i18n="Numbered">Numbered</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('form-wizard-icons.html') }}" class="menu-link">
              <div data-i18n="Icons">Icons</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ url('form-validation.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-list-check"></i>
          <div data-i18n="Form Validation">Form Validation</div>
        </a>
      </li>
      <!-- Tables -->
      <li class="menu-item">
        <a href="{{ url('tables-basic.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-table"></i>
          <div data-i18n="Tables">Tables</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-grid"></i>
          <div data-i18n="Datatables">Datatables</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('tables-datatables-basic.html') }}" class="menu-link">
              <div data-i18n="Basic">Basic</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('tables-datatables-advanced.html') }}" class="menu-link">
              <div data-i18n="Advanced">Advanced</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('tables-datatables-extensions.html') }}" class="menu-link">
              <div data-i18n="Extensions">Extensions</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Charts & Maps -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-chart"></i>
          <div data-i18n="Charts">Charts</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('charts-apex.html') }}" class="menu-link">
              <div data-i18n="Apex Charts">Apex Charts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('charts-chartjs.html') }}" class="menu-link">
              <div data-i18n="ChartJS">ChartJS</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ url('maps-leaflet.html') }}" class="menu-link">
          <i class="menu-icon icon-base bx bx-map-alt"></i>
          <div data-i18n="Leaflet Maps">Leaflet Maps</div>
        </a>
      </li>

      <!-- Misc -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Misc">Misc</span>
      </li>

      <!-- Multi Level Menu -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon icon-base bx bx-grid"></i>
          <div data-i18n="Multi Level">Multi Level</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <div data-i18n="Level 2">Level 2</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link">
                  <div data-i18n="Level 3">Level 3</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
          <i class="menu-icon icon-base bx bx-support"></i>
          <div data-i18n="Support">Support</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
          <i class="menu-icon icon-base bx bx-file"></i>
          <div data-i18n="Documentation">Documentation</div>
        </a>
      </li>
    </ul>
    
  
</aside>
<div class="menu-mobile-toggler d-xl-none rounded-1">
  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
    <i class="bx bx-menu icon-base"></i>
    <i class="bx bx-chevron-right icon-base"></i>
  </a>
</div>

<script>
  (function () {
    const rawPath = window.location.pathname.replace(/^\/|\/$/g, '');
    const current = rawPath ? rawPath.split('/').pop() : 'index.html';
    const menuEl = document.querySelector('#layout-menu');
    if (!menuEl) return;
    const menuInner = menuEl.querySelector('.menu-inner');

    // 1. Highlight active menu item & open parent tree
    menuEl.querySelectorAll('.menu-inner .menu-item.active').forEach(function (el) {
      el.classList.remove('active');
    });
    menuEl.querySelectorAll('.menu-inner .menu-item.open').forEach(function (el) {
      el.classList.remove('open');
    });

    const isHome = (!rawPath || rawPath === 'index.html' || rawPath === 'dashboards-analytics.html');
    const isCrm = (current === 'dashboards-crm.html');
    const isAppDashboard = ['app-academy-dashboard.html', 'app-ecommerce-dashboard.html', 'app-logistics-dashboard.html'].includes(current);

    if (isHome) {
      const dashItem = menuEl.querySelector('.menu-inner > li:first-child');
      if (dashItem) {
        dashItem.classList.add('open');
        const firstSub = dashItem.querySelector('.menu-sub > li:first-child');
        if (firstSub) firstSub.classList.add('active');
      }
    } else if (isCrm) {
      const dashItem = menuEl.querySelector('.menu-inner > li:first-child');
      if (dashItem) {
        dashItem.classList.add('open');
        const crmLink = dashItem.querySelector('.menu-sub a[href*="dashboards-crm"]');
        if (crmLink) {
          const item = crmLink.closest('.menu-item');
          if (item) item.classList.add('active');
        }
      }
    } else if (isAppDashboard) {
      // Prioritize the app menu in APPS & PAGES (not inside Dashboards)
      const dashItem = menuEl.querySelector('.menu-inner > li:first-child');
      const allLinks = Array.from(menuEl.querySelectorAll(
        `.menu-inner a[href$="${current}"], .menu-inner a[href$="${current}.html"], .menu-inner a[href$="/${current}"]`
      ));
      const appLink = allLinks.find(a => !dashItem || !dashItem.contains(a)) || allLinks[0];
      if (appLink) {
        const item = appLink.closest('.menu-item');
        if (item) item.classList.add('active');
        const parent = item.parentElement.closest('.menu-item');
        if (parent) {
          parent.classList.add('active');
          // Top-level app stays collapsed with solid purple background as in official demo (Image 2)
        }
      }
    } else {
      // General matcher for all other pages
      const allLinks = Array.from(menuEl.querySelectorAll(
        `.menu-inner a[href$="${current}"], .menu-inner a[href$="${current}.html"], .menu-inner a[href$="/${current}"]`
      ));

      if (allLinks.length === 0 && current.includes('.')) {
        const withoutExt = current.replace(/\.[^.]+$/, '');
        allLinks.push(...menuEl.querySelectorAll(`.menu-inner a[href$="${withoutExt}.html"]`));
      }

      if (allLinks.length === 0 && window.location.pathname.includes('/ecommerce/products')) {
        const prodLink = menuEl.querySelector('.menu-inner a[href*="ecommerce/products"]') ||
                         menuEl.querySelector('.menu-inner a[href*="product-list"]');
        if (prodLink) allLinks.push(prodLink);
      }

      const dashItem = menuEl.querySelector('.menu-inner > li:first-child');
      const activeLink = allLinks.find(a => !dashItem || !dashItem.contains(a)) || allLinks[0];

      if (activeLink) {
        let item = activeLink.closest('.menu-item');
        let isFirst = true;
        while (item && item.classList.contains('menu-item')) {
          const isTopLevel = item.parentElement.classList.contains('menu-inner');
          // Leaf item or top-level item gets active
          if (isFirst || isTopLevel) {
            item.classList.add('active');
          }
          if (item.querySelector('.menu-sub')) {
            item.classList.add('open');
          }
          isFirst = false;
          item = item.parentElement.closest('.menu-item');
        }
      }
    }

    // 2. Center sidebar on the active menu item (on page load / reload / navigation)
    function scrollToActiveItem() {
      if (!menuInner) return;
      const isCollapsed = document.documentElement.classList.contains('layout-menu-collapsed')
        && !document.documentElement.classList.contains('layout-menu-hover');

      let targetEl = null;
      if (isCollapsed) {
        // In collapsed mode (not hovered), scroll target is the active top-level menu icon
        targetEl = menuEl.querySelector('.menu-inner > .menu-item.active')
          || menuEl.querySelector('.menu-inner > .menu-item.open')
          || menuEl.querySelector('.menu-inner > .menu-item');
      } else {
        // In expanded or hovered mode, scroll target is the active leaf item or opened section
        targetEl = menuEl.querySelector('.menu-item.active:not(.open)')
          || menuEl.querySelector('.menu-item.active')
          || menuEl.querySelector('.menu-inner > .menu-item.open');
      }

      if (targetEl && targetEl.offsetTop !== undefined) {
        const itemTop = targetEl.offsetTop;
        const containerH = menuInner.clientHeight || 600;
        menuInner.scrollTop = Math.max(0, itemTop - Math.floor(containerH / 2) + Math.floor(targetEl.clientHeight / 2));
      }

      if (window.Helpers && window.Helpers.menuPsScroll) {
        window.Helpers.menuPsScroll.update();
      }
    }

    scrollToActiveItem();

    document.addEventListener('DOMContentLoaded', function () {
      scrollToActiveItem();
      setTimeout(scrollToActiveItem, 60);
      setTimeout(scrollToActiveItem, 300);
    });

    window.addEventListener('load', function () {
      scrollToActiveItem();
    });

    // 3. Keep manual scroll position on hover in / hover out (do NOT snap back to active item)
    menuEl.addEventListener('mouseenter', function () {
      if (document.documentElement.classList.contains('layout-menu-collapsed')) {
        setTimeout(function () {
          if (window.Helpers && window.Helpers.menuPsScroll) {
            window.Helpers.menuPsScroll.update();
          }
        }, 50);
      }
    });

    menuEl.addEventListener('mouseleave', function () {
      if (document.documentElement.classList.contains('layout-menu-collapsed')) {
        setTimeout(function () {
          if (window.Helpers && window.Helpers.menuPsScroll) {
            window.Helpers.menuPsScroll.update();
          }
        }, 50);
      }
    });
  })();
</script>
<!-- / Menu -->
