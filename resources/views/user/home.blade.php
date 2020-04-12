@extends('user.layouts.master')
@section('content')

<div class="page_heading">
    <div class="page_div">
        <span class="material-icons">
            fiber_manual_record
        </span>
        <span class="page_name">My Personal List</span>
    </div>
    <div class="overview_div">
        <span>
            @if ($user_todo)
            {{ $user_todo->count() }}
            @endif
        </span>
    </div>
</div>

<div class="todo_wrapper">

    @if ($user_todo)
    @foreach ($user_todo as $todo)
    <div class="date_div">
        <span class="todo_date">{{ $todo->date }}</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                {{ $todo->todo }}
            </span>
            <span class="todo_note">
                {{ $todo->note }}
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>
    @endforeach

    @endif

</div>

<div class="add_new_div_overlay">
    <div class="add_new_div">
        <div class="add_new_heading">
            <div class="add_new_icon_div">
                <img class="add_new_icon" src="{{ asset('sources/icons/AddNew.svg') }}" alt="">
            </div>
            <div class="close_div">
                <span class="material-icons">
                    clear
                </span>
            </div>
        </div>
        <div class="form_div">
            <form action="/todo/add" method="POST">
                @csrf
                <div class="todo_input">
                    <input type="text" name="todo" id="" placeholder="Enter To Doo Here">
                </div>
                <div class="note_input">
                    <textarea type="text" rows="7" cols="30" name="note" id="" placeholder="Enter Note Here"></textarea>
                </div>
                <div class="date_input">
                    <input type="date" name="date" id="date_picker" placeholder="Select Date Here">
                </div>
                <div class="done_input">
                    <div class="done_div">
                        <input type="radio" value="1" name="status" id="done">
                        <label for="done">Done</label>
                    </div>
                    <div class="undone_div">
                        <input type="radio" value="0" name="status" id="undone">
                        <label for="undone">Undone</label>
                    </div>

                </div>
                <div class="divider"></div>
                <button class="todo_submit_btn" type="submit">Add To Doo</button>
            </form>
        </div>
    </div>
</div>


@endsection