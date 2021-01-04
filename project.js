
        $(document).ready(function () {
            //////////////for disabling the dropdown///////////////////////////////////////
            var x, y;
            $("#pickup").change(function () {
                $(`#drop option[value*=${x}]`).show();
                $(`#drop option[value*=${this.value}]`).hide();
                x = this.value;
            });

            $("#drop").change(function () {
                $(`#pickup option[value*=${y}]`).show();
                $(`#pickup option[value*=${this.value}]`).hide();
                y = this.value;
            });
            /////////////////////////////////////////////////////////////////////////////////

            /////////////////////disable luggage option when car is CedMicro/////////////////////////

            $('#cars').change(function () {
                var cars = $('#cars').val();

                if (cars == "CedMicro") {
                    $('#weight').val("");
                    $('#weight').attr('readonly', true);
                    $('#weight').attr("placeholder", "Luggage Facility Unavilable");
                }
                else {
                    $('#weight').attr('readonly', false);
                    $('#weight').attr("placeholder", "Enter Weight in KG");
                }
            });
            /////////////////////////////////////////////////////////////////////////////////


            $("#submit").click(function (e) {
                // e.preventDefault();
                debugger;
                $('#frm').validate({
                    rules: {
                        pickup: {
                            required:true
                            
                        },
                        drop: {
                            required:true
                            
                        },
                        cars: {
                            required:true
                            
                        }
                       
                       
                    },
                    messages:{
                        pickup: {
                            required:'Please Select Your PickUp Location '
                            
                        },
                        drop: {
                            required:'Please Select Your Drop Location'
                            
                        },
                        cars: {
                            required:'Please Select Cab Type'
                            
                        }
                       

                    },

//////////we can insert error with speccific location///////////////////////////////                   
                    // errorElement : 'span',
                    // errorLabelContainer: '.error',


                    // errorPlacement: function(error, element) {
                    //     if (element.attr("name") == "weight" )
                    //         error.insertAfter("#errNm1");
                    //     else if  (element.attr("name") == "phone" )
                    //         error.insertAfter(".some-other-class");
                    //     else
                    //         error.insertAfter(element);
                    // },
 //////////we can insert error with speccific location/////////////////////////////// 

                    submitHandler: function(form){ 
                        $.ajax({
                                url: 'calculate.php',
                                type: 'POST',
                                data: $('#frm').serialize(),
                                success: function (data) {
                                    console.log(data);
                                    $(".modal-body").html(data);
                                    $("#exampleModal").modal('show');
                
        
                                }
                            });
                        }

                });


                // var pickup = $('#pickup').val();
                // var drop = $('#drop').val();
                // var cars = $('#cars').val();
                // var weight = $('#weight').val();


                // if (pickup == null && drop == null && cars == null) {
                //     $("#error3").html("**All Fields Are Required");
                // }
                // else if (pickup == null ) {
                //     $("#error").html("Please Select Current Loaction");
                // }
                // else if (drop == null) {
                //     $("#error1").html("Please Select Drop Loaction");
                // }
                // else if (cars == null) {
                //     $("#error2").html("Please Select Cab Type");
                // }
                
                // else {
                //     $.ajax({
                //         url: 'calculate.php',
                //         type: 'POST',
                //         data: $('#frm').serialize(),
                //         success: function (data) {
                //             console.log(data);
                //             $(".modal-body").html(data);
                //             // $("#exampleModal").modal('show');
        

                //         }
                //     });
                // }

            });

        });