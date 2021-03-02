
    <section class="page-section bg-primary" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0 text-center text-uppercase text-secondary mb-0">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    @foreach ($contact as $elem)

                    <h1>{{$elem->titre}}</h1>
                    <p>{{$elem->phone}}</p>
                    <iframe src="{{$elem->map}}" frameborder="0"></iframe>
                    @endforeach
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>

                    <form action="/Mail-Sender" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">texte</label>
                            <input type="texte" name="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">numéro</label>
                            <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
                        </div>
                        

                        {{-- <textarea type="texte"  name="texte" id="" cols="30" rows="10"></textarea> --}}
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
