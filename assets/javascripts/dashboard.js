const Logout = document.querySelector('.logout-menu');
const filter = document.getElementById('filter');
const items = document.querySelectorAll('tbody tr');

Logout.addEventListener('mouseover', function () {
    Logout.classList.add('active-logout');
    this.querySelector('a').classList.add('active-logout');
})

Logout.addEventListener('mouseout', function () {
    Logout.classList.remove('active-logout');
    this.querySelector('a').classList.remove('active-logout');
})



filter.addEventListener('input', e => filterData(e.target.value));
function filterData(search) {
    items.forEach((item) => {
        if (item.innerHTML.toLocaleLowerCase().includes(search.toLocaleLowerCase())) {
            item.classList.remove('d-none');
        }
        else {
            item.classList.add('d-none');
        }
    })
}

