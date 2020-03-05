String.prototype.hash = function () {
    var hash = 0;
    if (this.length == 0) {
        return hash;
    }
    for (var i = 0; i < this.length; i++) {
        var char = this.charCodeAt(i);
        hash = ((hash << 5) - hash) + char;
        hash = hash & hash;
    }
    return hash;
}

function verify() {
    var pw = document.getElementById("password").value;
    if (pw.hash() == 1631100349) {
        document.getElementById("hidden-links").style.display = "block";
    } else {
        window.location.href = "/";
    }
}