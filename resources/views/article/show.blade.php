
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">Dettaglio di {{$article->title}}</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center mt-5">
                <div class="card my-5" style="width: 18rem;">

                    <div class="card-body">

                        <div class="container-fluid d-flex justify-content-center">
                            <h5 class="card-title">{{$article->title}}</h5>
                        </div>

                        <div class="container-fluid d-flex justify-content-center">
                            <h5 class="card-text">{{$article->date}}</h5>
                        </div>
    
                        <div class="container-fluid d-flex justify-content-center">
                            <p class="card-text">{{$article->description}}</p>
                        </div> 

                        <div class="container-fluid d-flex justify-content-center mt-3">
                            <a href="{{route('indexArticle')}}" class="btn button-50">Torna indietro</a>
                        </div>
    
                    </div>
            </div>
        </div>
    </div>

</x-layout>