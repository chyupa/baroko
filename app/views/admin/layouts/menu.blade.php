<h4>Dashboard Baroko, welcome <strong>{{Auth::user()->name}}</strong></h4>
<ul class="nav navbar-nav topmenus">
	<li>
		<a>Products</a>
		<div class="dropdown-menu submenu" style="display:none">
			{{link_to_route('admin.products.index', 'Show all products', null, ['class'=>'block'])}}
			{{link_to_route('admin.products.create', 'Create new product', null, ['class'=>'block'])}}
		</div>
	</li>
	<li>
		<a>Categories</a>
		<div class="dropdown-menu submenu" style="display:none">
			{{link_to_route('admin.categories.index', 'Show all categories', null, ['class'=>'block'])}}
			{{link_to_route('admin.products.create', 'Create new category', null, ['class'=>'block'])}}
		</div>
	</li>
	<li>
		<a>Subcategories</a>
		<div class="dropdown-menu submenu" style="display:none">
			{{link_to_route('admin.subcategories.index', 'Show all subcategories', null, ['class'=>'block'])}}
			{{link_to_route('admin.products.create', 'Create new subcategory', null, ['class'=>'block'])}}
		</div>
	</li>
	<li>{{link_to_route('admin.get.logout', 'Logout')}}</li>
</ul>