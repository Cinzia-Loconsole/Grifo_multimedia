
<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <h1 class="text-center my-4">NEWS</h1>
            </div>
        </div>
    </div>


    

    @if (count($articles) > 0)
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($articles as $article)
                <div class="col-12 col-md-4 d-flex justify-content-center my-5">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">

                            <div class="container-fluid d-flex justify-content-center">
                                <h5 class="card-title">{{$article->title}}</h5>
                            </div>

                            <div class="container-fluid d-flex justify-content-center">
                                <h6 class="card-text">{{$article->date}}</h6>
                            </div>
        
                            {{-- <div class="container-fluid d-flex justify-content-center">
                                <h5 class="card-text">{{$article->description}}</h5>
                            </div> --}}
        
                            <div class="container-fluid d-flex justify-content-center mt-3">
                                <a href="{{route('showArticle', compact('article'))}}" class="btn button-50">Leggi</a>
                            </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>

        @else
        <!-- Mostra il messaggio preimpostato -->
        <div class="container" style="height:300px;">
            <div class="row" >
                <h2 class="d-flex justify-content-center mt-2">Non ci sono ancora notizie</h2>
                <div class="d-flex justify-content-center">
                <a href="{{route('createArticle')}}" class="btn btn-outline-success mt-3 " style="width: 20%">Inseriscine una</a>
                </div>
            </div>
        </div>

    @endif


</x-layout>