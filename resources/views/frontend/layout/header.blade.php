 {{-- Header  --}}
 <header class="header">
    <div class="logo">
        <a href="">
            <img src="{{ asset('frontend/image/logo.png') }}" width="100%" alt="">
        </a>
    </div>
    <nav class="nav">
        <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/filter/page">Shop</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/aboutus">About Us</a></li>
        </ol>
    </nav>
    <div class="hamburger" onclick="sidebarOpen()">
        <i class="bi bi-list"></i>
    </div>
</header>