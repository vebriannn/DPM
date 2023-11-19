const filter = document.getElementById('filter');
const items = document.querySelectorAll('tbody tr');

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
