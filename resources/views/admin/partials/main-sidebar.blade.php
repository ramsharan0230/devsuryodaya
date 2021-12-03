<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				  			
				<li >
				  <a href="{{ route('admin.home.index') }}">
					<i data-feather="home"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				</li>

				<li class="header">Super Admin</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="file-plus"></i>
					<span>Permissions</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="{{ route('admin.permissions.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
					<li><a href="{{ route('admin.permissions.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Permission</a></li>
				  </ul>
				</li>    					
				<li class="treeview">
				  <a href="#">
					<i data-feather="headphones"></i>
					<span>Roles</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li><a href="{{ route('admin.roles.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Roles</a></li>
					<li><a href="{{ route('admin.roles.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Add Role</a></li>					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="database"></i>
					<span>Users</span>
					
				  </a>
				  <ul class="treeview-menu">					
					<li><a href="{{ route('admin.users.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Users</a></li>
					<li><a href="{{ route('admin.users.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Add User</a></li>					
				  </ul>
				</li> 

				<li class="header">Components</li>

				<li class="treeview">
					<a href="#">
						<i data-feather="settings"></i>
						<span> Site Setting </i></span>
						<span class="pull-right-container">
						<i class="fa fa-angle-right pull-right" ></i>
						</span>
					</a>
					<ul class="treeview-menu">					
						<li><a href="{{ route('admin.site-setting') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-address-card"></i>
						<span> About us </i></span>
						<span class="pull-right-container">
						</span>
					</a>
					<ul class="treeview-menu">					
						<li><a href="{{ route('admin.about.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> Add/Update</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i data-feather="image"></i>
						<span> Sliders </i></span>
						<span class="pull-right-container">
						<i class="fa fa-angle-right pull-right" ></i>
						</span>
					</a>
					<ul class="treeview-menu">					
						<li><a href="{{ route('admin.slider.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
						<li><a href="{{ route('admin.slider.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Slider</a></li>					
					</ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i data-feather="bold"></i>
					<span>Blogs</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li><a href="{{ route('admin.blog.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					<li><a href="{{ route('admin.blog.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Blog</a></li>					
				  </ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="book"></i>
					  <span>Category</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.category.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.category.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Category</a></li>					
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="database"></i>
					  <span>Subcategory</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.subcategory.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.subcategory.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Subcategory</a></li>					
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="server"></i>
					  <span>Service</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.service.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.service.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Service</a></li>					
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="list"></i>
					  <span>Product</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.product.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.product.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Product</a></li>					
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="folder"></i>
					  <span>Testimonial</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.testimonial.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.testimonial.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Testimonial</a></li>					
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i data-feather="file"></i>
					  <span>Catalogs</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.catalog.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.catalog.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Blog</a></li>					
					</ul>
				  </li>

				  <li class="treeview">
					<a href="#">
					  <i data-feather="film"></i>
					  <span>Videos</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.video.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> List</a></li>
					  <li><a href="{{ route('admin.video.create') }}"><i data-feather="plus-square"><span class="path1"></span><span class="path2"></span></i> Add Video</a></li>					
					</ul>
				  </li>

				  <li class="treeview">
					<a href="#">
					  <i data-feather="file-text"></i>
					  <span>Contact</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">					
					  <li><a href="{{ route('admin.contact.index') }}"><i data-feather="list"><span class="path1"></span><span class="path2"></span></i> Contacts</a></li>
					</ul>
				  </li>
			  </ul>
		  </div>
		</div>
    </section>
  </aside>