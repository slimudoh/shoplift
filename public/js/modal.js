window.onclick = function() {
    var cartDiv = document.getElementById('cart');
    var userDiv = document.getElementById('user');
    var parent = document.getElementById('parent');
    var child1 = document.getElementById('child-1');
    var child2 = document.getElementById('child-2');
    var child3 = document.getElementById('child-3'); 


    document.onclick = function(e) {
        if (e.target !== cartDiv) {
            cartDiv.style.display = "none";
            //userDiv.style.display = "none";
        }

        if (e.target !== userDiv) {
            userDiv.style.display = "none";
        }

        if (e.target === parent || e.target === child1) {
            cartDiv.style.display = "block";
        } else if (e.target === child2 || e.target === child3) {
            userDiv.style.display = "block";
        }
    }
}

/* window.onclick = function() {
    var userDiv = document.getElementById('user');    
    var child2 = document.getElementById('child-2');
    var child3 = document.getElementById('child-3');    

    document.onclick = function(e) {
        if (e.target !== userDiv ) {
            userDiv.style.display = "none";
        }

        if (e.target === child2 || e.target === child3) {
            user.style.display = "block";
        }
    }
} */

////////////////// testing github

onresize = onload = function() {
                    var videoDiv = document.getElementById("video-div");
                    var videoBox = document.getElementById("video");
                    var arrow = document.getElementsByClassName("arrow-1");
                    var i;

                    if (window.innerWidth <= 320 || document.documentElement.clientWidth <= 320 || document.body.clientWidth <= 320 ) {

                            for (i = 0; i < arrow.length ; i++) {                            
                                arrow[i].style.left = "37%";
                                arrow[i].style.bottom = "1px";
                                arrow[i].style.transform = "rotate(90deg)";
                                arrow[i].style.mstransform = "rotate(90deg)";
                                arrow[i].style.webkittransform = "rotate(90deg)";
                                arrow[i].style.otransform = "rotate(90deg)";
                                arrow[i].style.moztransform = "rotate(90deg)";
                            } 
                        } else if (window.innerWidth <= 414 || document.documentElement.clientWidth <= 414 || document.body.clientWidth <= 414 ) {

                            for (i = 0; i < arrow.length ; i++) {                            
                                arrow[i].style.left = "40%";
                                arrow[i].style.bottom = "1px";
                                arrow[i].style.transform = "rotate(90deg)";
                                arrow[i].style.mstransform = "rotate(90deg)";
                                arrow[i].style.webkittransform = "rotate(90deg)";
                                arrow[i].style.otransform = "rotate(90deg)";
                                arrow[i].style.moztransform = "rotate(90deg)";
                            } 
                        } else if (window.innerWidth <= 800 || document.documentElement.clientWidth <= 800 || document.body.clientWidth <= 800 ) {

                            for (i = 0; i < arrow.length ; i++) {                            
                                arrow[i].style.left = "45%";
                                arrow[i].style.bottom = "1px";
                                arrow[i].style.transform = "rotate(90deg)";
                                arrow[i].style.mstransform = "rotate(90deg)";
                                arrow[i].style.webkittransform = "rotate(90deg)";
                                arrow[i].style.otransform = "rotate(90deg)";
                                arrow[i].style.moztransform = "rotate(90deg)";
                            }            

                    } else if (window.innerWidth <= 995 || document.documentElement.clientWidth <= 995 || document.body.clientWidth <= 995 ) {   

                        for (i = 0; i < arrow.length ; i++) {                            
                                arrow[i].style.right = "43%";
                                arrow[i].style.bottom = "1px";
                                arrow[i].style.transform = "rotate(90deg)";
                                arrow[i].style.mstransform = "rotate(90deg)";
                                arrow[i].style.webkittransform = "rotate(90deg)";
                                arrow[i].style.otransform = "rotate(90deg)";
                                arrow[i].style.moztransform = "rotate(90deg)"; 
                        }     
                   
                    } else if (window.innerWidth > 994 || document.documentElement.clientWidth > 994 || document.body.clientWidth > 994 ) {

                            for (i = 0; i < arrow.length ; i++) {                            
                                arrow[i].style.right = "-60px";
                                arrow[i].style.bottom = "100px";
                                arrow[i].style.transform = "none";
                                arrow[i].style.mstransform = "none";
                                arrow[i].style.webkittransform = "none";
                                arrow[i].style.otransform = "none";
                                arrow[i].style.moztransform = "none";
                            } 
                        } 



                        if (window.innerWidth < 1023 || document.documentElement.clientWidth < 1023 || document.body.clientWidth < 1023 ) {            
                            videoBox.style.display = "none";
                            videoDiv.style.backgroundImage = "url('images/bng.png')";
                            videoDiv.style.backgroundRepeat = "no-repeat";
                            videoDiv.style.backgroundSize = "cover";
                            videoDiv.style.backgroundPosition = "center center";

                        } else if (window.innerWidth >= 1023 || document.documentElement.clientWidth >= 1023 || document.body.clientWidth >= 1023 ) {
                            videoBox.style.display = "block";
                            videoDiv.style.backgroundImage = "none";
                            videoDiv.style.backgroundRepeat = "none";
                            videoDiv.style.backgroundSize = "none";                        
                        } 



                    }



function contactPhoneValidate() {

    var phoneValue = document.getElementById("phone");
    var errPhone = document.getElementById("err-phone");
    //email = document.getElementById("email");

    if (phoneValue.value === "" || isNaN(phoneValue.value)) {
        errPhone.innerHTML = "Please enter a valid phone number";
        phoneValue.focus(); 
        return false;       
    } else {
        errPhone.innerHTML ="";
    }

}


function contactEmailValidate() {

    //var phoneValue = document.getElementById("phone");
    var errEmail = document.getElementById("err-email");
    var email = document.getElementById("email");
    var emailValue = email.value;
    var emailAt = emailValue.indexOf("@");
    var emailDot = emailValue.lastIndexOf(".");

    if (emailAt < 1 || emailDot < emailAt + 2 || emailDot + 2 >= emailValue.length) {
        errEmail.innerHTML = "Please enter a valid Email number";
        email.focus();
        return false;        
    } else {
        errEmail.innerHTML ="";
    }

}


//...................................resource page.....................'rgb(' + a + ',' + b + ',' + c + ')'

function openView() {
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="block";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}

function openFee() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="block";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}

function openReport() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="block";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}

function openPapers() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="block";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}


function openStudy() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="block";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}

function openChat() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="block";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="none";
}

function openCourse() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="block";
    document.getElementById("tutor").style.display ="none";
}

function openTutor() {
    document.getElementById("fs").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("vec").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("er").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("pqp").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("sg").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("cwoc").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("ic").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.5' + ')';
    document.getElementById("gpt").style.backgroundColor = 'rgba(' + 0 + ',' + 0 + ',' + 0 + ',' + '.6' + ')';

    document.getElementById("view").style.display ="none";
    document.getElementById("fee").style.display ="none";
    document.getElementById("report").style.display ="none";
    document.getElementById("papers").style.display ="none";
    document.getElementById("study").style.display ="none";
    document.getElementById("chat").style.display ="none";
    document.getElementById("course").style.display ="none";
    document.getElementById("tutor").style.display ="block";
}

function openDemo() {
    var demoDiv = document.getElementById("demodiv");
    var demoContent = document.getElementById("democontent");

    demoDiv.style.display = "block";
    //demoDiv.style.transition = "all 9s";
    demoContent.style.WebkitAnimation = "fadeIn .8s";
    demoContent.style.animation = "fadeIn .8s";
    document.body.style.overflow = "hidden";

}

function closeDemo() {
    var demoDiv = document.getElementById("demodiv");
    //var demoContent = document.getElementById("democontent");

    demoDiv.style.display = "none";
    demoDiv.style.WebkitAnimation = "fadeOut .8s";
    demoDiv.style.animation = "fadeOut .8s";
    document.body.style.overflow = "auto";
}

