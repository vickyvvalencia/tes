@extends('Users.base')
@section('users')

<table class="table table-white shadow  container mt-5 border-dark">
     <thead> 
          
     <tr class="border table-dark">
          <th class="border ">No</th>
          <th class="border">ADUAN</th>
          <th class="border">AKSI</th>
     </tr>
     <tr class="border">
          <td class="border">1</td>
          <td class="border">HAHA</td>
          <td class="border">
          <a href="<?= URL::to('/')?>/Users/detail_pengaduan"  class="btn btn-warning">lihat</a>
          <a href=""class=" btn btn-danger">Hapus</a>
          </td>
     </tr>
     <tr class="border">
          <td class="border">1</td>
          <td class="border">HAHA sdshjdshjdhjsdfkjshfkjsehfkjshfkjsfhjsgfhjdeddkjhdkjhdujkhkjdhdjkhhdhhhhhhhhhhhh</td>
          <td class="border">
          <a href="" class="btn btn-warning">lihat</a>
          <a href="" class="btn btn-danger">Hapus</a>
          
          </td>
     </tr>
     
     </tbody>
   </table>
@endsection