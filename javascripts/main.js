//console.log('This would be the main JS file.');

(function(){

    //variable information created for the button to be clicked
    var nextBtn = document.getElementById("info_btn");
    nextBtn = addEventListener('click', onClick);

    var item = [];

    //Product Information
    var merchandise = new Merchandise({
        product_name: 'Mystical Carousel Unicorn',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$40.00',
        product_status: 'Status'

    });

    var merchandise1 = new Merchandise({
        product_name: 'Star Clown',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The Star Clown will bring out the sparkle in a childs eye or touch your heart with' +
            'the memories of your child hood and the circus',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$15.00',
        product_status: 'Status'

    });

    var merchandise2 = new Merchandise({
        product_name: 'Holiday Wreath',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$50.00',
        product_status: 'Status'

    });

    var merchandise3 = new Merchandise({
        product_name: 'Mystical Carousel Unicorn',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$40.00',
        product_status: 'Status'

    });

    var merchandise4 = new Merchandise({
        product_name: 'Mystical Carousel Unicorn',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$40.00',
        product_status: 'Status'

    });

    var merchandise5 = new Merchandise({
        product_name: 'Mystical Carousel Unicorn',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$40.00',
        product_status: 'Status'

    });

    var merchandise6 = new Merchandise({
        product_name: 'Mystical Carousel Unicorn',
        product_artist: 'By artist Sue Frazier',
        product_description: 'The statuesque portrayal of a mythical carousel unicorn inspired to serenade you into ' +
            'fantasy as you press the music button located at the base of the unicorn',
        product_detail: '12" Tall, 4" Wide' + 'Made from local materials',
        product_amount: '$40.00',
        product_status: 'Status'

    });

    item.push(merchandise, merchandise1, merchandise2, merchandise3, merchandise4, merchandise5, merchandise6);

    //Upon Click Display product page
    function onClick(event){
        console.log('click');

        displayData();

        event.preventDefault();
        return false;
    }

    function displayData(){
        var val = item.shift();
        item.push(val);
        //console.log(val);


        document.getElementById('product_name').innerHTML = '' + item[0].product_name;
        document.getElementById('product_artist').innerHTML = '' + item[0].product_artist;
        document.getElementById('product_description').innerHTML = '' + item[0].product_description;
        document.getElementById('product_detail').innerHTML = '' + item[0].product_detail;
        document.getElementById('product_amount').innerHTML = '' + item[0].product_amount;
        document.getElementById('product_status').innerHTML = '' + item[0].product_status;

        //code that will advance the students by one upon click
        if(item.length === 0){
            //advances the student by one upon clicking the nextBtn
            item++;

            //if you have come to the last student, nextBtn is disabled and reflects 'DONE!!!' inside the button
        }else if(item.length == 0){

            document.getElementById("info_btn").innerHTML = 'Done!!!';
            nextBtn = removeEventListener('click', onClick);
        }


    }

    $(document).ready(function()
    {
        //Style selects, checkboxes, etc
        $("select, input:checkbox, input:radio, input:file").uniform();

        //Date and Range Inputs


        /**
         * Get the jQuery Tools Validator to validate checkbox and
         * radio groups rather than each individual input
         */

        $('[type=checkbox]').bind('change', function(){
            clearCheckboxError($(this));
        });


        //validate checkbox and radio groups
        function validateCheckRadio(){
            var err = {};

            $('.radio-group, .checkbox-group').each(function(){
                if($(this).hasClass('required'))
                    if (!$(this).find('input:checked').length)
                        err[$(this).find('input:first').attr('name')] = 'Please complete this mandatory field.';
            });

            if (!$.isEmptyObject(err)){
                validator.invalidate(err);
                return false
            }
            else return true;

        }





        //clear any checkbox errors
        function clearCheckboxError(input){
            var parentDiv = input.parents('.field');

            if (parentDiv.hasClass('required'))
                if (parentDiv.find('input:checked').length > 0){
                    validator.reset(parentDiv.find('input:first'));
                    parentDiv.find('.error').remove();
                }
        }




        //Position the error messages next to input labels
        $.tools.validator.addEffect("labelMate", function(errors, event){
            $.each(errors, function(index, error){
                error.input.first().parents('.field').find('.error').remove().end().find('label').after('<span class="error">' + error.messages[0] + '</span>');
            });

        }, function(inputs){
            inputs.each(function(){
                $(this).parents('.field').find('.error').remove();
            });

        });


        /**
         * Handle the form submission, display success message if
         * no errors are returned by the server. Call validator.invalidate
         * otherwise.
         */

        $(".TTWForm").validator({effect:'labelMate'}).submit(function(e){
            var form = $(this), checkRadioValidation = validateCheckRadio();

            if(!e.isDefaultPrevented() && checkRadioValidation){
                $.post(form.attr('action'), form.serialize(), function(data){
                    data = $.parseJSON(data);

                    if(data.status == 'success'){
                        form.fadeOut('fast', function(){
                            $('.TTWForm-container').append('<h2 class="success-message">Success!</h2>');
                        });
                    }
                    else validator.invalidate(data.errors);

                });
            }

            return false;
        });

        var validator = $('.TTWForm').data('validator');



})()});