@extends('base')
@section('users')
    
<div class="row  justify-content-center">
     <div class="col-md-4 shadow bg bg-light mt-5  border border-1  border-info p-4 py-4 rounded ">

       <form  action="/register" method="POST">
        @csrf
            <div class="mb-3">
                 <label for="nama" class="form-label ">Nama</label>
                 <input type="nama"  name="nama" class="form-control" id="nama" placeholder="mail" required >
               </div>
            <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Email</label>
                 <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@gmail.com" required>
               </div>
               <div class="mb-3">
                 <label for="password" class="form-label">password</label>
                 <input type="password"  name="password" class="form-control" id="password" required>
               </div>
               <div class="mb-3 mt-4">
                 <button class=" container btn btn-primary mb-3">Reigister</button>
               </div>
            
               </form>
     </div>
</div>


</div>

@endsection