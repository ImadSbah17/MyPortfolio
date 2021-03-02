 <!-- About-->
 <section class="page-section bg-primary" id="about">
    <div class="container text-center">
        <h1 class="text-center text-uppercase text-secondary mb-0">About</h1>


        <div class="row justify-content-center">

            @foreach ($about as $elem)
            <div class="card m-5" style="width: 18rem">
                <div class='card-body'>
                    <h5>{{$elem->texte}}</h5>
                    <img src="{{asset('img/'.$elem->src)}}" height="30px" width="30px">
                </div>      
            </div>    
        @endforeach
        </div>
    </div>
</section>