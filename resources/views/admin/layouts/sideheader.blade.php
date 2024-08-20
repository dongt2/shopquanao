<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li><a href="{{ route('admin.home') }}"><i class="ti-home"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-bars"></i> <span>Categories</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('admin.categories.index') }}"><span>List Category</span></a></li>
                        <li><a href="{{ route('admin.categories.create') }}"><span>Add Category</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-product-hunt"></i> <span>Products</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('admin.products.index') }}"><span>List Product</span></a></li>
                        <li><a href="{{ route('admin.products.create') }}"><span>Add Product</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa fa-user-circle"></i> <span>Accounts</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('admin.accounts.index') }}"><span>List Account</span></a></li>
{{--                        <li><a href="{{ route('admin.products.create') }}"><span>Add Product</span></a></li>--}}
                    </ul>
                </li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
