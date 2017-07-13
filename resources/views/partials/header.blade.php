<div class="logo">
    <a href="{{route('pages.index')}}" style="text-decoration: none;"><h1>Yadah !</h1></a>
</div>
<div class="menu">
    <div class="navbar">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="fw-icon-th-list"></i>
        </a>
        <div class="nav-collapse">
            <ul class="nav">
                <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ route('pages.index') }}">Home</a>
                </li>

                <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ route('pages.about') }}">About</a>
                </li>
                <li><a href="#">Music</a></li>
                <li class=""><a href="{{ route('event.index') }}">Events</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Lyrics</a></li>

                <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="{{ route('blog.index') }}">Blog</a>
                </li>

                <li class="{{ Request::is('contact') ? "no-border-right active" : "" }}"><a href="{{ route('pages.contact') }}">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

    <div class="mini-menu">
        <label>
          <select class="selectnav" onchange="window.location.href=this.value" >
            <option value="#">CREATE</option>
            <option value="{{ route('blog.create') }}">→ Create a New Blog</option>
            <option value="{{ route('blog.index') }}" style="border-bottom:1px dotted #fff;">→ View All Blogs</option><br>
            <option value="{{ route('category.create') }}">→ Create Blog Category</option>
            <option value="{{ route('category.index') }}">→ View Blog Categories</option>
            <option value="{{ route('tag.create') }}">→ Create Blog Tag</option>
            <option value="{{ route('tag.index') }}">→ View Blog Tags</option>
            <option value="{{ route('event.create') }}">→ Create a New Event</option>
            <option value="#">→ New Gallery</option>
            <option value="#">→ New Gallery Category</option>
            <option value="#">→ New Gallery Tag</option>
          </select>
        </label>
    </div>
</div> {{-- Menu End --}}
