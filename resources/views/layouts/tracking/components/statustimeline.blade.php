<div id="tracking">
    <div class="tracking-list">
        <div class="row">

            <div class="col-lg-6">

                @php

                $trackingHistory = collect($order->trackingHistory)->sortBy('code');

                $code = collect($trackingHistory)->last()['code'];

                @endphp
                @foreach ($trackingHistory  as $key => $item)
                {{-- {{ $item['code'] }} --}}
                @if(!empty($item['status']))
                @if($code == $item['code'])
                @php
                    $active_icon="status-active";
                    $active_item="tracking-active";
                @endphp
                @else
                @php
                    $active_icon="";
                    $active_item="";
                @endphp
                @endif
                @component('layouts.tracking.components.trackingitem',['item'=>$item,'active_icon'=>$active_icon,'active_item'=>$active_item])
                @endcomponent
                @endif
                @endforeach
                {{-- @if(isset( $order->trackingDetails['courier']))
                @if(!empty($order->trackingDetails['status']) && $order->trackingDetails['courier']!="rider")
                <div class="tracking-item tracking-active">
                    <div class="tracking-icon status-active">
                        <img src="{{asset('img/icons/shipped.png')}}" width="30" height="30">
                    </div>
                    <div class="tracking-date">Courier<span>{{$order->trackingDetails['courier']}}</span></div>
                    <div class="tracking-content tooltip">
                        <strong>{{ucfirst(strtolower($order->trackingDetails['status']))}}</strong>
                        <span> {{ucfirst(strtolower($order->trackingDetails['status']))}}</span>

                        <span class="tooltiptext"> {{ucfirst(strtolower($order->trackingDetails['status']))}}</span>

                    </div>
                </div>
                @endif
                @endif --}}


            </div>
            <div class="col-lg-6 col-sm-12 trac-sec table-responsive">
                <div class="summary-box">
                    <h3 class="summary-title">Order Summary</h3>
                    <p class="divider-new"></p>
                    <p class="Summary-content2"><b>Order No: </b>{{$order->customerBillCode}} <br>
                        <b>Name: </b>{{$order->receiverName}} <br>
                        <b>Phone:</b> {{$order->receiverMobile}} <br>
                        <b> Billing Address: </b> {{$order->receiverAddress}}</p>
                    <!-- <p class="divider-new"></p> -->
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <td class="text-left"><strong></strong></td>
                                <td class="text-left"><strong>Item</strong></td>

                                <td class="text-right"><strong>Price</strong></td>

                                <td class="text-right"><strong>Qty</strong></td>

                                <td class="text-center"><strong>Total</strong></td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($goodsDtoList as $item)
                            <tr>
                                <td class="text-right"></td>
                            <td class="text-right">{{$item['name']}}</td>
                            <td class="text-right">{{$item['price']}}</td>

                            <td class="text-right">{{$item['num']}}</td>
                            <td class="text-right">{{$item['num']* $item['price']}}</td>
                          </tr>
                          @endforeach


                            <tr>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="no-line"></td>
                                <td class="thick-line text-center"><strong>Subtotal: </strong></td>
                                <td class="thick-line text-right">Rs.{{$amount}}</td>
                            </tr>


                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Shipping Charges: </strong></td>
                                @php

                                $shipping_charges=!empty($order->shippingFee) ? $order->shippingFee : 0;
                                @endphp
                                <td class="no-line text-right">Rs.{{  $shipping_charges }}</td>
                            </tr>
                            @if($discount_amount>0)
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Discount: </strong></td>

                                <td class="no-line text-right">Rs.{{$discount_amount}}</td>
                            </tr>
                            @endif
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Total: </strong></td>

                                <td class="no-line text-right"> Rs.{{($amount+$shipping_charges)-$discount_amount}}</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
