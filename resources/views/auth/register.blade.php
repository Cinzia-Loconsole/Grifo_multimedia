<x-layout>
    
    <header class="container-fluid min-vh-100">
        
        
        <div class="row justify-content-center p-5">
            
            <div class="col-12 col-md-7 p-5">
                
                <h2 class="text-center">CREA UN NUOVO ACCOUNT</h2>
                
            <!-- FORM REGISTRAZIONE -->
                <form method="POST" action="{{route('register')}}" class="p-3" >
                    
                    @csrf
                    <div class="mb-4">
                        
                        <label for="exampleInputName" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp">

                        @error('name')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        
                        <label for="exampleInputEmail" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp">

                        @error('email')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" aria-describedby="passwordHelp">
                        
                        @error('password')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPasswordConfirmation">

                        @error('password_confirmation')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="mt-5 d-flex flex-column p-4">
                        
                        <button type="submit" class="btn rounded-0 p-2 text-white" style="width: 200px; text-transform: uppercase; background-color:rgb(169, 33, 40);">Registrati</button>  
                        
                    </div>
                    
                    
                </form>
                
            </div>
        </div>
        
        
    </header>
    
    
    
</x-layout>