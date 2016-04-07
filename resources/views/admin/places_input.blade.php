@extends('layouts.placesMaster')

@section('content')

<div class="container">
    <div class="content">
        <div class="title">
        
            <form   action = "/places" method="post" class="form-horizontal">
              {!! csrf_field() !!}
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

