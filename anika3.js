/*----add the "focus" class when the input gets focus and remove it when the input lost focus---*/
const inputs = document.querySelectorAll(".input")

function focusFunc(){
    let parent = this.parentNode;
    parent.classList.add("focus")
}
/*----same thing, we're gonna do when it lost focus, we'll add a blur event listener, then we'll swlect its parent , except this time we'll remove the "focus" class----*/
function blurFunc(){
    let parent = this.parentNode;
    if(this.value == ""){
        parent.classList.remove("focus")
    }
}
inputs.forEach(input =>{
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});