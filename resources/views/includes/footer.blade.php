<div class="footer gradient">
      <p><span class="float-left px-2">Copyright &copy; 2020 ES Trading Malaysia</span><span class="float-right px-2" id="gmt-clock"></span></p>
</div>

<script>
setInterval(() => {
    var newDate = new Date();
    var UTCTime = newDate.toUTCString();
    document.getElementById('gmt-clock').innerHTML = UTCTime;
}, 1000);
</script>
