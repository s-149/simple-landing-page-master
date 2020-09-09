var btn = $("#btntotop");
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});
btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});
$(document).ready(function () {
  setMetaUrl();
  console.log(getUA());
  getCountry();
});
function setMetaUrl() {
  document
    .querySelector("meta[property='og:url']")
    .setAttribute("content", `${window.location.href}`);
}
// untuk mengecek divice
const getUA = () => {
  let device = "Unknown";
  const ua = {
    "Generic Linux": /Linux/i,
    Android: /Android/i,
    BlackBerry: /BlackBerry/i,
    Bluebird: /EF500/i,
    "Chrome OS": /CrOS/i,
    Datalogic: /DL-AXIS/i,
    Honeywell: /CT50/i,
    iPad: /iPad/i,
    iPhone: /iPhone/i,
    iPod: /iPod/i,
    macOS: /Macintosh/i,
    Windows: /IEMobile|Windows/i,
    Zebra: /TC70|TC55/i,
  };
  Object.keys(ua).map((v) => navigator.userAgent.match(ua[v]) && (device = v));
  return device;
};
// untuk mendapatkan negara
function getCountry() {
  $.getJSON("https://ipapi.co/json/", function (data) {
    console.log(data.country_name);
  });
}
// untuk ngejek sumber pengunjung(belum selesai)
console.log(document.referrer);
// semuanya belum di proses, tunggu page 2 selesai baru bisa sesuai keteria yang di tentukan
