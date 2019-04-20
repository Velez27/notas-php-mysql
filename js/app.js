var divCreateNote = document.getElementById('div_createNote');
divCreateNote.className = 'vista_notes';
var title = document.createElement('LABEL');
title.innerHTML = 'Titulo';
var inputTitle = document.createElement('INPUT');
inputTitle.name = 'title';
var descripcion = document.createElement('LABEL');
descripcion.innerHTML = 'Descripcion';
var textareaDescripcion = document.createElement('TEXTAREA');
textareaDescripcion.rows = 10;
textareaDescripcion.name = 'descripcion';
var button = document.createElement('BUTTON');
button.innerHTML = 'Guardar';
var form = divCreateNote.children[0];
form.method = 'POST';

const buttonCreateNote = document.getElementById('button_createNote');
buttonCreateNote.addEventListener('click', () => {
    if(divCreateNote.hidden == true) {
        divCreateNote.hidden = false;
        form.appendChild(title);
        form.appendChild(inputTitle);
        form.appendChild(descripcion);
        form.appendChild(textareaDescripcion);
        form.appendChild(button);
    } else {
        divCreateNote.hidden = true;
        form.removeChild(title);
        form.removeChild(inputTitle);
        form.removeChild(descripcion);
        form.removeChild(textareaDescripcion);
        form.removeChild(button);
    }
});