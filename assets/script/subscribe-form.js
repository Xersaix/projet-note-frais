var pass_view = document.getElementById("pass-view");
var input_pass = document.getElementById("password");










pass_view.addEventListener("click",function(){

    if(input_pass.type == "text" )
    {
            input_pass.type ="password";
            pass_view.classList.remove("bi-eye-slash-fill")
            pass_view.classList.add("bi-eye-fill");
            

    }
    else
    {
        input_pass.type ="text";
        pass_view.classList.remove("bi-eye-fill")
        pass_view.classList.add("bi-eye-slash-fill");
    }
})


if(document.getElementById("password2"))
{
    var input_pass2 = document.getElementById("password2");
    var pass2_view = document.getElementById("pass2-view");

    pass2_view.addEventListener("click",function(){

        if(input_pass2.type == "text" )
        {
                input_pass2.type ="password";
                pass2_view.classList.remove("bi-eye-slash-fill")
                pass2_view.classList.add("bi-eye-fill");
        }
        else
        {
            input_pass2.type ="text";
            pass2_view.classList.remove("bi-eye-fill")
            pass2_view.classList.add("bi-eye-slash-fill");
        }
    })
}

