

@extends('layouts.tracking.masterv2')




@section('content')
    <!-- Tracker Start -->

        <div class="container tracker-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tracker-form">
                        <h3 class="tracker-heading">Track Your Order</h3>
                        <form class="form-inline">

                            <div class="form-group">
                                <!-- <label for="order-id" class="sr-only">Password</label> -->
                                <input type="text" class="form-control" id="order_id" name="order_no" value="{{!empty(request('order_no')) ? request('order_no') : ''  }}" placeholder="Please enter your order number here" required>
                            </div>
                            <button type="submit" class="btn btn-primary" >Track</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">

                    @if(!empty($order->trackingHistory))
                    @component('layouts.tracking.components.statustimeline',['discount_amount'=>$discount_amount,'amount'=>$amount,'order'=>$order,'goodsDtoList'=>$goodsDtoList])

                    @endcomponent
                    @else
                 @if(empty($order) && !empty(request('order_no')))
                    <h2 class="header">This order is not found in our system</h2>
                    @else
                    {{-- <h1 class="header-two">Thank You for Shopping<br> From Bacha Party</h1> --}}
                    @endif
                    @endif
                </div>
            </div>
        </div>

    <!-- Tracker End -->

@endsection
