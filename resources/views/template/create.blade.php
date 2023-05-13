<div  class="card" style="margin:20px;">
    {{csrf_field()}}
    <form action="{{action('App\Http\Controllers\MaterialesController@saveRecord')}}" method="post">
        <label for="">
            Nombre
        </label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <br>
        <label for="">
            Descripcion
        </label>
        <input type="text" name="descripcion" id="descripcion" class="form-control">
        <br>
        <label for="">
            Status
        </label>
        <input type="text" name="status" id="status" class="form-control">
        <br>
        <input type="submit" value="Save" class="btn btn-success">
        <br>
    </form>
    

</div>