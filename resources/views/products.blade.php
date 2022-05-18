@extends('home')

@section('title')
    Продукты
@endsection

@section('content')

<div class="row" style="margin-bottom:20px;">
   <div class="col-md-12">
      <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Создать продукт</a>
   </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 class="modal-title">Форма создание продукта</h2>
         </div>
         <form action="{{ route('product_create') }}" method="POST" class="form-horizontal row-border">
            <div class="modal-body">
            
               @csrf

               <div class="form-group">
                  <label class="col-sm-2 control-label">Название продукта</label>
                  <div class="col-sm-8">
                     <input name="name" type="text" class="form-control">
                     @error('name')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Количество</label>
                  <div class="col-sm-8">
                     <input name="amount" type="text" class="form-control">
                     @error('amount')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Цена</label>
                  <div class="col-sm-8">
                     <input name="price" type="text" class="form-control">
                     @error('price')
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
       <h2>Таблица продуктов</h2>
    </div>
    <div class="panel-body">
       <div class="table-responsive">
          <table class="table">
             <thead>
                <tr>
                   <th> Продукт </th>
                   <th> Количество </th>
                   <th> Цена </th>
                </tr>
             </thead>
             <tbody>

               @foreach ($all as $item)
               
                  <tr>
                     <td> {{ $item['name'] }} </td>
                     <td> {{ $item['amount'] }} </td>
                     <td> {{ $item['price'] }} </td>
               </tr>
               @endforeach
             </tbody>
          </table>
       </div>
    </div>
 </div>
 
@endsection