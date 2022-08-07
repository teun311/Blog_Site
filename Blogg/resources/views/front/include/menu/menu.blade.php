<!-- nav bar -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar" href="{{route('home')}}">
                <img src="{{asset('/')}}front/images/Tlogo.png" alt="" width="65" height="65" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('home')}}" role="button"  aria-haspopup="true"
                           aria-expanded="false">
                            Home
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Blog Category
                        </a>

                        <div class="dropdown-menu border py-1 " >
                            @foreach($categories as $category)
                            <a class="dropdown-item border-bottom " href="{{route('blog-category',['id'=>$category->id])}}">{{$category->name}}</a>
                            @endforeach
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('blog-all')}}" aria-haspopup="true"
                           aria-expanded="false">
                            All Blog
                        </a>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog-contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
