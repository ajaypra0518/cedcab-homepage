<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .backimg {
        background-image: url("ola.jpg");
        /* background-position: center; */
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
        padding-bottom:47.3px
            

    }

    .mhead {
        color: white;
        font-weight: bold;
    }

    .phead {
        color: white;
        font-size: 25px;
    }


    .frm {
        background-color: white;
        border-radius: 5px;
        border: 1px solid black;
        margin-top:50px;
    
       


    }

    .ctaxi {
        display: inline-block;
        padding: 3px 10px;
        background-color: #CDDC39;
        margin-top: 15px;
        margin-bottom: 15px;
        border-radius: 15px;
        font-size: 14px;
        font-weight: bold;
    }

    .tpartner {
        text-align: center;
        display: block;
        font-weight: bold;
        padding-top: 12px;
        font-size: 18px;

    }

    .accabs {
        text-align: center;
        display: block;
        font-size: 16px;
        padding-bottom: 5px;

    }


    select {
        border: 0px;
        outline: 0px;
        margin-left: 15px;
        width: auto;
        scroll-behavior: smooth;
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
        background: #e2e2e2;
    }

    .select {

        padding: 10px 7px;
        padding-right: 0;
        border-radius: 5px;
        margin: 10px 0;
        background: #e2e2e2;
    }

    .weight {
        border: 0px;
        outline: 0px;
        /* margin-left: 45px; */
        background: #e2e2e2;
    

    }

    .dropname {
        font-size: 11px;
        color: #898989;
    }

    .btn1 {
        border: 0px;
        outline: 0px;
        background-color: #CDDC39;
    }

    .output {
        padding-left: 50px !important;
    }
    @media only screen and (max-width: 1025px) {
  .weight{
    width:80%;
  }
  select{
      font-size:13.5px;
  }
  
 
}
@media only screen and (max-width: 768px) {
  .backimg{
      background:white;
  }
  .phead,.mhead{
      color:black;
  }
}


input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}

</style>

<body>
    <div class="container-fluid  px-0 backimg">

        <div class="container show1">
            <div class="row  text-center pt-5">
                <h1 class="mhead">Book a City Taxi to your destination in town</h1>
                <p class="phead"> Choose from a range of categories and prices</p>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                    <form class="frm px-2" id="frm">
                        <div class=" text-center "><span class="ctaxi">CITY TAXI</span></div>
                        <div style="border-bottom: 1px solid rgba(0, 0, 0, 0.336); "></div>
                        <label class="tpartner">Your everyday travel partner</label>
                        <label class="accabs">AC Cabs for point to point travel</label>

                        <div class="select">
                            <span class="dropname">PICKUP</span>
                            <select name="pickup" id="pickup"style="margin-left:8px;">
                                <option selected hidden disabled >Current Location</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Basti">Basti</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                            </select>
                        </div>
                        

                        <div class="select">
                            <span class="dropname">DROP</span>
                            <select name="drop" id="drop">
                                <option selected hidden disabled>Drop Location</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Basti">Basti</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                            </select>
                        </div>

                        <div class="select">
                            <span class="dropname" >CARS</span>
                            <select name="cars" id="cars">
                                <option selected hidden disabled>Choose Cab</option>
                                <option value="CedMicro">CedMicro</option>
                                <option value="CedMini">CedMini</option>
                                <option value="CedRoyal">CedRoyal</option>
                                <option value="CedSUV">CedSUV</option>
                            </select>
                        </div>
                        <div class="select">
                            <span class="dropname">WEIGHT</span>
                            <input type="number" class="weight " placeholder="Enter Weight In KG" name="weight" id="weight">

                        </div>
                        <div id="error"></div>
                        <input type="submit" class=" select btn1 col-12" value="Calculate Fare" name="submit"
                            id="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    </form>

                </div>
            </div>
        </div>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">FARE CALCULATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCEL</button>
                        <button type="button" class="btn btn-success">BOOK</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#cars').change(function(){
            var cars = $('#cars').val();
        
            if(cars=="CedMicro"){
                $('#weight').attr('readonly',true);
            }
            else{
                $('#weight').attr('readonly',false);
            }
            });

            // $("#pickup").change(function(){
            // console.log(this.value);
            // $(`#drop option[value*=${this.value}]`).hide();

            $("#submit").click(function (e) {
                e.preventDefault();

                var pickup = $('#pickup').val();
                var drop = $('#drop').val();
                var cars = $('#cars').val();
                
                if(pickup==null && drop==null && cars==null){
                    $(".modal-body").html("**All Fields Are Required");
                }
                else if(pickup==null || drop==null){
                    $(".modal-body").html("Current or Drop Location is not Selected");
                }
                else if (pickup == drop) {
                    $(".modal-body").html("Pickup and Drop location could not be same");
                }
                else if(cars==null){
                    $(".modal-body").html("Cab Is Not Selected");
                }


                else{
                    $.ajax({
                        url: 'calculate.php',
                        type: 'POST',
                        data: $('#frm').serialize(),
                        success: function (data) {
                            console.log(data);
                            $(".modal-body").html(data);

                        }
                    });
                }
                
            });

        });
    </script>
</body>

</html>