
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<div class="container mt-5">

        <div class="row">

          <div class="col-md-8 mx-auto">

            <table class="table bg-white rounded border">
  <thead>
    <a href="{{route("index.create")}}"> <button>add</button></a>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task name </th>
      <th scope="col">Description</th>
      <th scope="col">Action </th>
    
    </tr>
  </thead>
  <tbody>
  
  @forelse ($task as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->taskName}}</td>
      <td>{{$value->description}}</td>
      <td> 
        <form method="POST" action="{{route("index.destroy",$value->id)}}">
          @csrf
          @method('DELETE')
        <a href=""> <button>delete</button></a>
      </form>
           <a href="{{route("index.edit",$value->id)}}"> <button>update</button></a>
        </td>
    
    </tr>
    
    @empty
    @endforelse

  </tbody>
</table>
            
          </div>
          
        </div>
        

      </div>
      