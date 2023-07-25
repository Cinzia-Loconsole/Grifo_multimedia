<x-layout>

    <header class="">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">INSERISCI LA TUA NOTIZIA</h1>
                </div>
            </div>
        </div>
    
        <div class="container cont-form">

            <form class="p-5 shadow" method="POST" action="{{route('storeArticle')}}">
    
                @csrf
    
                <div class="mb-3">
    
                    <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputName" class="form-label">Titolo*</label>
                    </div>

                    <div class="d-flex justify-content-center">
                        <input name="title" type="text" style="width:50%;" class="form-control">
                            @error('title')
                                is-invalid
                            @enderror
                                " id="exampleInputtitle" aria-describedby="titleHelp" value="{{old('title')}}">
                        {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE --}}
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="mb-3">
    
                    <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputDate" class="form-label">Data:*</label>
                    </div>

                    <div class="container-fluid d-flex justify-content-center">
                        <input name="date" type="text" style="width:50%;" class="form-control
                        @error('date')
                        is-invalid
                        @enderror
                        " id="exampleInputDate" aria-describedby="dateHelp" value="{{old('date')}}">
                        {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
    
                    <div class="container-fluid d-flex justify-content-center">
                        <label for="exampleInputDescription" class="form-label">Descrizione:*</label>
                    </div>

                    <div class="container-fluid d-flex justify-content-center">
                        <textarea name="description" style="width:50%;" class="form-control
                        @error('img')
                        is-invalid
                        @enderror
                        " id="exampleInputDescription" cols="30" rows="10">{{old('description')}}
                        {{--  PER MANTENERE IL VALORE DEL CAMPO SE SCATTA ERRORE VALIDAZIONE E PER FAR APPARIRE L'ERRORE SOTTO IL CAMPO CORRISPONDENTE--}}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- lEGENDA CAMPO OBBLIGATORIO --}}
                <div class="container-fluid d-flex justify-content-center mt-3">
                    <p>* = Campo Obbligatorio</p>
                </div>
                
                <div class="mb-3">
                    <div class="container-fluid d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger border-0">Aggiungi</button>
                    </div>
                </div>
            </form>
    
    </header>

</x-layout>