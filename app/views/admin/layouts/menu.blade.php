<h4>Dashboard Baroko, welcome <strong>{{Auth::user()->name}}</strong></h4>
<ul class="nav navbar-nav">
	<li>{{link_to_route('admin.products.create', 'Create Product')}}</li>
	<li>{{link_to_route('admin.categories.create', 'Create Category')}}</li>
	<li>{{link_to_route('admin.subcategories.create', 'Create Subcategory')}}</li>
	<li>{{link_to_route('admin.get.logout', 'Logout')}}</li>
</ul>