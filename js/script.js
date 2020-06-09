$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var button = $('.addbuttonPart'); //Input field wrapper
    var remove =$('.remove');
    var number = $('#number');
    var fieldHTML = '                               <div class="form-group additional-input-box icon-right ">\n' +
        '\n' +
        '                                            <input type="text" placeholder="Step" id="number" class="form-control"\n' +
        '                                                   name="text">\n' +
        '                                         <a href="javascript:void(0);" class="remove_button" ><i class="fas fa-clock"></i></a>\n' +
        '\n' +
        '                                        </div>'; //New input field html


    var fieldHTML2 = '  <div class="col-6">\n' +
        '                                                <div class="form-group additional-input-box icon-left">\n' +
        '                                                    <i class="fas fa-clock"></i>\n' +
        '                                                    <input type="text" placeholder="Preparation Time: " class="form-control"\n' +
        '                                                           name="name">\n' +
        '\n' +
        '                                                </div>\n' +
        '\n' +
        '                                            </div>\n' +
        '\n' +
        '                                        </div>\n' +
        '                                        <div class="field_wrapper">\n' +
        '                                        <div class="form-group additional-input-box icon-right ">\n' +
        '                                            <input type="text" placeholder="Step" id="number" class="form-control"\n' +
        '                                                   name="text">\n' +
        '                                            <i class="far fa-clock add add_button"></i>\n' +
        '                                        </div>\n' +
        '                                        </div>\n' +
        '\n' +
        '                                    </div>\n' +
        '                                </div>'; //New input field html


    var x = 1; //Initial field counter is 1
    var nmb = 0;
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
            $(number).innerHTML = nmb++;
        }
    });



    //Once remove button is clicked
    $(wrapper).on('click','.remove_button',  function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter

    });


    $(button).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML2); //Add field html
            $(number).innerHTML = nmb++;
        }
    });

});



