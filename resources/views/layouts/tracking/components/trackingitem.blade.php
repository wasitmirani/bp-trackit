

@php
$message="";
$img="";

switch ($item['code']) {
case '10':
case  10:
    $message="Order has been assigned to system for fullifilment.";
    $img="Initialized.png";
    break;
case 9:
case '9':
    $message="Order received at Bachaa Party facility for fullifilment";
    $img="orderreceivedwh.png";
break;
case 21:
case '21':
    $message="Order items are being picked at facility.";
    $img="pickingstarted.png";
break;
case '23':
case  23:
    $message="Your order will be dispatched shortly.";
    $img="packed.png";
break;
case  24:
case  '24':
    $message="Package is ready and set for shipping.";
    $img="shipped.png";
break;
case 10000:
case '10000':
    $message="Awaiting pickup for package delivery.";
    $img="callingforpickup.png";
break;
case 10001:
case '10001':
    $message="All orders present in our warehouse and ready for shipment or pickup.";
    $img="pickup_collect.png";
break;
case 10002:
case '10002':
    $message="Your package is on its way to its final destination.";
    $img="intransit.png";
break;
case 'Return In process':
    $message="a product return is the process of a customer taking previously purchased merchandise back to the retailer.";
    $img="pickingstarted.png";
break;
case '10004':
case 10004:
    $message="A courier has attempted to deliver goods but the addressee did not appear to be home.";
    $img="reattempt.png";
break;
case '10008':
case  10008:
    $message="A order return is the process of a customer taking previously purchased merchandise back to the retailer";
    $img="returnedtowh.png";
break;

case '10005':
case  10005:
    $message=" your return is under process.";
    $img="returnedtowh.png";
break;

// case 'Awaiting return':
//     $message="The package has been loaded on a truck.";
//     $img="awaitingreturn.png";
// break;
case '10003':
case 10003:
    $message="Your package was delivered successfully.";
    $img="delivered.png";
break;


default:
    $message="N/A";
    $img="shipped.png";
    break;
}
@endphp
<div class="tracking-item @if(!empty($active_item))  {{$active_item}} @endif">
    <div class="tracking-icon @if(!empty($active_icon)) {{$active_icon}}  @else status-complete @endif">
        <img src="{{asset('img/icons/'. $img)}}" width="30" height="30">
    </div>
    @php
        $date = new DateTime($item['time']->toDateTime()->format('d-m-Y h:i a'));
        $status=[9,24,23,21,10];
        if(in_array($item['status'], $status)){
            $tz = new DateTimeZone('Asia/Karachi'); // or whatever zone you're after
            $date->setTimezone($tz);
        }
        $courier=['tcs','rider'];
       $user= isset($item['user']) ? $item['user'] : '';
       if(!empty($user)){
        if(! in_array($user, $courier)){
                $tz = new DateTimeZone('Asia/Karachi'); // or whatever zone you're after
                $date->setTimezone($tz);
        }
       }

        // $tz = new DateTimeZone('Asia/Karachi'); // or whatever zone you're after
        //         $date->setTimezone($tz);

    @endphp
    <div class="tracking-date">{{$item['time']->toDateTime()->format('d-m-Y')}}<span>{{$date->format('h:i a')}}</span></div>
    <div class="tracking-content tooltip">
        <strong> {{ucfirst(strtolower($item['status']))}}</strong>
         <span>{{ $message}}</span>

        <span class="tooltiptext">{{ $message}}</span>

    </div>
</div>

