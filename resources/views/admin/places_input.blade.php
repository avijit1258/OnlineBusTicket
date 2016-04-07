@extends('layouts.app')

@section('content')

        <div >
            <form   action = "/places" method="post" class="form-vertical">
                <div class="form-group">
                    <label for="input_place" class="col-sm-3 control-label">New Place </label>
                    <input type = "text" name="place" id="input_place" class = "form-control">
                </div>
               <button type="submit" class = "btn btn-default">
                   <i class="fa fa-btn fa-plus"></i>Add
               </button>
            </form>
        </div>
    

@endsection

