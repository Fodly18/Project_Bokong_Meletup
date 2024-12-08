const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

//fungsi hide sidebar
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

//ganti tema
const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

//action untuk sidebar
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    
    if (sidebar) {
        sidebar.addEventListener('click', function (event) {
            const clickedItem = event.target.closest('li'); 
            
            if (clickedItem) {
                const link = clickedItem.querySelector('a');
                if (link && link.getAttribute('href') !== '#') {
                    const href = link.getAttribute('href');
                    window.location.href = href;
                }
            }
        });
    }
});


function updateTime() {
	const now = new Date(); // Mendapatkan waktu saat ini
	const hours = String(now.getHours()).padStart(2, '0'); // Jam (2 digit)
	const minutes = String(now.getMinutes()).padStart(2, '0'); // Menit (2 digit)
	const seconds = String(now.getSeconds()).padStart(2, '0'); // Detik (2 digit)
	const day = now.toLocaleDateString('id-ID', { weekday: 'long' }); // Hari dalam bahasa Indonesia
	const date = now.toLocaleDateString('id-ID'); // Tanggal dalam format lokal
	
	// Update elemen HTML
	document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;
	document.getElementById('current-date').textContent = `${day}, ${date}`;
}

// Jalankan fungsi pertama kali
updateTime();

// Update setiap detik
setInterval(updateTime, 1000);
