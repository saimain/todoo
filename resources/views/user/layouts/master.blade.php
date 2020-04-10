@include('user.layouts.head')
@include('user.layouts.header')
@yield('content')


<button class="floating_action_btn">
    <span class="material-icons mdc-fab__icon floating_action_btn_icon">add</span>
    <span class="mdc-fab__label floating_action_btn_text">Add</span>
</button>

@include('user.layouts.footer')