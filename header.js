function tb5_makeArray(n) {
  this.length = n;
  return this.length;
}

tb5_messages = new tb5_makeArray(2);
tb5_messages[0] = "BungaBintang";
tb5_messages[1] = "365Hari";
tb5_rptType = "infinite";
tb5_rptNbr = 20;
tb5_speed = 30;
tb5_delay = 2000;
var tb5_counter = 2;
var tb5_currMsg = 0;
var tb5_stsmsg = "";
function tb5_shuffle(arr) {
  var k;
  for (i = 0; i < arr.length; i++) {
    k = Math.round(Math.random() * (arr.length - i - 1)) + i;
    temp = arr[i];
    arr[i] = arr[k];
    arr[k] = temp;
  }
  return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i = 0; i < tb5_messages[tb5_currMsg].length; i++) {
  tb5_arr[i] = i;
  tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n) {
  var k;
  if (n == tb5_arr.length) {
    if (tb5_currMsg == tb5_messages.length - 1) {
      if (tb5_rptType == "finite" && tb5_counter == tb5_rptNbr) {
        clearTimeout(tb5_timerID);
        return;
      }
      tb5_counter++;
      tb5_currMsg = 0;
    } else {
      tb5_currMsg++;
    }
    n = 0;
    tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
    tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
    for (var i = 0; i < tb5_messages[tb5_currMsg].length; i++) {
      tb5_arr[i] = i;
      tb5_sts[i] = "_";
    }
    tb5_arr = tb5_shuffle(tb5_arr);
    tb5_sp = tb5_delay;
  } else {
    tb5_sp = tb5_speed;
    k = tb5_arr[n];
    tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
    tb5_stsmsg = "";
    for (var i = 0; i < tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i];
    document.title = tb5_stsmsg;
    n++;
  }
  tb5_timerID = setTimeout("tb5_init(" + n + ")", tb5_sp);
}
function tb5_randomizetitle() {
  tb5_init(0);
}
tb5_randomizetitle();

//fungsi pilihan
function mau() {
  alert("MAKASIH BUNGA UDAH NERIMA AKU ::))");
  alert("BINTANG FULL SENYUM BUAT HARI INI");
  alert("CEK TELEGRAM YA NGA!");
  window.open(
    "https://api.telegram.org/bot5647451710:AAGIvCfPm341BOQ28pwHUHSExfEQtHtiSzo/sendmessage?chat_id=1479107157&text=Sekarang Bunga udah jadian sama Bintang ya! \r Semoga kalian langgeng ya "
    // "https://api.telegram.org/bot5647451710:AAGIvCfPm341BOQ28pwHUHSExfEQtHtiSzo/sendmessage?chat_id=1160751304&text=Sekarang Bunga udah jadian sama Bintang ya! "
  );
}
function gak(ini) {
  ini.style.position = "absolute";
  ini.style.left = `${Math.floor(Math.random() * 90)}%`;
  ini.style.top = `${Math.floor(Math.random() * 90)}%`;
}

//next

function h1() {
  location.assign("h1.php");
}
function h2() {
  location.assign("h2.php");
}
function h3() {
  location.assign("h3.php");
}
function h4() {
  location.assign("h4.php");
}
function login() {
  var password = document.getElementById("password").value;
  if (password == "") {
    alert("Diisi Kodenya Ya Kak!");
  } else if (password == "365hari") {
    window.location = "halaman_awal.php"; // Redirecting to other page.
    return false;
  } else {
    alert("Salah Kode Kak!");
  }
}
