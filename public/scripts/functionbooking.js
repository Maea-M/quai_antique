document.addEventListener('DOMContentLoaded', function() {

    document.getElementById("btnsubmit").addEventListener("submit", function(e) {
        e.preventDefault();

        var data = new FormData(this);

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.response);
                var res = this.response;
                if (res.success) {
                    console.log("Votre réservation a bien été prise en compte");
                } else {
                    alert(res.msg);
                }
            } else if (this.readyState == 4) {
                alert("Une erreur est survenue...");
            }
        };

    xhr.open("POST", "/booking", true);
    xhr.responseType = "json";
    xhr.send(data);

    return false;
    })
})
