@include('header')
<style>
    .my_div_ashish {
        width: 350px;
        height: auto;
    }

    .my_div_ashish input {
        opacity: 1;
    }

    .my_div_ashish input {
        opacity: 1 !important;
        width: 100% !important;
        margin: 5px !important;
        padding: 18px 10px !important;

    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>


<form>
    <div class="card">
        <div class="card-body">

            <div id="box1-delete">

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">


                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="usr">Task Owner <font style="color:red;">*</font></label>
                                <input type="text" class="form-control fieldname" name="taskowner" value=""
                                    placeholder="Name" required="">
                            </div>
                        </div>


                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Subject: </label>
                                <input class="form-control" name="subject" id="reporting_to">

                            </div>
                        </div>
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">DueDate: </label>
                                <input type="date" name="duedate" value="yyyy/mm/dd">

                            </div>
                        </div>
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Contect: </label>
                                <input class="form-control" name="contect" id="reporting_to">

                            </div>
                        </div>
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Account: </label>
                                <input class="form-control" name="account" id="reporting_to">

                            </div>
                        </div>
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Status: </label>
                                <select id="" name="status">
                                    <option value="notstarted">NotStarted</option>
                                    <option value="inprogress">In Progress</option>
                                    <option value="complete">Complete</option>

                                </select>

                            </div>
                        </div>
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="">Priority: </label>
                                <select id="" name="priority">
                                    <option value="">select</option>
                                    <option value="high">High</option>
                                    <option value="lowest">Lowest</option>
                                    <option value="normal">Normal</option>

                                </select>

                            </div>
                        </div>
                        {{-- <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Repeat: </label>
                                <label class="switch">
                                    <input id="reminder1" type="checkbox">
                                    <span class="slider round"></span>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="#home">Home</a>
                                        <a href="#about">About</a>
                                        <a href="#contact">Contact</a>
                                    </div>
                                </label>

                            </div>
                        </div> --}}
                        <div class=" col-md-6" id="container">
                            <div class="form-group">
                                <label for="stage_name">Reminder: </label>
                                <label class="switch">
                                    <input id="reminder" type="checkbox">
                                    <span class="slider round"></span>
                                    <div id="myDropdown" class="dropdown-content ">
                                        <div class="my_div_ashish">
                                            <div class="form-group">
                                                <input type="date" name="" value="yyyy/mm/dd" name="taskowner"
                                                    value="" placeholder="Name" required="">
                                            </div>

                                        </div>
                                    </div>
                                </label>

                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label for="usr"> Description <font style="color:red;">*</font></label>
                                <textarea name="description" placeholder="Description" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 mt-4">
                        <button type="submit" class="btn btn-info font-weight-bold" id=""> Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</form>






@include('footer')



<script>
    $(document).ready(function() {
        $('#reminder').on('change', function() {
            if (this.checked) {
                document.getElementById("myDropdown").classList.toggle("show");
            }
        })



    })


    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
