 <!-- Header Section -->
 <header class="header w-100">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img src="{{ asset('frontend_assets/assets/images/logo/logo.png') }}" alt="logo" class="navbar-brand__image img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="pure-living-icon-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#banner">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#process">How it Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-btn-nav nav flex-column flex-xl-row text-center">
                    <li class="nav-item">
                        <a class="primary-btn-outline primary-btn-outline--light" href="#!">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="primary-btn" href="#!">Book a Demo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Off Canvas Menu Toggler -->
<div class="offCanvasMenuCloser position-fixed" data-toggle="collapse" data-target="#navbarSupportedContent"
role="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
</div>