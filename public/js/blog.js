var list_menu = document.querySelectorAll('.menu-left li')
var list_chose = document.querySelectorAll('.img-active')

list_menu.forEach((item, index) => {
    item.addEventListener('click',() => {
        var chose = document.querySelector('.chose')
        console.log("hi");
        chose.classList.add('not-chose')
        chose.classList.remove('chose')
        list_chose[index].classList.remove('not-chose')
        list_chose[index].classList.add('chose')
    })
})

var page = document.querySelectorAll('tbody');
var number_page = document.querySelectorAll('.number')

number_page.forEach((number, index) => {
    
    number.addEventListener('click',() => {

        var active = document.querySelector('.active1')
        var macdinh= document.querySelector('.macdinh')
        macdinh.classList.add('hide')
        macdinh.classList.remove('macdinh')
        page[index].classList.add('macdinh')
        page[index].classList.remove('hide')
        active.classList.remove('active1')
        number.classList.remove('none')
        number.classList.add('active1')  
    })
})

var menu_scroll = document.querySelector('.menu-dropdown')
var body = document.querySelector('body')

menu_scroll.addEventListener('mouseover', function(){
    body.style.overflow='hidden'
})

menu_scroll.addEventListener('mouseout', function(){
    body.style.overflow='scroll'
})
