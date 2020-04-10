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
            2/100
        </span>
    </div>
</div>

<div class="todo_wrapper">

    <div class="date_div">
        <span class="todo_date">Today</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                Create Prototype Todo Web App
            </span>
            <span class="todo_note">
                The web app for team to manages their task.
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>


    <div class="date_div">
        <span class="todo_date">3 Feb 2020</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                Testing Lorem Todo
            </span>
            <span class="todo_note">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus impedit deserunt minima
                voluptatibus velit excepturi consequatur, nihil id, temporibus rerum ab sint. Optio dicta, nemo
                molestias qui ratione quibusdam?
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>


    <div class="date_div">
        <span class="todo_date">3 Feb 2020</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                Auto Item Height
            </span>
            <span class="todo_note">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus impedit deserunt minima
                voluptatibus velit excepturi consequatur, nihil id, temporibus rerum ab sint. Optio dicta, nemo
                molestias qui ratione quibusdam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni
                maxime molestiae eligendi velit incidunt harum amet architecto dignissimos, iusto quasi alias vero
                tenetur possimus aut rerum non aliquam impedit?
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>


    <div class="date_div">
        <span class="todo_date">3 Feb 2020</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                Auto Item Height
            </span>
            <span class="todo_note">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus impedit deserunt minima
                voluptatibus velit excepturi consequatur, nihil id, temporibus rerum ab sint. Optio dicta, nemo
                molestias qui ratione quibusdam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni
                maxime molestiae eligendi velit incidunt harum amet architecto dignissimos, iusto quasi alias vero
                tenetur possimus aut rerum non aliquam impedit?
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>

    <div class="date_div">
        <span class="todo_date">3 Feb 2020</span>
    </div>
    <div class="todo_div">
        <div class="todo_content">
            <span class="todo_text">
                Auto Item Height
            </span>
            <span class="todo_note">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus impedit deserunt minima
                voluptatibus velit excepturi consequatur, nihil id, temporibus rerum ab sint. Optio dicta, nemo
                molestias qui ratione quibusdam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni
                maxime molestiae eligendi velit incidunt harum amet architecto dignissimos, iusto quasi alias vero
                tenetur possimus aut rerum non aliquam impedit?
            </span>
        </div>
        <div class="todo_action">
            <button class="mdc-icon-button material-icons">fiber_manual_record</button>
        </div>
    </div>
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
            <form action="">
                <div class="todo_input">
                    <input type="text" name="" id="" placeholder="Enter To Doo Here">
                </div>
                <div class="note_input">
                    <textarea type="text" rows="7" cols="30" name="" id="" placeholder="Enter Note Here"></textarea>
                </div>
                <div class="date_input">
                    <input type="date" name="" id="date_picker" placeholder="Select Date Here">
                </div>
                <div class="done_input">
                    <div class="done_div">
                        <input type="radio" name="done" id="done">
                        <label for="done">Done</label>
                    </div>
                    <div class="undone_div">
                        <input type="radio" name="done" id="undone">
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