<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
  integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
  integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>

<script>
  $(function () {
    $("select").selectize();
  });
</script>


<select id="select-gear" class="demo-default" multiple placeholder="Select gear...">
  <option value="">Select gear...</option>
  <optgroup label="Climbing">
      <option value="pitons">Pitons</option>
      <option value="cams">Cams</option>
      <option value="nuts">Nuts</option>
      <option value="bolts">Bolts</option>
      <option value="stoppers">Stoppers</option>
      <option value="sling">Sling</option>
  </optgroup>
  <optgroup label="Skiing">
      <option value="skis">Skis</option>
      <option value="skins">Skins</option>
      <option value="poles">Poles</option>
  </optgroup>
</select>
        