import Quill from 'quill';
import 'quill/dist/quill.snow.css';
import htmlEditButton from "quill-html-edit-button";

Quill.register('modules/htmlEditButton', htmlEditButton);

const quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{'header': 1}, {'header': 2}],
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],
            [{'indent': '-1'}, {'indent': '+1'}],
            [{'size': ['small', false, 'large', 'huge']}],
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            [{'color': []}, {'background': []}],
            [{'font': []}],
            [{'align': []}],
            ['clean'],
            ['link', 'image', 'video']
        ],
        htmlEditButton: {
            debug: true,
            msg: "Edit the content in HTML format",
            okText: "Ok",
            cancelText: "Cancel",
            buttonHTML: "HTML",
            buttonTitle: "Show HTML source",
            syntax: false,
            prependSelector: 'div#myelement',
            editorModules: {}
        },
    },

});

document.getElementById('editor').style.height = '300px';

let oldContent = document.getElementById('hidden-content').value;

quill.root.innerHTML = oldContent;

document.getElementById('myForm').onsubmit = function () {

    let newContent = document.getElementById('hidden-content');

    newContent.value = quill.root.innerHTML;
};
