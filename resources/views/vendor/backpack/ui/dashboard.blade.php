@extends(backpack_view('blank'))

@php
    $tickets_type = \App\Models\Ticket::get();
    $sales = \App\Models\Sale::get();

    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];

    $widget_content = array();
    $total_gained = 0;
    //  get all offer and bind data to widget
    foreach ($sales as $sale) {
      $gain = $sale->ticket_price*$sale->ticket_sold; 
      $total_gained = $total_gained + ($sale->ticket_sold * $sale->ticket_price);
      $widget = [
        'type'          => 'progress_white',
        'class'         => 'card mb-2',
        'value'         => $sale->ticket_sold,
        'description'   => "Offre '".$sale->ticket_title."' vendue",
        'progress'      => ($sale->ticket_sold/100)*100, // integer
        'progressClass' => 'progress-bar bg-primary',
        'hint'          => "Recette: ".$gain."€",
      ];
      array_push($widget_content, $widget);
    };

    //  total $$ generated
    $amount_to_gain = 100000 - $total_gained;
    $widget = [
      'type'          => 'progress_white',
      'class'         => 'card mb-2',
      'value'         => $total_gained.'€',
      'description'   => "Gains générés",
      'progress'      => ($total_gained/100000)*100,
      'progressClass' => 'progress-bar bg-primary',
      'hint'          => "Encore ".$amount_to_gain."€ pour atteindre l'objectif",
    ];
    array_push($widget_content, $widget);

    //  get widget view
    Widget::add(
      [
        'type'    => 'div',
        'class'   => 'row my-custom-widget-class',
        'custom-attribute'   => 'my-custom-value',
        'content' => $widget_content
      ]
    );
@endphp

@section('content')
@endsection