@extends('home')

@section('title')
    Клиенты
@endsection

@section('content')

<div class="row" style="margin-bottom:20px;">
   <div class="col-md-12">
      <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Создать клиента</a>
   </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 class="modal-title">Форма создание клиента</h2>
         </div>
         <form action="{{ route('client_create') }}" method="POST" class="form-horizontal row-border">
            <div class="modal-body">
            
               @csrf

               <div class="form-group">
                  <label class="col-sm-2 control-label">Имя, Фамилия</label>
                  <div class="col-sm-8">
                     <input name="name" type="text" class="form-control">
                     @error('name')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Адрес</label>
                  <div class="col-sm-8">
                     <input name="address" type="text" class="form-control">
                     @error('address')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Телефон</label>
                  <div class="col-sm-8">
                     <input name="telephone" type="text" class="form-control">
                     @error('telephone')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
               
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
               <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>

<div class="panel panel-sky">
    <div class="panel-heading">
       <h2>Таблица клиентов</h2>
    </div>
    <div class="panel-body">
       <div class="table-responsive">
          <table class="table">
             <thead>
                <tr>
                   <th> Имя, Фамилия </th>
                   <th> Адрес </th>
                   <th> Телефон </th>
                </tr>
             </thead>
             <tbody>

               @foreach ($all as $item)
               
                  <tr>
                     <td> {{ $item['name'] }} </td>
                     <td> {{ $item['address'] }} </td>
                     <td> {{ $item['telephone'] }} </td>
               </tr>
               @endforeach
             </tbody>
          </table>
       </div>
    </div>
 </div>
 
@endsection