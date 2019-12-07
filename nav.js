function openNav() {
	var x = document.getElementById('down');
    document.getElementById("mySidenav").style.width = "250px";
    x.style.display = "block";
}

function closeNav() {
	var x = document.getElementById('down');
    document.getElementById("mySidenav").style.width = "0";
    x.style.display = "none";
}