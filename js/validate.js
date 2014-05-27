(function(){

    //variables set up for each input field
    var name = document.getElementById('field1');
    var email = document.getElementById('field5');
    var phNum = document.getElementById ('field6');

    var submit = document.getElementById("f_submit");
    submit.addEventListener('click', onClick);

    function onClick(e){
        console.log('Hi');
        validate(name);
        validate(email);
        validate(phNum);

        e.preventDefault();
    }

    function validate (form){
        var pattern;
        var pass;

        if (form == name){
            pattern = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
            pass = pattern.test(form.value);
            console.log(form.value, pass);
        }else if(form == email){
            pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            pass = pattern.test(form.value);

        }else if(form == phNum){
            pattern = /((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}/;
            pass = pattern.test(form.value);
        }


        var errorMsg = form.nextSibling.nextSibling;

        if (!pass || form.value.length < 2){
            errorMsg.style.display='block';
            form.style.backgroundColor = 'red';
        } else if (pass && form.value.length > 5){
            errorMsg.style.display='none';
            form.style.backgroundColor = 'white';
        } else {
            errorMsg.style.display='none';
            form.style.backgroundColor = 'white';
        }



    }



})();  // end wrapper



