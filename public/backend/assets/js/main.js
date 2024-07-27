//* Sidebar js function *//

function generateUniqueID() {
    return 'submenu-' + Math.random().toString(36).substr(2, 9);
}

function assignUniqueIDs() {
    var submenus = document.querySelectorAll('.submenu');
    submenus.forEach(function (submenu, index) {
        if (!submenu.dataset.submenu) {
            var uniqueID = generateUniqueID();
            submenu.dataset.submenu = uniqueID;
            var toggle = submenu.previousElementSibling;
            if (toggle && toggle.classList.contains('menu-toggle')) {
                toggle.dataset.submenu = uniqueID;
            }
        }
    });
}

function toggleSubMenu(event) {
    var clickedSubMenu = event.currentTarget.dataset.submenu;
    var submenus = document.querySelectorAll('.submenu');

    submenus.forEach(function (submenu) {
        if (submenu.dataset.submenu !== clickedSubMenu) {
            submenu.classList.remove('open');
            localStorage.removeItem(submenu.dataset.submenu + 'Open');
        }
    });

    var submenu = document.querySelector('.submenu[data-submenu="' + clickedSubMenu + '"]');
    var isOpen = submenu.classList.contains('open');

    if (!isOpen) {
        submenu.classList.add('open');
        localStorage.setItem(clickedSubMenu + 'Open', 'true');
    } else {
        submenu.classList.remove('open');
        localStorage.removeItem(clickedSubMenu + 'Open');
    }
}

function preventSubMenuHide(event) {
    event.stopPropagation();
}

function closeAllSubMenus() {
    var submenus = document.querySelectorAll('.submenu');
    submenus.forEach(function (submenu) {
        submenu.classList.remove('open');
        localStorage.removeItem(submenu.dataset.submenu + 'Open');
    });
}

// Check localStorage on page load
document.addEventListener('DOMContentLoaded', function () {
    assignUniqueIDs();
    var submenus = document.querySelectorAll('.submenu');
    submenus.forEach(function (submenu) {
        var submenuOpen = localStorage.getItem(submenu.dataset.submenu + 'Open');
        if (submenuOpen === 'true') {
            submenu.classList.add('open');
        } else {
            submenu.classList.remove('open');
        }
    });
});

// sidebar toggle
$('.bars').on('click', function() {
    $('.sidebar').toggleClass('expanded');
    $('.navbar-top').toggleClass('expanded');
    $('.main-content').toggleClass('expanded');
});
