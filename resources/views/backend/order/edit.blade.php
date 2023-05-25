@extends('backend.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
  <h5 class="card-header">Order Edit</h5>
  <div class="card-body">
    <form action="{{route('order.update',$order->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="status">Status :</label>
        <select name="status" id="" class="form-control">
          <option value="waiting" {{($order->status=='shipping' || $order->status=="on_process" || $order->status=="cancel") ? 'disabled' : ''}}  {{(($order->status=='waiting')? 'selected' : '')}}>Waiting</option>
          <option value="on_process" {{($order->status=='shipping'|| $order->status=="cancel") ? 'disabled' : ''}}  {{(($order->status=='on_process')? 'selected' : '')}}>On Process</option>
          <option value="shipping" {{($order->status=="delivered") ? 'disabled' : ''}}  {{(($order->status=='shipping')? 'selected' : '')}}>Shipping</option>
          <option value="delivered" {{($order->status=="cancel") ? 'disabled' : ''}}  {{(($order->status=='delivered')? 'selected' : '')}}>Delivered</option>
          <option value="cancel" {{($order->status=='delivered') ? 'disabled' : ''}}  {{(($order->status=='cancel')? 'selected' : '')}}>Expired</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush
