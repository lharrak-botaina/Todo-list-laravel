<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-md-6 col-lg-4">
            @forelse ($Data as $value)

            <form class="card" action="{{route("index.update",$value->id)}}" method="POST">
                @method('put')
                @csrf
              <h5 class="card-title fw-400">Tasks</h5>

              <div class="card-body">
                <div class="form-group">
                  <input class="form-control" name="taskName" value="{{$value->taskName}}" type="text" placeholder="Task name">
                </div>
                <div class="form-group">
                  <input class="form-control" name="description" value="{{$value->description}}" type="text" placeholder="Description">
                </div>
                @empty
                                
                @endforelse       
                
                <button type="submit" class="btn btn-block btn-bold btn-primary">update</button>
              </div>
            </form>
          </div>
           </div>
            </div>
             </div>