{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Tickets" icon="la la-question" :link="backpack_url('ticket')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Articles" icon="la la-question" :link="backpack_url('article')" />
<x-backpack::menu-item title="Banner photos" icon="la la-question" :link="backpack_url('banner-photo')" />
<x-backpack::menu-item title="Cart tickets" icon="la la-question" :link="backpack_url('cart-ticket')" />
<x-backpack::menu-item title="Orders" icon="la la-question" :link="backpack_url('order')" />
<x-backpack::menu-item title="Order carts" icon="la la-question" :link="backpack_url('order-cart')" />