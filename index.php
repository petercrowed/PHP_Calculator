<head>
  <meta charset="utf-8">
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
      <form method="post" attribute="post" action="index.php">
  <div class="container">
    <div class="calc-body">
      <div class="calc-screen">
        <input class="calc-operation" type="text" id="inputField" name="inputBlock"></p>

        <div class="calc-typed"><span class="blink-me">    <?php
            $first = $_POST['inputBlock'];


          $p = eval('return '.  $first. ';');
            echo $p ;

            ?></span></div>

      </div>


      <div class="calc-button-row">
        <button class="button" type="button" onclick="cleanEverything()" value='cleanEverything'>CE</button>
        <button class="buttonBig" type="button" onclick="cleanOneCharacter()" value='cleanOneCharacter'>C</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='/'>/</button><br>
      </div>
      <div class="calc-button-row">
        <button class="button" type="button" onclick="addValue(this.value)" value='7'>7</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='8'>8</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='9'>9</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='*'>*</button><br>
      </div>
      <div class="calc-button-row">
        <button class="button" type="button" onclick="addValue(this.value)" value='4'>4</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='5'>5</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='6'>6</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='-'>-</button>
        <br>
      </div>
      <div class="calc-button-row">
        <button class="button" type="button" onclick="addValue(this.value)" value='1'>1</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='2'>2</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='3'>3</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='+'>+</button>
        <br>
      </div>
      <div class="calc-button-row">
        <button class="button" type="button" onclick="addValue(this.value)" value='0'>0</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='00'>00</button>
        <button class="button" type="button" onclick="addValue(this.value)" value='.'>.</button>
        <button class="button" type="submit" name="answer" id="answer" value="answer">=</button>
      </div>

      <script>
        function addValue(val) {
          document.getElementById('inputField').value = document.getElementById('inputField').value + val;
        }

        function cleanEverything() {
          document.getElementById('inputField').value = '';
        }

        function cleanOneCharacter() {
          var strng = document.getElementById("inputField").value;
          document.getElementById("inputField").value = strng.substring(0, strng.length - 1)
        }
      </script>
      </form>
    </div>
  </div>
  </div>
</body>

</html>
