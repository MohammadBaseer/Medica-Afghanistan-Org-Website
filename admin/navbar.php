      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




          <li class="nav-item has-treeview <?php if($page == "home"){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($page == "home"){echo "active";} ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home.php" class="nav-link <?php if($sub_page == "home"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="en_news_and_events.php" class="nav-link <?php if($sub_page == "news"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News and Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="en_our_programs.php" class="nav-link <?php if($sub_page == "program"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="en_case_stories.php" class="nav-link <?php if($sub_page == "stories"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Case Stories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vacancies.php" class="nav-link <?php if($sub_page == "vacancy"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vacancies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gellery.php" class="nav-link <?php if($sub_page == "gellery"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gellery</p>
                </a>
              </li>



            </ul>
          </li>

          <li class="nav-header">WEBSITE ADMINISTRATION</li>

          <li class="nav-item has-treeview <?php if($page == "other"){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($page == "other"){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                English Sections
                <i class="fas fa-angle-left right"></i>
             </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="en_page_records.php" class="nav-link <?php if($sub_page == "record"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Records</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- ====================================================================== -->
<li class="nav-item has-treeview <?php if($page == "dr_other"){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($sub_page == "dr_record"){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Dari Sections
                <i class="fas fa-angle-left right"></i>
             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dr_page_records.php" class="nav-link <?php if($sub_page == "dr_record"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ریکارد صفحات</p>
                </a>
              </li>
            </ul>
          </li>
<!-- ================================================== -->
<li class="nav-item has-treeview <?php if($page == "ps_other"){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($sub_page == "ps_record"){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pashto Sections
                <i class="fas fa-angle-left right"></i>
             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ps_page_records.php" class="nav-link <?php if($sub_page == "ps_record"){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>پاې ریکارډونه</p>
                </a>
              </li>
            </ul>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->