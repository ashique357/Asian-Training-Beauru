<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/extras/{{$data['logo']}}"  class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Asian Trainer Beauru</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{$name}}</a>
        
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Landing Pages Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/landing-page-setup/top-nav" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/landing-page-setup/banner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner/Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/landing-page-setup/team" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/landing-page-setup/footer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/about-us" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Why Us?</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/president-message" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>President's Message</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-close">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Our Team
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/team" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Index</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/team-create" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create</p>
                    </a>
                  </li>
                </ul>
              </li>
                
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Membership
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/benefit-of-membership" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Benefit of Membership</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/way-to-become-member" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>How to become a member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/membership-request" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membership Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/member/verify" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Verified Member</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Opportunity
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/opportunity-request" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/opportunity" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Event/Training
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/event" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/event/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Certification
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/certification-benefit" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Benefit of certification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/certification-way" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>How to become certified</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/certificate" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/certificate/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Resources
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/resource" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/resource-create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Chapter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/chapter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/chapter-create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/paid/resources" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resources</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/paid/certificates" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate</p>
                </a>
              </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>