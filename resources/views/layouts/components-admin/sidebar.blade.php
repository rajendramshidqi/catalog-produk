 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <div class="user-profile">
         <div class="user-image">
             <img src="{{asset('assets/admin/images/faces/face28.png')}}">
         </div>
         <div class="user-name">
             Edward Spencer
         </div>
         <div class="user-designation">
             Developer
         </div>
     </div>
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="">
                 <i class="icon-box menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
        <li class="nav-item">
             <a class="nav-link" href="{{ route('kategori.index') }}">
                 <i class="icon-box menu-icon"></i>
                 <span class="menu-title">Table kategori</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('produk.index') }}">
                 <i class="icon-box menu-icon"></i>
                 <span class="menu-title">Table produk</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('merek.index') }}">
                 <i class="icon-box menu-icon"></i>
                 <span class="menu-title">Table merek</span>
             </a>
         </li>
     </ul>
 </nav>
