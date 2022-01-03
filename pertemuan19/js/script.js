const container = document.getElementById("container");
let keyword = document.getElementById("keyword");
const cari = document.getElementById("cari");

keyword.addEventListener("keyup", function(e) {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = this.response;
        }
    }
    xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
    xhr.send();  
})