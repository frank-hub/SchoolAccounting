@extends('layouts.home')
@section('main')
    <div class="right_col" role="main">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                @endif
            @endforeach
        </div>
    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{url('edit_fee_type',$feeType['id'])}}">
        @csrf
        <h4>Fee Type</h4>
        <div class="row">
            <div class="col-md-6 form-group has-feedback">
                <label for="fee_type">Fee Type</label>
                <input type="text" name="fee_type" value="{{$feeType->fee_type}}" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Fee Type">
                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-6">
                <label for="termly">Termly</label>
                <input type="checkbox" id="termly" value="{{$feeType->termly}}" class="form-control " name="termly">
            </div>

        </div>
        <div class="col-md-6  form-group has-feedback">
            <label for="note">Note/ Description</label>
            <textarea name="note"  id="" class="form-control" cols="20" rows="10" >
                            {{$feeType->note}}

            </textarea>
        </div>
        <div class="modal-footer">
            <a href="{{url('accounting/fee_type')}}" type="button" class="btn btn-default">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection
