<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Bootstrap Themes</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5">
                @foreach ($datas as $element)
                    {{$element->texte}}    
                @endforeach
            </p>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img src="{{asset('img/pomme.jpg')}}" class="d-block w-100" alt="" height="200px" width="100px" >
                  </div>
                  @foreach ($caroussel as $elem)
                  <div class="carousel-item">
                  <img src="{{asset('img/'.$elem->src)}}" class="d-block w-100" alt="...">
                  </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>

            </div>
        </div>
    </div>
</header>