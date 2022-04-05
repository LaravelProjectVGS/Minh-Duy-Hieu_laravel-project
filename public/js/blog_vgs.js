var toHtml = document.querySelectorAll('#toHtml');
toHtml.forEach(item => {
    var test = item.textContent;
    item.innerHTML = test;
})