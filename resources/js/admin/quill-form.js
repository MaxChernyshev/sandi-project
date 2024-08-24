import Quill from 'quill';
import 'quill/dist/quill.snow.css';

const quill = new Quill('#editor', {
    theme: 'snow'
});

document.getElementById('editor').style.height = '300px';

let oldContent = document.getElementById('hidden-content').value;

quill.root.innerHTML = oldContent;

document.getElementById('myForm').onsubmit = function () {

    let newContent = document.getElementById('hidden-content');

    newContent.value = quill.root.innerHTML;
};
