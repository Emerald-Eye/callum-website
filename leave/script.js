function redirect() {
  if (document.querySelector('input[name="location"]:checked').value == "cw.com") {
    window.location.href = "http://callumwong.com";
  } else if (document.querySelector('input[name="location"]:checked').value == "github") {
    window.location.href = "https://emerald-eye.github.io/callums-website";
  }
}
