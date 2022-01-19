@extends('Users.base')
@section('users')
       
<div class="container ">
     <div class="row">
         <div class=" bg-light text-dark border border-1 border-dark shadow  p-4 rounded   col-sm-12 col-md-6 mx-auto mt-3">
             
           <form>
                 
                 <div class="mb-3">
                     <label for="nik" class="form-label">Nik</label>
                     <input type="email" class="form-control" id="nik" aria-describedby="emailHelp">
                   </div>
 
                 <div class="mb-3">
                   <label for="Nama" class="form-label">Nama</label>
                   <input type="email" class="form-control" id="Nama" aria-describedby="emailHelp">
                 </div>
 
                 <div class="mb-3">
                   <label for="NoHp" class="form-label">No Hp</label>
                   <input type="text" class="form-control" id="NoHp">
                 </div>
                 <br>
                 <div class="input-group mb-3">
                     <select class="form-select" id="inputGroupSelect02">
                       <option selected>PILIH FILE</option>
                       <option value="1">jalan rusak</option>
                       <option value="2">bencana alam</option>
                       <option value="3">Lainnya</option>
                     </select>
                     <label class="input-group-text" for="inputGroupSelect02">aduan</label>
                   </div>
 
                   <div class="mb-3">
                     <label for="keterangan" class="form-label">keterangan</label>
                     <textarea type="text" class="form-control" id="keterangan"> </textarea>
                   </div>
                   
                   <div class="mb-3">
                    <label for="NoHp" class="form-label">pilih gambar </label>
                    <input type="file" class="form-control" id="NoHp">
                  </div>
                 <button type="submit" class="btn btn-primary container">Tambah </button>
               </form>
         </div>
     </div>
 </div>
@endsection