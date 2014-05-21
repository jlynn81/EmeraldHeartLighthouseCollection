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



})();