const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }


var urlMenu = document.getElementById("program");
urlMenu.onchange = function(){
    var useroption = this.option[this.selectedIndex];
    if(useroption.value != "nothing"){
        window.open(useroption.value,"Acounting and Finance Computer Science Management Marketing Management Tourism");

    }
}        