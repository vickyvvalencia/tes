@extends('base')
@section('users')
   {{-- <div class=" bg bg-light border border-1  border-info mt-5 w-25 container p-4 py-4 rounded "> --}}

        <div class="row  justify-content-center">
             <div class="col-md-4 shadow bg bg-light mt-5  border border-1  border-info p-4 py-4 rounded">

               <form  action="" method="POST">
                @csrf
                    <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" name="email" class="form-control" id="email" placeholder="mail@gmail.com">
                       </div>
                       <div class="mb-3">
                         <label for="password" class="form-label">password</label>
                         <input type="password" class="form-control" id="password">
                       </div>
                       <div class="mb-1 mt-4">
                         <button type="submit" class=" container btn btn-primary mb-3">Login</button>
                       </div>
                       </form>
             </div>
        </div>
        
        
   </div>
   
@endsection