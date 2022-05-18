@extends('home')

@section('title')
    Домен
@endsection

@section('content')

<div class="panel">
    <div class="panel-body">
        <textarea id="domain" class="form-control" placeholder="Перечислети домены через запятые"></textarea>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <a href="#" class="btn btn-default btn-lg btn-block" onclick="send_check_domain()">Поиск</a>
    </div>
</div>

<div class="panel panel-sky">
    <div class="panel-heading">
       <h2>Домены</h2>
    </div>
    <div class="panel-body">
       <div class="table-responsive">
          <table class="table">
             <thead>
                <tr>
                   <th> Названия </th>
                   <th> Статус </th>
                   <th> Дата окончания </th>
                </tr>
             </thead>
             <tbody id="domain_list">

             </tbody>
          </table>
       </div>
    </div>
 </div>
 
 <script>
     function send_check_domain() {

        $.ajax({
            method: "GET",
            url: "{{ route('check_domain') }}",
            data: { domains : $('#domain').val() }
        })
        .done(function( items ) {

            $('#domain_list').html(``);

            items.map(function name(item) {
                if (!item.registered) {
                    
                    $('#domain_list').append(
                        `
                        <tr class="success">
                            <td> ${ item.name } </td>
                            <td> Свободен </td>
                            <td>  </td>
                        </tr>

                        `
                    )
                    
                }else{
                    $('#domain_list').append(
                        `
                        <tr class="danger">
                            <td> ${ item.name } </td>
                            <td> Занят </td>
                            <td> ${ item.expires } </td>
                        </tr>

                        `
                    )
                }
                
            })
        });

    }
 </script>

@endsection