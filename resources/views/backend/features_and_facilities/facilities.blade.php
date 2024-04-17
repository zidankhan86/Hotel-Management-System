@section('content')
@extends('backend.index')

<div style="width: 200px;  padding: 10px; margin: 10px;">
    <h4>Facilities</h4>
  </div>
<div style="width: 1100px; border: 1px solid #ccc;  box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 20px; margin: 20px;">
    <a href="" style="float: right;" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" >+Add</a><br>
    <table style="width: 100%; border-collapse: collapse;">
      <thead><br>
        <tr>
            <th style="padding: 8px; background-color: #0c0707; color: white;">#</th>
            <th style="padding: 8px; background-color: #0c0b0b; color: white;">Name</th>
            <th style="padding: 8px; background-color: #0f0d0d; color: white;">Description</th>
            <th style="padding: 8px; background-color: #0e0d0d; color: white;">Action</th>
        </tr>
      </thead>
      <tbody>
     @foreach ($facilities as $facilitiy)

        <tr>
          <td style="border: 1px solid #ddd; padding: 8px;">{{$facilitiy->id}}</td>
          <td style="border: 1px solid #ddd; padding: 8px;">{{$facilitiy->name}}</td>
          <td style="border: 1px solid #ddd; padding: 8px;">{{$facilitiy->description}}</td>
          <td style="border: 1px solid #ddd; padding: 8px;">
          <a href="" class="btn btn-info"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
          
          </td>
        </tr>
  
     @endforeach
      </tbody>
    </table>
  </div>
</body>
  
{{--Modal --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Facilities</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('facilities.store')}}" method="POST">
            @method('post')
            @csrf
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="recipient-name" class="col-form-label">Facilities Name</label>
              <input type="text" class="form-control" id="recipient-name" name="name">
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Description</label>
                <textarea class="form-control" id="message-text" name="description"></textarea>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<script>
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalTitle.textContent = 'Add Facilities' 
})
</script>


@endsection