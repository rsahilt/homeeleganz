<aside>
    <ul class="pl-5 pt-5">
        <li class="mb-2 mr-5 rounded hover:bg-blue-700">
            <a href="/admin" class="block py-3 px-4 rounded text-white text-lg {{ $slug === 'dashboard' ? 'bg-blue-700' : '' }}">Dashboard</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700">
            <a href="#" class="block py-3 px-4 text-white text-lg">Inbox</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700 {{ $slug === 'userdashboard' ? 'bg-blue-700' : '' }}">
            <a href="/admin/users/" class="block py-3 px-4 text-white text-lg">Users</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700 {{ $slug === 'productdashboard' ? 'bg-blue-700' : '' }}">
            <a href="/admin/products" class="block py-3 px-4 text-white text-lg">Products</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700 {{ $slug === 'taxdashboard' ? 'bg-blue-700' : '' }}">
            <a href="/admin/taxes" class="block py-3 px-4 text-white text-lg">Taxes</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700 {{ $slug === 'categorydashboard' ? 'bg-blue-700' : '' }}">
            <a href="/admin/categories" class="block py-3 px-4 text-white text-lg">Categories</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700 {{ $slug === 'reviewdashboard' ? 'bg-blue-700' : '' }}">
            <a href="/admin/reviews" class="block py-3 px-4 text-white text-lg">Reviews</a>
        </li>

        <li class="mb-2 mr-5 rounded hover:bg-blue-700">
            <a href="#" class="block py-3 px-4 text-white text-lg">Orders</a>
        </li>
    </ul>
</aside>