const quill = new Quill('#editor', {
    theme: 'snow'
});

document.getElementById('myForm').onsubmit = function () {
    var content = document.getElementById('hidden-content');
    content.value = quill.root.innerHTML;
};
