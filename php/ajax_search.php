<html>
<head>
  <style>
    span { color: green; }
  </style>
  <script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById('txtHint').innerHTML = "";
        return;
      }

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById('txtHint').innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", "ajax_search_api.php?q=" + str, true);
      xmlhttp.send();
    }
  </script>
</head>
<body>
  <p><b>Search your favorite tutorials:</b></p>
  <form>
    <input type="text" onkeyup="showHint(this.value)" />
  </form>

  <p>Entered Course name: <span id="txtHint"></span></p>
</body>
</html>
