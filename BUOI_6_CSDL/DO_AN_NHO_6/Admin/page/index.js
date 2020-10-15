var xhr = new XMLHttpRequest();
xhr.open('GET', 'http://localhost/PHP/BUOI_6_CSDL/DO_AN_NHO_6/Admin/api.php', true);
xhr.onload = function() {
    if (this.status == 200) {
        console.log(this.responseText);
        // document.getElementById('show_data').innerText = this.this.responseText;
        // document.getElementById()
    }
}