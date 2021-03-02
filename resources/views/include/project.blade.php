<!-- Portfolio-->
<!-- Portfolio Section-->
<section class="page-section portfolio" id="project">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Projects</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-line"></div>
        </div>
        @foreach ($project as $elem)
            <div class="card m-5" style="width: 18rem">
                <div class='card-body'>
                    <h5>{{$elem->nom}}</h5>
                    <p>{{$elem->description}}</p>
                    <p> {{$elem->tag}}</p>
                    <img src="{{asset('img/'.$elem->src)}}" height="250px" width="250px">
                </div>
            
            </div>    
        @endforeach 
    </div>
</section>
