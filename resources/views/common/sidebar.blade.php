     <aside class="app-sidebar sticky" id="sidebar">
         <!-- Start::main-sidebar-header -->
         <div class="main-sidebar-header">
             <a href="index" class="header-logo">
                 <img src="{{ asset("logo.png") }}" alt="logo" class="desktop-logo">
                 <img src="{{ asset("logo.png") }}" alt="logo" class="toggle-logo">
                 <img src="{{ asset("logo.png") }}" alt="logo" class="desktop-dark">
                 <img src="{{ asset("logo.png") }}" alt="logo" class="toggle-dark">
             </a>
         </div>


         <!-- End::main-sidebar-header -->
         <!-- Start::main-sidebar -->
         <div class="main-sidebar" id="sidebar-scroll">
             <!-- Start::nav -->
             <nav class="main-menu-container nav nav-pills flex-column sub-open">
                 <div class="slide-left" id="slide-left"> <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                         width="24" height="24" viewBox="0 0 24 24">
                         <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                     </svg> </div>
                 <ul class="main-menu">





                    <li class="slide ha"> <a href="/Dashboard" class="side-menu__item">
                          <i class="bx bx-home side-menu__icon"></i>

                                 <span class="side-menu__label">Dashboard
                                 <span class="badge bg-warning-transparent -2"></span></span> <i
                                 class="fe fe-]ght side-menu__angle"></i> </a>


                         <ul class="slide-menu child1">

                        </ul>

                     </li> <!-- End::slide -->
                     @inject('menus', \App\Library\menu::class)

                     @foreach ( $menus->get_menus() as $menu)
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i
                                    class="bx bx-{{ $menu->icon }} side-menu__icon"></i> <span
                                    class="side-menu__label">{{ $menu->title  }}</span> <i
                                    class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">

                                @foreach($menu->MenuItems as $menu_item)

                                    <li class="slide"> <a href="{{ $menu_item->link }}" class="side-menu__item">{{ $menu_item->title }}</a> </li>

                                @endforeach

                            </ul>
                        </li>
                     @endforeach



                 </ul>
                 <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                         width="24" height="24" viewBox="0 0 24 24">
                         <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                     </svg></div>
             </nav> <!-- End::nav -->
         </div> <!-- End::main-sidebar -->
     </aside>
