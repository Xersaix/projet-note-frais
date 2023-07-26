var trigger = document.getElementById("dropdown-trigger");
var trigger_state = false;
var dropdown_container = document.getElementById("dropdown-container")




trigger.addEventListener("click",function(){

    if(!trigger_state){
        dropdown_container.classList.add("is-active");
        trigger_state = true;

    }else{
        dropdown_container.classList.remove("is-active");
        trigger_state = false;
    }
})