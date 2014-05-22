

(function(){

    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var phone = document.getElementById('field6');
    var subBtn = document.getElementById('submit');
        subBtn.addEventListener('click', onClick);

    function onClick(e){
        console.log("Hi");
        validate(name);
        validate(email);
        validate(phone);
        e.preventDefault();
    }

    function validate (user){
        var pattern;
        var pass;

        if (user == name){
            pattern = /^[a-z ,.'-]+$/i;
            pass = pattern.test(user.value);

        }else if(user == email){
            pattern = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            pass = pattern.test(user.value);

        }else if(user == phone){
            pattern = /((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}/;
            pass = pattern.test(user.value)
        }

        var errorMsg = user.nextSibling.nextSibling.nextSibling;

        if (!pass || user.value.length < 2){
            errorMsg.style.display = 'block';
            user.style.backgroundColor = 'red';
        }else if (pass && user.value.length > 5){
            errorMsg.style.display = 'none';
            user.style.backgroundColor = 'green';
        }else{
            errorMsg.style.display = 'none';
            user.style.backgroundColor = 'white';
        }
    }




})(); //end wrapper