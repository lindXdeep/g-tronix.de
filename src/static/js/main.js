let btn_1 = document.getElementById('btn-1');

let menu_section_1 = document.querySelector('#nav-sub-block-1');
let drop_menu_1 = document.getElementById('d-menu-1');


let menu_section_2 = document.querySelector('#nav-sub-block-2');
let drop_menu_2 = document.getElementById('d-menu-2');

window.onload = function () {

  menu_section_1.onmouseover = function (event) {

    drop_menu_1.style.display = 'block'

    if (drop_menu_2.style.display == 'block') {
      drop_menu_2.style.display = 'none'
    }
  };

  menu_section_2.onmouseover = function (event) {

    drop_menu_2.style.display = 'block';

    if (drop_menu_1.style.display == 'block') {
      drop_menu_1.style.display = 'none';
    }
  };
}

window.onclick = (event) => {

  if (drop_menu_1.style.display == "block" || drop_menu_1.style.display == "block" ) {
    drop_menu_1.style.display = "none";
    drop_menu_2.style.display = "none";
  } else {
    drop_menu_1.style.display = "none";
    drop_menu_2.style.display = "none";
  }
}


